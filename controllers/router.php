<?php
// Notre fichier route qui va gérer les affichages
// On va vérifier en POST ou GET
if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_GET['route']))
        $action = $_GET['route'];
    else
        $action = null;
        include('../public/src/inc/header.php');
        include('../public/src/inc/head.php');
    switch($action)
    {
        // switch sur les ecran du front
        case 'contact':
            require('../views/front/contact.php');
        break;
        case 'galerie':
            require('../views/front/galerie.php');
        break;
        case 'mentions':
            require('../views/front/mentions-legales.php');
        break;
        case 'service':
            require('../views/front/service.php');
        break;
        // switch sur les action du Front en creation
        case 'addMembre': 
            require('membre.php');
        break;
        // switch sur les action du front en edition
        case 'editFormation': 
            require('formation.php');
        break;
        case 'editOutil': 
            require('Outil.php');
        break;
        case 'editRealisation': 
            require('realisation.php');
        break;
        // switch sur les action du front en suppression
        case 'delMembre': 
            require('membre.php');
        break;
        // switch sur les actions du front en Modification
        case 'majMembre': 
            require('membre.php');
        break;
        // ecran d'acceuil
            default:
            require('../views/front/home.php');
        break;
    }    
}
?>