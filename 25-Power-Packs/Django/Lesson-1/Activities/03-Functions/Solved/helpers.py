#!/usr/bin/python3

### Helpers module for Student Information script

def get_student_information():
    # Prompt user for student's identification information...
    first = input('Please enter the student\'s first name. ')
    last = input('Please enter the student\'s last name. ')
    middle = input('Please enter the student\'s middle initial. ')
    
    # Prompt user for student's contact information...
    address = input('Please enter the student\'s address. ')
    email = input('Please enter the student\'s email. ')
    phone = input('Please enter the student\'s phone_number. ')

    return [first, last, middle, address, email, phone]

def create_student(**student):
    """
    A triple-quoted string at the top of a function is called a docstring. It
    provides documentation on how a function works, and how to use it.

    create_student creates a student dictionary with the data contained in the
    information array. The data are assumed to arrive in the order suggested
    in the call to fromkeys. 

    Do you anticipate any problems with this design? Why? Can you make it more
    robust?
    """

    _student = dict.fromkeys(['first_name', 'last_name', 'middle_initial', 
        'address','email', 'phone_number'])

    _student['first_name'] = student.get('first_name', 'N/A')
    _student['last_name'] = student.get('last_name', 'N/A')
    _student['middle_initial'] = student.get('middle_initial', 'N/A')
    
    # Prompt user for student's contact information...
    _student['address'] = student.get('address', 'N/A')
    _student['email'] = student.get('email', 'N/A')
    _student['phone_number'] = student.get('phone_number', 'N/A')

    return _student

def print_separator(repetitions = 18):
    print('-' * repetitions)

def print_student(student):
    print('You\'ve entered:')

    print_separator()

    for key, value in student.items():
        print('The student\'s {0} is {1}.'.format(key, value))

    print_separator()

def confirm(message):
    confirmation = (input(message).lower() == 'y')
    return confirmation

def print_summary(students):
    print('You\'ve entered the following profiles:')

    print_separator()

    for student in students:
        print_student(student)

    print_separator()

