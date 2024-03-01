<?php 
session_start();
   include 'includes/autoload.inc.php';
   include 'src/header.php'

   ?>
<section class="section_class">
    <div class="container">
        <div class="premier_content">
                        <img src="../images/Academic_Image.png" alt="" class="img_academic">
                        <h1 class="title">Academic Arabe</h1>
                    </div>
        
                    <form action="includes/login.inc.php" method="POST">
                        <h3 class="form_titre">Login pour Inscriptions.</h3>
        
                        <div class="input_form">
                            <label for="email">Email:</label>
                            <input type="email" placeholder="Entre Votre Email" name="email">
                        </div>
        
                        <div class="input_form">
                            <label for="password">Password:</label>
                            <input type="password" placeholder="Entre Votre Password" name="password">
                        </div>
        
                        <div class="form_button">
                            <button class="envoiyer" name="login">Login</button>
                        </div>
        
                    </form>
                </div>
    </div>
</section>

<?php include 'src/footer.php'; ?>  