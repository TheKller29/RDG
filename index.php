<!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <title>Page Accueil</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    </head>
    <body>
    <h1>RDG Informatique</h1>
    <h1>Service Après Vente</h1></br>

    <?php
        try
    {
        $db = new PDO('mysql:host=localhost;dbname=rdg', 'root', ''); 
    }
    catch (PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $allName = $db->query('SELECT * FROM clients');
    $idname = $db->query('SELECT * FROM clients');
        
    ?>

    <p>Liste des clients :</p>
    <form action="index.php?id=<?php echo $id; ?>" method="post">
    <select>
    <option>--Choisir--</option>
    <?php
    while ($donnees = $allName->fetch()){
        echo '<option value="'.$donnees['nom'].'">'.$donnees['nom'].'</option>';
    }
    // if ($donnees['nom'] == $donnees['nom']){
    //     echo '<option value="'.$donnees['nom']." ".$donnees['prenom'].'">'.$donnees['nom'].' '.$donnees['prenom'].'</option>';
    // }
    ?>
    </select></br>
    <p><input type="submit" value="{Afficher}"></p>
    </form>
    
    <!-- <input type="submit" value="OK" class="btn btn-primary"/> -->
    
    <table align="center">
        <thead>
            <tr>
            <th>| ID Client |</th>
            <th>| Nom |</th>
            <th>| Prenom |</th>
            <th>| Tel |</th>
            <th>| Tel2 |</th>
            <th>| Adresse |</th>
            <th>| Code Postal |</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $idname->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
            <td><?php echo htmlspecialchars($row['id']); ?></td>
            <td><?php echo htmlspecialchars($row['nom']); ?></td>
            <td><?php echo htmlspecialchars($row['prenom']); ?></td>
            <td><?php echo htmlspecialchars($row['tel']); ?></td>
            <td><?php echo htmlspecialchars($row['tel2']); ?></td>
            <td><?php echo htmlspecialchars($row['adresse']); ?></td>
            <td><?php echo htmlspecialchars($row['postal']); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table></br>

    <p><a href="GestionClients.php">[Gestion Clients]</a></p>
    <p><a href="Techniciens.php">[Gestion Techniciens]</a></p>
    <p><a href="GestionMateriels.php">[Gestion GestionMateriels]</a></p>
    <p><a href="GestionSAV.php">[Gestion SAV]</a></p>
    <p><a href="GestionPannes.php">[Gestion Pannes]</a></p>


    </body>
</html>