from django.shortcuts import render

from django.http import HttpResponse

# Create your views here.
def home(request):
    # Do a bunch of work...
    response = "<h1>Hello, world!</h1>"

    # ...And return a response with its results.
    return HttpResponse(response)
