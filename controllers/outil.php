<?php
session_start();
// Le fichier qui va traiter le CRUD pour le module users
require_once('models/class/classOutil.php');
switch($_GET['action'])
{
    case 'addOutil':
        // Création du commentaire
        
        if(!empty($_POST['outil']) && !empty($_POST['photo']) && !empty($_POST['description']))
        {
            $outil = new Outil($_GET['outil'], $_GET['photo'], $_GET['description']);
            // J'appelle la méthode création
            $outil->creationOutil($_POST['outil'],$_POST['photo'],$_POST['description']);
        }
    break;
    case 'editOutil':
        // Je vais instancier l'objet outil avant de le modifier
        $outil= new Outil($_GET['idSelection']);
        if($outil)
        {
            // J'appelle la méthode edition
            $outil->editionOutil($_POST['outil'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }
    break;
    case 'delOutil':
        // Je vais instancier l'objet outil avant de le modifier
        $outil = new Outil($_GET['idSelection']);
        if($outil)
        {
             // J'appelle la méthode suppression
            $outil->suppressionOutil($_POST['outil'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }    
    break;
    case 'majOutil':
        // Je vais instancier l'objet outil avant de le modifier
        $outil = new Outil($_GET['idselection']);
        if($outil)
        {
          // J'appelle la méthode modifiction  
            $Outil->modificationOutil($_POST['outil'],$_POST['photo'],$_POST['description'],$_POST['$idSelection']);
        }    
    break;
}
?>