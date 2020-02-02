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
			<style>

			.container {
  position: relative;

}

.image {
  display: block;
	height: 150px;
	width: 200px;
	margin-top:-100px;

}

.overlay {
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 150px;
  width: 200px;
  opacity: 0;
  transition: .5s ease;
  background-color: #990017;
	margin-left: 10px;
	margin-left: 10px;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;

  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.change:hover{
	background-color:#990017;
	color:white;
}

.bouton_2{
	background:#990017;
	line-height:42px;
	color:#fff;
	font-size:14px;font-weight:500;
	-webkit-transition:all 0.3s ease 0s;
	-moz-transition:all 0.3s ease 0s;
	-o-transition:all 0.3s ease 0s;
	transition:all 0.3s ease 0s;
	text-align:center;
}
.bouton_2:hover{
	transition:0.5s;
	background:white;
	border-color:#fff;
	color:#990017;
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
	padding: 0 100px;
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

	<?php include "header.php"?>

			<!-- start banner Area -->
			<section style="background-image:url(../img/hippopotamus.jpg);">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-12 banner-content">

							<h1 class="text-white">Hippopotamus</h1>
							<p class="text-white">
							"La cuisine est multi-sensorielle. Elle s'adresse à l'oeil, à la bouche, au nez, à l'oreille et à l'esprit. Aucun art ne possède cette complexité"
							<h6 style="margin-top:-20px;color:white;">Pierre Gagnaire</h6>
							</p>
							<a class="bouton"href="Voir_tous_les_menus.php" style="padding:20px;">Regardez-nos menus</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->


			<!-- Start home-about Area -->
			<section style="	border: double 4px rgba(22,22,22,0.85); background-color:#D2B48C;"class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left">
							<h1>Plat du jour : </h1> <p style="font-size:20px;">"Boeuf Bourguignon"</p>
							<p style="color:black;">
								En ce moment, découvrez deux recettes inédites Signature by Marco restaurant.
	Que vous soyez adepte de saveurs subtilement relevées ou plutôt fan de fromage, il y en a pour tous les goûts !
							</p>
							<a href="voir_le_plat.php" class="bouton">Voir le plat</a>
						</div>
						<div class="col-lg-6 home-about-right">
							<img style="border: 2px solid black;"class="img-fluid" src="../img/plat_du_jour.png" alt="">
						</div>
					</div>
				</div>
			</section>




		 <section style="margin-bottom:200px;background-color:black;" class=" review-area section-gap">

			 <h1 style="width:300px;color:#990017;margin-top:-80px;margin-left:100px;">Nos nouveaux restaurants:</h1>


			<div style="margin-left:500px;" class="container">
				<div class="row">
					<div class="active-review-carusel">
						<div class="single-review">
							<img src="../img/nouvelle_carte.jpeg"   width="300" height="300" alt="">
							<h4>Wilson</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
							</div>
							<p>
								"Cuisine de qualité avec bons produits frais."
							</p>
						</div>
						<div class="single-review">
							<img src="../img/steak_ail.jpg"   width="200" height="300" alt="">
							<h4>John</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
							</div>
							<p>
								"On s'est régalé!! Les prix des menus sont correct.""
							</p>
						</div>
						<div class="single-review">
							<img src="../img/steak_au_poivre.jpeg"  width="300" height="300" alt="">
							<h4>Brad</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
							</div>
							<p>
								Le patron et le personnel sont très aimable et sympathique.
							</p>
						</div>
						<div class="single-review">
							<img src="../img/steak_feu.jpg" width="300" height="300"alt="">
							<h4>Davis</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
							</div>
							<p>
								Nous y sommes allés en WE et nous avons profité du karaoké et soirée dansante.
							</p>
						</div>
					</div>
				</div>
			</div>

				 <img class="rotate" style="margin-left:100px;margin-top:-800px;"width="200" height="150"src="../img/blumhouse.jpg"><a href="blumhouse.php" /> </img>


				 <img class="rotate" style="margin-left:-205px;margin-top:-400px;"width="200" height="150"src="../img/nouveau_menu.png"> <a href="nouveau_menu.php" /> </img>
				  <img class="rotate" style="margin-left:50px;margin-top:-400px;"width="200" height="150"src="../img/hippo.png"><a href="hippo.php" />  </img>

<div class="container">
					 <img class="image" style="" width="200" height="150"src="../img/hippo_2.jpg"><a href="hippo_2php" />  </img>
<div class="overlay">
					 <div class="text" style="width:200px;margin-left:100px;margin-top:50px;">

					 	22 avenue du Général Leclerc, 92100
					 	Boulogne-billancourt </div>
</div>
					</div>


		</section>


			<!-- End home-about Area -->

			<!-- Start menu-area Area -->

            <!-- End menu-area Area -->
						<div class="container">

					<h1 class="text1" style="margin-top:-190px;margin-left:300px;">Le Steak house à la française</h1>
						</div>

			<!-- Start reservation Area -->
<section style="height:600px;background-image:url(../img/image_hippopotamus.jpg); background-size:cover;background-repeat:no-repeat;">




				<img src="../img/le-boeuf.jpg" width=""></img>






				<p style="border:4px solid rgba(22,22,22,0.85);color:black;margin-top: -500px;margin-left:600px;width:500px;background-color: #D2B48C;"> Depuis 1968, nous cultivons notre savoir-faire en matière de viande pour vous proposer le meilleur du bœuf : des pièces de caractère de qualité toujours tendres et au goût unique. Avec plus de 150 restaurants répartis dans toute la France,
					 nous vous accueillons tous les jours dans une ambiance authentique et conviviale en vous proposant une carte gourmande et généreuse,
					 à savourer seul ou à partager en famille, en couple ou entre amis.</p>

					 <a href="univers.php" class="text " style="margin-left:-600px;">


						 				<h3 style="font-family: homestead_inlineinline; color: #990017;margin-left:600px;">Un savoir-faire unique partout en france</h3>
					 <p class="univers" style="border:4px solid rgba(22,22,22,0.85);margin-top:15px ;margin-left:600px;">	Découvrir notre univers</p>
					 </a>


					 <p style="margin-left:600px;border:4px solid rgba(22,22,22,0.85);color:black;width:500px;background-color: #D2B48C;">Toute l’expertise d’Hippopotamus repose sur le savoir-faire combiné des agriculteurs et des cuisiniers au service du goût et de l’authenticité.
						 Le secret de la qualité de nos viandes réside dans les méthodes de maturation que nous utilisons.</p>

		</section>

<section style="	background-color: #D2B48C;" id="loyalty_container">
	<img style="margin-left:-300px;transform:rotate(-5deg);height:127px;width:200px;" src="../img/mon_programme_fidelite.png">
		 </img>
	<p style="color:black ;margin-left:400px;text-align:center;width:300px;">

		Votre programme de fidélité évolue. Pour rester informé des nouveautés,
		rendez-vous sur votre nouvel espace fidélité.
	</p>

<a href="CGU.pdf" class="text" style="margin-left:-600px;"id="hexagon">
<p style="margin-top:15px ;margin-left:25px;">	Espace Fidélité</p>
</a>

</section>





			<!-- End reservation Area -->

			<!-- Start gallery-area Area -->

            <!-- End gallery-area Area -->

			<!-- Start review Area -->

			<!-- End review Area -->

			<!-- Start blog Area -->
			<section class="blog-area padding" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">

						<p>
							"Un grand restaurant ne se résume pas uniquement aux clients et aux belles voitures. Derrière il y a de la rigueur, de la passion, de l'amour du travail bien fait, de la discipline et de la transmission du savoir."
						</p>

						<img src="../img/logo-hippopotamus.svg"></img>
						<a></a>
							<a></a>
							</div>
						</div>
					</div>

			</section>
			<!-- End blog Area -->

			<!-- start footer Area -->
		<?php include "footer.php"?>
		</body>
	</html>
