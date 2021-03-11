<?php

// Name information
$first = 'Peleke';
$last  = 'Sengstacke';
$full  = "$first $last";

// Age information
$birth_year = 1993;
$current_year = 2016;
$age = $current_year - $birth_year;

echo "My name is $full.\n";
if (strlen($full) > 12)
  echo "It's a long name.\n";
else
  echo "It's a short name.\n";

echo str_repeat('=', 12) . "\n";

echo "I am $age years old.\n";
if ($age > 21)
  echo "Sake! Sake! Sake!\n";
elseif ($age === 21)
  echo "Just slipped by! Sake! Sake! Sake!\n";
else
  echo "No Sake for me :(\n";
