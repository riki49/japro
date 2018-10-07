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
		$data['dataPesanan'] = $this->pengelolaPesanModel->urutkanPesananKepala();
		$this->load->view('KepalaProduksiView', $data);
	}
	
	public function cetak() {
		ob_start();
		$data['dataPesanan'] = $this->pengelolaPesanModel->urutkanPesananKepala();
		$this->load->view('printJadwal', $data);
		$html = ob_get_contents();
        
        ob_end_clean();
        require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Laporan Data Transaksi.pdf', 'P');
	}
}
