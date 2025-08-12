from django.shortcuts import render
from .forms import ContactForm, ContactFormSafe

# VULN: Using Jinja2 to render **user-supplied template strings** directly
from jinja2 import Environment, StrictUndefined

# Intentionally permissive environment (CTF only!)
env = Environment(undefined=StrictUndefined)


def index(request):
    context = {
        'title': "Monkey D. Luffy",
        'bio': (
            "Future Pirate King. Captain of the Straw Hat Pirates. "
            "Specialties: Gum-Gum techniques, fearless leadership, eating meat, and making new friends. "
            "Oh Yes I am a Sea Emperor"
        ),
        'skills': [
            'Haki (Kenbunshoku, Busoshoku, Haoshoku)',
            'Navigation by vibes',
            'Creative problem solving',
            'Unbreakable will',
            'Fighting Sea Beasts',
            'Annoying Grandpa Garp'
        ],
    }
    return render(request, 'index.html', context)


def contact_vuln(request):
    """
    A purposely vulnerable contact form that Jinja2-renders the *message* field.

    Example SSTI payloads to try (CTF):
      - `{{ 7*7 }}` -> arithmetic
      - `{{ request.__class__ }}` -> object access
      - `{{ cycler.__init__.__globals__.os.popen('id').read() }}` -> common Jinja2 RCE gadget (may vary by env)
    """
    if request.method == 'POST':
        form = ContactForm(request.POST)
        if form.is_valid():
            name = form.cleaned_data['name']
            email = form.cleaned_data['email']
            user_tpl = form.cleaned_data['message']

            template = env.from_string(user_tpl)
            rendered = template.render(name=name, email=email, request=request)

            return render(request, 'contact_result.html', {
                'rendered': rendered,
                'submitted': form.cleaned_data,
                'vuln': True,
            })
    else:
        form = ContactForm()

    return render(request, 'contact.html', {'form': form, 'vuln': True})


def contact_safe(request):
    """A safe version that treats message as plain text, not a template."""
    if request.method == 'POST':
        form = ContactFormSafe(request.POST)
        if form.is_valid():
            # SAFE: Do not template-evaluate the message; escape in template instead
            return render(request, 'contact_result.html', {
                'rendered': form.cleaned_data['message'],
                'submitted': form.cleaned_data,
                'vuln': False,
            })
    else:
        form = ContactFormSafe()

    return render(request, 'contact.html', {'form': form, 'vuln': False})