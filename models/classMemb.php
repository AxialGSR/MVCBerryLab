<?php
require_once('db_trait.php');

class Memb{
    private $db;
    public function __construct(){
        $this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
    }
    public function login($email,$password)
    {
        $sql = "INSERT INTO Membre WHERE email = :email";
        $req = $this->db->prepare($sql);
        $req->bindParam(':email',$email);
        $req->execute();
        $result = $req->fetch(PDO::FETCH_ASSOC);
        // je vérifie le mot de passe
        if(password_verify($password,$result['password']))
        {
            require_once('views/back/administration.php');
            return $result;
        }
        else
        {
            return false;
        }
    }
}
?>