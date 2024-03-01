<?php

class Etudiants extends Db{
    protected function setEtudiant($name, $number, $email, $sexe, $filier,$adress){
        $mysql = "INSERT INTO etudiants (name,number,email,sexe,filier,adress) VALUES(?,?,?,?,?,?);";
        $stmts = $this->connect()->prepare($mysql);

        if(!$stmts->execute(array($name, $number, $email, $sexe, $filier,$adress)))
        {
           $stmts = null;
           header('location:../feedback.php:error:stmtError');
           exit();
        }
    }

    protected function getAllEtudiants(){
        $mysql = "SELECT * FROM etudiants;";
        $stmts = $this->connect()->prepare($mysql);
        $stmts->execute();
        while($result = $stmts->fetchAll()){
            return $result;
        }
    }
    
    protected function deleteEtudiants($idEtudiant){
      $mysql = "DELETE FROM etudiants WHERE idEtudiant = ?;";
      $stmts = $this->connect()->prepare($mysql);
      if(!$stmts->execute([$idEtudiant])){
        $stmts = null;
        header("location: ../feedback.php?error=EtudiantNotFound");
        exit();
      }
      
    }

    protected function update($id){
      $mysql = "SELECT * FROM etudiants WHERE idEtudiant = ?;";
      $stmts = $this->connect()->prepare($mysql);
      $stmts->execute([$id]);

      while($result = $stmts->fetch()){
        return $result;
      }
    }

    protected function updateSave($name, $number, $email, $sexe, $filier,$adress,$id){
      $mysql = "UPDATE etudiants SET name=?,number=?,email=?,sexe = ?,filier=?,adress=? WHERE idEtudiant = ?;";
      $stmts = $this->connect()->prepare($mysql);

        if(!$stmts->execute(array($name, $number, $email, $sexe, $filier,$adress,$id)))
        {
           $stmts = null;
           header('location:../Update.php:error:stmtError');
           exit();
        }  

    }

    protected function checkEtudiant($name, $email){
      $mysql = "SELECT * FROM etudiants Where name = ? OR email = ?;";
      $stmts = $this->connect()->prepare($mysql);

      if(!$stmts->execute(array($name,$email)))
      {
         $stmts = null;
         header('location:../home.php?error=stmtError');
         exit();

        }
        $resultCheck = null;

        if($stmts->rowCount() > 0){
          $resultCheck = false;
        }else{
          $resultCheck = true;
        }

        return $resultCheck;

    }
}