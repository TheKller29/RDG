<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <h1>Gestion Clients</h1>

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
        
    <p><a href="formulaire-ajoutClient.php">+ Ajouter un client</a></p>
    <p><a href="ModifClients.php">+ Modifier un client</a></p>   
    <p><a href="SupprClient.php">+ Supprimer un client</a></p>
    <p><a href="index.php">Accueil</a></p>
</body>
</html>