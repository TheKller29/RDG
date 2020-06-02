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
        $sql = "SELECT * FROM clients ORDER BY nom,prenom";
        $resultatsClients = $DB->query($sql);

        // Requete : SELECT
        $sql2 = "SELECT * FROM pannes ORDER BY id,panne,nom_prenom";
        $resultatsPannes = $DB->query($sql2);
    ?>
    <h1>Ajouter un nouveau client</h1>
    <form action="traitement-ajoutPannes.php" method="post" required>
        <p><input type="varchar(50)" id="panne" name="panne" placeholder="panne" required></p>
        <select>
        <option>--Nom--</option>
        <?php
        while ($result = $resultatsClients->fetch()){
            echo '<option value="'.$nom['nom'].'">'.$nom['nom'].'</option>';
        }
        ?>
        </select>
        <p><input type="submit" value="ajouter"></p>
    </form>

    <p><br></p>
    <p><a href="GestionPannes.php">[RETOUR PANNE]</a></p>
    <p><a href="index.php">[RETOUR ACCEUIL]</a></p>
</body>
</html>

<!-- code postal menu-->