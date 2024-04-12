<?php
require_once('db_trait.php');

/**
 * @author Gilles SEYER <gilles.syr@hotmail.fr>
 * @copyright CCI Bourges
 * Model admin pour gérer nos administrateurs
 * @property $db pour la connexion à la BDD en PDO
 */
class Administrateur
{
    use PDO;
    private $db;
    private $NomAdministrateur;
    private $PrenomAdministrateur;
    private $MotPass;

    public function __construct()
    {
        $this->db = $this->connexionBdd(); // Assuming connexionBdd() function is in db_trait.php to get PDO connection
    }

    public function getNomAdministrateur()
    {
        return $this->NomAdministrateur;
    }

    public function setNomAdministrateur($nomAdministrateur)
    {
        $this->NomAdministrateur = $nomAdministrateur;

        return $this;
    }

    public function getPrenomAdministrateur()
    {
        return $this->PrenomAdministrateur;
    }

    public function setPrenomAdministrateur($prenomAdministrateur)
    {
        $this->PrenomAdministrateur = $prenomAdministrateur;

        return $this;
    }

    public function getMotPass()
    {
        return $this->MotPass;
    }

    public function setMotPass($motPass)
    {
        $this->MotPass = password_hash($motPass, PASSWORD_DEFAULT); // Hash the password before storing it in the database

        return $this;
    }

    public function creationAdministrateur($nomAdministrateur, $prenomAdministrateur, $motPass)
    {
        $message = "";
        $stmt = $this->db->prepare("INSERT INTO Administrateur(nom_admin, prenom_admin, password) VALUES (:nom_admin, :prenom_admin, :password)");
        $stmt->bindParam(':nom_admin', $nomAdministrateur);
        $stmt->bindParam(':prenom_admin', $prenomAdministrateur);
        $stmt->bindParam(':password', $motPass);
        $resultat = $stmt->execute();
        
    }

    public function suppressionAdministrateur($idSelection)
    {
        $stmt = $this->db->prepare("DELETE FROM Administrateur WHERE id_admin = :id_admin");
        $stmt->bindParam(':id_admin', $idSelection);
        $stmt->execute();
    }

    public function modificationAdministrateur($nomAdministrateur, $prenomAdministrateur, $motPass, $idSelection)
    {
        $stmt = $this->db->prepare("UPDATE Administrateur SET nom_admin = :nom_admin, prenom_admin = :prenom_admin, password = :password WHERE id_admin = :id_admin");
        $stmt->bindParam(':nom_admin', $nomAdministrateur);
        $stmt->bindParam(':prenom_admin', $prenomAdministrateur);
        $stmt->bindParam(':password', $motPass);
        $stmt->bindParam(':id_admin', $idSelection);
        $stmt->execute();
    }

    public function editionAdministrateur($idSelection)
    {
        $stmt = $this->db->prepare("SELECT nom_admin, prenom_admin, password FROM Administrateur WHERE id_admin = :id_admin");
        $stmt->bindParam(':id_admin', $idSelection);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
