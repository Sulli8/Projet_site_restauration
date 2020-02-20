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

			.comment-form {
    background: #000000;
    text-align: center;
    border: 1px solid #eee;
    padding: 50px 50px;
    width: 500px;
}



.btn{background:#990017;
	color:#fff;
	font-size:12px;
	font-weight:500;
	padding:8px 20px;
	border-radius:0}

	.newsletter-title-1{background:#990017;color:#fff;text-align:center;padding:12px 0px}
				</style>
		</head>
		<body style="background-color:#000000;">

		<?php include "header.php"?>

			<!-- start banner Area -->
			<section style="background-size: 1400px 450px;background-repeat: no-repeat;background-image:url(../img/tableau/food_hotel_logo.jpg);"class="relative">
				<div class=""></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">

							</h1>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start post-content Area -->
			<section class=" single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">

<?php

error_reporting(-1);
ini_set("display_errors",1);

try {
		$bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
 }
catch(Exception $e)
{
	die('ERREUR:'.$e->getMessage());
}

$nom_prenom = $bdd->prepare('SELECT nom,prenom FROM  adherent WHERE mail=:mail AND mot_de_passe=:mot_de_passe');
$nom_prenom->execute(array('mail'=>$_SESSION['mail'],'mot_de_passe'=>$_SESSION['mot_de_passe']));
$tableau = $nom_prenom->fetch();
echo ucfirst($tableau['nom'])." ".ucfirst($tableau["prenom"]);

 ?>
      </a> <span style="margin-left:10px;"  class="lnr lnr-user"></span></p>
										<p style="margin-left:30px;" class="date "> <a href="#"><?php echo date('l jS \of F Y h:i:s A'); ?></a> <span class="lnr lnr-calendar-full"></span></p>
										<p style="margin-left:30px;"  class="view "><a href="#"> 1.2M Views</a> <span class="lnr lnr-eye"></span></p>
										<p style="margin-left:30px;" class="comments "><a href="#"> 06 Comments</a> <span class="lnr lnr-bubble"></span></p>
									</div>
								</div>


								<div class="col-lg-12">
									<div class="quotes">

									<div style="margin-left:20px;" class="container">
										<div class="row">
											<div class="active-review-carusel">
												<div class="single-review">
												<img width="300" height="300" src="../img/tableau/food_hotel_tech.jpg"></img>

												</div>
												<div class="single-review">
													<img src="../img/tableau/food_hotel_tech_2.jpeg"   width="200" height="300" alt="">
												</div>
												<div class="single-review">
													<img src="../img/tableau/food_hotel_tech_3.jpeg"  width="300" height="300" alt="">
												</div>
											</div>
										</div>
										<p>
									Ils pourront, notamment, y apprivoiser des outils destinés à optimiser les dépenses énergétiques ou à personnaliser l’expérience client. Ce nouvel élément devrait porter la surface du salon à 10 000 m².
										</p>
									</div>

									<div style="width:800px;margin-left:50px;"class="">
										<div style="width:700px;">
										<h4 style="border-bottom:1px solid black;"class="">Participation au food hotel : Le batiment intelligent surprise de l'édition 2020</h4>
									</div>
										<p class="excert">

										Fort du succès des trois précédents salons dans la capitale et des débuts prometteurs de sa première édition décentralisée, à Nice, à l’automne dernier, FHT investit à nouveau le Paris Event Center de la porte de La Villette.
										<p>
										Créé par Karen Serfaty en 2017, le salon du digital et des innovations technologiques dédiées à l’hôtellerie et la restauration, réserve encore, cette année, de belles surprises à ses visiteurs.
										</p>
										<p>
											Le « Smart Hôtel Resto » figure, certainement, au premier rang des nouveautés de cette édition 2020. Ce « bâtiment intelligent » propose aux professionnels une immersion dans les univers digital et domotique.
										</p>
									</div>


								</div>
								</div>
							</div>
							</div>
							<div style="background-color:#fafaff;margin-left: 800px;width:500px;"class="comment-form">

								<form>
									<div style="background-color:#990017;">
										<h4 style="color:white;">Laisser un commentaire : </h4>

									</div>
									<div class="form-group form-inline">
									  <div class="form-group name">
									    <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
									  </div>
									  <div style="margin-left:10px;"class="form-group email">
									    <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
									  </div>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
									</div>
									<input style="color:#990017;border:1px solid #990017;"type="submit" value="Post Comment" class="primary-btn text-uppercase"></input>
								</form>
							</div>
						</div>
						<div style="margin-left: 100px;margin-top:-450px;width:500px;" class="sidebar-widgets">
							<div class="widget-wrap">


								<div class="single-sidebar-widget newsletter-widget">
									<h4 class="newsletter-title-1">Newsletter</h4>
									<p>
									Recevez toutes les nouveautés par mail
									</p>
									<div class="form-group d-flex flex-row">
									   <div class="col-autos">
									      <div class="input-group">
									        <div class="input-group-prepend">
									          <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
									        </div>

													<form method="post" action="../traitement/traitement_newsletter.php">
									        <input name="adresse" style="width:290px;" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Entrer email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" >
									      </div>
									    </div>
									    <button type="submit" class="btn">Recevoir</button>

										</form>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End post-content Area -->

			<!-- start footer Area -->
<?php include "footer.php"?>

		</body>
	</html>
