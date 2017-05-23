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

  </div>

  <div class="col-xs-12 col-lg-8 col-lg-offset-2">
    <section id="liste_annonces">

      <?php  foreach($topann as $val){ ?>
        <div class="row annonce"> <!-- annonce -->

          <div class="col-xs-12 col-md-4"> <!-- photo -->
            <a <?php echo 'href="'.site_url("recherche/detail").'?id='.$val['id'].'&'.$val['urlann'].'"';?>>
              <img class="img-responsive img-thumbnail center-block" src="<?php echo base_url().$val['photocouv'];?>" alt="<?php echo $val['title'];?>">
            </a>
          </div>

          <div class="col-xs-12 col-md-6 infos"> <!-- infos -->
            <div class="row">
              <div class="col-xs-12">
                <h3><a <?php echo 'href="'.site_url("recherche/detail").'?id='.$val['id'].'&'.$val['urlann'].'"';?>><?php echo $val['title'];?></a></h3>
                <h4><a><?php echo $val['region']; echo ' ('.$val['departement'].')'; ?></a></h4><!-- Lien page de la région -->
                <p><?php echo $val['descr_courte'];?></p>
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
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-md-2 text-right text-center-on-sm">
            <div class="col-xs-6 col-md-12 h3"> <!-- étoiles -->
              &nbsp;
              <?php $i = 0;while($i < $val['stars']){ $i++;?>
                <i class="fa fa-star" aria-hidden="true"></i>
              <?php }?>
            </div>
            <!-- <div class="col-xs-4 col-md-12">
            </div> -->
            <div class="col-xs-6 col-md-12">
              <p>À partir de :</p>
              <strong class="h1">
                <?php echo $val['prixbas']['prix']."€"; ?>
              </strong>
              <p>
                <?php echo $val['prixbas']['periode']; ?>
              </p>
            </div>
            <div class="col-xs-6 col-xs-offset-3 col-md-12 col-md-offset-0">
              <button href="<?php echo site_url("recherche/detail").'?id='.$val['id'].'&'.$val['urlann'];?>" class="btn btn-lg btn-block">Découvrir</button>
            </div>
          </div>

        </div>
        <hr>
      <?php } ?><!-- fin Annonce -->

        </section>
  </div>

</div>
