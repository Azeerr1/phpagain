<?php
  if(!isset($_POST['prenom']) && !isset($_POST['motdepasse']))
  {
    echo 'Erreur';
  }
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
  </head>
  <body>
    <form  action="insertion.php" method="post">

      <label>Email</label><br>
      <input type="text" name="email" placeholder="Email"><br>
      <label>Utilisateur</label><br>
      <input type="text" name="prenom" placeholder="Prénom"><br>
      <label>Mot de passe</label><br>
      <input type="password" name="motdepasse" placeholder="Mot de passe"><br><br>

      <input type="submit" value="S'inscrire"> ou se connecter <a href="connexion.php">ici</a>.

    </form>
  </body>
</html>
