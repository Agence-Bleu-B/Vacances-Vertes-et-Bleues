<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	<title><?php echo $title; ?></title>

	<meta name="description" content="<?php echo $description; ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo css_url('reset');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo css_url('style');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo css_url('mediaqueries');?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <section id="haut">
        <header>
            <a href="https://www.facebook.com/VacancesVertesEtBleues/" class="fb" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <span>
                <a href="<?php echo site_url('compte');?>" >Connexion</a>
            </span>
        </header>
        <div class="container">
            <nav>
                <a href="<?php echo site_url();?>"><h1>Vacances Vertes et Bleues</h1></a>
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
        </div>	
    </section>	
