<?php

class LoginCtr extends Login{
    private $user_email;
    private $user_pwd;
 
    public function __construct($email, $pwd){
       $this->user_email = $email;
       $this->user_pwd = $pwd;
    }
 
    public function LoginUser(){
        if($this->emptyValue() == false){
         header("Location:../Login.php?error=emptyValue");
         exit();
        }
 
        $this->getUser($this->user_email, $this->user_pwd);
 
    }

    private function emptyValue(){
     if(empty($this->user_email) || empty($this->user_pwd)){
         $result=false;
       }else{ 
         $result = true;
       }
       return $result;
    }
}