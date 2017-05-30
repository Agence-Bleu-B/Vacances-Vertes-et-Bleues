<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="content" class="row">
	<section id="recherche" class="col-md-2">
		<aside>
			<h3>Trouver une location</h3>
			<form method="post" action="../22/recherche">
				<div class="visible-xs-block visible-sm-block">
					<a href="#rech_aff" class="icon_menu open">Affiner la recherche <i class="material-icons">keyboard_arrow_down</i></a>
					<a href="#" class=" icon_menu close">Fermer <i class="material-icons">keyboard_arrow_up</i></a>
				</div>
				<div>
					<input type="text" name="mc" placeholder="Mots Clés" class="input_text"></input>
					<br>
					<select id="pays" name="pays">
						<option value="">-- Pays --</option>
					</select>
					<br>
					<select id="region" name="region">
						<option value="">-- Régions --</option>
					</select>
					<br>
					<select id="departement" name="departement">
						<option value="">-- Départements--</option>
					</select>
				</div>
				<div>
					<h4>Type de location</h4>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_1" id="checkbox_1"></input>
							Camping - Mobil-home
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_2" id="checkbox_2"></input>
							Gîte - Location Insolite
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_3" id="checkbox_3"></input>
							Chambre d'hôtes
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_4" id="checkbox_4"></input>
							Maison - Villa
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_5" id="checkbox_5"></input>
							Mobil-Home - Chalet
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_6" id="checkbox_6"></input>
							Hôtel - Auberge
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_7" id="checkbox_7"></input>
							Village Vacances
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_8" id="checkbox_8"></input>
							Appartement
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_9" id="checkbox_9"></input>
							Chalet à la montagne
						</label>
					</div>
				</div>
				<div>
					<h4>Options</h4>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_10" id="checkbox_10" class="checkbox"></input>
							Wifi gratuit
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_11" id="checkbox_11" class="checkbox"></input>
							Accès Handicapé
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_12" id="checkbox_12" class="checkbox"></input>
							Chèques Vacances
						</label>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="checkbox_13" id="checkbox_13" class="checkbox"></input>
							Animaux Acceptés
						</label>
					</div>
					<button type="submit" name="affine" class="btn btn-primary btn-block">Rechercher</button>
				</div>
			</form>
		</aside>
	</section>

	<section id="liste_annonces" class="col-md-7">
			<h3>Résultats de recherche</h3>
	</section>

	<div class="col-md-3 pubs">
		<h3 class="text-hide">Pubs</h3>
		<?php
		foreach($pubs_vvb as $val){ ?>
			<a href="<?php echo site_url($val['link']); ?>">
				<?php $img = 'pubs/'.$val['file']; echo my_img($img,$val['file'],"img-responsive center-block");?>
			</a>
		<?php }
		foreach($pubs as $val){ ?>
			<a href="http://<?php echo $val['link']; ?>" target="_blank">
				<?php $img = 'pubs/'.$val['file']; echo my_img($img,$val['file'],"img-responsive center-block");?>
			</a>
		<?php } ?>
	</div>
	<?php //echo $pagination; ?>
</section>
