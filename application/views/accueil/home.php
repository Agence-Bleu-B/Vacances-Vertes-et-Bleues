<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="content" class="row"> <!-- content -->
  <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

    <div class="row"> <!-- content top -->
      <!--<div id="tip"></div>-->
      <div id="cmap" class="col-xs-12 col-sm-7 col-lg-5"> <!-- MAP -->
        <!-- jQuery -->
      </div>

      <div class="col-xs-12 col-sm-4 col-sm-offset-1 col-lg-2 col-lg-offset-0"> <!-- Regions -->
        <ul class="list-unstyled">
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
      </div>

      <div class="col-xs-12 col-sm-12 col-lg-5"> <!-- Pubs -->
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
          </ul>
        </div>
    </div>

    <div class="row"> <!-- liste annonces titre -->
      <h2 class="text-center">Top Annonces</h2>
    </div>

    <?php  foreach($topann as $val){ ?>
      <div class="row"> <!-- Inline -->
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
        </div>
    <?php } ?><!-- fin Annonce -->

  </div>
</div>
