<?php
  include 'src/header.php';
  include "./classes/Db.class.php";
  include "./classes/Etudiants.class.php";
  include "./classes/EtudiantViews.class.php";

  $fetch = new EtudiantViews();
  
?>
   <section class="feedback_section">
           <div class="contents_table">
                <h2 class="titre">Liste de Etudiants Inscrie en ligne.</h2>
           <table class="wrapper_information">
                <tr>
                    <th>Nom et Prenom</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <?php if($fetch->getAllEtudiantsView()):?>
                <?php  foreach($fetch->getAllEtudiantsView() as $item):?>
                <tr>
                    <td><?php echo $item['name'] ?></td>
                    <td><?php echo $item['email'] ?></td>
                    <td>
                        <a href="./Update.php?id=<?=$item['idEtudiant'] ?>" class="edit">edit</a>
                        <a href="includes/form.inc.php?id=<?=$item['idEtudiant'] ?>&send=delete" class="delet">delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else :?>
                
             
                    <p class="vide_alerte">la list de Etudiant est vide, aucun etudiants est incrie en ligne.</p>
             
                <?php endif; ?>
           </table>
       </div>  

   </section>
   <?php include 'src/footer.php'; ?>   