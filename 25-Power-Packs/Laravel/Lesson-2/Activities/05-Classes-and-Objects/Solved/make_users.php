<?php

require './User.php';

function println ($string) {
  echo "$string\n";
}

// Shares last name.
$joe = new User('john@doe.com', 'John', 'Doe');

// Prefers anonymity. Omitting last name works fine.
$anon = new User('person@throwaway.com', 'Buzz');

println($joe->fullName());
println($anon->fullName());

// Using our setImageUrl method.
$joe->setImageUrl("https://i.ytimg.com/vi/W1lDwVEkbNc/maxresdefault.jpg");

println(User::getCreated());