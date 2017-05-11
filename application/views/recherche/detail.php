<section id="annonce">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-1">
                <br><br>
                <a class="btn btn-primary" href="#">< Retour</a>
                <br><br>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <?php if ($annonce['couv']): ?>
                    <img class="thumbnail" src="<?php echo site_url('assets/images/annonces/'.$annonce['couv']); ?>" style="width: 100%;" >
                <?php endif; ?>
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
