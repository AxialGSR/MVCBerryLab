<?php
session_start();
// Le fichier qui va traiter le CRUD pour le module users
require_once('models/classFormation.php');
switch($_GET['action'])
{
    case 'addFormation':
        // Création du commentaire
        
        if(!empty($_POST['formation']) && !empty($_POST['photo']) && !empty($_POST['description']))
        {
            $formation = new Formation($_GET['formation'], $_GET['photo'], $_GET['description']);
            // J'appelle la méthode création
            $formation->creationFormation($_POST['formation'],$_POST['photo'],$_POST['description']);
        }
    break;
    case 'editFormation':
        // Je vais instancier l'objet formation avant de le modifier
        $formation= new Formation($_GET['idSelection']);
        if($formation)
        {
            $formation->editionFormation($_POST['formation'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }
    break;
    case 'delFormation':
        // Je vais instancier l'objet formation avant de le modifier
        $formation = new Formation($_GET['idSelection']);
        if($formation)
        {
            $formation->suppressionFormation($_POST['formation'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }    
    break;
    case 'majFormation':
        // Je vais instancier l'objet formation avant de le modifier
        $formation = new Formation($_GET['idselection']);
        if($formation)
        {
            $formation->modificationFormation($_POST['formation'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }    
    break;
}
?>