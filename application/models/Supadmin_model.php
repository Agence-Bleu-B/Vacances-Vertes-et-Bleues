<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Supadmin_model extends CI_Model
{
    //fonction de connection d'un memebre
    public function connect($mail,$pass){
        //  Chargement de la bibliothèque
/*
        $valid = false;
        $pass = md5($pass);
        $resultat = $this->db->select('email,pass')
                 ->from('user')
                 ->where('email', $mail)
                 ->get()
                 ->result_array();
        if(isset($resultat[0]["email"]))
        {
            $test = $resultat[0]["email"];
            $test2 = $resultat[0]["pass"];
        }
        else
        {
            $test = null;
            $test2 = null;
        }
        $form = array('email' => $mail,'pass' => $pass);
        $this->form_validation->set_data($form);
        $this->form_validation->set_rules('email','E-mail','trim|required|valid_email|in_list['.$test.']',array('required' => 'Vous devez entrer un %s.','valid_email' => 'Veuillez entrer un %s valide.','in_list' => 'Utilisateur inconnu'));
        $this->form_validation->set_rules('pass','mot de passe','trim|required|in_list['.$test2.']',array('required' => 'Vous devez entrer un %s.','in_list' => 'Mot de passe invalide'));
        if($this->form_validation->run())
        {
            $valid = true;
            $this->sess_start($mail);
        }
*/
        //return $valid;
        return true;
    }
}
