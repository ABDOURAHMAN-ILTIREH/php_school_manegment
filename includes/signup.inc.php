<?php 
   include 'autoload.inc.php';
   include "../classes/Db.class.php";
   include "../classes/Users.class.php";
   include "../classes/Userctr.class.php";

if(isset($_POST['signUp'])) {
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_pwd = $_POST['password'];
    $conf_paswd = $_POST['confirm_password'];

    $signup = new Userctr($user_name, $user_email, $user_pwd, $conf_paswd);
    $signup->signUpUser();

    header('Location: ../Login.php');
}