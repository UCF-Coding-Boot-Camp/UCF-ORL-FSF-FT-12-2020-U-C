#!/usr/bin/python3

from helpers import *

from Roster import Roster

from Student import Student

###############################################################################
#
# BRIEF //
#   Your final task will be to create a Student class in an external module,
#   import it; and use it to replace the janky student dictionary setup we have
#   right now.
#
#     1. Create a Student class in an external file. Create an __init__ method
#        in which you initialize the student's attributes.
#
#     2. Add a method called get_info, in which you report the student's
#        contact information as you might on a "calling card". Something like:
#
#          Iskra A. Lawrence
#          555 Ubicumque #123
#          email@example.com
#          555.555.1234
#
#         You can call it, report, print_info, anything else,  alternatively.
#
#     3. Replace the print_student function with a call to this 
#        get_info function.
#
#     4. If you have time, try creating a Roster class that allows you to 
#        store students. This allows us to have different Roster objects 
#        corresponding to, say, different classes or class years.
#
#     5. Make sure your Roster class has a print_all method that prints the 
#        details of every student it holds. Call it summarize, or something
#        similar.
#
###############################################################################

# Class Roster.
roster = Roster()

while True:

    # Get information and assign via unpacking, and then instantiate a new
    # Student. Order matters for unpacking.
    first, last, middle, address, email, phone = get_student_information()
    student = Student(first, last,middle, address, email,phone)

    student.print_info()
    # Prompt for confirmation.
    if confirm('Is this information correct? (Y/n) '):
        roster.add(student)
        
        if confirm('Would you like to add a student to the roster? (Y/n) '):
            continue
        else:
            roster.summarize()
            break
