<?php
    // recuperation des variables
    $nom = $_REQUEST['nom'];
    $id_client = $_REQUEST['id_client'];
    $panne = $_REQUEST['panne'];

    // connexion à la base de données
    $host = 'mysql:host=localhost;dbname=rdg';
    $user = 'root';
    $pass = '';
    $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // Requete : SELECT
    $sql = "INSERT INTO sav (nom,id_client,panne) VALUES ('".$nom."','".$id_client."','".$panne."')";
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
    <h1>Ajouter un nouveau SAV</h1>
    <p>L'élément à bien été ajouté</p>

    <p><br></p>
    <p><a href="formulaire-ajoutSAV.php">[Ajouter un autre SAV]</a></p></br>
    <p><a href="GestionSAV.php">[RETOUR]</a></p>
</body>
</html>