<?php
    // recuperation des variables
    $id = $_REQUEST['id'];
    $panne = $_REQUEST['panne'];
    $nom = $_REQUEST['nom'];

    // connexion à la base de données
    $host = 'mysql:host=localhost;dbname=rdg';
    $user = 'root';
    $pass = '';
    $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // Requete : SELECT
    $sql = "UPDATE pannes SET panne = '".$panne."', nom = '".$nom."' WHERE id=".$id;
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
    <h1>Modifier un panne</h1>
    <p>L'élément a bien été modifié</p>

    <p><br></p>
    <p><a href="GestionPannes.php">[RETOUR]</a></p>
</body>
</html>