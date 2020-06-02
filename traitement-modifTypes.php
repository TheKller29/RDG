<?php
    // recuperation des variables
    $id = $_REQUEST['id'];
    $types = $_REQUEST['types'];

    // connexion à la base de données
    $host = 'mysql:host=localhost;dbname=rdg';
    $user = 'root';
    $pass = '';
    $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // Requete : SELECT
    $sql = "UPDATE types SET types = '".$types."' WHERE id=".$id;
    $resultats = $DB->query($sql);

?>





<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <h1>Modifier un Types</h1>
    <p>L'élément a bien été modifié</p>

    <p><br></p>
    <p><a href="GestionMateriels.php">[RETOUR]</a></p>
</body>
</html>