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
    <link rel="stylesheet" type="text/css" href="<?php echo css_url('reset');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo css_url('style');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo css_url('mediaqueries');?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo css_url('cmap');?>" />
		<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<section id="home">
    <video autoplay poster="<?php echo base_url().'assets/images/poster.jpg';?>" id="bgVideo" loop style="z-index: 1;">
        <!--<source src="<?php echo base_url().'assets/videos/VVB_Video.webm';?>" type="video/webm">
        <source src="<?php echo base_url().'assets/videos/VVB_Video.mp4';?>" type="video/mp4">-->
    </video>
    <header style="position: relative;z-index: 100;">
        <a href="https://www.facebook.com/VacancesVertesEtBleues/" class="fb" target="_blank">
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>			
        <a href="<?php echo site_url('compte');?>">Connexion</a>
    </header>
    <div class="container" style="position: relative;z-index: 200;">
        <nav>
            <a href="#"><h1>Vacances Vertes et Bleues</h1></a>
            <ul>
                <li>
                    <a href="<?php echo site_url('conseils');?>">Nos Conseils <i class="material-icons">keyboard_arrow_down</i></a>
                    <ul>
                        <li><a href="<?php echo site_url('conseils/precautions');?>">Précautions</a></li>
                        <li><a href="<?php echo site_url('conseils/demander');?>">Vous devez demander</a></li>
                        <li><a href="<?php echo site_url('conseils/reservations');?>">Réservations</a></li>
                        <li><a href="<?php echo site_url('conseils/demarches');?>">Démarches</a></li>
                        <li><a href="<?php echo site_url('conseils/recours');?>">Recours</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo site_url('compte');?>">Déposer une annonce</a></li>
                <li><a href="<?php echo site_url('compte');?>">Mon Compte</a></li>
            </ul>
        </nav>
        <ul id="menu_video" class="row">
            <li>
                <a href="#carte" class="col-md-4 col-xs-12">
                    <i class="material-icons">search</i>
                    Trouver la destination<br/>
                    de vos vacances
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('conseils');?>" class="col-md-4 col-xs-12">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    Avant de louer,<br/>nos conseils
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('compte');?>" class="col-md-4 col-xs-12">
                    <i class="material-icons">cloud_upload</i>
                    Espace Annonceurs
                    <span>
                        dépôt et modifications d'annonce
                    </span>
                </a>
            </li>
        </ul>
    </div>
</section>
