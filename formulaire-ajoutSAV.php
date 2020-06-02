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

        // Requete : SELECT
        $sql = "SELECT * FROM clients ORDER BY nom";
        $resultats = $DB->query($sql);
    ?>
    <?php
        // connexion à la base de données
        $host = 'mysql:host=localhost;dbname=rdg';
        $user = 'root';
        $pass = '';
        $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        // Requete : SELECT
        $sql2 = "SELECT * FROM clients ORDER BY id";
        $resultats2 = $DB->query($sql2);
    ?>
    <h1>Ajouter un nouveau SAV</h1>
    <form action="traitement-ajoutSAV.php" method="post" required>
    <select>
    <option>--Choisir--</option>
    <?php
    while ($liste = $resultats->fetch()) {
        echo "<option <p><strong>".$liste['nom']."</strong></p></option>";
    }
    ?>
    </select></br></br>
    Id_Client :
    <select>
    <?php
    while ($liste2 = $resultats2->fetch()) {
        echo "<option <p><strong>".$liste2['id']."</strong></p></option>";
    }
    ?>
    </select>

        <!-- <p><input type="text" id="id_nom" name="id_nom" placeholder="id_nom" required></p> -->
        <p><input type="text" id="panne" name="panne" placeholder="panne" required></p>
        <p><input type="submit" value="ajouter"></p>
    </form>

    <p><br></p>
    <p><a href="GestionSAV.php">[RETOUR SAV]</a></p>
    <p><a href="index.php">[RETOUR ACCEUIL]</a></p>
</body>
</html>