<?php

// ouverture d'une connexion à la bdd agenda
$objetPdo = new PDO("mysql:host=localhost;dbname=projet_2", 'laurent', 'h9xt2ya1');

// préparation de la requête d'insertion SQL
$pdoStat = $objetPdo->prepare('SELECT * FROM cours');

// éxécution de la requête préparée
$excuteIsOk = $pdoStat->execute();

// récuperation des resultats
$contacts = $pdoStat->fetchAll();


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <h1>Liste des Contacts</h1>

    <ul>
        <?php foreach ($contacts as $contact) : ?>
            <li>
                <?= $contact['nom'] ?> - <?= $contact['prenom'] ?> - <?= $contact['tel'] ?> - <?= $contact['mel'] ?>
                <a href="supprimer.php?numContact=<?= $contact['id'] ?>">Supprimer</a>
                <a href="modification.php?numContact=<?= $contact['id'] ?>">Modifier</a>
            </li>
        <?php endforeach; ?>

    </ul>
    <div id="center_button">
        <button onclick="location.href='index.php'">Retour Index</button>
        <button onclick="location.href='lister.php'">Liste des Contact inscrit en BDD</button>
    </div>
</body>

</html>