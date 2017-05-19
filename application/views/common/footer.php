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
				<a href="http://www.bleu-b.com/" target="blank"class="agence">Création <?php echo my_img('logo_footer_web.jpg','logo_footer_web.jpg');?></a>
				<p>Carte par © <a href="https://cmap.comersis.com/" class="alignnone" style="display: inline; position: absolute; margin: 0 0 0 5px;">Comersis<a></p>
			</li>
		</ul>
	</div>
</footer>
<!-- script -->
<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Slider jssor.com -->
<script src="https://rawgit.com/jssor/slider/master/js/jssor.slider.min.js" charset="utf-8"></script>
<script>
jQuery(document).ready(function ($) {
	var options = {
		$ThumbnailNavigatorOptions: {
			$Class: $JssorThumbnailNavigator$,
			$ChanceToShow: 2
		}
	};
	var jssor_slider1 = new $JssorSlider$('jssor_1', options);
});
</script>
</body>
</html>
