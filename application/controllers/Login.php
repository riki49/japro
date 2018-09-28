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
		$id = $this->input->post('username');
		$pass = md5($this->input->post('password'));
		$loginResult = $this->loginmodel->getLogin($id);
		$passResult = $loginResult->password;
		if($loginResult != '' && $pass == $passResult){
			$data_session = array (
			'status' =>TRUE,
			// 'nama' => $loginResult->username
		);
			$this->session->set_userdata($data_session);
			redirect('admin');
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
	}
}
