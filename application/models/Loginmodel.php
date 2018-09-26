<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginmodel extends CI_Model{

	function getLogin($user){
	$query = $this->db->get_where('login', array('username' => $user));
	if ($query->num_rows() == 1)
	return $query->row();
	else
	return '';
	}

	public function createUser($user, $pasword) {
		$this->db->insert('login', array('username' => $user, 'password' => $pasword));
	}
}