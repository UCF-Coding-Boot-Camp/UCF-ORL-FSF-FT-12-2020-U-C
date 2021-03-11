<?php

// Example 1. Writing that newline in every echo statement is 
//   getting annoying, isn't it? 
function println($string) {
  echo "$string\n";
}

println("No more newlines!");

// Example 2. Return statements are similar to JavaScript's.
function multiply($x, $y) {
  return $x * $y;
}

println("2 x 2 = " . multiply(2, 2) . ".");

// Example 3. As in JavaScript, we can call functions before they're defined.
defined_later();

function defined_later() {
  println("I'm defined at the end of the file, but you can still call me, maybe?");
}
