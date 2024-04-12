<?php
// Pour générer un token
function setToken()
{
    if($_COOKIE['token'] != 1)
    {
        $caracteres = 'azertyuiopqsdfghjklmwxcvbn1234567890AZERTYUIOPQSDFGHJKLMWXCVBN';
        $motdepasse = '';
        for($i=0;$i<25;$i++)
        {
            $motdepasse.= $caracteres[rand(0,strlen($caracteres)-1)]; 
        }
        $_SESSION['token'] = $motdepasse;
        setcookie('token',1,(time()+60));
        return $motdepasse;
    }
    else
    {
        return $_SESSION['token'];
    } 
}
function getToken()
{
    if($_GET['token'] == $_SESSION['token'])
        return true;
    else
        return false;
}
?>