<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KelolaCetak extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->model('cetakModel');
		// $dataBaru = $this->sorting($data);
	}

	function sorting($data) {
	    	if(!count($data)) return $data;
	    	$pivot= $data['harga'];
	    	$low = $high = array();
	    	$n = count($data);
	    	for($i=1; $i < $n; $i++) {
	       	 if($data[$i] <= $pivot) {
	          	  $low [] = $data[$i];
	        	} else {
	            	$high[] = $data[$i];
	            }
	        }
	    return array_merge(sorting($low), array($pivot), sorting($high));
	}

	function sortingAge() {
		$data['dataWarga'] = $this->cetakModel->sortingAge();
		$status = array('cetak' => 1);
		$this->session->set_userdata($status);
		$this->load->view('admin/masterAdminView', $data);
	}
	public function sortingName () {
		$data['dataWarga'] = $this->cetakModel->sortingName();
		$status = array('cetak' => 2);
		$this->session->set_userdata($status);
		$this->load->view('admin/masterAdminView', $data);
	}

	public function kelompokDewasa () {
		$data['dataWarga'] = $this->cetakModel->kelompokDewasa();
		$status = array('cetak' => 2);
		$this->session->set_userdata($status);
		$this->load->view('admin/masterAdminView', $data);
	}
}