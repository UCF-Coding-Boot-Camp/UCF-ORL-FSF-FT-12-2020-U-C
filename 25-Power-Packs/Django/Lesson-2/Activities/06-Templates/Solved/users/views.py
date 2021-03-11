from django.shortcuts import render

from django.http import HttpResponse

def index(request):

    context = { 'name' : 'Adonis', 'tasks' : ['Do the laundry', 'Eat'] }

    return render(request, 'users/index.html', context)

def detail(request):

    context =  { 'header' : 'This is the detail view!'}

    return render(request, 'users/detail.html', context)

def add(request):

    context = { 'header' : 'This is the add view!'}

    return render(request, 'users/add.html', context)
