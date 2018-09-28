<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengelolaPesanan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('pengelolaPesanModel');
		if ($this->session->userdata('status') != 'TRUE') {
				echo "<script>alert('silahkan login terlebih dahulu!!!');history.go(-1);</script>"; 
				$this->load->view('loginView');
			}
	}

	public function index() {
		$this->load->view('adminView');
	}

	public function createPesanan() {
		$pemesan = $this->input->post('pemesan');
		$tanggal = $this->input->post('tanggal');
		$produk = $this->input->post('produk');
		$level = $this->input->post('level');
		$jumlah = $this->input->post('jumlah');
		$harga = $this->input->post('harga');
		$this->pengelolaPesanModel->insertPesanan($pemesan, $tanggal, $produk, $level, $jumlah, $harga);
		redirect('admin');
	}

	public function deletePesanan($id) {
		$this->pengelolaPesanModel->deletePesanan($id);
		redirect('admin');
	}
	
	public function mengurutkanProduksi() {
		echo "jadwal ututan";
	}
}
