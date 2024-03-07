<?php
// include('User.php');
include('Application.php');

// this layer is responisble for building application and handels the use cases and user intarctions 

class DatabaseRepo implements UserRepository{
    public function save(){

        // check an user 
        // connect db 
        
        //logics to save data in db 
        // $User->username=$this->username;
        // $User->save();

    }

}

// save an user 
$dependecyUserRepo= new DatabaseRepo();
$RegisterUserUseCase=new RegisterUserUseCase($dependecyUserRepo);

$RegisterUserUseCase->excute("preeti");


?>