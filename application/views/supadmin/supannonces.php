<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$menu_pos = '';
if(isset($client)) // si annonces d'un client
{
    $menu_pos = ' > ' . $client['lastname'] . ' ' . $client['firstname'];
}
else if(isset($annonce)) // si annonces seule
{
    $menu_pos = ' > ' . $annonce['title'];
}

?>
<section id="admin">
	<div class="container">

        <?php $this->load->view('common/menusupadmin'); ?>

        <?php
        if(isset($client)){ // Si client
        ?>
        <br>
        <div class="row">
            <a class="btn btn-primary col-md-2" href="<?php echo site_url('supadmin/clients/'.$client['id']); ?>">< <i class="fa fa-user" aria-hidden="true"></i> Retour au client</a>
        </div>
        <?php } //fin
        else if(isset($annonce)){ // Si annonce seule
        ?>
        <br>
        <div class="row">
            <a class="btn btn-primary col-md-2" href="<?php echo site_url('supadmin/annonces'); ?>">< <i class="fa fa-file-text" aria-hidden="true"></i> Retour aux annonces</a>
        </div>
        <?php } //fin ?>

        <div class="row">
            <article class="supadmin col-md-12">
                <h5>Panneau d'administration > Annonces<?php echo $menu_pos; ?></h5>
            </article>
        </div>

        <div class="row">
            <?php
            if($annonce){ // Si annonce Unique
            ?>
            <div class="col-md-9">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h6 class="panel-title"><i class="fa fa-file-text" aria-hidden="true"></i> Fiche annonce n°<?php echo $annonce['id']; ?></h6>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed table-stripped">
                            <tbody>
                                <tr>
                                    <th><i class="fa fa-font" aria-hidden="true"></i></th><th><strong> Titre</strong></th>
                                    <td><?php echo $annonce['title']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-sliders" aria-hidden="true"></i></th><th><strong> Formule</strong></th>
                                    <td><?php echo $annonce['formule']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-star" aria-hidden="true"></i></th><th><strong> Etoiles</strong></th>
                                    <td><?php echo $annonce['stars']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-building" aria-hidden="true"></i></th><th><strong> Type</strong></th>
                                    <td><?php echo $annonce_type[$annonce['type']-1]['type'];?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-link" aria-hidden="true"></i></th><th><strong> Url</strong></th>
                                    <td><?php echo $annonce['url']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-address-card" aria-hidden="true"></i></th><th><strong> Adresse</strong></th>
                                    <td>
                                        <address>
                                            <?php echo $annonce['adress']; ?>
                                            <br>
                                            <?php echo $annonce['cp']; ?> <?php echo $annonce['town']; ?>
                                        </address>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-phone" aria-hidden="true"></i></th><th><strong> Fixe</strong></th>
                                    <td><?php echo $annonce['fixe']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-mobile" aria-hidden="true"></i></th><th><strong> Portable</strong></th>
                                    <td><?php echo $annonce['port']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-fax" aria-hidden="true"></i></th><th><strong> Fax</strong></th>
                                    <td><?php echo $annonce['fax']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-envelope" aria-hidden="true"></i></th><th><strong> Mail</strong></th>
                                    <td><?php echo $annonce['mail']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-file" aria-hidden="true"></i></th><th><strong> Description courte</strong></th>
                                    <td><?php echo $annonce['descr_courte']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-file-text" aria-hidden="true"></i></th><th><strong> Description longue</strong></th>
                                    <td><?php echo $annonce['descr_longue']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-users" aria-hidden="true"></i></th><th><strong> Capacité</strong></th>
                                    <td><?php echo $annonce['capacite']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-home" aria-hidden="true"></i></th><th><strong> Chambre(s)</strong></th>
                                    <td><?php echo $annonce['chambre']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-bed" aria-hidden="true"></i></th><th><strong> Couchage(s)</strong></th>
                                    <td><?php echo $annonce['couchage']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-crop" aria-hidden="true"></i></th><th><strong> Surface</strong></th>
                                    <td><?php echo $annonce['surface']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-clock-o" aria-hidden="true"></i></th><th><strong> Durée minimum de séjour</strong></th>
                                    <td><?php echo $annonce['duree_sejour']; ?></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-wheelchair" aria-hidden="true"></i></th><th><strong> Accès hadicapé</strong></th>
                                    <td>
                                    <?php if ($annonce['acces']): ?>
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    <?php else: ?>
                                        <i class="fa fa-square-o" aria-hidden="true"></i>
                                    <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-wifi" aria-hidden="true"></i></th><th><strong> Wifi</strong></th>
                                    <td>
                                    <?php if ($annonce['wifi']): ?>
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    <?php else: ?>
                                        <i class="fa fa-square-o" aria-hidden="true"></i>
                                    <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-paw" aria-hidden="true"></i></th><th><strong> Animaux</strong></th>
                                    <td>
                                    <?php if ($annonce['animaux']): ?>
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    <?php else: ?>
                                        <i class="fa fa-square-o" aria-hidden="true"></i>
                                    <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-credit-card" aria-hidden="true"></i></th><th><strong> Chèques</strong></th>
                                    <td>
                                    <?php if ($annonce['cheque']): ?>
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    <?php else: ?>
                                        <i class="fa fa-square-o" aria-hidden="true"></i>
                                    <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-picture-o" aria-hidden="true"></i></th><th><strong> Image de couverture</strong></th>
                                    <td>
                                        <?php if ($annonce['couv']): ?>
                                            <div class="thumbnail">
                                                <img src="<?php echo site_url('assets/images/annonces/'.$annonce['couv']); ?>" style="width: 100%;" >
                                            </div>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-map-marker" aria-hidden="true"></i></th><th><strong> Google map</strong></th>
                                    <td>
                                        <div class="thumbnail">
                                            <div class="map_responsive">
                                                <iframe width="600" height="450" frameborder="0" style="border:0"src="https://www.google.com/maps/embed/v1/place?q=<?php echo str_replace(" ", "+", $annonce['adress'] . " " . $annonce['cp'] . " " . $annonce['town']); ?>&key=AIzaSyCVJ3Q1FZbMOBBdpgXHElbvNIk4t5myAkI&zoom=9" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h6 class="panel-title"><i class="fa fa-euro" aria-hidden="true"></i> Tarifs</h6>
                    </div>
                    <div class="panel-body">
                        <table class="table table-condensed">
                            <tr>
                                <th><strong>Pleine-saison Nuit</strong></th>
                                <td class="text-center"><?php echo $annonce['psnuit']; ?></td>
                                <td>€</td>
                            </tr>
                            <tr>
                                <th><strong>Hors-saison Nuit</strong></th>
                                <td class="text-center"><?php echo $annonce['hsnuit']; ?></td>
                                <td>€</td>
                            </tr>
                            <tr>
                                <th><strong>Pleine-saison Semaine</strong></th>
                                <td class="text-center"><?php echo $annonce['psweek']; ?></td>
                                <td>€</td>
                            </tr>
                            <tr>
                                <th><strong>Hors-saison Semaine</strong></th>
                                <td class="text-center"><?php echo $annonce['hsweek']; ?></td>
                                <td>€</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h6 class="panel-title"><i class="fa fa-cogs" aria-hidden="true"></i> Actions</h6>
                    </div>
                    <div class="panel-body">
                        Client : <?php echo $infos_client['firstname']; ?> <?php echo $infos_client['lastname']; ?>
                        <br><br>
                        <a href="<?php echo site_url('supadmin/clients/'.$infos_client['id']);?>" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i> Voir la fiche client</a>
                        <br><br>
                        <a href="<?php echo site_url('recherche/detail?id='.$annonce['id']);?>" class="btn btn-default" target="_blank"><i class="fa fa-search" aria-hidden="true"></i> Voir l'annonce en ligne</a>
                        <br><br>
                        <a href="<?php echo site_url('supadmin/edit/annonce/'.$annonce['id']);?>" class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier l'annonce</a>
                    </div>
                </div>
            </div>

            <?php
            } //Fin annonce unique
            else // Si toutes annonces
            {
            ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h6 class="panel-title">Recherche</h6>
                        </div>
                        <div class="panel-body">
                            <strong>search body</strong>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <table class="table table-striped table-condensed table-bordered col-md-12">
                    <caption><?php echo count($liste_annonces); ?> Annonce<?php if(count($liste_annonces)>1) echo "s"; ?></caption>
                    <thead>
                        <tr>
                            <th><strong>#</strong></th>
                            <th><strong><i class="fa fa-cogs" aria-hidden="true"></i></strong></th>
                            <th><strong>Formule</strong></th>
                            <th><strong>Titre</strong></th>
                            <th><strong>Type</strong></th>
                            <th><strong>Adresse</strong></th>
                            <th><strong>Contacts</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($liste_annonces as $val){ ?>
                            <tr>
                                <th><?php echo $val['id']; ?></th>
                                <td>
                                    <a href="<?php echo site_url('supadmin/annonces/info/'.$val['id']); ?>"><i class="fa fa-file-text" aria-hidden="true" title="Voir l'annonce"></i></a>
                                    <br>
                                    <a href="<?php echo site_url('supadmin/edit/annonce/'.$val['id']); ?>"><i class="fa fa-pencil" aria-hidden="true" title="Modifier l'annonce"></i></a>
                                </td>
                                <td><?php echo $val['formule']; ?></td>
                                <td><?php echo $val['title']; ?></td>
                                <td><?php echo $annonce_type[$val['type']-1]['type'];?></td>
                                <td>
                                    <address>
                                        <?php echo $val['adress']; ?>
                                        <br>
                                        <?php echo $val['cp']; ?> <?php echo $val['town']; ?>
                                    </address>
                                </td>
                                <td>
                                    <?php
                                    if($val['fixe']){ ?>
                                    <i class="fa fa-phone" aria-hidden="true"></i><?php echo ' '.$val['fixe']; ?>
                                    <br>
                                    <?php }
                                    if($val['port']){ ?>
                                    <i class="fa fa-mobile" aria-hidden="true"></i><?php echo ' '.$val['port']; ?>
                                    <br>
                                    <?php }
                                    if($val['fax']){ ?>
                                    <i class="fa fa-fax" aria-hidden="true"></i><?php echo ' '.$val['fax']; ?>
                                    <br>
                                    <?php }
                                    if($val['mail']){ ?>
                                    <i class="fa fa-link" aria-hidden="true"></i><?php echo ' '.$val['mail']; ?>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php
            } //Fin toutes annonces ?>
        </div>
	</div>
</section>
