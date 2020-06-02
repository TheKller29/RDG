<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <?php
        // connexion à la base de données
        $host = 'mysql:host=localhost;dbname=rdg';
        $user = 'root';
        $pass = '';
        $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    ?>
    <h1>Ajouter un nouveau client</h1>
    <form action="traitement-ajoutClient.php" method="post" required>
        <p><input type="text" id="prenom" name="prenom" placeholder="prenom" required></p>
        <p><input type="text" id="nom" name="nom" placeholder="nom" required></p>
        <p><input type="text" id="civilité" name="civilité" placeholder="civilité" required></p>
        <p><input type="varchar(100)" id="mail" name="mail" placeholder="mail" required></p>
        <p><input type="int(100)" id="tel" name="tel" placeholder="tel" required></p>
        <p><input type="int(100)" id="tel2" name="tel2" placeholder="tel2" required></p>
        <p><input type="text" id="adresse" name="adresse" placeholder="adresse" required></p>
        <p><input type="int(11)" id="postal" name="postal" placeholder="postal" required></p>
        <p><input type="submit" value="ajouter"></p>
    </form>

    <p><br></p>
    <p><a href="GestionClients.php">[RETOUR CLIENT]</a></p>
    <p><a href="index.php">[RETOUR ACCEUIL]</a></p>
</body>
</html>

<!-- code postal menu-->