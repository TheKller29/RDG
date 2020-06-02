<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <h1>Liste des pannes</h1>

    <?php

        // connexion à la base de données
        $host = 'mysql:host=localhost;dbname=rdg';
        $user = 'root';
        $pass = '';
        $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        // Requete : SELECT
        $sql = "SELECT * FROM clients ORDER BY nom,prenom";
        $resultatsClients = $DB->query($sql);

        // Requete : SELECT
        $sql = "SELECT * FROM pannes ORDER BY id,panne,nom";
        $resultatsPannes = $DB->query($sql);
    ?>

    <select>
    <option>--Choisir--</option>
    <?php
    while ($resultats = $resultatsPannes->fetch()){
        echo '<option value="'.$resultats['nom'].'">'.$resultats['nom'].'</option>';
    }
    ?>
    </select>

    <?php
    echo "<a href='formulaire-modifPanne.php?id=".$liste['id']."'>modifier</a> - <a href='traitement-supprimerPanne.php?id=".$liste['id']."'>supprimer</a></p>";
    ?>
        
    <p><a href="formulaire-ajoutPanne.php">+ Ajouter un panne</a></p>
    <p><a href="index.php">Accueil</a></p>
</body>
</html>