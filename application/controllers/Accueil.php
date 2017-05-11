<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
	public function index()
	{
		$data = array();
        //chargement top annonces
		$this->load->model('annonces_model');
		$data['topann'] = $this->annonces_model->get_top_annonces();
        //chargement pubs
        $this->load->model('pub_model');
        $data['pubs'] = $this->pub_model->get_pub();
		$this->load->view('common/headeracc');
        $this->load->view('accueil/home',$data);
        $this->load->view('common/footeracc');
	}
}
