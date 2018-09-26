<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('loginmodel');
		$this->load->model('pengelolaPesanModel');
		if ($this->session->userdata('status') != 'TRUE') {
				echo "<script>alert('silahkan login terlebih dahulu!!!');history.go(-1);</script>"; 
				$this->load->view('loginView');
			}
	}

	public function index() {
		$data['dataPesanan'] = $this->pengelolaPesanModel->readPesanan();
		$this->load->view('adminView', $data);
	}

	public function createPesanan() {
		$this->load->view('createPesananView');
	}
	
	public function printJadwal() {

	}
}
