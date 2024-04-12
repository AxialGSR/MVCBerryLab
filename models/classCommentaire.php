<?php
require_once('db_trait.php');

class Commentaire
{
    use PDO;
    private $db;
    private $Commentaire;

    public function __construct()
    {
        $this->db = $this->connexionBdd();
    }

    public function getCommentaire()
    {
        return $this->Commentaire;
    }

    public function setCommentaire($Commentaire)
    {
        $this->Commentaire = $Commentaire;

        return $this;
    }

    public function creationCommentaire($commentaire)
    {
        $stmt = $this->db->prepare("INSERT INTO Commentaire(commentaire) VALUES (:commentaire)");
        $stmt->bindParam(':commentaire', $commentaire);
        $stmt->execute();
    }

    public function suppressionCommentaire($idSelection)
    {
        $stmt = $this->db->prepare("DELETE FROM Commentaire WHERE id_commentaire = :id_commentaire");
        $stmt->bindParam(':id_commentaire', $idSelection);
        $stmt->execute();
    }

    public function modificationCommentaire($commentaire, $idSelection)
    {
        $stmt = $this->db->prepare("UPDATE Commentaire SET commentaire = :commentaire WHERE id_commentaire = :id_commentaire");
        $stmt->bindParam(':commentaire', $commentaire);
        $stmt->bindParam(':id_commentaire', $idSelection);
        $stmt->execute();
    }

    public function editionCommentaire($idSelection)
    {
        $stmt = $this->db->prepare("SELECT commentaire FROM Commentaire WHERE id_commentaire = :id_commentaire");
        $stmt->bindParam(':id_commentaire', $idSelection);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
