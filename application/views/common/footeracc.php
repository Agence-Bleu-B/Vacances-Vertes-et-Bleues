<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


	</div> <!-- /container fluid -->

	<!-- script -->
	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/cmap/france.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/cmap/cmap.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/cmap/regions_hover.js'?>"></script>
	
	<script type="text/javascript">
	// Utilitaire "boostrap-like" pour une classe '.pull-down' (dispo dans boostrap v4 plus tard) [http://stackoverflow.com/a/14223553]

	//for each element that is classed as 'pull-down', set its margin-top to the difference between its own height and the height of its parent
	$('.pull-down').each(function() {
		var $this = $(this);
		$this.css('margin-top', $this.parent().height() - $this.height())
	});
	</script>
	</body>
</html>
