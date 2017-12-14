<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <section id="content" class="row">
    <div class="col-xs-12">

      <div class="row"> <!-- top bandeau -->
        <div class="col-xs-12">
          <!--<a class="btn btn-primary" href="<?php echo site_url('recherche');?>">
            < Retour</a>-->
           
        </div>
        <br><br>
      </div>

    </div>

    <div class="col-xs-12"> <!-- detail annonce -->
      <section id="detail_annonce">
        <div class="row">  
          <h2 class="col-md-12"><?php echo $annonce['title']; ?></h2>
            
        </div>
        <div class="row">  
              <h4 class="col-md-12"><?php echo $annonce['town']; ?></h4>
        </div>

        <div class="row"> <!-- slider + infos + tarifs -->

          <div class="col-xs-12 col-md-4"> <!-- slider -->
            <div id="slider" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>

                <?php $nbSlides = count($images); ?>
                <?php for($i = 1 ; $i < $nbSlides ; $i++): ?>
                <li data-target="#slider" data-slide-to="<?php echo $i; ?>"></li>
                <?php endfor; ?>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <?php foreach ($images as $img): ?>
                  
                <?php if ($img == $images[0]): // Si 1ere images ?>
                <div class="item active">
                  <img src="<?php echo img_url("annonces/".$img['file']);?>" alt="<?php echo $annonce['title']; ?>">
                  <div class="carousel-caption">
                    <!-- legende -->
                  </div>
                </div>
                <?php else: // Sinon ?>
                <div class="item">
                  <img src="<?php echo img_url("annonces/".$img['file']);?>" alt="<?php echo $annonce['title']; ?>">
                  <div class="carousel-caption">
                    <!-- legende -->
                  </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div> <!-- /slider -->

          <div class="col-xs-12 col-md-4"> <!-- infos -->
            
            <h3>Informations</h3>

            <div class="col-md-6">
              <ul class="list-unstyled">
                <li>Capacité : <strong><?php echo $annonce['capacite']; ?></strong></li>
                <li>Durée minimun séjour : <strong><?php echo $annonce['duree_sejour']; ?></strong></li>
                <li>Couchages : <strong><?php echo $annonce['couchage']; ?></strong></li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="list-unstyled">
                <li>Type de logement : <strong><?php echo $annonce_type[$annonce['type']-1]['type'];?></strong></li>
                <li>Chambres / Emplacements : <strong><?php echo $annonce['chambre']; ?></strong></li>
                <li>Surface : <strong><?php echo $annonce['surface']; ?></strong></li>
              </ul>
            </div>

          </div>
          <div class="col-xs-12 col-md-4">
            <h3>Description</h3>
            <p class="text-justify">
              <?php echo $annonce['descr_longue']; ?>
            </p>
          </div>
        </div>

          

        </div> <!-- row: slider + infos + tarifs -->
        <div class="row"><!-- row image cliquable slider-->
          <div class="hidden-xs col-md-4">
            
                
                <?//php $nbSlides = count($images); ?>
                <?php for($i = 0 ; $i < $nbSlides ; $i++): ?>
                  <?php if($i==0||$i==5){echo '<div class="row">';}?>
                  
                <img class="col-md-2 img-slide" data-target="#slider" data-slide-to="<?php echo $i; ?>" src="<?php echo img_url("annonces/".$images[$i]['file']);?>">
                <?php if($i==4||$i==10||$i==$nbSlides-1){echo '</div>';}?>
                <?php endfor; ?>        
          
          </div>
          <div class="col-xs-12 col-md-7"> <!-- tarifs -->
            <h3>À partir de</h3>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6  text-center-on-sm">
                <h4>Hors Saison</h4>
                <p>
                  <strong class="h1"><?php echo $annonce['hsnuit']; ?> €</strong>
                  La nuit
                </p>
                <p>
                  <strong class="h1"><?php echo $annonce['hsweek']; ?> €</strong>
                  La semaine
                </p>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6  text-center-on-sm">
                <h4>Pleine Saison</h4>
                <p>
                  <strong class="h1"><?php echo $annonce['psnuit']; ?> €</strong>
                  La nuit
                </p>
                <p>
                  <strong class="h1"><?php echo $annonce['psweek']; ?> €</strong>
                  La semaine
                </p>
              </div>
            </div>
          </div>
        </div>


        <div class="row"> <!-- desc + maps + contact -->

          

          <div class="col-xs-12 col-md-4"> <!-- maps -->
            <h3>Localisation</h3>
            <div class="thumbnail">
              <div class="map_responsive">
                <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo str_replace(" ", "+ ", $annonce['adress'] . " " . $annonce['cp'] . "
                  " . $annonce['town']); ?>&key=AIzaSyCVJ3Q1FZbMOBBdpgXHElbvNIk4t5myAkI&zoom=9" allowfullscreen></iframe>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-md-4"> <!-- contact -->
            <h3>Contacter le propriétaire</h3>
            <table class="table table-condensed">
              <tr>
                <td><i class="fa fa-user" aria-hidden="true" title="Fixe"></i></td>
                <td class="text-capitalize">
                  <?php echo $infos_client['firstname']; ?>
                  <?php echo $infos_client['lastname']; ?>
                </td>
              </tr>
              <?php
                    if($infos_client['phone']){ ?>
                <tr>
                  <td><i class="fa fa-phone" aria-hidden="true" title="Fixe"></i></td>
                  <td>
                    <?php echo ' '.$infos_client['phone']; ?>
                  </td>
                </tr>
                <?php }
                      if($infos_client['mobile']){ ?>
                <tr>
                  <td><i class="fa fa-mobile" aria-hidden="true" title="Mobile"></i></td>
                  <td>
                    <?php echo ' '.$infos_client['mobile']; ?>
                  </td>
                </tr>
                <?php }
                        if($infos_client['email']){ ?>
                <tr>
                  <td><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i></td>
                  <td>
                    <?php echo ' '.$infos_client['email']; ?>
                  </td>
                </tr>
                <?php }
                          if($infos_client['url']){ ?>
                <tr>
                  <td><i class="fa fa-link" aria-hidden="true" title="Site Web"></i></td>
                  <td>
                    <a href="<?php echo ' '.$infos_client['url']; ?>">
                      <?php echo ' '.$infos_client['url']; ?>
                    </a>
                  </td>
                </tr>
                <?php } ?>
            </table>
          </div>

        </div> <!-- row: desc + maps + contact -->

      </section>


    </div> <!-- detail annonce -->

  </section>
