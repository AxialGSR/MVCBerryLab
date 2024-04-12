<?php
require_once('db_trait.php');

class Formation
{
    use PDO;
    private $db;
    private $NomFormation;
    private $Photo;
    private $Description;

    public function __construct()
    {
        $this->db = $this->connexionBdd();
    }

    public function getNomFormation()
    {
        return $this->NomFormation;
    }

    public function setNomFormation($nomFormation)
    {
        $this->NomFormation = $nomFormation;

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

    public function creationFormation($formation, $photo, $description)
    {
        $stmt = $this->db->prepare("INSERT INTO Formation(libel_formation, photo_formation, description_formation) VALUES (:libel_formation, :photo_formation, :description_formation)");
        $stmt->bindParam(':libel_formation', $formation);
        $stmt->bindParam(':photo_formation', $photo);
        $stmt->bindParam(':description_formation', $description);
        $stmt->execute();
    }

    public function suppressionFormation($idSelectionFormation)
    {
        $stmt = $this->db->prepare("DELETE FROM Formation WHERE id_formation = :id_formation");
        $stmt->bindParam(':id_formation', $idSelectionFormation);
        $stmt->execute();
    }

    public function modificationFormation($formation, $photo, $description, $idSelectionFormation)
    {
        $stmt = $this->db->prepare("UPDATE Formation SET libel_formation = :libel_formation, photo_formation = :photo_formation, description_formation = :description_formation WHERE id_formation = :id_formation");
        $stmt->bindParam(':libel_formation', $formation);
        $stmt->bindParam(':photo_formation', $photo);
        $stmt->bindParam(':description_formation', $description);
        $stmt->bindParam(':id_formation', $idSelectionFormation);
        $stmt->execute();
    }

    public function editionFormation($idSelectionFormation)
    {
        $stmt = $this->db->prepare("SELECT libel_formation, photo_formation, description_formation FROM Formation WHERE id_formation = :id_formation");
        $stmt->bindParam(':id_formation', $idSelectionFormation);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
