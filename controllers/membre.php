<?php
session_start();
// Le fichier qui va traiter le CRUD pour le module users
require_once('models/classMembre.php');
switch($_GET['action'])
{
    case 'addMembre':
        // Création du commentaire
        
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']))
        {
            $Membre = new Membre($_GET['nom'], $_GET['prenom'], $_GET['email']);
            // J'appelle la méthode création
            $Membre->creationMembre($_POST['nom'],$_POST['prenom'],$_POST['email']);
        }
    break;
    case 'editMembre':
        // Je vais instancier l'objet membre avant de le modifier
        $membre = new Membre($_GET['idSelection']);
        if($membre)
        {
            $membre->editionMembre($_POST['$nom'],$_POST['$prenom'],$_POST['email'],$_POST['$idSelection']);

        }
    break;
    case 'delMembre':
        // Je vais instancier l'objet membre avant de le modifier
        $membre = new Membre($_GET['idSelection']);
        if($membre)
        {
            $membre->suppressionMembre($_POST['$nom'],$_POST['$prenom'],$_POST['email'],$_POST['$idSelection']);
        }    
    break;
    case 'majMembre':
        // Je vais instancier l'objet membre avant de le modifier
        $membre = new Membre($_GET['idselection']);
        if($membre)
        {
            $membre->modificationMembre($_POST['$nom'],$_POST['$prenom'],$_POST['email'],$_POST['$idSelection']);
        }    
    break;
}
?>