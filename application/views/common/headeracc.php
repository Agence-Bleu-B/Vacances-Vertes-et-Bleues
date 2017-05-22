<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	<title>Vacances Vertes et Bleues</title>

	<meta name="description" content="Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique."/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('cmap');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('style');?>" />
	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body> <!-- close in footeracc.php	 -->
	<div class="container-fluid"> <!-- close in footeracc.php	 -->
		<div class="row"> <!-- bandeau connexion -->
			<div class="col-xs-12">
				<div class="pull-right btn-toolbar">
					<div class="btn-group">
						<button class="btn" type="button">Connexion</button>
					</div>
					<div class="btn-group">
						<button class="btn" type="button"><i class="fa fa-facebook-official" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
		</div>

		<header class="row"> <!-- header video (balise unique page) -->
			<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<div class="row"> <!-- Menu -->
					<h1 class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 vertical-align-item"> <!-- Logo -->
						<a href="<?php echo site_url('accueil');?>">
							<?php echo my_img('logo.png',"Vacances Vertes et Bleues","img-responsive") ?>
						</a>
					</h1><!--
			 --><nav class="hidden-xs col-sm-8 col-sm-offset-0 col-md-7 col-md-offset-1 vertical-align-item"> <!-- links -->
			 			<a href="#">Nos conseils</a>
					 	<a href="#">Déposer une annonce</a>
					 	<a href="#">Mon compte</a>
					</nav>
				</div>

				<nav class="row"> <!-- Sub-Menu -->
					<div class="col-xs-12 col-sm-4">
						<button class="btn col-xs-12" type="button">
							<i class="fa fa-search" aria-hidden="true"></i>
							<br>
							Trouver la destination <br>de vos vacances
						</button>
					</div>
					<div class="col-xs-12 col-sm-4">
						<button class="btn col-xs-12" type="button">
							<i class="fa fa-book" aria-hidden="true"></i>
							<br>
							Avant de louer, <br>nos conseils
						</button>
					</div>
					<div class="col-xs-12 col-sm-4">
						<button class="btn col-xs-12" type="button">
							<i class="fa fa-cloud-upload" aria-hidden="true"></i>
							<br>
							Espace Annonceurs <br><small>Dépôt et modifications d'annonces</small>
						</button>
					</div>
				</nav>
			</div>

			<video autoplay poster="<?php echo base_url().'assets/images/poster.jpg';?>" id="bgVideo" loop>
	        <!-- <source src="<?php echo base_url().'assets/videos/VVB_Video.webm';?>" type="video/webm">
	        <source src="<?php echo base_url().'assets/videos/VVB_Video.mp4';?>" type="video/mp4"> -->
	    </video>
		</header> <!-- /header (video) -->
