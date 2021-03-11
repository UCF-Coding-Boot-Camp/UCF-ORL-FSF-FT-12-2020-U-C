<?php

// echoes to the screen, but includes a new line
function println($string) {
  echo "$string\n";
}

// prints a separator to the screen
function separate($separator = '=', $repetitions = 12) {
  println(str_repeat($separator, $repetitions));
}

// tests if a name is long and returns the appropriate string
function test_name($name) {
  if (strlen($name) > 12)
    return "It's a long name.";
  else
    return "It's a short name.";
}

// determines if someone is drinking sake tonight and returns appropriate string
function test_sake($age) {
  if ($age > 21)
    return "Sake! Sake! Sake!";
  else if ($age === 21)
    return "Just slipped by! Sake! Sake! Sake!";
  else
    return "No sake for me :(";
}


// We can even compose our functions with other functions if we want
//  Look how clean solution.php is when we do this
function introduce_student($first_name, $last_name) {
  $full_name = $first_name . " " . $last_name;

  println("My name is $full_name.");

  printLn(test_name($full_name));
}


function drinks_sake($age) {
  println("I'm $age years old.");

  println(test_sake($age));
}
