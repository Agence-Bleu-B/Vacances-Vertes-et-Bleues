<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recherche extends CI_Controller {
	public function index()
	{
		$data = array();
        $data2 = array();
        //header
        $data['title'] = 'vacances vertes et bleues, recherchez vos vacances en ligne';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';
		$this->load->model('annonces_model');
		$this->load->model('pub_model');
		$data['pubs'] = $this->pub_model->get_pub(2,'acc');
		$data['pubs_vvb'] = $this->pub_model->get_pub_vvb(1,'acc');
        //recuperation des types
        $data2['annonce_type'] = $this->annonces_model->get_types();
        //action si requete region seule
        if (isset($_GET['region'])) {
            $recher = array('region' => $_GET['region'] );
            $data2['listannonces'] = $this->annonces_model->get_annonces_rech(10,$recher);
        }
        //action si recherche complète
        elseif (isset($_POST['affine'])) {
            //a faire !!!!!!
            $recher = array('region' => $_POST['region'] );
            $data2['listannonces'] = $this->annonces_model->get_annonces_rech(10,$recher);
        }
        //action pas de requetes
        else{
            $data2['listannonces'] = $this->annonces_model->get_top_annonces(10);
        }
        //pagination
        $this->load->library('pagination');

        $config['base_url'] = site_url('recherche');
        $config['total_rows'] = 200;
        $config['per_page'] = 10;
        $config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
        $config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
        $config['first_link']='<i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-left" aria-hidden="true"></i>';
        $config['last_link']='<i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i>';

        $config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        $this->pagination->initialize($config);
        $data2['pagination'] = $this->pagination->create_links();
        $data2['vip'] = $this->load->view('common/VIP', NULL, TRUE);
        //cahrgement vues
		$this->load->view('common/header',$data);
        $this->load->view('recherche/accueil_recherche',$data2);
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
        $data2['images']=$this->annonces_model->get_images($idann);
		$data2['infos_client'] = $this->user_model->get_info($data2['annonce']['id_user']);
        $data['title'] = 'vacances vertes et bleues,'.$data2['annonce']['title'];
        $data['description'] = $data2['annonce']['descr_courte'];

        //chargement top annonces


		$this->load->view('common/header',$data);
        $this->load->view('recherche/detail',$data2);
        $this->load->view('common/footer');
	}
}
