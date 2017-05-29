<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid">
	<div class="col-md-2">
		<aside>
		    <h3>Trouver une location</h3>
		        <ul id="rech_aff">        
		            <a href="#rech_aff" class="icon_menu open">Affiner la recherche <i class="material-icons">keyboard_arrow_down</i></a>
		            <a href="#" class=" icon_menu close">Fermer <i class="material-icons">keyboard_arrow_up</i></a>
		        <form method="post" action="../22/recherche">
		             <li>
		                <input type="text" name="mc" placeholder="Mots Clés" class="input_text"></input>
		                <select id="pays" name="pays">
		                    <option value="">-- Pays --</option>
		                </select>
		                <select id="region" name="region">
		                    <option value="">-- Régions --</option>
		                </select>
		                <select id="departement" name="departement">
		                    <option value="">-- Départements--</option>
		                </select>
		            </li>
		            <li>
		                <h4>Type de location</h4>
		                <input type="checkbox" name="checkbox_1" id="checkbox_1" class="css-checkbox"></input><label for="checkbox_1" class="css-label">Camping - Mobil-home</label>
		                <input type="checkbox" name="checkbox_2" id="checkbox_2" class="css-checkbox"></input><label for="checkbox_2" class="css-label">Gîte - Location Insolite</label>
		                <input type="checkbox" name="checkbox_3" id="checkbox_3" class="css-checkbox"></input><label for="checkbox_3" class="css-label">Chambre d'hôtes</label>
		                <input type="checkbox" name="checkbox_4" id="checkbox_4" class="css-checkbox"></input><label for="checkbox_4" class="css-label">Maison - Villa</label>
		                <input type="checkbox" name="checkbox_5" id="checkbox_5" class="css-checkbox"></input><label for="checkbox_5" class="css-label">Mobil-Home - Chalet</label>
		                <input type="checkbox" name="checkbox_6" id="checkbox_6" class="css-checkbox"></input><label for="checkbox_6" class="css-label">Hôtel - Auberge</label>
		                <input type="checkbox" name="checkbox_7" id="checkbox_7" class="css-checkbox"></input><label for="checkbox_7" class="css-label">Village Vacances</label>
		                <input type="checkbox" name="checkbox_8" id="checkbox_8" class="css-checkbox"></input><label for="checkbox_8" class="css-label">Appartement</label>
		                <input type="checkbox" name="checkbox_9" id="checkbox_9" class="css-checkbox"></input><label for="checkbox_9" class="css-label">Chalet à la montagne</label>
		            </li>
		            <li>
		                <h4>Options</h4>
		                <input type="checkbox" name="checkbox_10" id="checkbox_10" class="css-checkbox"></input><label for="checkbox_10" class="css-label">Wifi gratuit</label>
		                <input type="checkbox" name="checkbox_11" id="checkbox_11" class="css-checkbox"></input><label for="checkbox_11" class="css-label">Accès Handicapé</label>
		                <input type="checkbox" name="checkbox_12" id="checkbox_12" class="css-checkbox"></input><label for="checkbox_12" class="css-label">Chèques Vacances</label>
		                <input type="checkbox" name="checkbox_13" id="checkbox_13" class="css-checkbox"></input><label for="checkbox_13" class="css-label">Animaux Acceptés</label>
		                <button type="submit" name="affine">Rechercher</button>
		            </li>
		        </ul>
		        
		    </form>
		</aside>
	</div>

	<div class="col-md-8" ></div>
	<div class="col-md-2" >
		<aside>
			<ul id="esp_pub">       
		        <li><a href="http://www.camping-lahallerais.com/"><img src="<?php //echo DOCBASE; ?>templates/<?php //echo TEMPLATE; ?>/images/bandeau2-la-hallerais_450x250px.jpg"></a></li>
		        <li><a href="http://www.lacancalaise.fr/"><img src="<?php //echo DOCBASE; ?>templates/<?php //echo TEMPLATE; ?>/images/bandeau_cancalaise_450x250px.jpg"></a></li>
				<li><a href="http://www.adldecoration.com/"><img src="<?php //echo DOCBASE; ?>templates/<?php //echo TEMPLATE; ?>/images/pub-ateliers-des-loisirs-450x250px.jpg"></a></li>
				<li><a href="http://www.camping-soleil.com/"><img src="<?php //echo DOCBASE; ?>templates/<?php //echo TEMPLATE; ?>/images/camping-le-soleil.jpg"></a></li>
					
			<!--
					<li><a href="#"><img src="<?php echo DOCBASE; ?>templates/<?php echo TEMPLATE; ?>/images/pub.jpg"></a></li>
			-->		
			</ul>
		</aside>
	</div>
	<?php echo $pagination; ?>
</div>