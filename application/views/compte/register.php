<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="content" class="row">

	<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

		<div class="row"> <!-- top bandeau -->
			<div class="col-xs-12">
				<a class="btn btn-primary" href="<?php echo site_url();?>">
					< Retour à l'accueil</a>
			</div>
			<br><br>
		</div>

	</div>

	<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
		<section id="inscription">

			<div class="row"> <!-- forms -->

				<div class="col-xs-12 col-md-6"> <!-- inscription -->
					<h3>Inscrivez-vous</h3>
					<form method="post" action="">
						<div class="form-group">
							<div class="form-group">
								<select class="form-control" name="civ">
									<option value="etbmt">Etablissement</option>
									<option value="monsieur">Monsieur</option>
									<option value="madame">Madame</option>
									<select/>
									<div class="field-notice" rel="civ"></div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="firstname" value="<?php echo set_value('firstname');?>" placeholder="Prénom"/>
									<?php echo form_error('firstname'); ?>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="lastname" value="<?php echo set_value('lastname');?>" placeholder="Nom"/>
									<?php echo form_error('lastname'); ?>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="email" value="<?php echo set_value('email');?>" placeholder="E-mail"/>
									<?php echo form_error('email'); ?>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="pass" value="<?php echo set_value('pass');?>" placeholder="Mot de passe *"/>
									<?php echo form_error('pass'); ?>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="confirm" value="<?php echo set_value('confirm');?>" placeholder="Confirmez votre mot de passe *"/>
									<?php echo form_error('confirm'); ?>
								</div>
								<button type="submit" class="btn btn-primary btn-lg center-block" name="register">Enregistrer mon compte</button>
							</div>
						</form>
					</div>

					<div class="col-xs-12 col-md-6"> <!-- inscription -->
						<h3>Voir mon compte</h3>
						<form method="post" action="">
							<fieldset>
								<div class="form-group">
									<input type="text" class="form-control" name="email2" value="<?php echo set_value('email2');?>" placeholder="E-mail"/>
									<?php echo form_error('email2'); ?>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="pass2" value="" placeholder="Mot de passe"/>
									<?php echo form_error('pass2'); ?>
								</div>
								<div class="form-group">
									<a href="<?php echo site_url('...');?>"> Mot de passe oublié ?</a><!-- à faire -->
									<div id="resetPassMsg"></div>
								</div>
								<button type="submit" class="btn btn-primary btn-lg center-block" name="connect">Connexion</button>
							</fieldset>
						</form>
						<br>
						<div class="col-xs-12 pubs">
							<?php
							foreach($pubs_vvb as $val){ ?>
			          <a href="<?php echo site_url($val['link']); ?>">
			            <?php $img = 'pubs/'.$val['file']; echo my_img($img,$val['file'],"img-responsive center-block");?>
			          </a>
							<?php } ?>
						</div>
					</div>
				</div>

		</section>
	</div>
</section>
