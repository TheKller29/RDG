<?php
    // recuperation des variables
    $id = $_REQUEST['id'];

    // connexion à la base de données
    $host = 'mysql:host=localhost;dbname=rdg';
    $user = 'root';
    $pass = '';
    $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // Requete : SELECT
    $sql = "SELECT * FROM techniciens WHERE id =".$id;
    $resultats = $DB->query($sql);
    $liste = $resultats->fetch();

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
    <h1>Modifier un client</h1>
    <form action="traitement-modifTechniciens.php?id=<?php echo $id; ?>" method="post">
        <p><input type="text" id="nom" name="nom" placeholder="nom" value="<?php echo $liste['nom']; ?>"></p>
        <p><input type="text" id="prenom" name="prenom" placeholder="prenom" value="<?php echo $liste['prenom']; ?>"></p>
        <p><input type="submit" value="modifier"></p>
    </form>

    <p><br></p>
    <p><a href="Techniciens.php">[RETOUR]</a></p>
</body>
</html>