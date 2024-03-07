<?php

include('PrimaryPort.php');

class DatabaseDepnedncy implements SaveUser{

    public function save(){
      
        // connect to DB 
        // Logics to save db 
        $user=new User();
        return "Data saved Sucessfully";
    }

}

//define how is user going to intract 
class UserController {
    private $databaseDepnedncy;
    private $username;
    private $pwd;
    public function __construct(UserService $dependyrepo) {
        $this->databaseDepnedncy = $dependyrepo;

    }

    public function registeruser($username,$pwd){
        $this->databaseDepnedncy->registarion($username,$pwd);
    }
    }

    $model1=new UserService();

    $model  =   new UserController($model1);
// print_r($model);
    

?>