<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('dataWargaModel');
		$this->load->model('cetakModel');
		if ($this->session->userdata('status') ==FALSE) {
		redirect('');
		}
	}

	public function index()
	{
		$this->read();
	}
	public function read() {
		$data_session = array ('cetak' => 0);
		$this->session->set_userdata($data_session);
		$data['dataWarga'] = $this->dataWargaModel->read();
		$this->load->view('admin/masterAdminView',$data);
	}
	public function create() {
		if ($this->input->post()){
			$this->dataWargaModel->create();
			redirect('admin');
		}else{
			$this->load->view('admin/formAddWarga');
		}
	}
	public function update($nik) {
		if ($this->input->post()){
			$this->dataWargaModel->update($nik);
			redirect('admin');
		} else {
			$data['dataWarga']=$this->dataWargaModel->detailWarga($nik);
			$this->load->view('admin/formEdit',$data);
		}
	}
	public function delete($nik){
		$this->dataWargaModel->delete($nik);
		redirect ('admin');
	}


	public function cetak($status) {
		ob_start();
		$data;
		if ($status == 0) {
			$data['report'] = $this->dataWargaModel->read();
		} else if ($status == 1) {
			$data['report'] = $this->cetakModel->sortingAge();
		} else if ($status == 2) {
			$data['report'] = $this->cetakModel->sortingName();
		} else if ($status == 3) {
			$data['report'] = $this->cetakModel->sortingPlace();
		}
		$this->load->view('admin/printWarga', $data);
		$html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Laporan Data Transaksi.pdf', 'P');
	}
}

