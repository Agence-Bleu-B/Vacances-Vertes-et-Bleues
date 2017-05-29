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

		<div id="bandeau" class="row"> <!-- bandeau connexion -->
			<div class="col-xs-12">
				<div class="pull-right btn-toolbar">
					<div class="btn-group">
						<a href="<?php echo site_url('compte');?>" class="btn" type="button"><?php echo lang('menu_connexion');?></a>
					</div>
					<div class="btn-group">
						<button class="btn" type="button"><i class="fa fa-facebook-official" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
		</div>

		<header class="row principal"> <!-- header (balise unique page) -->
			<div id="banner">
				<!-- background -->
			</div>
			<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<div class="row"> <!-- Menu -->
					<h1 class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 vertical-align-item"> <!-- Logo -->
						<a href="<?php echo site_url('accueil');?>">
							<?php echo my_img('logo.png',"Vacances Vertes et Bleues","img-responsive") ?>
						</a>
					</h1><!--
			 --><nav class="hidden-xs col-sm-8 col-sm-offset-0 col-md-7 col-md-offset-1 vertical-align-item text-right"> <!-- links -->
			 			<span class="dropdown">
							<a href="<?php echo site_url('conseils');?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="250" data-close-others="false"><?php echo lang('menu_conseils');?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a tabindex="-1" href="<?php echo site_url('conseils/precautions');?>"><?php echo lang('menu_precautions');?></a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="<?php echo site_url('conseils/demander');?>"><?php echo lang('menu_demander');?></a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="<?php echo site_url('conseils/reservations');?>"><?php echo lang('menu_reservations');?></a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="<?php echo site_url('conseils/demarches');?>"><?php echo lang('menu_demarches');?></a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="<?php echo site_url('conseils/recours');?>"><?php echo lang('menu_recours');?></a></li>
							</ul>
			 			</span>
						<a href="<?php echo site_url('compte');?>"><?php echo lang('menu_depot');?></a>
					 	<a href="<?php echo site_url('compte');?>"><?php echo lang('menu_moncompte');?></a>
					</nav>
				</div>
			</div>


		</header> <!-- /header (video) -->
