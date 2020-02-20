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

		<style>

		body{
		 background-image:url(../img/tableau/contact.jpeg);
		    height: 600px;
		    background-size: cover;
		    background-repeat: no-repeat;
		    background-position: center center;
		}

		form{
			transition: 0.5s;
			border: 1px solid white;

		}
		</style>
		<body>
		<?php include "header.php" ?>



			<form class="border" style="  margin: 230px auto;;
	      width:400px;
	      padding:10px;
	      height:400px;
	      padding:10px 20px;
	       opacity : 0.9;
	      background-color:;
	      box-shadow: 0 15px 25px rgba(0,0,0,.5);
	      border-radius: 10px;" class="box" action="../traitement/contact.php" method="post">
				<h1 style="color:white;">Contactez-nous : </h1>
				<label style="color:white;"  class="label" >Entrez votre adresse mail : </label>
				<div class="inputbox">


					<input  style="width:200px;color:white;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;" type="Mail" name="mail" placeholder="Mail" required=""/>

				</div>

				<label style="color:white;"  class="label">Entrez votre mot de passe :</label>
				<div class="inputbox" >

					<input style="width:200px;color:white;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;" type="password" name="mot_de_passe" placeholder="Mot de passe" required=""/>

				</div>

				<label style="color:white;" >Laissez-nous un commentaire :</label>
				<div class="inputbox" >

					<input  style="width:200px;color:white;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;" type="Commentaires" name="commentaires" placeholder="Commentaires" required=""/>

				</div>

				<div style="margin-left:90px;">
				<div>
					<input style="width:200px;background-color: white;margin-top:10px;"type="submit" value="Contactez-nous"/>
				</div>


				<div>
					<a  style="color:white;" href="mot_de_passe_oublie.php">Mot de passe oublié?</a>

					<a  style="color:white;" href="formulaire_inscription.php">Inscription</a>
				</div>

			</div>
			</form>
	<?php include "footer.php" ?>
		</body>
	</html>
