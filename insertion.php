<?php

  // ouverture d'une connexion à la bdd Inscription
  $objetPDO =  new PDO('mysql:host=localhost;dbname=inscription', 'root','');

  // préparation de la requête d'insertion
  $pdoStat = $objetPDO->prepare('INSERT INTO information VALUES (NULL, :email, :prenom, :motdepasse)');

  // on lie chaque marqueur à une valeure
  $pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
  $pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
  $pdoStat->bindValue(':motdepasse', $_POST['motdepasse'], PDO::PARAM_STR);


  // éxécution de la requête préparée
  $InsertOk = $pdoStat->execute();

  if($InsertOk){
    header("Location:connexion.php");
    exit;
    } else {
    $message = 'Echec insertion.';
  }

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insertion</title>
  </head>
  <body>

    <h1>Insertion des utilisateurs</h1>

    <p><?php echo $message; ?></p>

  </body>
</html>
