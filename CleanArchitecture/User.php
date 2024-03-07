<?php

class User{
    private $id;
    private $username;
    private $password;

    public function getId(){
        return $this->id;
    }
    public function getUsername(){
        return $this->username;
    }

    public function setId($id){
         $this->id=$id;
    }

    public function setUsername($username){
        $this->username=$username;
        print_r("name is usaved");
   }
}

?>