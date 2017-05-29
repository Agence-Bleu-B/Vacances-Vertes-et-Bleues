<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supadmin extends CI_Controller {

    public function index()
	{
        $this->load->library('form_validation');
        $valid = false;
        $data = array();
        $data['title'] = 'vacances vertes et bleues, connexion';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';
        $connected = $this->session->userdata('connected');
        $this->load->model('supadmin_model');

        if ($this->input->post('connect') !== null)
        {
            $mail = $this->input->post('email');
            $pass = $this->input->post('pass');
            $valid = $this->supadmin_model->connect($mail,$pass);
        }
        if( $valid == true || $connected == true)
        {
            //  si est deja connecter ou demande de connection ou enregistrement ok
            redirect('supadmin/panel');
        }
        else
        {
            //  Le formulaires vides ou invalides ou aucune demandes
            $this->load->view('common/header',$data);
            $this->load->view('supadmin/supregister');
            $this->load->view('common/footer');
        }
    }

    public function panel()
    {
        $data['title'] = 'vacances vertes et bleues, administration';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';

        $this->load->model('pub_model');
        $this->load->model('user_model');
        $this->load->model('annonces_model');

        $data['last_client'] = $this->user_model->get_last_client();
        $data['nb_clients'] = count($this->user_model->get_all_clients());
        $data['stats_annonces'] = $this->annonces_model->get_stats();

        $this->load->view('common/header',$data);
        $this->load->view('supadmin/supindex');
        $this->load->view('common/footer');
    }

    public function pubs()
    {
        $this->load->model('pub_model');
        $data['title'] = 'vacances vertes et bleues, administration';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';

        //Activation / DeActivation des pubs
        if ($this->input->post('pubs_active') !== null)
        {
            $form = $this->input->post();
            if (!isset($form['active_box'])) {
                $form['active_box'] = array();
            }
            $this->pub_model->update_active_pubs($form['active_box']);
        }

        //Upload pubs
        if ($this->input->post('pubs_upload') !== null) {
            $data['error'] = null;
            $config['upload_path']          = './assets/images/pubs';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_width']            = 450;
            $config['max_height']           = 125;

            $this->load->library('upload', $config);

            //Erreur
            if ( ! $this->upload->do_upload('input_file'))
            {
                $error = array('error' => $this->upload->display_errors('<p class="bg-danger">'));
                $data['error'] = $error;
            }
            //Valid
            else
            {
                $form = $this->input->post();
                $this->pub_model->new_pub($form['input_url'],$this->upload->data('file_name'));
                $data['error'] = "success";
            }
        }

        $data['pubs'] = $this->pub_model->get_all_pub();

        $this->load->view('common/header',$data);
        $this->load->view('supadmin/suppubs');
        $this->load->view('common/footer');
    }

    public function clients($id = null)
    {
        $this->load->model('user_model');
        $data['title'] = 'vacances vertes et bleues, administration';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';

        //Si client unique
        if($id)
        {
            $data['client'] = $this->user_model->get_info($id);
            $data['liste_clients'] = null;
        }
        //Sinon liste
        else
        {
            $data['liste_clients'] = $this->user_model->get_all_clients();
            $data['client'] = null;
        }

        $this->load->view('common/header',$data);
        $this->load->view('supadmin/supclients');
        $this->load->view('common/footer');
    }

    public function annonces($type = null, $id = null)
    {
        $this->load->model('annonces_model');
        $data['annonce_type'] = $this->annonces_model->get_types();
        $data['annonce'] = null;
        $data['liste_annonces'] = null;
        $data['title'] = 'vacances vertes et bleues, administration';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';

        //Si annonce unique
        if($type =="info" AND $id)
        {
            $this->load->model('user_model');
            $data['annonce'] = $this->annonces_model->get_annonce($id);
            $data['infos_client'] = $this->user_model->get_info($data['annonce']['id_user']);

        }
        //Si annonces d'un client
        else if($type =="client" AND $id)
        {
            $this->load->model('user_model');
            $data['client'] = $this->user_model->get_info($id);
            $data['liste_annonces'] = $this->annonces_model->get_annonces_from($id);
        }
        //Sinon liste d'annonces
        else
        {
            $data['liste_annonces'] = $this->annonces_model->get_all_annonces();
        }

        $this->load->view('common/header',$data);
        $this->load->view('supadmin/supannonces');
        $this->load->view('common/footer');
    }

    public function edit($type = null, $id = null)
    {
        if ($type == "client" AND $id)
        {
          $this->load->model('user_model');
          $data['infos_client'] = $this->user_model->get_info($data['annonce']['id_user']);
          $this->load->view('common/header',$data);
          $this->load->view('supadmin/supeditclient');
          $this->load->view('common/footer');
        }
    }
}
