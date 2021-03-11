from django.http import Http404, HttpResponse

from django.shortcuts import redirect, render

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

    if request.method == 'POST':
        # First, assert all keys are present. This is already tedious--
        #   imagine how bad it gets when we want granular information
        #   on missing submissions.

        complete = True
        missing = None

        for key in ['first-name', 'last-name', 'email', 'age']:
            if not request.POST[key]:
                complete = False
                missing = key

        if not complete:
            return render(request, 'users/add.html', 
                    { 'error' : 'Error: Please include data for {0}'.format(missing) })

        else:
            # Create and save directly.

            User(
             first_name=request.POST['first-name'], 
             last_name=request.POST['last-name'],
             email=request.POST['email'],
             age=request.POST['age']).save()
        
        return redirect('users:index')

    else:
        return render(request, 'users/add.html', { 'header' : 'GET' })
