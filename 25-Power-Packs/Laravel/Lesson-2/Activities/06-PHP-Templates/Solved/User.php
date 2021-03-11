<?php

class User {
  
  public $firstName;

  private $lastName;

  private $emailAddress;

  private $imageUrl;

  // Why does $last have to come . . . Well, last?
  public function __construct ($email, $first, $last = "") {
    $this->firstName = $first;
    $this->lastName = $last;
    $this->emailAddress = $email;
  }

  public function setImageUrl ($imageUrl) {
    $this->imageUrl = $imageUrl;
  }

  public function getFullName() {
    return $this->firstName . " " . $this->lastName;
  } 
}
