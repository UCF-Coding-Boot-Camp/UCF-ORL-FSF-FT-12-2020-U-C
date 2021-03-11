# import the generic views you want, and the models 
#   they apply to.
from django.views.generic import ListView

# Import the models you want to use.
from snippets.models import Snippet

# Create a class for your model that subclasses
#   the generic view you want. This serves as an
#   index view.
class SnippetListView(ListView):
    # Finally, tell the generic view what model
    #   it applies to, and which template to use.
    model = Snippet
    template_name = 'snippets/index.html'

# ==============================================

# In your urls.py, you'll need to update the 
#   corresponding route. It'll look like this.
urls(r'^index/$', views.SnippetListView.as_view())
