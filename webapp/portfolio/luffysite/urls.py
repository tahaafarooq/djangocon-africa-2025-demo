from django.urls import path
from . import views

urlpatterns = [
    path('', views.index, name='index'),
    path('contact/', views.contact_vuln, name='contact_vuln'),
    path('contact/safe/', views.contact_safe, name='contact_safe'),
]