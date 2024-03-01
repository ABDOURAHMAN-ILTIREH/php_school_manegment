<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Academic Arabe</title>
        <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
        
     <header>
        <img src="../../images/Academic_Image.png" alt="" class="img_academic">
        <nav>
             <ul>
                <li><a href="../home.php">home</a></li>
                <li><a href="">feedback</a></li>
            </ul>
            <div class="auth_buttons">
                <?php
                if(isset($_SESSION["iduser"])){
                    
                    ?>
                     <ul>
                        <li><php echo $_SESSION["name"]; ?></li>
                    </ul>
                     <button class="login">
                        <a href="../includes/Logout.inc.php">Logout</a>
                    </button>
                <?php
                }
                else{
                    
                    ?>
                    <button class="signup">
                        <a href="../Signup.php"> s'inscrire</a>
                    </button>
                    <button class="login">
                        <a href="../Login.php">Login</a>
                    </button>
                <?php
                }
                ?>
            </div>
        </nav>
    </header>