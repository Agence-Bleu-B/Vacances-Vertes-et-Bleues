<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="content" class="row">
	<section id="recherche" class="col-xs-12 col-md-12 col-lg-2">
		<aside>
			<h3>Trouver une location</h3>
			<form method="post" action="">
				<div class="visible-xs-block visible-sm-block">
					<a href="#" class="open">Affiner la recherche <i class="fa fa-caret-down" aria-hidden="true"></i></b></a>
				</div>
				<div id="searchContent" class="hidden-xs hidden-sm">
					<div class="col-xs-12 col-sm-4 col-lg-12">
						<h4>Rechercher</h4>
						<input type="text" name="mc" placeholder="Mots Clés" class="form-control"></input>
						<br>
						<select id="pays" name="pays" class="form-control">
							<option value="">-- Pays --</option>
						</select>
						<br>
						<select id="region" name="region" class="form-control">
							<option value="">-- Régions --</option>
						</select>
						<br>
						<select id="departement" name="departement" class="form-control">
							<option value="">-- Départements--</option>
						</select>
					</div>
					<div class="col-xs-12 col-sm-4 col-lg-12">
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
					<div class="col-xs-12 col-sm-4 col-lg-12">
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
					</div>
					<button type="submit" name="affine" class="btn btn-primary btn-block">Rechercher</button>
				</div>
			</form>
		</aside>
	</section>

	<section id="liste_annonces" class="col-xs-12 col-md-12 col-lg-7">
			<h3>Résultats de recherche</h3>

			<?php  foreach($listannonces as $val){ ?>
				<div class="row annonce"> <!-- annonce -->

          <div class="col-xs-12 col-md-4"> <!-- photo -->
            <a <?php echo 'href="'.site_url("recherche/detail").'?id='.$val['id'].'&'.$val['urlann'].'"';?>>
              <img class="img-responsive img-thumbnail center-block couv" src="<?php echo base_url().$val['photocouv'];?>" alt="<?php echo $val['title'];?>">
            </a>
          </div>

          <div class="col-xs-12 col-md-8"> <!-- infos + prix -->

            <div class="col-xs-12 col-md-9 infos"> <!-- infos -->
              <div class="row">
                <div class="col-xs-12">
                  <h3><a <?php echo 'href="'.site_url("recherche/detail").'?id='.$val['id'].'&'.$val['urlann'].'"';?>><?php echo $val['title'];?></a></h3>
                  <h4><?php echo $val['departement']; echo ' ('.$val['region'].')'; ?></h4><!-- Lien page de la région -->
                  <p class="text-justify"><?php echo $val['descr_courte'];?></p>
                </div>
              </div>
              <div class="row"> <!-- pictos -->
                <div class="col-xs-12">
                  <?php if (isset($val['wifi']) && $val['wifi'] == 1): ?>
                    <img src="<?php echo base_url().'assets/images/picto/pictowifi.png';?>">
                  <?php endif; ?>
                  <?php if (isset($val['acces']) && $val['acces'] == 1): ?>
                    <img src="<?php echo base_url().'assets/images/picto/pictopmr.png';?>">
                  <?php endif; ?>
                  <?php if (isset($val['animaux']) && $val['animaux'] == 1): ?>
                    <img src="<?php echo base_url().'assets/images/picto/pictonimo.png';?>">
                  <?php endif; ?>
                  <?php if (isset($val['cheque']) && $val['cheque'] == 1): ?>
                    <img src="<?php echo base_url().'assets/images/picto/pictocheque.png';?>">
                  <?php endif; ?>
                  <img src="#" alt="">
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-3 text-right text-center-on-sm"> <!-- prix + etoiles -->
              <div class="col-xs-6 col-md-12 h4 vertical-align-item-on-sm"> <!-- étoiles -->
                <!-- &nbsp; -->
                <?php $i = 0;while($i < $val['stars']){ $i++;?>
                  <i class="fa fa-star" aria-hidden="true"></i>
                <?php }?>
              </div><!--
           --><div class="col-xs-6 col-md-12 vertical-align-item-on-sm"> <!-- prix -->
                <p>À partir de:</p>
                <strong class="h1">
                  <?php echo $val['prixbas']['prix']."€"; ?>
                </strong>
                <p>
                  <?php echo $val['prixbas']['periode']; ?>
                </p>
              </div>
            </div>

            <div class="col-xs-6 col-xs-offset-3 col-md-12 col-md-offset-0">
              <button href="<?php echo site_url("recherche/detail").'?id='.$val['id'].'&'.$val['urlann'];?>" class="btn btn-lg  pull-right col-centered-on-sm">Découvrir</button>
            </div>

          </div>


        </div>
        <hr>
      <?php } ?><!-- fin Annonce -->
	</section>

	<div class="col-xs-12 col-lg-3 pubs">
		<h3></h3>
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
</section>

	<div class="row">
		<div class="col-xs-12 text-center">
				<?php echo $pagination; ?>
		</div>
	</div>
