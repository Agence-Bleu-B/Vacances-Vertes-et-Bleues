<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="inscription">

<div class="container">
		<a href="<?php echo site_url();?>" class="back_button">< Retour à l'accueil</a>
	<div class="row">
        <div class="col-md-3"></div>
		<article class="deja_un_compte col-md-6">
			<h5>Administration</h5>
			<form method="post" action="">
			<fieldset>
				<div class="form-group">
					<input type="text" class="form-control" name="email" value="<?php echo set_value('email');?>" placeholder="E-mail"/>
                    <?php echo form_error('email'); ?>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="pass" value="" placeholder="Mot de passe"/>
                    <?php echo form_error('pass'); ?>
				</div>           
				<button type="submit" class="btn btn-primary" name="connect">Connexion</button>
			</fieldset>
		</form>
		</article>
        <div class="col-md-3"></div>
	</div>
	</div>
</section>
