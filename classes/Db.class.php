<?php
class Db{

    private $host = 'localhost';
    private $user = 'root';
    private $password ='iltireh2023@';
    private $db_name = 'academic_arabe_registers';

    protected function connect(){
        $dns = 'mysql:host=' . $this->host.';dbname=' . $this->db_name .';';
        $pdo = new PDO($dns, $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}