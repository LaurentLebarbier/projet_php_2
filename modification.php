<?php

// ouverture d'une connexion à la bdd agenda
$objetPdo = new PDO("mysql:host=localhost;dbname=projet_2", 'laurent', 'h9xt2ya1');

// préparation de la requête d'insertion SQL
$pdoStat = $objetPdo->prepare('SELECT * FROM cours WHERE id=:num ');

//laison du paramètre nommé
$pdoStat->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);

//exécution de la requète
$executeIsOk = $pdoStat->execute();

//on récupère le contact
$contact = $pdoStat->fetch();


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
    <div class="center">Modifier un contact</div>
    <form action="modifier.php" method="post">
        <input type="hidden" name="numContact" value="<?= $contact['id'] ?>">
        <div>
            <label for="nom">Nom</label>
            <input id="nom" type="text" name="lastName" value="<?= $contact['nom'] ?>">
        </div>
        <div>
            <label for="prenom">Prenom</label>
            <input id="prenom" type="text" name="firstName" value="<?= $contact['prenom'] ?>">
        </div>
        <div>
            <label for="tel">Téléphone</label>
            <input id="tel" type="text" name="phone" value="<?= $contact['tel'] ?>">
        </div>
        <div>
            <label for="mel">Adresse Electronique</label>
            <input id="mel" type="text" name="mail" value="<?= $contact['mel'] ?>">
        </div>
        <div class="button">
            <input type="submit" value="Enregistrer les modifications">
        </div>
    </form>

</body>

</html>