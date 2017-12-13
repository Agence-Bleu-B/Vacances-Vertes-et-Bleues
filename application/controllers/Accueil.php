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
        $data['pubs'] = $this->pub_model->get_pub(2,'acc');
        $data['pubs_vvb'] = $this->pub_model->get_pub_vvb(1,'acc');
        $data['vip'] = $this->load->view('common/VIP', NULL, TRUE);
		$this->load->view('common/headeracc');
        $this->load->view('accueil/home',$data);
        $this->load->view('common/footeracc');
	}
}
