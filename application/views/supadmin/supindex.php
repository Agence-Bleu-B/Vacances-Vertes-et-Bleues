<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$nb_annonces = 0;
$last_inscr = getDate($last_client['add_date']);
?>
<section id="admin">
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5>Panneau d'administration</h5>
                <div class="row">
                    <a class="btn btn-primary col-md-2" href="<?php echo site_url('supadmin/pubs');?>" role="button"><i class="fa fa-picture-o" aria-hidden="true"></i> Pubs</a>
                    <span class="col-md-1"></span>
                    <a class="btn btn-primary col-md-2" href="<?php echo site_url('supadmin/clients');?>" role="button"><i class="fa fa-users" aria-hidden="true"></i> Clients</a>
                    <span class="col-md-1"></span>
                    <a class="btn btn-primary col-md-2" href="<?php echo site_url('supadmin/annonces');?>" role="button"><i class="fa fa-file-text" aria-hidden="true"></i> Annonces</a>
                    <span class="col-md-2"></span>
                    <a class="btn btn-primary col-md-2" href="<?php echo site_url('compte');?>" role="button"></i> > Se déconnecter</a>
                </div>
				<br><br>
				<div class="row">
					<div class="col-md-8">
		                <div class="panel panel-primary">
		                    <div class="panel-heading">
		                        <h6 class="panel-title">Informations générales</h6>
		                    </div>
		                    <div class="panel-body">
		                        <div class="row">
		                        	<div class="col-md-6">
										<strong>Clients</strong>
		                        		<table class="table table-condensed">
		                        			<tr>
		                        				<td>Dernier client inscrit le</td>
												<td><em><?php echo $last_inscr['mday'] . '/' . $last_inscr['mon'] . '/' . $last_inscr['year'];?></em></td>
		                        			</tr>
											<tr>
												<td><strong>Total clients</strong></td>
												<td><strong><?php echo $nb_clients; ?></strong></td>
											</tr>
		                        		</table>
		                        	</div>
									<div class="col-md-6">
										<strong>Annonces</strong>
		                        		<table class="table table-condensed">
											<?php foreach ($stats_annonces as $stat): ?>
												<tr>
													<td><?php echo $stat['formule']; ?></td>
													<td><?php echo $stat['COUNT(formule)']; ?></td>
												</tr>
												<?php $nb_annonces = $nb_annonces + $stat['COUNT(formule)']; ?>
											<?php endforeach; ?>
											<tr>
												<td><strong>Total annonces</strong></td>
												<td><strong><?php echo $nb_annonces; ?></strong></td>
											</tr>
		                        		</table>
		                        	</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
				</div>
            </div>
        </div>
        <br>
	</div>
</section>
