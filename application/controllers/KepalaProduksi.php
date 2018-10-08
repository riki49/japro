<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KepalaProduksi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('loginmodel');
		$this->load->model('pengelolaPesanModel');
		if ($this->session->userdata('level') != 'kepalaProduksi') {
			echo "<script>alert('silahkan login terlebih dahulu!!!');history.go(-1);</script>"; 
			$this->load->view('loginView');
		}
	}

	public function index() {
		$data['dataPesanan'] = $this->pengelolaPesanModel->readPesananBelumTersedia();
		$this->load->view('KepalaProduksiView', $data);
	}
	
	public function sediakanPesanan($id) {
		$this->pengelolaPesanModel->sediakanPesanan($id);
		redirect('kepalaProduksi');
	}
}
