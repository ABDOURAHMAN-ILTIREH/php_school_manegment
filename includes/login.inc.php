<?php 
   include 'autoload.inc.php';
   include "../classes/Db.class.php";
   include "../classes/Login.class.php";
   include "../classes/LoginCtr.class.php";

if(isset($_POST['login'])) {
    $user_email = $_POST['email'];
    $user_pwd = $_POST['password'];

    $login = new LoginCtr($user_email, $user_pwd);
    $login->LoginUser();

    header('Location: ../home.php');
}