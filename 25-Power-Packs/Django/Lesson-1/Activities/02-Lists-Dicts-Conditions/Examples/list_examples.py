#!/usr/bin/python3

# Storing everything in separate variables isn't very well structured. Ideally,
# we'd put it all in a class...But there are a few tools we need before we get
# there.
#
# Like JavaScript, Python has an array data type. The Python community 
# refers to them as lists, not arrays, and they're arguably more powerful than
# their JavaScript counterparts.

# You use the same syntax as in JS to declare and populate simple lists.
simple_array = [1, 2, 3]

# You index into arrays just like in JS...
print('The first element of simple_array is {0}.'.format(simple_array[0]))

# ...And can use negative indices, sa well.
print('The last element of simple_array is {0}.'.format(simple_array[-1]))

# You can add elements to a list with the append function...
simple_array.append(4)
print(simple_array)

# ...Or you can add the contents of other lists with the += operator.
# You can also use the extend function for this, but += is a wee bit faster.
simple_array += [5]
print(simple_array)

simple_array.extend([6, 7, 8])
print(simple_array)

# Separator...
print('-' * 18)

# To get the length of the list, use the len method.
print('The length of your simple array is {0}.'.format(len(simple_array)))

# ...And iteration is pretty simple, as well.
# Note that we didn't have to manually check loop conditions!
for x in simple_array:
    print('The current element of simple_array is {0}.'.format(x))

# Separator...
print('-' * 18)

# Finally, note that Python allows this nifty trick for variable assignments,
# known as unpacking. You can do this with an arbitrary number of variables,
# as long as the length of the array matches the number of variables assigned.
a, b = [1, 2]

print(a) # Prints 1
print(b) # Prints 2
