<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengelolaPesanan extends CI_Controller {

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
		$this->load->view('adminView');
	}

	public function createPesanan() {
		$pemesan = $this->input->post('pemesan');
		$tanggal = $this->input->post('tanggal');
		$produk = $this->input->post('produk');
		$level = $this->input->post('level');
		$jumlah = $this->input->post('jumlah');
		$harga = $this->input->post('harga');
		$waktu = $this->input->post('waktu');
		$status = 'belum tersedia';
		$kirim = 'belum terkirim';
		$this->pengelolaPesanModel->insertPesanan($pemesan, $tanggal, $produk, $level, $jumlah, $harga, $waktu, $status, $kirim);
		redirect('admin');
	}

	public function kirimPesanan($id) {
		$this->pengelolaPesanModel->kirimPesanan($id);
		redirect('admin/urutkanPesanan');
	}
	public function deletePesanan($id) {
		$this->pengelolaPesanModel->deletePesanan($id);
		redirect('admin');
	}
}
