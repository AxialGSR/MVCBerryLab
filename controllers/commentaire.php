<?php
session_start();
// Le fichier qui va traiter le CRUD pour le module users
require_once('models/classCommentaire.php');
switch($_GET['action'])
{
    case 'addCommentaire':
        // Création du commentaire
        if(!empty($_POST['commentaire']))
        {
            $commentaire = new Commentaire($_GET['commentaire']);
            // J'appelle la méthode
            $commentaire->creationCommentaire($_POST['commentaire']);
        }
    break;
    case 'editCommentaire':
        // Je vais instancier l'objet commentaire avant de le modifier
        $commentaire = new Commentaire($_GET['idSelection']);
        if($commentaire)
        {
            $commentaire->editionCommentaire($_POST['$commentaire'],$_POST['$idSelection']);

        }
    break;
    case 'delCommentaire':
        // Je vais instancier l'objet commentaire avant de le modifier
        $commentaire = new Commentaire($_GET['idSelection']);
        if($commentaire)
        {
            $commentaire->suppressionCommentaire($_POST['$commentaire'],$_POST['$idSelection']);
        }    
    break;
    case 'majCommentaire':
        // Je vais instancier l'objet commentaire avant de le modifier
        $commentaire = new Commentaire($_GET['idselection']);
        if($commentaire)
        {
            $commentaire->modificationCommentaire($_POST['$commentaire'],$_POST['$idSelection']);
        }    
    break;
}
?>