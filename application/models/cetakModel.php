<?php if ( ! defined('BASEPATH')) exit ('No direct script acces allowed');

class cetakModel extends CI_Model{
	function sortingAge(){
		$this->db->order_by('tanggal', 'DESC');
    	$query = $this->db->get('warga');
    	return $query->result();
	}

	function sortingName(){
		$this->db->order_by('nama', 'ASC');
    	$query = $this->db->get('warga');
    	return $query->result();
	}

	function kelompokDewasa(){
		$nik = '41155050140004';
		$this->db->where('nik',$nik);
		// $this->db->get('warga');
		$query=$this->db->get('warga');
	    	return $query->result();
	}

}