<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>
</head>
<body>
    <h2>Bonjour <?=$_SESSION['prenom']; ?></h2>
    <p>Vous êtes bien connecté</p>
    <a href="index.php?action=logout">Se déconnecter</a>
</body>
</html>