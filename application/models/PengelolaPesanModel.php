<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PengelolaPesanModel extends CI_Model{

	public function insertPesanan($pemesan, $tanggal, $produk, $level, $jumlah, $harga, $waktu, $status) {
		$this->db->insert('pesanan', array('pemesan' => $pemesan, 'tanggal' => $tanggal, 'produk'=>$produk ,'level' => $level, 'jumlah' => $jumlah, 'harga' => $harga, 'waktu'=>$waktu,'status'=>$status ));
	}

	function readSemuaPesanan(){
		$query = $this->db->get('pesanan');
		return $query -> result();
	}

	function readPesananBelumTersedia(){
		$query = $this->db->order_by('waktu', 'ASC');
		$query = $this->db->where('status', 'belum tersedia');
		$query = $this->db->get('pesanan');
		return $query -> result();
	}

	function readPesananBelumTerkirim(){
		$query = $this->db->order_by('waktu', 'ASC');
		$query = $this->db->where("(kirim!='terkirim' and status='tersedia')");
		$query = $this->db->get('pesanan');
		return $query -> result();
	}


	function readPesananTerkirim(){
		$query = $this->db->order_by('waktu', 'ASC');
		$query = $this->db->where("(kirim='terkirim')");
		$query = $this->db->get('pesanan');
		return $query -> result();
	}

	

	function readUrutanPesanan(){
		$query = $this->db->order_by('waktu', 'ASC');
		$query = $this->db->where("(kirim!='terkirim')");
		$query = $this->db->get('pesanan');
		return $query -> result();
	}


	function sediakanPesanan($id){
		$query = $this->db->where('id', $id);
		$data = array(
			'status' => 'tersedia');
		$this->db->update('pesanan', $data);
	}

	function kirimPesanan($id){
		$data = array(
			'kirim' => 'terkirim');
		$query = $this->db->where('id', $id);
		$this->db->update('pesanan', $data);
	}


}