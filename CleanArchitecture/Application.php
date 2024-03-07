<?php
include('User.php');

// UserRepository which is an interface to intract with user Entity 
 // and having a method save() to save the data into D
interface UserRepository{
  public function save();
}

//  RegisterUserUseCase  for to define use case to validate and save the user
// and its depending on UserRepository taking its on its consturctor to immplement the save function.
// this class is having excutre method from where validate and save data.

class RegisterUserUseCase{
  private $userRepository;
  public function __construct(UserRepository $repo) {
    $this->userRepository = $repo;
  }

  function excute($username){
   $user=new User();
    $user->setUsername($username);
    $this->userRepository->save();
  }
}



?>