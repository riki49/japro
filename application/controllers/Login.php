<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('loginmodel');

	}

	public function index() {
		 $this->load->view('login');
	}

	public function doLogin() {
		if($this->input->post()){
			$id = $this->input->post('username');
			$pass = md5($this->input->post('password'));
			$login = $this->loginmodel->getLogin($id);
			$passResult = $login->password;
			if($login != '' && $pass == $passResult){
				$data_session = array (
				'status' =>TRUE,
				'nama' => $login->username
			);
				$this->session->set_userdata($data_session);

				redirect('admin');
			} else {
			redirect('Login');
			}
		}
	}

	public function doLogout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
?>