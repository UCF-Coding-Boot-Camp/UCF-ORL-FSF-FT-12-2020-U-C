<?php

class Pokedex {

  // Associative array 
  private $myPokemon = [];

  public function addPokemon ($pokemon) {
    $name = $pokemon->name;

    if ( !array_key_exists($name, $this->myPokemon) ) {
      echo "Excellent! You caught a new Pokemon!\n";
      $this->add($pokemon);
    } else {
      echo "You've already caught that one!\n";
    }
  }

  private function add ($pokemon) {
    $name = $pokemon->name;

    $this->myPokemon[$name] = $pokemon;
  }

  /* Counts how many Pokemon are in the Pokedex.
   **/
  private function reportCount () {
    $count = count($this->myPokemon);

    echo "You've caught $count pokemon!\n"; 
  }

  public function report () {

    if ( count($this->myPokemon) === 0 ) {
      echo "You haven't caught anything yet!\n";
      return;
    }

    foreach ($this->myPokemon as $name => $pokemon) {
      echo "You've caught a $name.\n";
    }

    echo "That's everything you've caught so far.\n";

  }
}
