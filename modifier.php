<?php

// ouverture d'une connexion à la bdd agenda
$objetPdo = new PDO("mysql:host=localhost;dbname=projet_2", 'laurent', 'h9xt2ya1');

// préparation de la requête d'insertion SQL
$pdoStat = $objetPdo->prepare('UPDATE cours SET nom=:nom, prenom=:prenom, tel=:tel, mel=:mel WHERE id=:num LIMIT 1');

//laison du paramètre nommé
$pdoStat->bindValue(':num', $_POST['numContact'], PDO::PARAM_INT);
$pdoStat->bindValue(':nom', $_POST['lastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom', $_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':tel', $_POST['phone'], PDO::PARAM_STR);
$pdoStat->bindValue(':mel', $_POST['mail'], PDO::PARAM_STR);

//exécution de la requète
$executeIsOk = $pdoStat->execute();

if ($executeIsOk) {
    $message = 'Le contact a été mise a jour';
} else {
    $message = 'Echec de la mise à jour du contact';
}

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
    <h1>Résultat de la modification</h1>
    <p><?= $message ?></p>
    <div id="center_button">
        <button onclick="location.href='index.php'">Retour Index</button>
        <button onclick="location.href='lister.php'">Liste des Contact inscrit en BDD</button>
    </div>
</body>

</html>