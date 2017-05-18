<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recherche extends CI_Controller {
	public function index()
	{
		$data = array();
        $data['title'] = 'vacances vertes et bleues, recherchez vos vacances en ligne';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';

        //chargement top annonces
		$this->load->model('annonces_model');

		$this->load->view('common/header',$data);
        $this->load->view('recherche/accueil_recherche');
        $this->load->view('common/footer');
	}
    public function detail()
	{
        $idann = $this->input->get('id');
		$data = array();
        $this->load->model('annonces_model');
        $this->load->model('user_model');
		$data2['annonce_type'] = $this->annonces_model->get_types();
		$data2['annonce'] = $this->annonces_model->get_annonce($idann);
		$data2['infos_client'] = $this->user_model->get_info($data2['annonce']['id_user']);
        $data['title'] = 'vacances vertes et bleues,'.$data2['annonce']['title'];
        $data['description'] = $data2['annonce']['descr_courte'];

        //chargement top annonces


		$this->load->view('common/header',$data);
        $this->load->view('recherche/detail',$data2);
        $this->load->view('common/footer');
	}
}
