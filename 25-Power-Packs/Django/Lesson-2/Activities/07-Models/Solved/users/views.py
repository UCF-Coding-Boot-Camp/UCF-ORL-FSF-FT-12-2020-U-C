from django.shortcuts import render

from django.http import HttpResponse

from .models import User

def index(request):

    context = { 'name' : 'Adonis', 'users' : User.objects.all() }

    return render(request, 'users/index.html', context)

def detail(request):

    context =  { 'user' : User.objects.get(first_name='Jane') }

    return render(request, 'users/detail.html', context)

def add(request):

    context = { 'header' : 'This is the add view!'}

    return render(request, 'users/add.html', context)
