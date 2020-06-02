<?php
    // recuperation des variables
    $id = $_REQUEST['id'];

    // connexion à la base de données
    $host = 'mysql:host=localhost;dbname=rdg';
    $user = 'root';
    $pass = '';
    $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // Requete : SELECT
    $sql = "SELECT * FROM types WHERE id =".$id;
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
    <h1>Modifier un Type</h1>
    <form action="traitement-modifTypes.php?id=<?php echo $id; ?>" method="post">
        <p><input type="text" id="types" name="types" placeholder="types" value="<?php echo $liste['types']; ?>"></p>
        <p><input type="submit" value="modifier"></p>
    </form>

    <p><br></p>
    <p><a href="GestionMateriels.php">[RETOUR]</a></p>
</body>
</html>