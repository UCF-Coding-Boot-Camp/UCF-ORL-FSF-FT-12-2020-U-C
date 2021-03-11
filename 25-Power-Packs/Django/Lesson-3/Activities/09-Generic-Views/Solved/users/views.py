from django.http import Http404, HttpResponse

from django.shortcuts import render

from django.views.generic import DetailView, ListView

from .models import User

class UserListView(ListView):
    model = User
    template_name = 'users/index.html'

    def get_context_data(self, **kwargs):
        context = super(UserListView, self).get_context_data(**kwargs)

        # In real life we'd retrieve this from the session.
        context['name'] = 'Adonis'
        
        return context

class UserDetailView(DetailView):
    model = User
    template_name = 'users/detail.html'

def add(request):

    context = { 'header' : 'This is the add view!'}

    return render(request, 'users/add.html', context)
