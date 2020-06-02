<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <h1>Liste des SAV</h1>

    <?php
        // connexion à la base de données
        $host = 'mysql:host=localhost;dbname=rdg';
        $user = 'root';
        $pass = '';
        $DB = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

        // Requete : SELECT
        $sql = "SELECT * FROM sav ORDER BY id";
        $resultats = $DB->query($sql);
    ?>
        
        <table>
        <thead>
            <tr>
            <th>| ID SAV |</th>
            <th>| Nom |</th>
            <th>| ID Client |</th>
            <th>| Panne |</th>

            </tr>
        </thead>
        <tbody>
            <?php while($row = $resultats->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['nom']); ?></td>
            <td><?php echo htmlspecialchars($row['id_client']); ?></td>
            <td><?php echo htmlspecialchars($row['panne']); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <p><a href="GestionSAV.php">Retour Gestion SAV</a></p>
    <p><a href="index.php">Accueil</a></p>
</body>
</html>