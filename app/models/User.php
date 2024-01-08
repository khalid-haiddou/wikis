<?php 

namespace app\models;

class User {

    public $id;
    public $fullname;
    public $lastname;
    public $email;
    public $phone;
    public $password;

    public $role;
    public $table_name = "users";


    public function __construct($fullname,$lastname,$email,$phone,$password)
    {
        $this->fullname = $fullname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
  
    }

      

      public function getId() {
        return $this->id;
    }


    
    public function getFullname() {
        return $this->fullname;
    }

    public function setFullname($fullname) {
        $this->fullname = $fullname;
    }

    
    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    
    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getrole() {
        return $this->role;
    }

    public function setrole($role) {
        $this->role = $role;
    }

}