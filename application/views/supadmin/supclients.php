<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$menu_pos = '';
if($client) // si annonces d'un client
{
    $menu_pos = ' > ' . $client['firstname'] . ' ' . $client['lastname'];
}

?>
<section id="admin">
	<div class="container">

        <?php $this->load->view('common/menusupadmin'); ?>

        <?php
        if($client){ // Si client
        ?>
        <br>
        <div class="row">
            <a class="btn btn-primary col-md-2" href="<?php echo site_url('supadmin/clients/'); ?>">< <i class="fa fa-users" aria-hidden="true"></i> Retour aux clients</a>
        </div>
        <?php } //fin ?>

        <div class="row">
            <article class="supadmin col-md-12">
                <h5>Panneau d'administration > Clients<?php echo $menu_pos; ?></h5>
            </article>
        </div>

        <div class="row">
            <?php
            if($client){ // Si Client Unique
            ?>
            <div class="col-md-9">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h6 class="panel-title"><i class="fa fa-user" aria-hidden="true"></i> Fiche client n°<?php echo $client['id']; ?></h6>
                    </div>
                    <div class="panel-body">
                        <strong><?php echo $client['firstname']; ?> <?php echo $client['lastname']; ?></strong>
                        <br>
                        <address>
                            <?php echo $client['address']; ?>
                            <br>
                            <?php echo $client['postcode']; ?> <?php echo $client['city']; ?>
                        </address>
                        <br>
                        <div class="col-md-6">
                            <table class="table table-condensed">
                                <?php
                                if($client['phone']){ ?>
                                    <tr>
                                        <td><i class="fa fa-phone" aria-hidden="true" title="Fixe"></i></td>
                                        <td><?php echo ' '.$client['phone']; ?></td>
                                    </tr>
                                <?php }
                                if($client['mobile']){ ?>
                                    <tr>
                                        <td><i class="fa fa-mobile" aria-hidden="true" title="Mobile"></i></td>
                                        <td><?php echo ' '.$client['mobile']; ?></td>
                                    </tr>
                                <?php }
                                if($client['fax']){ ?>
                                    <tr>
                                        <td><i class="fa fa-fax" aria-hidden="true" title="Fax"></i></td>
                                        <td><?php echo ' '.$client['fax']; ?></td>
                                    </tr>
                                <?php }
                                if($client['email']){ ?>
                                    <tr>
                                        <td><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i></td>
                                        <td><?php echo ' '.$client['email']; ?></td>
                                    </tr>
                                <?php }
                                if($client['url']){ ?>
                                    <tr>
                                        <td><i class="fa fa-link" aria-hidden="true" title="Site Web"></i></td>
                                        <td><a href="<?php echo ' '.$client['url']; ?>"><?php echo ' '.$client['url']; ?></a></td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h6 class="panel-title"><i class="fa fa-cogs" aria-hidden="true"></i> Actions</h6>
                    </div>
                    <div class="panel-body">
                        <a href="<?php echo site_url('supadmin/annonces/client/'.$client['id']);?>" class="btn btn-default"><i class="fa fa-file-text" aria-hidden="true"></i> Voir les annonces du client</a>
                        <br><br>
                        <a href="<?php echo site_url('supadmin/edit/client/'.$client['id']);?>" class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i> Modifier le client</a>
                    </div>
                </div>
            </div>
            <?php
            } //Fin client unique
            else // Si touts les clients
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
                    <caption><?php echo count($liste_clients); ?> Client<?php if(count($liste_clients)>1) echo "s"; ?></caption>
                    <thead>
                        <tr>
                            <th><strong><i class="fa fa-cogs" aria-hidden="true"></i></strong></th>
                            <th><strong>Nom</strong></th>
                            <th><strong>Prenom</strong></th>
                            <th><strong>Date d'inscription</strong></th>
                            <th><strong>Date de dernière modification</strong></th>
                            <th><strong>Contact(s)</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($liste_clients as $val){ ?>
                            <tr>
                                <td>
                                    <a href="<?php echo site_url('supadmin/clients/'.$val['id']); ?>"><i class="fa fa-address-card" aria-hidden="true" title="Voir la fiche client"></i></a>
                                    <br>
                                    <a href="<?php echo site_url('supadmin/edit/client/'.$val['id']); ?>"><i class="fa fa-pencil" aria-hidden="true" title="Modifier le client"></i></a>
                                </td>
                                <td><?php echo $val['lastname']; ?></td>
                                <td><?php echo $val['firstname']; ?></td>
                                <td>
                                    <?php
                                    $inscr = getDate($val['add_date']);
                                    echo $inscr['mday'] . '/' . $inscr['mon'] . '/' . $inscr['year'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $modif = getDate($val['edit_date']);
                                    echo $modif['mday'] . '/' . $modif['mon'] . '/' . $modif['year'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if($val['phone']){ ?>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <?php }
                                    if($val['mobile']){ ?>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <?php }
                                    if($val['fax']){ ?>
                                    <i class="fa fa-fax" aria-hidden="true"></i>
                                    <?php }
                                    if($val['email']){ ?>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <?php }
                                    if($val['url']){ ?>
                                    <i class="fa fa-link" aria-hidden="true"></i>
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
