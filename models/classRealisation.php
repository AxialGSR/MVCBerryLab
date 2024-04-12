<?php
require_once('db_trait.php');


class Realisation
{
    use PDO;
    private $db;
    private $NomRealisation;
    private $Photo;
    private $Description;

    public function __construct()
    {
        $this->db = $this->connexionBdd(); // Assuming connexionBdd() function is in db_trait.php to get PDO connection
    }

    public function getNomRealisation()
    {
        return $this->NomRealisation;
    }

    public function setNomRealisation($nomRealisation)
    {
        $this->NomRealisation = $nomRealisation;

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

    public function creationRealisation($nomRealisation, $photo, $description)
    {
        $stmt = $this->db->prepare("INSERT INTO Realisation(libel_realisation, photo_realisation, description_realisation) VALUES (:libel_realisation, :photo_realisation, :description_realisation)");
        $stmt->bindParam(':libel_realisation', $nomRealisation);
        $stmt->bindParam(':photo_realisation', $photo);
        $stmt->bindParam(':description_realisation', $description);
        $stmt->execute();
    }

    public function suppressionRealisation($idSelectionRealisation)
    {
        $stmt = $this->db->prepare("DELETE FROM Realisation WHERE id_realisation = :id_realisation");
        $stmt->bindParam(':id_realisation', $idSelectionRealisation);
        $stmt->execute();
    }

    public function modificationRealisation($nomRealisation, $photo, $description, $idSelectionRealisation)
    {
        $stmt = $this->db->prepare("UPDATE Realisation SET libel_realisation = :libel_realisation, photo_realisation = :photo_realisation, description_realisation = :description_realisation WHERE id_realisation = :id_realisation");
        $stmt->bindParam(':libel_realisation', $nomRealisation);
        $stmt->bindParam(':photo_realisation', $photo);
        $stmt->bindParam(':description_realisation', $description);
        $stmt->bindParam(':id_realisation', $idSelectionRealisation);
        $stmt->execute();
    }

    public function editionRealisation($idSelectionRealisation)
    {
        $stmt = $this->db->prepare("SELECT libel_realisation, photo_realisation, description_realisation FROM Realisation WHERE id_realisation = :id_realisation");
        $stmt->bindParam(':id_realisation', $idSelectionRealisation);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
