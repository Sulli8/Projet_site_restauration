<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Google Map</title>

  <!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
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
  <div style="margin-bottom:300px;">
  <?php include "header.php" ?>

</div>

  <h1 style="color:white;text-align:center;">Géolocalisation de notre restaurant :</h1>
  <button style="margin-bottom: 200px;margin-top: 10px;margin-left: 600px;color:white;background-color:#990017;height:40px;" id = "find-me">Montrer ma localisation</button><br/>
  <p id = "status"></p>
  <a id = "map-link" target="_blank"></a>

  <script>
  function geoFindMe() {

    const status = document.querySelector('#status');
    const mapLink = document.querySelector('#map-link');

    mapLink.href = '';
    mapLink.textContent = '';

    function success(position) {
      const latitude  = position.coords.latitude;
      const longitude = position.coords.longitude;

      status.textContent = '';
      mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
      mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
    }

    function error() {
      status.textContent = 'Unable to retrieve your location';
    }

    if (!navigator.geolocation) {
      status.textContent = 'Geolocation is not supported by your browser';
    } else {
      status.textContent = 'Locating…';
      navigator.geolocation.getCurrentPosition(success, error);
    }

  }

  document.querySelector('#find-me').addEventListener('click', geoFindMe);
</script>

<?php include "footer.php" ?>
</body>
</html>
