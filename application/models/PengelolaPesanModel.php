<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PengelolaPesanModel extends CI_Model{

	public function insertPesanan($pemesan, $tanggal, $produk, $level, $jumlah, $harga, $waktu, $status) {
		$this->db->insert('pesanan', array('pemesan' => $pemesan, 'tanggal' => $tanggal, 'produk'=>$produk ,'level' => $level, 'jumlah' => $jumlah, 'harga' => $harga, 'waktu'=>$waktu,'status'=>$status ));
	}

	function readPesanan(){
		$query = $this->db->get('pesanan');
		return $query -> result();
	}

	function urutkanPesananKepala(){
		$query = $this->db->order_by('waktu', 'ASC');
		$query = $this->db->where('kirim', 'belum terkirim');
		$query = $this->db->get('pesanan');
		return $query -> result();
	}

	function urutkanPesananAdmin(){
		$query = $this->db->order_by('waktu', 'ASC');
		$query = $this->db->where("(status='belum tersedia' OR kirim='belum terkirim')");
		$query = $this->db->get('pesanan');
		return $query -> result();
	}

	function ubahPesananKepala($id){
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