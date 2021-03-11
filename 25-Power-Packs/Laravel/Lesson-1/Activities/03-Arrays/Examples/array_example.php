<?php

// Arrays in PHP are similar to those in JavaScript.
$names_list = ['Goethe', 'Ibsen', 'Strindberg'];

// You index into them identically ... 
echo "$names_list[0] wrote Dr Faust.\n";

// ... You get the length using a "count" function:
echo "There are " . count($names_list) . " names in your list.\n";

echo str_repeat('=', 12) . "\n";

// ... And you can iterate over them:

foreach ($names_list as $name) {
  echo "$name is a fantastic artist!\n";
}
