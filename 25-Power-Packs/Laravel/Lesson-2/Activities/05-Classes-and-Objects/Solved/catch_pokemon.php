<?php

require './Pokedex.php';
require './Charizard.php';

$pokedex = new Pokedex;

// Starting off fresh.
$pokedex->report();

// Add a Charizard
$pokedex->addPokemon(new Charizard);

// Let's see what we've got . . . 
$pokedex->report();
