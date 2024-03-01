<?php 

class EtudiantCtr extends Etudiants{
    
    private $name;
    private $number;
    private $email;
    private $sexe;
    private $filier;
    private $adress;
    private $id;

    public function __construct($name, $number, $email, $sexe, $filier,$adress,$id){
        $this->name = $name;
        $this->number = $number;
        $this->email = $email;
        $this->sexe = $sexe;
        $this->filier = $filier;
        $this->adress =$adress;
        $this->id = $id;
    }   

    public function save(){
        if($this->isEmptyValue() == false){
            header('location: ../home.php?error=EmtyValue');
            exit();
        }

        if($this->checkTakenEtudiants() == false){
            header('location: ../home.php?error=EtudiantsExist!');
            exit();
        }
        $this->setEtudiant($this->name,$this->number,$this->email,$this->sexe,$this->filier,$this->adress);


    }

    public function upadateCtr(){
        $this->updateSave($this->name,$this->number,$this->email,$this->sexe,$this->filier,$this->adress,$this->id);
    }
   

    private function isEmptyValue(){
        if(empty($this->email)||empty($this->sexe)||
        empty($this->filier)||empty($this->name) || empty($this->adress) || 
        empty($this->number)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function checkTakenEtudiants(){
        if(!$this->checkEtudiant($this->name,$this->email)){
            $result = false;
        }else{
            $result = true;
        }

        return $result;
    }
}