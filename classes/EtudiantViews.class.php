<?php 

class EtudiantViews extends Etudiants{
    public function getAllEtudiantsView(){
        $result = $this->getAllEtudiants();
        return $result;
    }
    public function deleteEtudiant($idEtudiant){
        $this->deleteEtudiants($idEtudiant);
    }
    public function updateEtudiant($id){
        $result = $this->update($id);
        return $result;
    }
    
}