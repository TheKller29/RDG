<?php
    // recuperation des variables
    $marques = $_REQUEST['marques'];

    // connexion à la base de données
    $host = 'mysql:host=localhost;dbname=rdg';
    $user = 'root';
    $pass = '';
    $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // Requete : SELECT
    $sql = "INSERT INTO marques (marques) VALUES ('".$marques."')";
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
    <h1>Ajouter une nouvelle Marques</h1>
    <p>L'élément à bien été ajouté</p>

    <p><br></p>
    <p><a href="formulaire-ajoutMarques.php">[Ajouter une autre marque]</a></p></br>
    <p><a href="GestionMateriels.php">[RETOUR]</a></p>
</body>
</html>