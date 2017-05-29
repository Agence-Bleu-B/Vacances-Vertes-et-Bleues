<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model
{
    //fonction de connection d'un memebre
    public function connect($mail,$pass){
        //  Chargement de la bibliothèque
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
        $form = array('email2' => $mail,'pass2' => $pass);
        $this->form_validation->set_data($form);
        $this->form_validation->set_rules('email2','E-mail','trim|required|valid_email|in_list['.$test.']',array('required' => 'Vous devez entrer un %s.','valid_email' => 'Veuillez entrer un %s valide.','in_list' => 'Utilisateur inconnu'));
        $this->form_validation->set_rules('pass2','mot de passe','trim|required|in_list['.$test2.']',array('required' => 'Vous devez entrer un %s.','in_list' => 'Mot de passe invalide'));
        if($this->form_validation->run())
        {
            $valid = true;
            $this->sess_start($mail);
        }
        return $valid;
    }
    //fonction d'enregistrement d'un membre
    public function register($input){
        $valid =false;
        foreach ($input as $key => $value){
        $$key = $value;
        }
        $form = array('email' => $email,'pass' => $pass,'confirm' => $confirm,'firstname' =>$firstname,'lastname'=>$lastname);
        $this->form_validation->set_data($form);
        $this->form_validation->set_rules('email','E-mail','trim|required|valid_email|is_unique[user.email]',array('required' => 'Vous devez entrer un %s.','valid_email' => 'Veuillez entrer un %s valide.','is_unique' => 'Cet %s est déjà lié à un compte.'));
        $this->form_validation->set_rules('pass','mot de passe','trim|required',array('required' => 'Vous devez entrer un %s.'));
        $this->form_validation->set_rules('confirm','mot de passe','trim|required|matches[pass]',array('required' => 'Vous devez confirmer votre %s.','matches' => 'Vous devez entrer deux %s identiques'));
        $this->form_validation->set_rules('firstname','prénom','required',array('required' => 'Vous devez entrer un %s.'));
        $this->form_validation->set_rules('lastname','nom','required',array('required' => 'Vous devez entrer un %s.'));
        if($this->form_validation->run())
        {
            //puis enregistrement, ne pas oublier d'indiquer md5 pour enregister mdp
            $time = time();
            $id		= "";
            $pass		= md5($pass);
            $add_date 	= $time;
            $edit_date	= $time;
            $checked 	= 1;
            //req
            $requete = array(
                    'id'=> $id,
                    'civ'=> $civ,
                    'email'=> $email,
                    'pass'=> $pass,
                    'add_date'=> $add_date,
                    'edit_date'=> $edit_date,
                    'checked'=> $checked,
                    'lastname'=> $lastname,
                    'firstname'=> $firstname
            );
            //insert
            $insert = $this->db->insert('user', $requete);
            if($insert){
                $valid = true;
                $this->sess_start($mail);
            }
            else{
                //voir pour message d'erreur en bdd
            }

        }
        return $valid;
    }
    //mise en session d'un membre
    public function sess_start($mail){
        $resultat = $this->db->select('email,id,lastname,firstname')
                 ->from('user')
                 ->where('email', $mail)
                 ->get()
                 ->result_array();
        $this->session->set_userdata('connected', true);
        $this->session->set_userdata('id', $resultat[0]['id']);
        $this->session->set_userdata('lastname', $resultat[0]['lastname']);
        $this->session->set_userdata('email', $resultat[0]['email']);
        $this->session->set_userdata('firstname', $resultat[0]['firstname']);

    }
    //recup info membre
    public function get_info($id){
        $resultat = $this->db->select()
                 ->from('user')
                 ->where('id', $id)
                 ->get()
                 ->result_array();
        foreach ($resultat as $key => $value){
            $result = $$key = $value;
        }
        return $result;
    }
    //liste des clients
    public function get_all_clients(){
        $result = $this->db->select()
                 ->from('user')
                 ->order_by('add_date', 'DESC')
                 ->get()
                 ->result_array();
        return $result;
    }

    //liste des clients
    public function get_last_client(){
        $resultat = $this->db->select()
                 ->from('user')
                 ->order_by('add_date', 'DESC')
                 ->limit(1)
                 ->get()
                 ->result_array();
        foreach ($resultat as $key => $value){
            $result = $$key = $value;
        }
        return $result;
    }
}
