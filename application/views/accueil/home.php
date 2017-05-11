<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="carte" class="section">
   <!-- <h2>Recherchez le lieu parfait pour vos vacances</h2>-->
    <div class="container">
        <article class="carte">
            <div class="map">
                <!--<div id="tip"></div>-->
                <div id="cmap">
            	</div>
            </div>
        </article>
        <article id="liste_regions">
            <ul>
                <li><a href="<?php echo site_url('recherche');?>?region=6" class="alsace">Grand Est</a></li>
                <li><a href="<?php echo site_url('recherche');?>?region=10"  class="aquitaine">Nouvelle Aquitaine</a></li>
                <li><a href="<?php echo site_url('recherche');?>?region=1" class="auvergne">Auvergne-Rhône-Alpes</a></li>
                <li><a href="<?php echo site_url('recherche');?>?region=2" class="bourgogne">Bourgogne-Franche-Comté</a></li>
                <li><a href="<?php echo site_url('recherche');?>?region=3" class="bretagne">Bretagne</a></li>
                <li><a href="<?php echo site_url('recherche');?>?region=4" class="centre">Centre-Val de Loire</a></li>
                <li><a href="<?php echo site_url('recherche');?>?region=5" class="corse">Corse</a></li>
                <li><a href="<?php echo site_url('recherche');?>?region=8" class="ile">Île-de-France </a></li>
                <li><a href="<?php echo site_url('recherche');?>?region=11" class="languedoc">Occitanie</a></li>
                <li><a href="<?php echo site_url('recherche');?>?region=7" class="nord">Hauts de France</a></li>
                <li><a href="<?php echo site_url('recherche');?>?region=9" class="normandie">Normandie</a></li>
                <li><a href="<?php echo site_url('recherche');?>?region=12" class="loire">Pays de la Loire</a></li>
                <li><a href="<?php echo site_url('recherche');?>?region=13" class="provence">Provence-Alpes-Côte d'Azur</a></li>
                <br>
                <li><a href="<?php echo site_url('recherche');?>?region=14" class="domtom">Dom-Tom</a></li>
            </ul>
        </article>
        <ul id="esp_pub">
            <li>
                <a href="<?php echo site_url('compte');?>" target="_blank">
                    <?php echo img('pubs/10D-home2.png','bleuB');?>
                </a>
            </li>
        <?php
        foreach($pubs as $val){ ?>
            <li>
                <a href="http://<?php echo $val['link']; ?>" target="_blank">
                    <?php $img = 'pubs/'.$val['file']; echo img($img,$val['file']);?>
                </a>
            </li>
        <?php } ?>
        </ul>
    </div>
</section>
<section id="top_annonces" class="section">
    <div class="container">
        <h3 class="top">Top Annonces</h3>
        <ul class="annonces_container"> <!-- Block -->
            <!-- Annonce -->
            <?php  foreach($topann as $val){ ?>
            <li class="annonce">
                <ul class="infos_annonce row"> <!-- Inline -->
                    <li class="col-md-4 col-xs-12">
                    	<a <?php echo 'href="'.site_url("recherche/detail").'?id='.$val['id'].'&'.$val['urlann'].'"';?>>
                    		<img <?php echo 'src="'.base_url().$val['photocouv'].'"';?>>
                    	</a>
                    </li>
                    <li class="col-md-6">
                        <h2><a <?php echo 'href="'.site_url("recherche/detail").'?id='.$val['id'].'&'.$val['urlann'].'"';?>><?php echo $val['title'];?></a></h2>
                        <h3><a><?php echo $val['region']; echo '('.$val['departement'].')'; ?></a></h3><!-- Lien page de la région -->
                        <p><?php echo $val['descr_courte'];?></p>
                        <ul class="icones_annonce">
                        <?php if(isset($val['wifi']) && $val['wifi'] ==1) {?>
                            <li><img src="<?php echo base_url().'assets/images/picto/pictowifi.png';?>"></li>
                        <?php } if(isset($val['acces']) && $val['acces'] ==1) {?>
                            <li><img src="<?php echo base_url().'assets/images/picto/pictopmr.png';?>"></li>
                        <?php } if(isset($val['animaux']) && $val['animaux'] ==1) {?>
                            <li><img src="<?php echo base_url().'assets/images/picto/pictonimo.png';?>"></li>
                        <?php } if(isset($val['cheque']) && $val['cheque'] ==1) {?>
                            <li><img src="<?php echo base_url().'assets/images/picto/pictocheque.png';?>"></li>
                        <?php }?>
                        </ul>
                    </li>
                    <li class="col-md-2">
                        <!-- étoiles -->
                        <p>
                        <?php $i = 0;while($i < $val['stars']){ $i++;?>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        <?php }?>
                        </p>
                        <!-- prix-->
                        <p>à partir de</p>
                        <?php echo $val['prixbas']; ?>
                        <a <?php echo 'href="'.site_url("recherche/detail").'?id='.$val['id'].'&'.$val['urlann'].'"';?> class="annonce_button">Découvrir</a>
                    </li>
                </ul>
            </li>
            <?php } ?><!-- fin Annonce -->
        </ul>

    </div>
</section>
<style type="text/css">
	footer {
	    position: relative;
	    z-index: 999;
	    bottom: 0;
	}

</style>
