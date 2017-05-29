<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legal extends CI_Controller {
	public function index()
	{

  }

  public function mentionslegales()
  {
    $this->load->view('common/header');
    $this->load->view('legal/mentions');
    $this->load->view('common/footer');
  }

  public function cgu()
  {
    $this->load->view('common/header');
    $this->load->view('legal/cgu');
    $this->load->view('common/footer');
  }
}
