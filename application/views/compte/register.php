<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="inscription">

<div class="container">
		<a href="<?php echo site_url();?>" class="back_button">< Retour à l'accueil</a>
	<div class="row">
		<article class="inscrivez_vous col-md-6">
	        <h5>Inscrivez-vous</h5>
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
                    <button type="submit" class="btn btn-primary" name="register">Enregistrer mon compte</button>
                </div>
			</form>
		</article>	
		<article class="deja_un_compte col-md-6">
			<h5>Voir mon compte</h5>
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
				<button type="submit" class="btn btn-primary" name="connect">Connexion</button>
			</fieldset>
		</form>
		<?php
        foreach($pubs_vvb as $val){ 
        	$sr = 'pubs/'.$val['file'];
	    	echo my_img($sr,$val['file'],$class = 'img_responsive img_banner');
        } ?>
		</article>
	</div>
	</div>
</section>
