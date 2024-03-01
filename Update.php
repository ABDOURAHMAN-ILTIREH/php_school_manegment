<?php 
   include 'includes/autoload.inc.php';
   include 'src/header.php';
   include "./classes/Db.class.php";
   include "./classes/Etudiants.class.php";
   include "./classes/EtudiantViews.class.php";

   $idEtudiant = $_GET['id'];
   $updateEtudiant = new EtudiantViews();
   $update = $updateEtudiant->updateEtudiant($idEtudiant);

   $id = $update['idEtudiant'];
   $name = $update['name'];
   $email = $update['email'];
   $number = $update['number'];
   $sexe = $update['sexe'];
   $filier = $update['filier'];
   $adress = $update['adress'];

?>
<section class="section_class">
        <div class="container">
            <div class="premier_content">
                <img src="../images/Academic_Image.png" alt="" class="img_academic">
                <h1 class="title">Academic Arabe</h1>
            </div>

            <form action="includes/form.inc.php?id=<?= $id?>&send=update" method="POST">
                <h3 class="form_titre">Inscriptions des Etudiants en Ligne.</h3>

                <div class="input_form">
                    <label for="number">Numero Telephone:</label>
                    <input type="number" placeholder="Entre Votre Numero Telephone" value="<?php echo $number ?>" name="number">
                </div>

                <div class="input_form">
                    <label for="name">Nom et Prenoms:</label>
                    <input type="text" placeholder="Entre Votre Nom et Prenom" name="name" value="<?php echo $name ?>">
                </div>

                <div class="input_form">
                    <label for="email">Email:</label>
                    <input type="email" placeholder="Entre Votre Email" name="email" value="<?php echo $email ?>">
                </div>

                <div class="input_form">
                    <label for="sexe">Sexe:</label>
                    <select name="sexe">
                        <option value="masculin">Masculin</option>
                        <option value="feminin">Feminin</option>
                    </select>
                </div>

                <div class="input_form">
                    <label for="filiere">Filiere:</label>
                    <input type="radio" name="filiere" value="Informatique" 
                    <?php echo $filier=="Informatique" ? "checked": ""?>>Informatique
                    <input type="radio" name="filiere" value="Comptablite"
                    <?php echo $filier=="Comptablite" ? "checked": ""?>>Comptablite
                    <input type="radio" name="filiere" value="Logistique"
                    <?php echo $filier=="Logistique" ? "checked": ""?>>Logistique
                </div>

                <div class="input_form">
                    <label for="adress">Adress de votre quartier:</label>
                    <textarea name="adress" placeholder="Cite l'adress de votre quartier actuel."><?php echo $adress ?></textarea>
                </div>

                <div class="form_button">
                    <button>Annuler</button>
                    <button class="envoiyer" name="update">Enregistre Update</button>
                </div>

            </form>
        </div>
    </section>

<?php include 'src/footer.php'; ?>   




