<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Administrateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            text-align: center;
        }
        .ligne {
            border: 1px solid #ccc;
            margin: 10px 0;
            padding: 10px;
        }
        .ligne h2 {
            margin: 0 0 5px;
        }
        .ligne p {
            margin: 0;
        }
        .ligne a {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h2>Liste des administrateurs</h2>
    <?php if ($administrateurs) {
        foreach ($administrateurs as $key => $element) {
            echo '<div class="ligne">';
            echo '<h2>' . htmlspecialchars($element['nom']) .htmlspecialchars($element['prenom']) . '</h2>'; 
            echo '<p>' . htmlspecialchars($element['password']) . '</p>'; 
            echo '<a href="indexAdmin.php?route=editAdministrateur&id=' . htmlspecialchars($key) . '">Modifier</a>';
            echo '<a href="indexAdmin.php?route=delAdministrateur&id=' . htmlspecialchars($key) . '">Supprimer</a>';
            echo '</div>';
        }
    } else {
        echo '<p>Aucun Administrateur à afficher.</p>';
    }
    ?>
    <a href="indexAdmin.php?route=addAdministrateur">Ajouter un Administrateur</a>
</body>
</html>
