<?php
//  include 'autoload.inc.php';
 include "../classes/Db.class.php";
 include "../classes/Etudiants.class.php";
 include "../classes/EtudiantCtr.class.php";
 include "../classes/EtudiantViews.class.php";

 if(isset($_POST['submit'])){
        $nom = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $sexe = $_POST['sexe'];
        $adress = $_POST['adress'];
        
        if(isset($_POST['filiere'])){
           $filiere = $_POST['filiere'];
         }
         
         $Etudaints = new EtudiantCtr($id,$nom,$number,$email,$sexe,$filiere,$adress);
         $Etudaints->save();
         header('Location: ../feedbacks.php');

}
// sinom si supprime le donne
else if($_GET['send'] === 'delete'){
   $idEtudiant = $_GET['id'];

   $Etudaints = new EtudiantViews;
   $Etudaints->deleteEtudiant($idEtudiant);

   header('Location: ../feedbacks.php');
}
// sino mise a jour le donne
else if($_GET['send'] === 'update'){
   $id = $_GET['id'];
   
   $nom = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $sexe = $_POST['sexe'];
   $adress = $_POST['adress'];
        
   if(isset($_POST['filiere'])){
      $filiere = $_POST['filiere'];
   }

   $updateEtudiant = new EtudiantCtr($nom,$number,$email,$sexe,$filiere,$adress,$id);
   $updateEtudiant->upadateCtr();
   header('Location: ../feedbacks.php');
}

 