/*
Plugin Name: France regions map
Plugin URI: http://blog.comersis.com/articles/SVG-Raphael-map/
Description: France departements map.
Version: fr-reg-1.0215
Author: S.Marmion ©2015
Author URI: http://www.cmap.comersis.com
License: non-comercial
*/
		var mapfill = "#E68D06";		// Couleur de remplissage des régions
		var maphover_fill = "#1D8AC9";	// Couleur de survol au passage de la souris
		var mapstroke = "#FFFFFF";		// Couleur des lignes de séparation des régions
		var mapstroke_width = 0.5;		// Epaisseur des lignes de séparation des régions (en points)
		var mapWidth=500;				// Largeur de la carte en pixels
		var mapHeight=500;				// Hauteur de la carte en pixels (facultatif)
		

/*
Modifiez ci-dessous les 2 variables pour chaque région :
	
	title:	" Texte associé à la région ";
	
	url:	" Lien vers la page ou le site souhaité ";

*/		
var paths = {
alsace: {
title: "Grand Est",
url: "recherche?region=6"
},
aquitaine: {
title: "Nouvelle Aquitaine",
url: "recherche?region=10"
},
auvergne: {
title: "Auvergne-Rhône-Alpes",
url: "recherche?region=1"
},
bourgogne: {
title: "Bourgogne-Franche-Comté",
url: "recherche?region=2"
},
bretagne: {
title: "Bretagne",
url: "recherche?region=3"
},
centre: {
title: "Centre",
url: "recherche?region=4"
},
corse: {
title: "Corse",
url: "recherche?region=5"
},
languedoc: {
title: "Occitanie",
url: "recherche?region=11"
},
ile: {
title: "Ile-de-France",
url: "recherche?region=8"
},
nord: {
title: "Hauts de France",
url: "recherche?region=7"
},
normandie: {
title: "Normandie",
url: "recherche?region=9"
},
loire: {
title: "Pays-de-la-Loire",
url: "recherche?region=12"
},
provence: {
title: "Provence-Alpes-Côte-d-Azur",
url: "recherche?region=13"
}
}
