<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('loginmodel');
		$this->load->model('pengelolaPesanModel');
	}

	public function index() {
		$this->load->view('loginView');
	}
	
	public function doLogin() {
		//masukan
		$id = $this->input->post('username');
		$level = $this->input->post('level');
		$pass = md5($this->input->post('password'));

		//kembalian
		$loginResult = $this->loginmodel->getLogin($id);
		$passResult = $loginResult->password;
		$levelResult = $loginResult->level;
		if($level == $levelResult && $pass == $passResult){
			$data_session = array (
			'level'=>$level
			);
			$this->session->set_userdata($data_session);
				redirect($level);
		} else {
			echo "<script>alert('periksa username/password!');history.go(-1);</script>"; 
			$this->load->view('loginView');
		}
	}


	public function doLogout(){
		$this->session->sess_destroy();
		redirect('');
	}

	public function createUser(){
		$user = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->loginmodel->createUser($user, $password);
		var_dump($password);
	}
}
