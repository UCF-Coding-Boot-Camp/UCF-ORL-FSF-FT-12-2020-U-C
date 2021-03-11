#!/usr/bin/python3

# You've been using functions all along, so you already know how to call them.
# Let's take a look at defining one.

# In Python, function definitions start with def; then the function's name;
# and then parameters, listed as in JavaScript.
def greet(name):
    # return operates identically to JavaScript.
    return 'Hi, {0}!'.format(name)

# We can only call functions after we've defined them. This wouldn't work
# on line 5--go ahead and try it.
print(greet('Cicero'))

# This is a better way to print separators, don't you think? Python also lets
# you define default values for function parameters, which we can finally also
# do in ES6.
def print_separator(repetitions = 18):
    print('-' * repetitions)

print_separator()

# Python also allows you to define "keyword arguments". These are arguments
# that you pass by name, rather than position.
def print_name(first = 'Jane', middle = 'D', last = 'Doe'):
    print('{0} {1} {2}'.format(first, middle, last))

# When you call a function defined in terms of keyword arguments, you don't
# need to pass them in order, because they're named! Nifty.
print_name(last = 'Caesar', middle = 'J', first = 'Gaius')

print_separator()

# You can use positional arguments with keyword arguments, but all your keyword
# arguments must come AFTER your positional arguments.
def print_names_n_times(n, first, middle, last):
    print('{0} {1} {2} {3}'.format(first, middle, last, "\n") * n)

print_names_n_times(20, first = 'Gaius', middle = 'Julius', last = 'Caesar')

# This wouldn't work if we put the kwargs first.
def print_names_n_times(first, middle, last, n):
    print('{0} {1} {2} {3}'.format(first, middle, last, "\n") * n)

# If you uncomment this, you'll get an error.
# print_names_n_times(first = 'Gaius', middle = 'Julius', last = 'Caesar', 20)

print_separator()

# Finally, you can get access to all of the arguments passed with the *args
# variable. You can name it anything, as long as you put the asterisk in front,
# but *args is conventional.
def reveal(*args):
    # ...But within the function, you don't use the asterisk.
    for arg in args:
        print('You passed the argument', arg)

reveal(1, 2, 3, 4, 'OMG')

print_separator()

# You can do the same with *kwargs to get all the keyword arguments, but you
# use two asterisks. Again, **fishpaste would work, but **kwargs is convention.
def reveal_kwargs(**kwargs):
    # ...But within the function, you don't use the asterisk.
    for kwarg in kwargs:
        print('You passed the argument', kwarg)

reveal_kwargs(first = 'fish', second = 'stew')

print_separator()

# These come in handy if you want to define "variadic" functions that can take
# an unlimited or indeterminate number of arguments.
def students_greet(*students):
    for student in students:
        print(student, 'says hello!')

students_greet('Jeremy', 'Michael', 'Neena', 'Stacey', 'Catherine')
