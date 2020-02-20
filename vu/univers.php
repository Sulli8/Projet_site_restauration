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
  <title>Hippopotamus</title>

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
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <style>
    .container {

    }

    .image {
      opacity: 1;
      display: block;
      width: 200px;
      height: 150px;
      transition: .5s ease;
      backface-visibility: hidden;
    }

    .middle {
      transition: .5s ease;
      opacity: 0;
      -ms-transform: translate(-50%, -50%);
      text-align: center;
    }

    .container:hover .image {
      opacity: 0.3;
    }

    .container:hover .middle {
      opacity: 1;
      transform: rotate(-5deg);
      transition: 0.5s;
    }

    .text {
      background-color: #fff;
      color: #990017;
      width:200px;
      margin-top:-140px;
      margin-left:200px;
      font-size: 16px;

    }
.change:hover{
background-color:#990017;
color:white;
}
    .bouton{
      background:#990017;
      line-height:42px;
      padding-left:30px;
      padding-right:30px;
      border:none;
      color:#fff;
      display:inline-block;
      font-size:14px;font-weight:500;
      position:relative;
      text-transform:uppercase;
      -webkit-transition:all 0.3s ease 0s;
      -moz-transition:all 0.3s ease 0s;
      -o-transition:all 0.3s ease 0s;
      transition:all 0.3s ease 0s;
      cursor:pointer;
      position:relative
    }
.padding{
padding:50px 0;
}
    .bouton:hover{
      transition:0.5s;
      background:white;
      border-color:#fff;
      color:#990017;
    }
    .slide:hover{
      padding:0 30px;
      transition:0.5s ;

    }

#loyalty_container{

padding:0 20px;
min-height:200px;
border:double 3px rgba(22,22,22,0.85);
overflow:hidden;
display:flex;
flex-direction:row;
justify-content:center ;
align-items:center ;

}

#hexagon {
width: 145px;
height: 55px;
position: relative;
border-radius: 20px;
background-color: rgba(34,34,34,0.9);
  color: white;
}


#hexagon:hover{
background-color: #990017;
transition: 0.8s;

}

.text{
font-family:sans-serif;

}

.univers{
font-family:sans-serif;
background-color: #990017;
padding:20px;
color:white;
  width:200px;
}
.univers:hover{
transition: 1s;
color:black;

background-color: white;

}


.rotate:hover{
transform: rotate(-5deg);
transition: 0.5s;


}
.text1{
animation:text 3s 1;
color: #990017;
}

.text1:hover{
transition: 1s;

}
@keyframes text {
0%{
  color:white;
  margin-bottom:-40px ;
}
30‰{
  letter-spacing: 25px;
  margin-bottom: -40px;
}
85‰{
  letter-spacing: 8px;
  margin-bottom:-40px ;

}



}




    </style>
  </head>
  <body>
<div style="margin-top:30px;background-color:black;height:150px;width:1400px;">
  <?php include "header.php"?>
</div>


    <!-- start banner Area -->
    <section style="background-size:cover;background-repeat:no-repeat;height:1000px;background-image:url(../img/hippopotamus_4.jpg);">
      <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
          <div class="col-lg-12 banner-content">
            <div class="container">

          <h1 class="text1" style="margin-top:-190px;margin-left:200px;">L'histoire du restaurant </h1>
            </div>
            <p  style="color:black;">
            "La cuisine du Périgord est sans beurre et sans reproche."
            <h6 style="margin-top:-20px;color:black;">Edward Stevens</h6>
            </p>
          </div>
        </div>
      </div>
    </section>

<section style="margin-bottom:800px; border-radius:20px;  opacity : 0.9;margin-top:-600px;margin-left: 200px;background-color:black;height:150px;width:800px;">
  <p style="margin-bottom: 10px;color:white;text-align:center;">
    Hippopotamus revisite la culture du steak house pour l’adapter à l’art de vivre « à la française », où le plaisir de déguster des plats savoureux et généreux s’accorde avec le plaisir de partager des moments conviviaux et chaleureux.



Nous avons sélectionné pour vous les meilleures pièces de bœuf pour vous offrir un goût et une tendreté uniques. Toutes nos recettes sont élaborées en collaboration étroite avec nos chefs pour encore plus de saveur.


Nos sauces, faites maison, et nos accompagnements sont à volonté pour toujours plus de générosité.
  </p>
</section>


<section style="margin-bottom: 10px;margin-left:350px;margin-top:-700px;">
<img src="../img/salle_hippopotamus.jpg"/>


</section>

  <?php include "footer.php"?>
  </body>
</html>
