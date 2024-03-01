<?php

class Login extends Db{
    
     protected function getUser($user_email,$pwd){
        $mysql = 'SELECT * FROM users WHERE email = ?;';
        $stmt = $this->connect()->prepare($mysql);


        if(!$stmt->execute(array($user_email))){
            $stmt = null;
            header("Location:../Login.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("Location:../Login.php?error=usernotfoundByEmail1");
            exit();
        }

        
        $hashedpwd = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $checkVerify = password_verify($pwd, $hashedpwd[0]["password"]);

        if($checkVerify == false){
            $stmt = null;
            header("Location:../Login.php?error=emailOrpasswordfailed");
            exit();

        }else if($checkVerify == true){
            $mysql = 'SELECT * FROM users WHERE email = ? AND password = ?;';
            $stmt = $this->connect()->prepare($mysql);

            if(!$stmt->execute(array($user_email,$pwd))){
                $stmt = null;
                header("Location:../Login.php?error=stmtfailed");
                exit();
            }
            

            // if($stmt->rowCount() == 0){
            //     $stmt = null;
            //     header("Location:../Login.php?error=usernotfoundByEmailAndPassword2"); 
            //     exit();
            // }


            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['iduser'] = $user[0]['iduser'];
            $_SESSION['name'] = $user[0]['name'];
            $_SESSION['email'] = $user[0]['email'];

            $stmt = null;
        }
        

    }

}