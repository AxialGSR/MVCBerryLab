<?php
require_once('db_trait.php');

class Outil
{
    use PDO;
    private $db;
    private $NomOutil;
    private $Photo;
    private $Description;

    public function __construct()
    {
        $this->db = $this->connexionBdd(); // Assuming connexionBdd() function is in db_trait.php to get PDO connection
    }

    public function getNomOutil()
    {
        return $this->NomOutil;
    }

    public function setNomOutil($nomOutil)
    {
        $this->NomOutil = $nomOutil;

        return $this;
    }

    public function getPhoto()
    {
        return $this->Photo;
    }

    public function setPhoto($photo)
    {
        $this->Photo = $photo;

        return $this;
    }

    public function getDescription()
    {
        return $this->Description;
    }

    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    public function creationOutil($nomOutil, $photo, $description)
    {
        $stmt = $this->db->prepare("INSERT INTO Outil(libel_outil, photo_outil, description_outil) VALUES (:libel_outil, :photo_outil, :description_outil)");
        $stmt->bindParam(':libel_outil', $nomOutil);
        $stmt->bindParam(':photo_outil', $photo);
        $stmt->bindParam(':description_outil', $description);
        $stmt->execute();
    }

    public function suppressionOutil($idSelection)
    {
        $stmt = $this->db->prepare("DELETE FROM Outil WHERE id_outil = :id_outil");
        $stmt->bindParam(':id_outil', $idSelection);
        $stmt->execute();
    }

    public function modificationOutil($nomOutil, $photo, $description, $idSelection)
    {
        $stmt = $this->db->prepare("UPDATE Outil SET libel_outil = :libel_outil, photo_outil = :photo_outil, description_outil = :description_outil WHERE id_outil = :id_outil");
        $stmt->bindParam(':libel_outil', $nomOutil);
        $stmt->bindParam(':photo_outil', $photo);
        $stmt->bindParam(':description_outil', $description);
        $stmt->bindParam(':id_outil', $idSelection);
        $stmt->execute();
    }

    public function editionOutil($idSelection)
    {
        $stmt = $this->db->prepare("SELECT libel_outil, photo_outil, description_outil FROM Outil WHERE id_outil = :id_outil");
        $stmt->bindParam(':id_outil', $idSelection);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
