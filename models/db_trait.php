<?php
// variable de connection globale //
require_once('../../config.php');
trait PDO {
    public function connexionBdd()
    {   
        $dsn = 'mysql:dbname=FabLab18'.DB_NAME.';host='.DB_HOST;
        $dbh = new PDO($dsn,DB_USER,DB_PASSWORD);
        return $dbh;
    }
}
?>