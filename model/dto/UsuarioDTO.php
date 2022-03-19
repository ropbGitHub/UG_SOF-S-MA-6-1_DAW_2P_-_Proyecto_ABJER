<?php

class Usuario {

  // 
  public $id, $username, $email, $birthday, $nationality, $password;

  // Constructor
  function __construct() {
  }

  // Getters
  function getId() {          // id
    return $this->id;
  }

  function getUsername() {    // username
    return $this->username;
  }

  function getEmail() {       // email
    return $this->email;
  }

  function getBirthday() {    // birthday
    return $this->birthday;
  }

  function getNationality() { // nationality
    return $this->nationality;
  }

  function getPassword() {    // password
    return $this->password;
  }

  // Setters
  function setId($id) {                   // id
    $this->id = $id;
  }

  function setUsername($username) {       // username
    $this->username = $username;
  }

  function setEmail($email) {             // email
    $this->email = $email;
  }

  function setBirthday($birthday) {       // birthday
    $this->birthday = $birthday;
  }

  function setNationality($nationality) { // nationality
    $this->nationality = $nationality;
  }

  function setPassword($password) {       // password
    $this->password = $password;
  }
}