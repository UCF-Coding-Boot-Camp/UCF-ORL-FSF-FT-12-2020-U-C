<?php

/* For JavaScript experts like yourselves, there's surprisingly little to say
 *   about PHP's conditional and comparison operators. They behave exactly as
 *   you'd expect. */
$name = 'Peleke Sengstacke';

/* Note that braces aren't required around single-line if/else if/else
 * expressions. */
if (strlen($name) > 10)
  echo "'$name' is a long name.\n";

/* Defaulted to the same, but feel free to change either to change the way
 * the branches execute below. */
$your_birth_year = 1993;
$my_birth_year = 1993;

/* PHP shares JavaScript's peculiarity of having separate operators for
 * strict equality (===) and loose equality (==). Stick to === for now;
 * we'll revisit == later. */
if ($your_birth_year > $my_birth_year) {
  echo "You're younger than me.\n";
} else if ($your_birth_year === $my_birth_year) {
  echo "We're the same age!\n";
} else {
  echo "You're pretty old.\n";
}
