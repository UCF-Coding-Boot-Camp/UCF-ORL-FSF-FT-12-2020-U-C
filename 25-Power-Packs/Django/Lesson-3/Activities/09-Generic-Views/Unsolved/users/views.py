from django.shortcuts import get_object_or_404, render

from django.http import Http404, HttpResponse

from .models import User

def index(request):

    context = { 'name' : 'Adonis', 'users' : User.objects.all() }

    return render(request, 'users/index.html', context)

def detail(request, user_id):

    user = get_object_or_404(User, user_id)
    context =  { 'user' : User.objects.get(id=user_id) }
    
    return render(request, 'users/detail.html', context)

def add(request):

    context = { 'header' : 'This is the add view!'}

    return render(request, 'users/add.html', context)
