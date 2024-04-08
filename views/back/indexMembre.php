<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Membres</title>
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
    <h2>Liste des Formations</h2>
    <?php if ($formations) {
        foreach ($formations as $key => $element) {
            echo '<div class="ligne">';
            echo '<h2>' . htmlspecialchars($element['nom']) .htmlspecialchars($element['prenom']) . '</h2>'; 
            echo '<p>' . htmlspecialchars($element['email']) . '</p>'; 
            echo '<p><textarea rows="4" cols="50">' . htmlspecialchars($element['texte']) . '</textarea></p>';
            echo '<a href="indexAdmin.php?route=editFormation&id=' . htmlspecialchars($key) . '">Modifier</a>';
            echo '<a href="indexAdmin.php?route=delFormation&id=' . htmlspecialchars($key) . '">Supprimer</a>';
            echo '</div>';
        }
    } else {
        echo '<p>Aucun Membre à afficher.</p>';
    }
    ?>
    <a href="indexAdmin.php?route=addFormation">Ajouter un membre</a>
</body>
</html>
