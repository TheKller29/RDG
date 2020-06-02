<?php
    // recuperation des variables
    $id = $_REQUEST['id'];

    // connexion à la base de données
    $host = 'mysql:host=localhost;dbname=rdg';
    $user = 'root';
    $pass = '';
    $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    // Requete : SELECT
    $sql = "SELECT * FROM clients WHERE id =".$id;
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
    <form action="traitement-modifClient.php?id=<?php echo $id; ?>" method="post">
        <p><input type="text" id="nom" name="nom" placeholder="nom" value="<?php echo $liste['nom']; ?>"></p>
        <p><input type="text" id="prenom" name="prenom" placeholder="prenom" value="<?php echo $liste['prenom']; ?>"></p>
        <p><input type="texte" id="civilité" name="civilité" placeholder="civilité" value="<?php echo $liste['civilité']; ?>"></p>
        <p><input type="varchar(100)" id="mail" name="mail" placeholder="mail" value="<?php echo $liste['mail']; ?>"></p>
        <p><input type="int(100)" id="tel" name="tel" placeholder="tel" value="<?php echo $liste['tel']; ?>"></p>
        <p><input type="int(100)" id="tel2" name="tel2" placeholder="tel2" value="<?php echo $liste['tel2']; ?>"></p>
        <p><input type="text" id="adresse" name="adresse" placeholder="adresse" value="<?php echo $liste['adresse']; ?>"></p>
        <p><input type="int(11)" id="postal" name="postal" placeholder="postal" value="<?php echo $liste['postal']; ?>"></p>
        <p><input type="submit" value="modifier"></p>
    </form>

    <p><br></p>
    <p><a href="GestionClients.php">[RETOUR]</a></p>
</body>
</html>