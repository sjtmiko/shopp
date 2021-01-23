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

		$foto_barang = $this->upload->data();
		$foto_barang = $foto_barang=['file_name'];
		$nama_barang = $this->input->post('nama_barang', TRUE);
		$jenis_barang = $this->input->post('jenis_barang', TRUE);
		$uk_barang = $this->input->post('nama_barang', TRUE);
		$desk_barang = $this->input->post('desk_barang', TRUE);
		
	}
	private function _uploadImage()
	{
		$config['upload_path']          = './foto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->nama_barang;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto_barang')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}
}