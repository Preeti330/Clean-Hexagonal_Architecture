<?php
 class UserService{
        public function registarion($username,$pwd){
            $user=new User();
            $user->setUsername($username);
            $user->setPwd($pwd);
            print_r("i am userservice");
            // $user->save();
        }
 }
 class User{
    private $username;
    private $pwd;

    public function getUsername(){
        return $this->username;
    }

    public function getPwd(){
      return  $this->pwd;
    }

    public function setUsername($username){
        $this->username=$username;
    }

    
    public function setPwd($pwd){
        $this->pwd=$pwd;
    }
 }

?>