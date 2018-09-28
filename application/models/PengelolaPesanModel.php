<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PengelolaPesanModel extends CI_Model{

	public function insertPesanan($pemesan, $tanggal, $produk, $level, $jumlah, $harga) {
		$this->db->insert('pesanan', array('pemesan' => $pemesan, 'tanggal' => $tanggal, 'produk'=>$produk ,'level' => $level, 'jumlah' => $jumlah, 'harga' => $harga ));
	}

	function readPesanan(){
		$query = $this->db->get('pesanan');
		return $query -> result();
	}

	function deletePesanan($id){
		$query = $this->db->where('id', $id);
		$this->db->delete('pesanan');
	}


}