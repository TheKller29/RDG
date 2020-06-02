<?php
    // recuperation des variables
    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $civilité = $_REQUEST['civilité'];
    $mail = $_REQUEST['mail'];
    $tel = $_REQUEST['tel'];
    $tel2 = $_REQUEST['tel2'];
    $adresse = $_REQUEST['adresse'];
    $postal = $_REQUEST['postal'];

    // connexion à la base de données
    $host = 'mysql:host=localhost;dbname=rdg';
    $user = 'root';
    $pass = '';
    $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // Requete : SELECT
    $sql = "INSERT INTO clients (nom,prenom,civilité,mail,tel,tel2,adresse,postal) VALUES ('".$nom."','".$prenom."','".$civilité."','".$mail."','".$tel."','".$tel2."','".$adresse."','".$postal."')";
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
    <h1>Ajouter un nouveau client</h1>
    <p>L'élément à bien été ajouté</p>

    <p><br></p>
    <p><a href="formulaire-ajoutClient.php">[Ajouter un autre client]</a></p></br>
    <p><a href="GestionClients.php">[RETOUR]</a></p>
</body>
</html>