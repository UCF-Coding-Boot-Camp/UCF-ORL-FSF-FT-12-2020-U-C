#!/usr/bin/python3

from helpers import *

###############################################################################
#
# BRIEF //
#   Our script is coming together, but could use some organization.  We've 
#   collected a few of the standout challenges for you below. There's
#   ample opportunity for refactoring beyond this, though, so feel free to get 
#   creative.
#
#   Note that only the first three of these are required. But, you're free 
#   and encouraged to tackle the last three if you finish early!
#
#     1. Refactor your code to collect input from the user, then create a 
#        function which creates and returns the student dict.
#
#     2. Create a function that encapsulates the for loops for printing 
#        an individual student's information.
#
#     3. Create a function that prints a yes/no confirmation message to the 
#        screen, and returns True if the user enters Y (or y).
#
#     4. If you have time, wrap all the calls to input in a function called
#        get_student_information, or something similar. Return an array 
#        containing user input. 
#
#     5. If you have time, wrap up all the code that prints a summary into its
#        own function.
#
#     6. If you finish early, Google Python modules. Try and pull your 
#        functions if you're feeling lucky. If not, just sit tight. We'll 
#        discuss this during review.
#
###############################################################################

# "Global" students list.
students = []

while True:
    # Get information and assign via unpacking. Order matters.
    first, last, middle, address, email, phone = get_student_information()

    # Create a student by passing kwargs. We can do this with positional
    # arguments, as well, but this is arguably more robust.
    student = create_student(first_name = first, last_name = last,
            middle_initial = middle, address = address, email = email,
            phone_number = phone)
    
    print_student(student)
    
    # Prompt for confirmation. Use lower so users can enter either Y or y.
    if confirm('Is this information correct? (Y/n) '):
        students.append(student)
        
        if confirm('Would you like to input another student\'s information? (Y/n) '):
            continue
        else:
            print_summary(students)
            break
