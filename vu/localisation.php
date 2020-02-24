<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Google Map</title>

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
    #map{
      height:400px;
      width:100%;
    }


    		body{
    		 background-image:url(../img/geolocalisation.jpeg);
    		    height: 600px;
    		    background-size: cover;
    		    background-repeat: no-repeat;


    		}
  </style>
</head>
<body>
  <div >
  <?php include "header.php" ?>

</div>

<div style="margin-top:200px;margin-bottom:200px;">


<div style="width:300px;height:300px;">​
    <a class="twitter-timeline" data-width="500" data-height="700" data-theme="dark" data-link-color="#E81C4F" href="https://twitter.com/restosducoeur">tweet by riles </a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>​
    </div>​

<div style="margin-left:500px;margin-top:-300px;">


  <h1 style="font-size: 30px;color:white;text-align:center;">Géolocalisation de notre restaurant :</h1>



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83996.88349806979!2d2.2783060582031123!3d48.860067499999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1edd4e349b%3A0x8d73a89213d2fd24!2sHippopotamus%20Steakhouse!5e0!3m2!1sfr!2sfr!4v1582533347828!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


  </div>

  </div>
<?php include "footer.php" ?>
</body>
</html>
