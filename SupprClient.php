<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <h1>Supprimer un clients</h1>

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
        
    <?php
    while ($liste = $resultats->fetch()) {
        echo "<p><strong>".$liste['nom']." ".$liste['prenom']."</strong> [<a href='traitement-supprimerClient.php?id=".$liste['id']."'>supprimer</a>]</p>";
    }
    ?>
        
    <p><a href="GestionClients.php">Retour Gestion Clients</a></p>
    <p><a href="index.php">Accueil</a></p>
</body>
</html>