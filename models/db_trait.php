<?php
// variable de connection globale //
trait PDO{
    public function connexionBdd($hote,$user,$password,$db)
    {   
        $user = 'root';
        $password = '';
        $dsn = 'mysql:dbname='.$db.';host='.$hote;
        $dbh = new PDO($dsn,$user,$password);
        return $dbh;
    }
}
?>