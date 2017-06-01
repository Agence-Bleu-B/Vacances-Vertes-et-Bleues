<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="content" class="row">
	<section id="compte">
		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

			<div class="row"> <!-- top bandeau -->
				<div class="col-xs-12">
					<form method="post" action="<?php echo site_url('compte');?>" class="pull-right">
						<button type="submit" name="deco" class="btn btn-default">Se déconnecter</button>
					</form>
				</div>
				<br><br>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<h2>Bonjour <?php echo $this->session->userdata('firstname'); ?>,</h2>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li role="presentation" class="active h3"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-home" aria-hidden="true"></i><br>Mes Annonces</a></li>
						<li role="presentation" class=" h3"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i><br>Mon Compte</a></li>
						<li role="presentation" class=" h3"><a href="#avis" aria-controls="avis" role="tab" data-toggle="tab"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><br>Leurs Avis</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content col-md-12 col-md-offset-0">
						<div role="tabpanel" class="tab-pane active" id="home">
							<h3>Mes Annonces</h3>
							<button type="button" name="ajoutAnn" class="btn btn-lg btn-vvb center-block"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter une annonce</button>

							<br>
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<i class="fa fa-check" aria-hidden="true"></i> Actives <span class="badge">2</span>
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<!-- Liste annonces en cours -->

											<div class="row">
												<div class="col-xs-12 col-md-3">
													<img src="http://placehold.it/350x250" class="img-responsive img-thumbnail center-block">
													<br>
													<a href="#" class="btn btn-vvb center-block col-xs-12"><i class="fa fa-picture-o" aria-hidden="true"></i> Gestion des images</a>
												</div>
												<div class="col-xs-12 col-md-6">
													<h4><strong>Titre</strong></h4>
													<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													<small class="text-muted">Annonce n°<strong>461</strong></small>
												</div>
												<div class="col-xs-12 col-md-3">
													<p class="text-info">Cette annoce expire dans : <strong>6 mois</strong></p>
													<a href="#" class="btn btn-info center-block"><i class="fa fa-repeat" aria-hidden="true"></i> Renouveler</a>
													<hr>
													<a href="#" class="btn btn-default center-block"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a>
													<br>
													<a href="#" class="btn btn-default center-block text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Désactiver</a>
												</div>
											</div>

											<hr class="hr-vvb">

											<div class="row">
												<div class="col-xs-12 col-md-3">
													<img src="http://placehold.it/350x250" class="img-responsive img-thumbnail center-block">
													<br>
													<a href="#" class="btn btn-vvb center-block col-xs-12"><i class="fa fa-picture-o" aria-hidden="true"></i> Gestion des images</a>
												</div>
												<div class="col-xs-12 col-md-6">
													<h4><strong>Titre</strong></h4>
													<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													<small class="text-muted">Annonce n°<strong>461</strong></small>
												</div>
												<div class="col-xs-12 col-md-3">
													<p class="text-info">Cette annoce expire dans : <strong>6 mois</strong></p>
													<a href="#" class="btn btn-info center-block"><i class="fa fa-repeat" aria-hidden="true"></i> Renouveler</a>
													<hr>
													<a href="#" class="btn btn-default center-block"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a>
													<br>
													<a href="#" class="btn btn-default center-block text-danger"><i class="fa fa-ban" aria-hidden="true"></i> Désactiver</a>
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<i class="fa fa-ban" aria-hidden="true"></i> Inactives <span class="badge">1</span>
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
											<!-- Liste annonces en attente -->

											<div class="row">
												<div class="col-xs-12 col-md-3">
													<img src="http://placehold.it/350x250" class="img-responsive img-thumbnail center-block">
													<br>
													<a href="#" class="btn btn-vvb center-block col-xs-12"><i class="fa fa-picture-o" aria-hidden="true"></i> Gestion des images</a>
												</div>
												<div class="col-xs-12 col-md-6">
													<h4><strong>Titre</strong></h4>
													<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
													<small class="text-muted">Annonce n°<strong>461</strong></small>
												</div>
												<div class="col-xs-12 col-md-3">
													<p class="text-info">Cette annoce expire dans : <strong>6 mois</strong></p>
													<a href="#" class="btn btn-info center-block"><i class="fa fa-repeat" aria-hidden="true"></i> Renouveler</a>
													<hr>
													<a href="#" class="btn btn-default center-block"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier</a>
													<br>
													<a href="#" class="btn btn-success center-block"><i class="fa fa-check" aria-hidden="true"></i> Activer</a>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>
						<div role="tabpanel" class="tab-pane" id="profile">
							<h3>Coordonnées</h3>
							<form class="form-horizontal col-md-10 col-md-offset-1">

								<div class="form-group">
									<label for="inputNom" class="col-sm-2 control-label">Nom <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputNom" placeholder="Nom">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPrenom" class="col-sm-2 control-label">Prenom <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputPrenom" placeholder="Prenom">
									</div>
								</div>
								<div class="form-group">
									<label for="inputAdresse" class="col-sm-2 control-label">Adresse <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputAdresse" placeholder="5 Avenue Anatole France">
									</div>
								</div>
								<div class="form-group">
									<label for="inputCP" class="col-sm-2 control-label">Code Postal <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputCP" placeholder="75007">
									</div>
								</div>
								<div class="form-group">
									<label for="inputVille" class="col-sm-2 control-label">Ville <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputVille" placeholder="Paris">
									</div>
								</div>
								<div class="form-group">
									<label for="inputTel" class="col-sm-2 control-label">Tel. <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputTel" placeholder="02 03 04 05 06">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPortable" class="col-sm-2 control-label">Portable <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputPortable" placeholder="06 07 08 09 10">
									</div>
								</div>
								<div class="form-group">
									<label for="inputFax" class="col-sm-2 control-label">Fax</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputFax" placeholder="02 30 40 50 60">
									</div>
								</div>
								<div class="form-group">
									<label for="inputMail" class="col-sm-2 control-label">Mail <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputMail" placeholder="exemple@mail.fr">
									</div>
								</div>
								<div class="form-group">
									<label for="inputWeb" class="col-sm-2 control-label">Site Web</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputWeb" placeholder="www.exemple.fr">
									</div>
								</div>
								<p class="text-danger pull-right"><i class="fa fa-asterisk" aria-hidden="true"></i> Champs obligatoires</p>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-lg btn-vvb center-block">Enregistrer</button>
									</div>
								</div>

							</form>
						</div>
						<div role="tabpanel" class="tab-pane" id="avis">
							<h3>Leurs avis</h3>
						</div>
					</div>

				</div>

			</div>

		</div>
	</section>

	<!-- <div class="container">
        <div>
			<p>Bonjour <?php echo $this->session->userdata('firstname'); ?>,</p>
			<form method="post" action="<?php echo site_url('compte');?>">
				<button type="submit" name="deco" class="deconnexion"> > Se déconnecter</button>
			</form>
		</div>
	</div> -->
</section>
