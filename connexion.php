<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="styles/style.css" media="screen" type="text/css" />
        <link rel="icon" type="image/png" sizes="16x16" href="images/login.png">
    </head>
    <body>


              <form action="verification.php" method="POST">
                <label>Utilisateur</label><br>
                <input type="text" name="username" placeholder="Prénom"><br><br>
                <label>Mot de passe</label><br>
                <input type="password" name="password" placeholder="Mot de passe"><br><br>
                <input type="submit" id='submit' value="Se connecter"/>
              </form>

                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                      }
                ?>

    </body>
</html>
