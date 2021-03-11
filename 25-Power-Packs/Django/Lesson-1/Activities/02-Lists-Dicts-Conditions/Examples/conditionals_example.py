#!/usr/bin/python3

# Python has two boolean values: True and False. Note the capitals.
truth = True
falsity = False

# Conditional checks are fairly straightforward.
if truth:
    print('It\'s true.')
elif falsity:
    print('I really hope this never prints.')
else:
    print('...I hope this never prints, either.')

# In Python, the && operator is just written and.
x = 0
if x <= 2 and x >= -2:
    print('It looks like x is in range.')

# Similarly, || is written or.
if x == 2 or x < 5:
    print('...Looks like it\'s still in range. Hallelujah.')

# If you chain comparisons, Python will do an automatic "and" for you.
if -2 <= x <= 2:
    print('Wow...That\'s convenient.')

# Now's a good time to point out that you can use while True: to loop forever.
while True:
    stop = input('Do you want to stop? (Y/n) ')
    if stop == 'Y':
        # Break kills a loop immediately.
        break
    else:
        # You don't need an "else" branch, but we're using one just to
        # demonstrate how to use continue. It just means, "run the loop again."
        continue

# Separator...
print('-' * 18)

