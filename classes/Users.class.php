<?php

class Users extends Db{
    
     protected function setUser($user_name,$user_email,$pwd){
        $mysql = "INSERT INTO users (name,email,password) VALUES(?,?,?);";
        $stmt = $this->connect()->prepare($mysql);

        $hashPassword = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($user_name,$user_email,$hashPassword))){
            $stmt = null;
            header("Location:../Signup.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }


    
    protected function checkUser($user_name, $user_email){
        $mysql = "SELECT * FROM users WHERE name = ? OR email = ?;";
        $stmt = $this->connect()->prepare($mysql);

        if(!$stmt->execute(array($user_name,$user_email))){
            $stmt = null;
            header("Location:../Signup.php?error=stmtfailed");
            
            exit();

        }
       
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }


}