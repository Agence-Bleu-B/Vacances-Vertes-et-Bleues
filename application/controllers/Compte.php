<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compte extends CI_Controller {
    
    public function index()
	{
        $this->load->library('form_validation');
        $valid = false;
        $data = array();
        $data['title'] = 'vacances vertes et bleues, inscription/connexion';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';
        $connected = $this->session->userdata('connected');
        $this->load->model('user_model');
        //traitement si demande de connection
        if ($this->input->post('connect') !== null)
        {
            $mail = $this->input->post('email2');
            $pass = $this->input->post('pass2');
            $valid = $this->user_model->connect($mail,$pass);
        }
        //traitement si enregistrement
        if ($this->input->post('register') !== null)
        {
            $form = $this->input->post();
            $valid = $this->user_model->register($form);
        }
        //traitement si demande de deco
        if ($this->input->post('deco') !== null)
        {$this->session->sess_destroy();redirect('compte');}
        //afficahge ou redirection
        if( $valid == true || $connected == true)
        {
            //  si est deja connecter ou demande de connection ou enregistrement ok
            redirect('compte/mon_compte');
        }
        else
        {
            //  Le formulaires vides ou invalides ou aucune demandes
            $this->load->view('common/header',$data);
            $this->load->view('compte/register');
            $this->load->view('common/footer');
        }
    }
    
    public function mon_compte()
    { //mettre verif si co + redirection sinon
        
        $data = array();
        $data['title'] = 'vacances vertes et bleues, mon compte';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';
        
        //  Chargement de la bibliothèque
        $this->load->view('common/header',$data);
        $this->load->view('compte/account');
        $this->load->view('common/footer');
    }
    
}
