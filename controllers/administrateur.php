<?php
session_start();
require_once('models/classAdministrateur.php');

switch ($_GET['action']) {
    case 'addAdministrateur':
        if ((!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['password1'])&& !empty($_POST['password2'])) && (($_POST['password1'])==($_POST['password2']))){
            $administrateur = new Administrateur($_POST['nom'], $_POST['prenom'], $_POST['password1']);
            $administrateur->creationAdministrateur();
        }
        break;
    case 'editAdministrateur':
        if (isset($_GET['idSelection'])) {
            $administrateur = Administrateur($_GET['idSelection']);
            if ($administrateur) {
                $administrateur->editionAdministrateur($_POST['nom'], $_POST['prenom'], $_POST['password']);
            }
        }
        break;
    case 'delAdministrateur':
        if (isset($_GET['idSelection'])) {
            $administrateur = Administrateur($_GET['idSelection']);
            if ($administrateur) {
                $administrateur->suppressionAdministrateur();
            }
        }
        break;
    case 'majAdministrateur':
        if (isset($_GET['idSelection'])) {
            $administrateur = new Administrateur($_GET['idSelection']);
            if ($administrateur) {
                $administrateur->modificationAdministrateur($_POST['nom'], $_POST['prenom'], $_POST['password']);
            }
        }
        break;
}
?>
