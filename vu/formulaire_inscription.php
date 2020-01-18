<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--  <link rel="stylesheet" href="../CSS/formulaire2.css">-->
    <title>Inscription</title>
  </head>
  <body class="fond">
    <?php include "header.php" ?>

      <form class="" action="../classe/classe_inscription.php" method="post">
        <h1>Inscription</h1>
        <label class="label" for="">Nom</label>
        <input type="text" name="nom" placeholder="Nom"/>
          <label class="" for="">Prenom</label>

          <input type="text" name="prenom" placeholder="Prenom"/>
          <label class="label"  for="">Mail</label>
          <input type="text" name="mail"  placeholder="Mail"value=""/>



<label class="label" for="">Adresse</label>

  <input type="text" name="adresse" placeholder="Adresse">

        <label class="label" for="">Numéro de téléphone</label>

<input type="text" name="numero" placeholder="Numéro"/>

<label class="label" for="">Mot de passe</label>
          <input type="password" name="mdp" placeholder="Mot de passe"/>

          <input type="submit" value="S'inscrire"/>

      </form>
  </body>
</html>
