<?php
    // recuperation des variables
    $id = $_REQUEST['id'];

    // connexion à la base de données
    $host = 'mysql:host=localhost;dbname=rdg';
    $user = 'root';
    $pass = '';
    $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // Requete : SELECT
    $sql = "DELETE FROM clients WHERE id =".$id;
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
    <h1>Supprimer un client</h1>
    <p>L'élément a bien été supprimé</p>

    <p><br></p>
    <p><a href="GestionClients.php">[RETOUR]</a></p>
</body>
</html>