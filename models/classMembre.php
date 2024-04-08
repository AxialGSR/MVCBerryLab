<?php
require_once('../config.php');

class Membre
{
    use PDO;
    private $db;
    private $NomMembre;
    private $PrenomMembre;
    private $Email;

    public function __construct()
    {
        $this->db = connexionBdd();
    }

    public function getNomMembre()
    {
        return $this->NomMembre;
    }

    public function setNomMembre($nomMembre)
    {
        $this->NomMembre = $nomMembre;

        return $this;
    }

    public function getPrenomMembre()
    {
        return $this->PrenomMembre;
    }

    public function setPrenomMembre($prenomMembre)
    {
        $this->PrenomMembre = $prenomMembre;

        return $this;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    public function creationMembre($nomMembre, $prenomMembre, $email)
    {
        $stmt = $this->db->prepare("INSERT INTO Membre(nom_membre, prenom_membre, email) VALUES (:nom_membre, :prenom_membre, :email)");
        $stmt->bindParam(':nom_membre', $nomMembre);
        $stmt->bindParam(':prenom_membre', $prenomMembre);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }

    public function suppressionMembre($idSelection)
    {
        $stmt = $this->db->prepare("DELETE FROM Membre WHERE id_Membre = :id_membre");
        $stmt->bindParam(':id_membre', $idSelection);
        $stmt->execute();
    }

    public function modificationMembre($nomMembre, $prenomMembre, $email, $idSelection)
    {
        $stmt = $this->db->prepare("UPDATE Membre SET nom_membre = :nom_membre, prenom_membre = :prenom_membre, email = :email WHERE id_Membre = :id_membre");
        $stmt->bindParam(':nom_membre', $nomMembre);
        $stmt->bindParam(':prenom_membre', $prenomMembre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id_membre', $idSelection);
        $stmt->execute();
    }

    public function editionMembre($idSelection)
    {
        $stmt = $this->db->prepare("SELECT nom_membre, prenom_membre, email FROM Membre WHERE id_Membre = :id_membre");
        $stmt->bindParam(':id_membre', $idSelection);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
