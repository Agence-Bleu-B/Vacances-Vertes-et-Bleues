<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<footer>
	<div class="container">
		<ul class="liste_footer" >
			<li>
				<h2>Site d'annonces de locations de vacances directement auprès des propriétaires et des campings. Un catalogue diffusé à 20000 exemplaires dans 7 pays européens et au Canada.</h2>
			</li>
			<li>
				<a href="<?php echo site_url('compte');?>">Espace annonceur</a>
				<a href="<?php echo site_url('mentionslegales');?>">Mentions Légales</a>
				<a href="<?php echo site_url('cgu');?>">Conditions générales d'utilisations</a>
			</li>
			<li>
				<h6>Contactez-nous</h6>
				<p>
					contact@vacances-vertes-bleues.fr
				</p>
				<p>&copy; Vacances Vertes et Bleues, 2016</p>
				<a href="http://www.bleu-b.com/" target="blank"class="agence">Création <?php echo img('logo_footer_web.jpg','logo_footer_web.jpg');?></a>
				<p>Carte par © <a href="https://cmap.comersis.com/" class="alignnone" style="display: inline; position: absolute; margin: 0 0 0 5px;">Comersis<a></p>
			</li>
		</ul>
	</div>
</footer>
<!-- script -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/cmap/france.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/cmap/cmap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/cmap/regions_hover.js'?>"></script>
</body>
</html>
