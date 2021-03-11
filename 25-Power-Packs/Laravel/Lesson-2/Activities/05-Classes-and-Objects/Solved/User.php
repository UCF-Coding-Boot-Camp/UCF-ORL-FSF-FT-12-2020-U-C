<?php

class User {

  public $firstName;

  private $lastName;

  private $emailAddress;

  private static $created = 0;

  // Why does $last have to come . . . Well, last?
  public function __construct ($email, $first, $last = "") {
    $this->firstName = $first;
    $this->lastName = $last;
    $this->emailAddress = $email;

    // self allows us to refer to static properties and methods of the current class
    // We could also have referred to it by its name: User
    // Note that static properties need the $ before the name.
    self::$created += 1;
  }

  public function fullName() {
    return $this->firstName . " " . $this->lastName;
  }

  public function setImageUrl($url) {
    $this->imageUrl = $url;
  }

  /**
   * This is a static method, so we can call it using User::getCreated()
   */
  public static function getCreated() {
    return self::$created;
  }

}
