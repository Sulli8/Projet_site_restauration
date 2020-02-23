<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
include "../vu/header.php";


     ?>

<div> Voici la commisson de l'administrateur :</div>
<p><?php echo $_SESSION["commission"] ?></p>

     <?php include "../vu/footer.php"; ?>
  </body>
</html>
