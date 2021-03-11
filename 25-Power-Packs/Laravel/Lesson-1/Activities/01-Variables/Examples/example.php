<?php

/* Comments are the same in PHP as in JavaScript.
 *
 * Note that variables start with a $. This is necessary! */

$name = 'Peleke'; 
$age  = 23;

// Automatically inserts the value of $name.
echo "My name is $name.\n"; 

// Literally prints $name. Also note that:
//   1. echo does not add newlines for us; and
//   2. You concatenate strings with a period: . 
echo '$name -- that probably isn\'t what you wanted to print.' . "\n"; 

// PHP offers most of the same arithmetic operation as JavaScript.
// The one difference is that it has built-in exponentiation.
$squared_age = $age ** 2;
echo "$squared_age is much older than I'll ever be.\n";
