<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <h1>Liste des Types</h1>

    <?php
        // connexion à la base de données
        $host = 'mysql:host=localhost;dbname=rdg';
        $user = 'root';
        $pass = '';
        $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        // Requete : SELECT
        $sql = "SELECT * FROM types ORDER BY types";
        $resultats = $DB->query($sql);
    ?>
        
    <?php
    while ($liste = $resultats->fetch()) {
        echo "<p><strong>".$liste['types']." </strong> [<a href='formulaire-modifTypes.php?id=".$liste['id']."'>modifier</a> - <a href='traitement-supprimerTypes.php?id=".$liste['id']."'>supprimer</a>]</p>";
    }
    ?>

    <p><a href="formulaire-ajoutTypes.php">+ Ajouter un Types</a></p>
    
    <p><a href="GestionMateriels.php">Retour Gestion Matériels</a></p>
    <p><a href="index.php">Accueil</a></p>
</body>
</html>