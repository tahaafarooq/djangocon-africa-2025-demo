from django import forms

class ContactForm(forms.Form):
    name = forms.CharField(widget=forms.TextInput(attrs={
        "class": "w-full rounded-xl border border-white/10 bg-white/5 px-3 py-2 text-slate-100 focus:outline-none focus:ring-2 focus:ring-indigo-400/60"
    }))
    email = forms.EmailField(widget=forms.EmailInput(attrs={
        "class": "w-full rounded-xl border border-white/10 bg-white/5 px-3 py-2 text-slate-100 focus:outline-none focus:ring-2 focus:ring-indigo-400/60"
    }))
    message = forms.CharField(widget=forms.Textarea(attrs={
        "rows": 5,
        "class": "w-full rounded-xl border border-white/10 bg-white/5 px-3 py-2 text-slate-100 focus:outline-none focus:ring-2 focus:ring-indigo-400/60"
    }))

class ContactFormSafe(forms.Form):
    name = forms.CharField(max_length=100)
    email = forms.EmailField()
    message = forms.CharField(widget=forms.Textarea)