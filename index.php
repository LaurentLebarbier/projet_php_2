<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours 2 PHP / MySql</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <h1>Formulaire HTML</h1>
    <div class="center">Ajouter un contact</div>
    <form action="insertion.php" method="post">
        <div>
            <label for="nom">Nom</label>
            <input id="nom" type="text" name="lastName" required>
        </div>
        <div>
            <label for="prenom">Prénom</label>
            <input id="prenom" type="text" name="firstName" required>
        </div>
        <div>
            <label for="tel">Téléphone</label>
            <input id="tel" type="text" name="phone" required>
        </div>
        <div>
            <label for="mel">Adresse Electronique</label>
            <input id="mel" type="text" name="mail" required>
        </div>
        <div id="submit">
            <input type="submit" value="Envoyer">
        </div>
    </form>

</body>

</html>