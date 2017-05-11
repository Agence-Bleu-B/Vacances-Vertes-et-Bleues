<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conseils extends CI_Controller {
    public function index()
	{
        $data = array();
        $data['title'] = 'vacances vertes et bleues, nos conseils';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';
        $this->load->view('common/header',$data);
        $this->load->view('conseils/indexe_conseils');
        $this->load->view('common/footer');
    }
	public function precautions()
	{
        $data = array();
        $data['title'] = 'vacances vertes et bleues, nos conseils';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';
        $this->load->view('common/header',$data);
        $this->load->view('conseils/precautions');
        $this->load->view('common/footer');
    }
    public function demander()
	{
        $data = array();
        $data['title'] = 'vacances vertes et bleues, nos conseils';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';
        $this->load->view('common/header',$data);
        $this->load->view('conseils/demander');
        $this->load->view('common/footer');
    }
    public function demarches()
	{
        $data = array();
        $data['title'] = 'vacances vertes et bleues, nos conseils';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';
        $this->load->view('common/header',$data);
        $this->load->view('conseils/demarches');
        $this->load->view('common/footer');
    }
    public function recours()
	{
        $data = array();
        $data['title'] = 'vacances vertes et bleues, nos conseils';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';
        $this->load->view('common/header',$data);
        $this->load->view('conseils/recours');
        $this->load->view('common/footer');
    }
    public function reservations()
	{
        $data = array();
        $data['title'] = 'vacances vertes et bleues, nos conseils';
        $data['description'] = 'Site de locations de vacances directement auprès des propriétaires et des campings. Aussi, un des derniers guide papier à être édité en France et en Belgique.';
        $this->load->view('common/header',$data);
        $this->load->view('conseils/reservations');
        $this->load->view('common/footer');
    }
}
