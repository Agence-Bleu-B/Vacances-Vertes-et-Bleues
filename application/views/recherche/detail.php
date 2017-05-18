<section id="annonce">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-1">
                <br><br>
                <a class="btn btn-primary" href="<?php echo site_url('recherche');?>">< Retour</a>
                <br><br>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="photos_container">
                <!-- #region Jssor Slider Begin -->
                <!-- Generator: Jssor Slider Maker -->
                <!-- Source: http://www.jssor.com -->
                <!-- This is deep minimized code which works independently. -->
                <div id="jssor_1">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssor_1_loading">
                        <div class="jssor_1_child"></div>
                    <div class="jssor_1_child_2"></div>
                </div>
                <div data-u="slides" id="jslides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 400px; overflow: hidden;-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;">
                <?php $i=0;foreach($photos as $value){
                    if($i==0){?>
                        <div data-p="144.50">
                            <img data-u="image" class="jssor_2" src=<?php echo $photos[0];?> />
                            <img data-u="thumb" src=<?php echo $photos[0];?> />
                        </div>
                    <?php }else{?>
                        <div data-p="144.50" style="display: none;">
                            <img data-u="image" src=<?php echo $photos[$i];?> />
                            <img data-u="thumb" src=<?php echo $photos[$i];?> />
                        </div>
                <?php }$i++; } ?>
                </div>
                <!-- Thumbnail Navigator -->
                <div data-u="thumbnavigator" class="jssort01" data-autocenter="1">
                    <!-- Thumbnail Item Skin Begin -->
                    <div data-u="slides" class="slides" style="cursor: default;">
                        <div data-u="prototype" class="p">
                            <div class="w">
                                <div data-u="thumbnailtemplate" class="t"></div>
                            </div>
                            <div class="c"></div>
                        </div>
                    </div>
                    <!-- Thumbnail Item Skin End -->
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
                <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
            </div>
            <script type="text/javascript">jssor_1_slider_init();</script>
                <!-- #endregion Jssor Slider End -->
            </div>
            </div>

            <div class="col-md-4">
                <h3><?php echo $annonce['title']; ?></h3>
                <h4><?php echo $annonce['town']; ?></h4>
                <h5>La location ou le camping</h5>

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

            <div class="col-md-4">
                <h5>A partir de</h5>
                <ul class="tarif_box">
                    <li class="periode_title">Hors Saison</li>
                        <li><?php echo $annonce['hsnuit']; ?> € <span class="periode_text">la nuit</span></li>
                        <li><?php echo $annonce['hsweek']; ?> € <span class="periode_text">la semaine</span></li>
                    <li class="periode_title">Pleine Saison</li>
                        <li><?php echo $annonce['psnuit']; ?> € <span class="periode_text">la nuit</span></li>
                        <li><?php echo $annonce['psweek']; ?> € <span class="periode_text">la semaine</span></li>
                </ul>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <h5>Description</h5>
                <p><?php echo $annonce['descr_longue']; ?></p>
            </div>

            <div class="col-md-4">
                <h5>Localisation</h5>
                <div class="thumbnail">
                    <div class="map_responsive">
                        <iframe width="600" height="450" frameborder="0" style="border:0"src="https://www.google.com/maps/embed/v1/place?q=<?php echo str_replace(" ", "+", $annonce['adress'] . " " . $annonce['cp'] . " " . $annonce['town']); ?>&key=AIzaSyCVJ3Q1FZbMOBBdpgXHElbvNIk4t5myAkI&zoom=9" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <h5>Contacter le propriétaire</h5>
                <table class="table table-condensed">
                        <tr>
                            <td><i class="fa fa-user" aria-hidden="true" title="Fixe"></i></td>
                            <td class="text-capitalize"><?php echo $infos_client['firstname']; ?> <?php echo $infos_client['lastname']; ?></td>
                        </tr>
                    <?php
                    if($infos_client['phone']){ ?>
                        <tr>
                            <td><i class="fa fa-phone" aria-hidden="true" title="Fixe"></i></td>
                            <td><?php echo ' '.$infos_client['phone']; ?></td>
                        </tr>
                    <?php }
                    if($infos_client['mobile']){ ?>
                        <tr>
                            <td><i class="fa fa-mobile" aria-hidden="true" title="Mobile"></i></td>
                            <td><?php echo ' '.$infos_client['mobile']; ?></td>
                        </tr>
                    <?php }
                    if($infos_client['email']){ ?>
                        <tr>
                            <td><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i></td>
                            <td><?php echo ' '.$infos_client['email']; ?></td>
                        </tr>
                    <?php }
                    if($infos_client['url']){ ?>
                        <tr>
                            <td><i class="fa fa-link" aria-hidden="true" title="Site Web"></i></td>
                            <td><a href="<?php echo ' '.$infos_client['url']; ?>"><?php echo ' '.$infos_client['url']; ?></a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</section>
