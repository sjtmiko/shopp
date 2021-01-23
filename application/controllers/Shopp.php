<?php

class Shopp extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
     $this->load->model('M_shopp');
     $this->load->helper(array('form', 'url'));
	}
    public function index()	{

		$data = array(  'isi' 	=> 'admin/v_admin',
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Aneka Batu');
		$this->load->view('layout/wrapper',$data); 
    }

    public function list_barang(){
        $data = array(  'isi' 	=> 'admin/list_barang/lst_barang',
        'barang'	=>	$this->M_shopp->getAll(),
                    'nav'	=>	'admin/v_nav_admin',
                    'title' => 'Daftar Barang');
    $this->load->view('layout/wrapper',$data); 
    }

    public function product_add(){
      $data = array(  'isi' 	=> 'admin/list_barang/product_add',
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tambah Produk');
		$this->load->view('layout/wrapper',$data);
    }

    public function do_upload(){
     $post = $this->input->post();
     $this->id = uniqid();
      $this->nama_barang = $post["nama_barang"];
      $this->jenis_barang = $post["jenis_barang"];
      $this ->foto_barang = $this->_uploadImage();
      $this->uk_barang = $post["uk_barang"];
      $this->desk_barang = $post["desk_barang"];
      $this->db->insert('barang_stk', $this);
    }
}