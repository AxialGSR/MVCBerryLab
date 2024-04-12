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
        // switch sur les action du en edition
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
            require_once('functions.php');
            require('../../views/back/login.php');
           require_once('../../models/db_trait.php');
            if(!getToken())
                {
                if(isset($_POST['submit']))
                {
                    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['password']))
                    {
                    $sql = $dbh->prepare('SELECT * FROM Administrateur WHERE nom_admin = :nom AND prenom_admin = :prenom LIMIT 1');
                    $sql->bindValue(':nom',$_POST['email'],PDO::PARAM_STR);
                    $sql->execute();
                    //vérification avec RowCount si je n'ai pas de résultat
                        if($sql->rowCount() == 0)
                            {
                            echo 'nom prenom introuvable';
                        exit;
                        }
                         // retourne la ligne de ma requête sous un tableau associatif
                        $resultat = $sql->fetch(PDO::FETCH_ASSOC);
                        // vérification si le mot de passe est OK
                        if(password_verify($_POST['password'],$resultat['password_utilisateur']))
                             {
                                setcookie('ID',$resultat['ID_utilisateur'],(time()+3600));
                                setcookie('passwd',$resultat['password_utilisateur'],(time()+3600));
                                $infos_cookie = array(
                                'ID'        => $resultat['ID_admin'],
                                'passwd'    =>$resultat['password']);
                                setcookie('user',serialize($infos_cookie),(time()+3600));    
                                echo 'Bonjour '.$resultat['nom_admin'].' '.$resultat['prenom_utilisateur'];
                                echo '<br>';
                                // génération du token
                                $token = setToken();
                                echo '<a href="index.php?token='.$token.'">Se rendre au TDB</a>';
                                }
                            else
                                {
                             echo 'le mot de passe ne correspond pas';
                        }

                     }
                }
            exit;
            }
            else
            {
                $token = setToken();
            }
            /// vérification présences cookies
            if($_COOKIE['nom'] && $_COOKIE['prenom'] && $_COOKIE['password'])
            {
            // Pour récupérer les infos du cookie user (serialisé)
                $cookie_infos = unserialize($_COOKIE['user']);
                //var_dump($cookie_infos);
                $sql = $dbh->prepare('SELECT * FROM  Administrateur WHERE nom_admin=:nom AND prenom_admin =: prenom LIMIT 1');
                $sql->bindValue(':nom_admin',$_COOKIE['nom'],PDO::PARAM_STR);
                $sql->bindValue(':prenom_admin',$_COOKIE['prenom'],PDO::PARAM_STR);
                $sql->execute();
                if($sql->rowCount() == 1)
                {
                $resultat = $sql->fetch(PDO::FETCH_ASSOC);
                if(password_verify($_COOKIE['password'],$resultat['admin_password'])){

                $_SESSION['connect'] = 1;
                require('../../views/back/indexFormation.php');
                echo 'Bienvenue '.$resultat['prenom_admin'];
                }
                break;
                }  
         }
    }
}
?>