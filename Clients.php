<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <h1>Liste des clients</h1>

    <?php
        // connexion à la base de données
        $host = 'mysql:host=localhost;dbname=rdg';
        $user = 'root';
        $pass = '';
        $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        // Requete : SELECT
        $sql = "SELECT * FROM clients ORDER BY nom,prenom";
        $resultats = $DB->query($sql);
    ?>

    <select> 
    <?php
    while ($liste = $resultats->fetch()) {
        echo "<option <p><strong>".$liste['nom']." ".$liste['prenom']."</strong></option>";
    }
    ?>
    </select>
    <?php
    echo "<a href='formulaire-modifClient.php?id=".$liste['id']."'>modifier</a> - <a href='traitement-supprimerClient.php?id=".$liste['id']."'>supprimer</a></p>";
    ?>
        
    <p><a href="formulaire-ajoutClient.php">+ Ajouter un client</a></p>
    <p><a href="index.php">Accueil</a></p>
</body>
</html>