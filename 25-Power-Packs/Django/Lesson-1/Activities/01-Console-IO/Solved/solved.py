#!/usr/bin/python3

# Learning Objectives:
#   - Variable Declarations & Basic Data Types
#   - Core Language Features

# BRIEF //
#   Your firm is implementing its student management prototype in Python.
#   It's a command-line program, which the registrar's office will use to
#   add students to the database upon enrollment.
#
#   The program should prompt the user for a student's first name; last name;
#   middle initial; physical address; email address; and phone number.
#
#   After each prompt, the program should wait for the user's input. 
#
#   Once the user has entered every piece of information, the program should
#   print it all back to the console, and prompt the user to enter Y if the
#   information is correct, or any other key otherwise.
#
#   For now, you should collect the user's response--i.e., y or otherwise--but
#   don't worry about handling it. We'll get to that shortly.

# Prompt user for student's identification information...
first_name = input('Please enter the student\'s first name. ')
last_name = input('Please enter the student\'s last name. ')
middle_initial = input('Please enter the student\'s middle initial. ')

# Prompt user for student's contact information...
address = input('Please enter the student\'s address. ')
email = input('Please enter the student\'s email. ')
phone_number = input('Please enter the student\'s phone_number. ')

# Print a separator. This wasn't part of the assignment, so it's okay if you
# don't have this part. :)
print('-' * 18)

# Print everything to the console...
print('The student\'s first name is {0}'.format(first_name))
print('The student\'s last name is {0}'.format(last_name))
print('The student\'s middle initial is {0}'.format(middle_initial))

print('The student\'s address is {0}'.format(address))
print('The student\'s email is {0}'.format(email))
print('The student\'s phone number is {0}'.format(phone_number))

# Print a separator. 
print('-' * 18)

# Prompt for confirmation, and save what user entered.
confirmation = input('Is this information correct? (Y/n) ')
