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
  <title>Macro</title>

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

      <style>
      body
{
    perspective: 800px;
}

.div
{
  position: absolute;
    border: 2px solid #444;
    text-align: center;
    font-size: 1.3em;
    font-family: arial, sans-serif;
    transition: 2s;
    backface-visibility: hidden; /* Permet d'éviter de voir le bloc de dos */
}

#devant
{
    z-index: 100;
}

#derriere
{
    z-index: 50;
    transform: rotateY(-180deg); /* Celui-ci est retourné par défaut */
}

#devant:hover
{
    transform: rotateY(360deg); /* On passe de 0 à 360° : tour complet */
}

/*
Astuce :
Lorsqu'on survole le bloc devant, on applique une rotation au bloc derriere
*/
#devant:hover + #derriere
{
    transform: rotateY(180deg);  /* On passe de -180° à 180° : tour complet */
}

.reverse{
    width: 100%;
    height: 100px;
    background-color:#000000;
    margin: 0 auto 20px auto;
    border: 2px solid black;
    box-sizing: border-box;
}
.d1{
    animation-name: taille;
    animation-duration: 5s;
}
.d1{
    animation-timing-function: linear;
}

@keyframes taille{
    from{width: 100%;}
    50%{width: 50%;}
    to{width: 100%;}
}
      </style>
  </head>
  <body style="background-color:#D2B48C;">

<div style="margin-top:20px;width:1400px;height:145px;background-color:#000000;">

</div>
    <?php include "header.php" ?>
      <h1 class="reverse d1" style="color:#fff;text-align:center;margin-top:20px;">Ouverture de la nouvelle salle d'hippopotamus : Bullshouse </h1>


      <img style="margin-left:400px;"width="600" src="../img/restaurant.jpeg"></img>


  <div style="height:100px;"></div>
<div style="margin-left:300px;width:800px;">
      <strong style="color:white;" > C'est au tour de notre restaurant de Nice d’incarner le concept de Steak House à la française.</strong>
      <p style="color:white;">
        Le bar accroche l'oeil dès votre arrivée par son design. Tout autour, les matériaux se mélangent dans un ensemble cohérent et harmonieux.: chaises en cuir, suspensions en bois, accroches bouchères, murs en bois brûlés ou tapissés de cuir et de briques. Le mythique Hippopotame fait lui aussi quelques apparitions subtiles. Tous ces éléments rappellent l'ADN de la marque.

Chaque membre du réseau bénéficie de ces nouveautés en plus d’un suivi et d’une formation spécifique à l’ouverture. L’enseigne propose plusieurs modèles de franchise.

Hippopotamus poursuit son maillage dans l’Hexagone. Elle recherche des candidats ayant de préférence une expérience managériale dans la restauration ou autre domaine, mais recherche également des investisseurs.

L'adossement au Groupe Bertrand permet à l'enseigne de reprendre sa place de leader du Steak House à la Française.
      </p>
</div>


<img  class="div" id="devant" style="width:500px;margin-left:120px;" src="../img/salle_nice.jpeg" />
<img class="div" width="500"id="derriere" src="../img/nouveau_menu_2.jpeg">
<p style="color:white;margin-top:100px;margin-left:800px;width:400px;">

  Les amateurs de viande de boeuf connaissent obligatoirement Hippopotamus. La franchise a bâti toute sa réputation sur ce produit qui truste la vedette sur sa carte. Créée en 1968, l’enseigne est devenue la référence en matière de restaurants spécialisés dans la viande grillée en France.

En avril 2017, le réseau est passé entre les mains du groupe Bertrand, autre grand spécialiste de la restauration (Quick, Burger King, brasserie Lipp…) qui affiche une santé financière florissante.
</p>

<img width="600"style="margin-top:100px;margin-bottom:20px;margin-left:800px;"src="../img/restaurant_2.jpeg" />
<p style="color:white;margin-bottom:300px;margin-left:90px;margin-top:-300px;width:700px;">

  Depuis la fin de l'année 2017, Hippopotamus a entamé sa révolution pour se positionner en véritable STEAK HOUSE à la Française.

  Une carte entièrement revisitée avec des recettes de saison gourmandes et généreuses. Une identité visuelle modernisée, un site internet repensé et une nouvelle décoration déclinée dans déjà 12 restaurants.

  Dans les restaurants rénovés, ils ont introduit dans les cuisines des fours nouvelle génération qui autorisent des cuissons à la braise et à très haute température.
</p>

    <?php include "footer.php" ?>

  </body>
</html>
