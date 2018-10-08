<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('loginmodel');
		$this->load->model('pengelolaPesanModel');
		if ($this->session->userdata('level') != 'admin') {
			echo "<script>alert('silahkan login terlebih dahulu!!!');history.go(-1);</script>"; 
			$this->load->view('loginView');
		}
	}

	public function index() {
		$data['dataPesanan'] = $this->pengelolaPesanModel->readSemuaPesanan();
		$this->load->view('adminView', $data);
	}

	public function createPesanan() {
		$this->load->view('createPesananView');
	}

	public function urutkanPesanan() {
		$urutanPesanan['urutanPesanan'] = $this->pengelolaPesanModel->readUrutanPesanan();

		$this->load->view('urutanPesananView', $urutanPesanan);
	}

	public function cetak() {
		ob_start();
		$dataBelumTerkirim['belumterkirim'] = $this->pengelolaPesanModel->readPesananBelumTerkirim();
		$dataBelumTersedia['belumtersedia'] = $this->pengelolaPesanModel->readPesananBelumTersedia();
		$dataTerkirim['terkirim'] = $this->pengelolaPesanModel->readPesananTerkirim();

		$this->load->view('printJadwal', $dataBelumTerkirim + $dataBelumTersedia + $dataTerkirim);
		$html = ob_get_contents();
        
        ob_end_clean();
        require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Laporan Data Transaksi.pdf', 'P');
	}
}
