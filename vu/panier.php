<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Panier</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="../css/linearicons.css">
      <link rel="stylesheet" href="../css/font-awesome.min.css">
      <link rel="stylesheet" href="../css/bootstrap.css">
      <link rel="stylesheet" href="../css/magnific-popup.css">
      <link rel="stylesheet" href="../css/jquery-ui.css">
      <link rel="stylesheet" href="../css/nice-select.css">
      <link rel="stylesheet" href="../css/animate.min.css">
      <link rel="stylesheet" href="../css/owl.carousel.css">
      <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
<?php include "header.php" ?>
    <section class="menu-area section-gap" id="menu">
        <div class="container">
  <div class="row d-flex justify-content-center">
    <div class="menu-content pb-70 col-lg-8">
      <div class="title text-center">
        <h1 class="mb-10">Panier</h1>
        <?php

//ON se connnecte a la BDD
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
         }
        catch(Exception $e)
        {
          die('ERREUR:'.$e->getMessage());
        }
        //on declare la varible req pui onappelle la methode query de l'objet pdo
        $req = $bdd->query('SELECT repas from panier');
        //on declare la varible tableau
        $tableau = $req->fetchall();
         ?>
      </div>
    </div>
  </div>

            <ul class="filter-wrap filters col-lg-12 no-padding">
                <li class="active" data-filter="*">All Menu</li>
                <li data-filter=".breakfast">Breakfast</li>
                <li data-filter=".lunch">Lunch</li>
                <li data-filter=".dinner">Dinner</li>
                <li data-filter=".budget-meal">Budget Meal</li>
                <li data-filter=".buffet">Buffet</li>
            </ul>

            <div class="filters-content">
                <div class="row grid">
                    <div class="col-md-6 all breakfast">
        <div class="single-menu">
          <div class="title-wrap d-flex justify-content-between">
            <h4>Pâte chinoise</h4>
            <h4 class="price"><?php  // on affiche
            echo $tableau[0][0]."  €";
 ?></h4>
          </div>
          <p>
            Usage of the Internet is becoming more common due to rapid advance.
          </p>
        </div>
                    </div>
                    <div class="col-md-6 all dinner">
        <div class="single-menu">
          <div class="title-wrap d-flex justify-content-between">
            <h4>Boeuf à l'ail</h4>
            <h4 class="price"><?php
            // on affiche
               echo $tableau[1][0]."  €";
 ?></h4>
          </div>
          <p>
            Usage of the Internet is becoming more common due to rapid advance.
          </p>
        </div>
                    </div>
                    <div class="col-md-6 all budget-meal">
        <div class="single-menu">
          <div class="title-wrap d-flex justify-content-between">
            <h4>Buger à l'oignon</h4>
            <h4 class="price"><?php
            // on affiche
              echo $tableau[2][0]."  €";
 ?></h4>
          </div>
          <p>
            Usage of the Internet is becoming more common due to rapid advance.
          </p>
        </div>
                    </div>
                    <div class="col-md-6 all breakfast">
        <div class="single-menu">
          <div class="title-wrap d-flex justify-content-between">
            <h4>Crème brulée</h4>
            <h4 class="price"><?php
// on affiche
                 echo $tableau[3][0]."  €";
 ?></h4>
          </div>
          <p>
            Usage of the Internet is becoming more common due to rapid advance.
          </p>
        </div>
                    </div>
                    <div class="col-md-6 all lunch">
        <div class="single-menu">
          <div class="title-wrap d-flex justify-content-between">
            <h4>Pâte au chorizo</h4>
            <h4 class="price"><?php
// on affiche
               echo $tableau[4][0]."  €";
 ?></h4>
          </div>
          <p>
            Usage of the Internet is becoming more common due to rapid advance.
          </p>
        </div>
                    </div>
                    <div class="col-md-6 all buffet">
        <div class="single-menu">
          <div class="title-wrap d-flex justify-content-between">
            <h4>Cafe + cookies aux chocolats</h4>
            <h4 class="price"><?php
// on affiche
               echo $tableau[5][0]."  €";
 ?></h4>
          </div>
          <p>
            Usage of the Internet is becoming more common due to rapid advance.
          </p>
        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php include "footer.php" ?>
  </body>
</html>
