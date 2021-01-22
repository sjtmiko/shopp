<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_shopp extends CI_Model {

	//menampilkan daftar user
	public function getAll()
	{
		$this->db->order_by('id', 'asc');
		return $this->db->get('barang_stk')->result();
	}
	
	public function product_add(){
		$barang = array(
			'nama_barang' => $this->input->post('nama_barang'), 
			'jenis_barang' => $this->input->post('jenis_barang'),
			'foto_barang' => $this->input->post('foto_barang'), 
			'uk_barang' => $this->input->post('uk_barang'),
			'desk_barang' => $this->input->post('desk_barang'),
		);
 		$this->db->insert('barang_stk', $barang);
	}
}