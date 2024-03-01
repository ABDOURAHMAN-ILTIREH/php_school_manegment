<?php 
   session_start();
   include 'src/header.php'
   ?>

<section class="section_class">
    <div class="container">

        <div class="premier_content">
                <img src="../images/Academic_Image.png" alt="" class="img_academic">
                <h1 class="title">Academic Arabe</h1>
            </div>

            <form action="includes/signup.inc.php" method="POST">
                <h3 class="form_titre">SignUp pour Inscriptions.</h3>

                <div class="input_form">
                    <label for="name">Nom et Prenoms:</label>
                    <input type="text" placeholder="Entre Votre Nom et Prenom" name="name">
                </div>

                <div class="input_form">
                    <label for="email">Email:</label>
                    <input type="email" placeholder="Entre Votre Email" name="email">
                </div>

                <div class="input_form">
                    <label for="password">Password:</label>
                    <input type="password" placeholder="Entre Votre password" name="password">
                </div>

                <div class="input_form">
                    <label for="Confirm_Password">Confirme Password:</label>
                    <input type="password" placeholder="Entre Votre password pour confirme" name="confirm_password">
                </div>

                <div class="form_button">
                    <button class="envoiyer" name="signUp">SignUp</button>
                </div>

            </form>
        </div>
    </div>
</section>
<?php include 'src/footer.php'; ?>  