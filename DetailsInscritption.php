<?php
  include 'src/header.php';
  include "./classes/Db.class.php";
  include "./classes/Etudiants.class.php";
  include "./classes/EtudiantViews.class.php";

  $fetch = new EtudiantViews();
  // $fetch->getAllEtudiantsView();
  print_r($fetch->getAllEtudiantsView());
    // foreach($fetch as $row){
    //   echo $row['name'];
    // }
?>
   <section class="details_section">
        <div class="bangs_details">
          <h2 class="titre">Details de Etudiants Inscrie en ligne.</h2>
          
          <div class="details_wrapper">
              <p>Nom et Prenom: <span></span></p>
              <p>Email: <span></span></p>
              <p>Filiere choisi: <span></span></p>
              <p>Numero Telephone: <span></span></p>
              <p>Sexe: <span></span></p>
              <p>Adress: <span></span></p>
          </div>
        </div>
   </section>
<?php include 'src/footer.php'; ?>   