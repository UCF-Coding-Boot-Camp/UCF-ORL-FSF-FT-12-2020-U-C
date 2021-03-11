#!/usr/bin/python3

# In Python, you indicate single-line comments with a pound (or hash) sign.
# You technically can wrap multi-line comments in triple quotes (""" before, and
# """ after), but Python's style guide prefers sequential single-line comments,
# so that's the convention we'll adhere to.

# In Python, we declare variables with the variable name, and then an
# assignment statement.
#
# Unlike JavaScript, we don't need to use a "var", "let", or "const" keyword.
# We also don't use semicolons at the end of statements...Or anywhere else.
#
# Similar to JavaScript, we do *not* need to indicate the "type" of data the
# variable contains--just assign, and Python figures out the rest.

name = 'Cleopatra' # Single quotes and double quotes are both good for defining
name = "Cleopatra" # strings. We'll stick with singles, but do what you want.
age = 2085         # Storing numerical data is as easy as simply assigning it.


# To print to standard output, use the print function.
#
# We'll discuss functions in detail soon. For now, just learn this one.
print('This is an example of printing a string.')
print('If you want to break the string you\'re printing across lines, use'
        ' multiple strings wrapped in quotes. They\'ll print as if written'
        ' on a single line.')

print('Alternatively, you can just pass', 'several different strings', 'to the',
        'print function. Python will separate them with spaces.', 'You can',
        'include variables as well:', name, 'was the queen.')

print('Also, you use backslashes to escape variables in strings, like a'
        ' single quote in a string wrapped in single quotes.')
print('Anyway...Let\'s take a look at Python-specific math operators.')

# Dealing with numbers in Python is much like dealing with them in JavaScript.
# You have all of the same mathematical operators, like +, -, and *, but there
# are two important differences when dealing with numbers.
#
# The first difference is that Python specifically has integer division.
print(20 / 3)  # This prints ~6.67.
print(20 // 3) # ...But this prints 6. I.e., 20 / 6, less the decimal part.

# The second is that Python directlyallows exponentiation.
print(20 ** 2) # Prints 400

# Speaking of multiplication, you can "multiply" strings--this behaves like
# String.repeat in JavaScript.
print('=' * 18)

print('Next, an example of printing a variable:')
print(name)

print('...But you can use "format strings" for this instead. These are like'
        ' JavaScript\'s Template strings.')
print('The syntax is "{0} {1}".format({value of 0}, {value of 1}).')
print('An {0} is probably in {1}.'.format('example', 'order'))
print('There are more powerful ways to format strings, but this is sufficient'
        ' most of the time.')

print('=' * 18)

# Finally--you can prompt a user for input at the command line, and save their
# input, with the "input" function. It takes a string to print, and returns the
# value the user types, as a string.
example = input('Tell me something...I\'ll say it back. ')
print(example)
