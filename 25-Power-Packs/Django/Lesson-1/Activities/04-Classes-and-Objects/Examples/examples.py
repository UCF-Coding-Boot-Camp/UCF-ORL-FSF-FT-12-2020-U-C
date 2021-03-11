#!/usr/bin/python3

# Unlike JavaScript, Python comes equipped with a fully-featured, classical OOP
# toolset.

class User:

    # The __init__ method is where you __initialize__ your object's properties.
    # You need to pass self as the first argument!
    def __init__(self, first_name, last_name, email):
        self.first_name = first_name
        self.last_name = last_name
        self.email = email

# Instantiating an object is straightforward. Note that we don't use the new
# keyword in Python.
jim = User('Jim', 'Doe', 'jim@gmail.com')

# We don't need explicit get methods, since we can access properties directly.
print(jim.first_name)
print(jim.last_name)
print(jim.email)

# There's quite a bit more to OOP, and OOP in Python in particular...But this
# should get you started.
