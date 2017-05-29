<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Annonces_model extends CI_Model
{
    // récupérer les top annonces
    public function get_top_annonces()
    {
        $i=0;
		$resultat = $this->db->select()
							->from('annonce')
                            ->where('formule="vip" OR formule="privilege" AND statut="cours"')
							->limit(5)
							->order_by('title', 'RANDOM')
							->get()
							->result_array();
        foreach ($resultat as $key => $value){
            $result[$i] = $$key = $value;
            $result[$i]['prixbas'] = $this->prix_bas($result[$i]['hsnuit'],$result[$i]['psnuit'],$result[$i]['psweek'],$result[$i]['hsweek']);
            $result[$i]['photocouv'] = $this->recup_photo_couv($result[$i]['id']);
            $result[$i]['region'] = $this->region($result[$i]['region']);
            $result[$i]['departement'] = $this->dep($result[$i]['departement']);
            $result[$i]['urlann'] =  url_title($result[$i]['title']);
            $result[$i]['urlann'] .= '-';
            $result[$i]['urlann'] .= url_title($result[$i]['region']);
            $result[$i]['urlann'] .= '-';
            $result[$i]['urlann'] .= url_title($result[$i]['departement']);
            $i++;
        }
		return $result;
    }
    // liste de toutes les annonces
    public function get_all_annonces()
    {
        $row = $this->db->select()
                    ->from('annonce')
                    ->get()
                    ->result_array();
        return $row;
    }

    // liste de toutes les annonces de $id_user
    public function get_annonces_from($id_user)
    {
        $row = $this->db->select()
                    ->from('annonce')
                    ->where('id_user', $id_user)
                    ->get()
                    ->result_array();
        return $row;
    }

    // liste des types des annonces
    public function get_types()
    {
        $row = $this->db->select()
                    ->from('annonce_type')
                    ->get()
                    ->result_array();
        return $row;
    }

    // liste une annonce
    public function get_annonce($id)
    {
        $resultat = $this->db->select()
                    ->from('annonce')
                    ->where('id', $id)
                    ->get()
                    ->result_array();
        foreach ($resultat as $key => $value){
            $result = $$key = $value;
        }

        // $result['images'] = $this->db->select()
        //             ->from('annonces_files')
        //             ->get()
        //             ->result_array();

        $result['images'][0] = 'https://placehold.it/600/450/'; // Remplissage temporaire
        $result['images'][1] = 'https://unsplash.it/600/450/?random'; // Remplissage temporaire

        return $result;
    }

    // liste des types des annonces
    public function get_stats()
    {
        $result = $this->db->query("SELECT formule, COUNT(formule) FROM `annonce` GROUP BY formule")
                    ->result_array();
        return $result;
    }

    //calcul du prix le plus bas d'une annonce
    public function prix_bas($hsnuit,$psnuit,$psweek,$hsweek)
    {
        $text = '';
        $pb = 10000;
        if($hsnuit != 0){
            $text = 'La nuit';
            $pb = $hsnuit;
        }
        if($psnuit != 0 && $pb>=$psnuit){
            $text = 'La nuit';
            $pb = $psnuit;
        }
        if($psweek != 0 && $pb>=$psweek){
            $text = 'La semaine';
            $pb = $psweek;
        }
        if($hsweek != 0 && $pb>=$hsweek){
            $text = 'La semaine';
            $pb = $hsweek;
        }
        if($pb != 0 && $pb != 10000){
            // $return = '<h4>'.$pb.'€</h4><p class="dureep">'.$text.'</p>';
            $return["prix"] = $pb;
            $return["periode"] = $text;
        }
        else{
            // $return= '<h4>nc</h4>';
            $return["prix"] = "nc";
            $return["periode"] = "";
        }
        return $return;
    }
    //get detail annonce
    function get_detail($idann){
        $result = array();
        $get = "id =".$idann;
        $resultat = $this->db->select('*')
                        ->from('annonce')
                        ->where($get)
                        ->get()
                        ->result_array();
        foreach ($resultat as $key => $value){
            $result = $$key = $value;
        }
        return $result;
    }
    //recup couv
    function recup_photo_couv($idann){
        $chemin = "assets/images/annonces/";
        $dossier = $chemin.$idann;
        $resultat = $this->db->select('couv')
							->from('annonce')
                            ->where('id',$idann)
							->get()
							->result_array();
        if (isset($resultat['couv']) && $resultat['couv'] != NULL){
            $couv = $resultat['couv'];
        }
        else{
            if (file_exists($dossier)){
                //si oui chercher une photo
                $doc = opendir($dossier);
                while(false != ($fichier = readdir($doc))){
                    if($fichier != '.' && $fichier != '..'){
                        $listphoto[] = $idann."/".$fichier;
                    }
                }
                if (isset($listphoto[0]) && $listphoto[0] != ""){
                    $couv = $listphoto[0];
                }
                else{$couv = "no-thumb.png";}
                closedir($doc);
            }
            else{
                $couv = "no-thumb.png";
            }
        }
        $photocouv = $chemin.$couv;
        return $photocouv;
    }
    //recup region
    function region($idr){
        $result = $this->db->select()
							->from('regions')
                            ->where('id',$idr)
							->get()
							->result_array();
        $region= $result[0]['nom'];
        return $region;
    }
    //recup dep
    function dep($idd){
        $result = $this->db->select()
							->from('departements')
                            ->where('id',$idd)
							->get()
							->result_array();
        $dep= $result[0]['nom'];
        return $dep;
    }

}
