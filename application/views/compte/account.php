<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="compte">
	<div class="container">
        <div>
			<p>Bonjour <?php echo $this->session->userdata('firstname'); ?>,</p>
			<form method="post" action="<?php echo site_url('compte');?>">
				<button type="submit" name="deco" class="deconnexion"> > Se déconnecter</button>	
			</form>
		</div>
	</div>
</section>
