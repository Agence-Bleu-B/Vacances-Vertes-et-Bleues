<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Recherche_model extends CI_Model
{
  public function get_annonce_photos($idAnn){
      // $row = $this->db->select()
      //             ->from('annonces_files')
      //             ->get()
      //             ->result_array();

      $row[0] = 'https://placehold.it/600/450/'; // Remplissage temporaire
      $row[1] = 'https://unsplash.it/600/450/?random';
      return $row;
  }
}
