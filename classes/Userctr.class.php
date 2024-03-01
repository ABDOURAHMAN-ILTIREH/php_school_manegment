<?php

class Userctr extends Users{
  
   private $user_name;
   private $user_email;
   private $user_pwd;
   private $confirm_pwd;

   public function __construct($name, $email, $pwd, $confirm_pwd){
      $this->user_name = $name;
      $this->user_email = $email;
      $this->user_pwd = $pwd;
      $this->confirm_pwd = $confirm_pwd;
   }

   public function signUpUser(){
       if($this->emptyValue() == false){
        header("Location:../Signup.php?error=emptyValue");
        exit();
       }
      //  if($this->invalidUser() == false){
      //   header("Location:../Signup.php?error=invalidUser");
      //   exit();
      //  }
       if($this->inValidEmail() == false){
        header("Location:../Signup.php?error=inValidEmail");
        exit();
       }
       if($this->checkTokenUser() == false){
        header("Location:../Signup.php?error=checkTokenUser");
        exit();
       }

       $this->setUser($this->user_name, $this->user_email, $this->user_pwd);

   }




   private function emptyValue(){
    if(empty($this->user_name) || empty($this->user_email) 
    || empty($this->user_pwd)||empty($this->confirm_pwd)){
        $result=false;
      }else{ 
        $result = true;
      }
      return $result;
   }
   
   private function invalidUser(){

      if(!preg_match("/^[a-zA-Z0-9]*$/", $this->user_name)){
        $result = false;
      }else{
        $result = true;
      }

      return $result;
   }

   private function inValidEmail(){
      if(!filter_var($this->user_email, FILTER_VALIDATE_EMAIL)){
        $result = false;
      }else{
        $result = true;
      }
      return $result;
   }

   protected function checkTokenUser(){
      if(!$this->checkUser($this->user_name,$this->user_email)){
        $result = false;
      }else{
        $result = true;
      }
      return $result;
   }


}