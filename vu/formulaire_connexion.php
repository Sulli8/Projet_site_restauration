<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
<style>


</style>
  </head>
  <body class="fond">
    <form class="box" action="../classe/classe_connexion.php " method="post">
      <h1 >Connexion</h1>
      <label   class="label" >Entrez votre adresse mail : </label>
      <div class="inputbox">

        <input  type="Mail" name="mail" placeholder="Mail" required=""/>

      </div>

      <label  class="label">Entrez votre mot de passe :</label>
      <div class="inputbox" >

        <input type="password" name="mot_de_passe" placeholder="Mot de passe" required=""/>

      </div>

      <div>
        <input type="submit" value="Connexion"/>
      </div>


      <div>
        <a style="color:white;" href="mot_de_passe_oublie.php">Mot de passe oublié?</a>

        <a  style="color:white;" href="formulaire_inscription.php">Inscription</a>
      </div>
    </form>

  </body>
</html>