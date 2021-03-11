#!/usr/bin/python3

# Python has another powerful data type, called the `dict(ionary)`. This is
# analogous to JavaScript's objects.

student_profile = {
        'first_name' : 'Jane',
        'last_name' : 'Doe',
        'middle_initial' : 'Q',
        'address' : 'Melbourne, Australia',
        'email' : 'jane@gmail.com',
        'phone_number' : '5555555678' ,
        }

print(student_profile)

# Separator...
print('-' * 18)

# We get the value of a key just as in JavaScript--via bracket notation.
print(student_profile['first_name'])

# We can get a list of all the keys in the dict with the keys method.
print(student_profile.keys())

# Similarly, values returns the...Well, values.
print(student_profile.values())

# Separator...
print('-' * 18)

# If you want key/value pairs together, use items.
print(student_profile.items())

# Finally, iterating over dicts similar to iterating over lists, but:
#
#   1. You must iterate over dict.items(), not dict directly; and
#
#   2. we have two variables in scope--key and value.
for key, value in student_profile.items():
    print('The key {0} has value {1}.'.format(key, value))

# Separator...
print('-' * 18)

# If you iterate over the dict directly, you just get keys. If this is what
# you want, great, but remember to iterate over items() if you want the values
# as well. Keep in mind that the order in which dict entries appear is NOT
# predictable.
print('A more verbose way to get the value of a key...')
for key in student_profile:
    print('The key {0} has the value {1}.'.format(key, student_profile[key]))
