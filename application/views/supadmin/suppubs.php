<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="admin">
	<div class="container">

        <?php $this->load->view('common/menusupadmin'); ?>

        <div class="row">
            <article class="supadmin col-md-12">
                <div class="row">
                    <h5>Panneau d'administration > Pubs</h5>
                </div>

				<div class="row">
					<?php if (isset($error)): ?>

						<?php if ($error == "success"): ?>
							<p class="bg-success">
								Pub ajoutée
							</p>
						<?php else: ?>
							<?php echo $error['error']; ?>
						<?php endif; ?>

					<?php endif; ?>
				</div>

				<div class="row">
					<form enctype="multipart/form-data" class="form-horizontal" action="" method="post">
						<div class="form-group">
							<label for="input_url">Url du lien</label>
							<input type="text" class="form-control" name="input_url" id="input_url" placeholder="www.exemple.com">
						</div>
						<div class="form-group">
							<label for="input_file">Bannière</label>
							<input type="file" name="input_file" id="input_file">
							<p class="help-block">Fichier .jpg en 450px par 125px</p>
  						</div>
						<input type="submit" name="pubs_upload" value="Ajouter">
					</form>
				</div>

                <div class="row">
					<div class="col-md-9">
						<form class="" action="" method="post">
							<table class="table">
								<thead>
									<tr>
										<th>Pubs</th>
										<th>Url</th>
										<th>Active</th>
										<th>Supprimer</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach($pubs as $val){ ?>
										<tr>
											<td>
												<?php $img = 'pubs/'.$val['file']; echo img($img,$val['file']);?>
											</td>
											<td>
												<?php echo $val['link']; ?>
											</td>
											<td>
												<label class="checkbox">
													<?php
													$state = "";
													if ($val['active']) {
														$state = 'checked="checked"';
													} ?>
													<input type="checkbox" name="active_box[]" value="<?php echo $val['id'] ?>" <?php echo $state ?>>
												</label>
											</td>
											<td><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
							<input type="submit" name="pubs_active" value="Enregistrer">
						</form>
					</div>

					<div class="col-md-3">
					</div>
                </div>

            </article>
        </div>
        <br>
	</div>
</section>
