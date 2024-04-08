<?php
// Notre fichier route qui va gérer les affichages
// On va vérifier en POST ou GET
if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_GET['route']))
        $action = $_GET['route'];
    else
        $action = null;
    switch($action)
    {
        // switch sur les ecran de connexion
        case 'administrateur':
            require('../../views/back/indexAdministrateur.php');
        break;
        case 'formation':
            require('../../views/back/indexFormation.php');
        break;
        case 'outil':
            require('../../views/back/indexOutil.php');
        break;
        case 'realisation':
            require('../../views/back/indexRealisation.php');
        break;
        case 'membre':
            require('../../views/back/indexMembre.php');
        break;
        // switch sur les action du Back en creation
        case 'create': 
            require('../../views/back/administreurCreat.php');
        break;
        // switch sur les action du  en edition
        case 'editAdministrateur': 
            $administrateurs =[];
            $idSelection=0;
            foreach ($administrateurs as $idSelection){
                $administrateur = new Administrateur($_GET['idSelection']);
                if ($administrateur) {
                    $administrateur->editionAdministrateur($_POST['nom'], $_POST['prenom'], $_POST['password']);
                }
            }
            require('../../views/back/indexAdministrateur.php');
        break;
        case 'editFormation': 
            require('../../views/back/indexFormation.php');
        break;
        case 'editMembre': 
            require('../../views/back/indexMembre.php');
        break;
        case 'editOutil': 
            require('../../views/back/indexOutil.php');
        break;
        case 'editRealisation': 
            require('../../views/back/indexRealisation.php');
        break;
        // switch sur les action du Back en suppression
        case 'delAdministrateur': 
            require('administreur.php');
        break;
        case 'delFormation': 
            require('formation.php');
        break;
        case 'delMembre': 
            require('membre.php');
        break;
        case 'delOutil': 
            require('Outil.php');
        break;
        case 'delRealisation': 
            require('realisation.php');
        break;
        // switch sur les action du Back en Modification
        case 'majAdministrateur': 
            require('administreur.php');
        break;
        case 'majFormation': 
            require('formation.php');
        break;
        case 'majMembre': 
            require('membre.php');
        break;
        case 'majOutil': 
            require('Outil.php');
        break;
        case 'Realisation': 
            require('realisation.php');
        break;
        // ecran d'acceuil admin
            default:
            require('../../views/back/login.php');
        break;
    }    
}
?>