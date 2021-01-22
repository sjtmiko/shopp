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

    public function product_add_act(){
      $nama_barang = $this->input->post('nama_barang'); 
      $jenis_barang = $this->input->post('jenis_barang');
			$uk_barang = $this->input->post('uk_barang');
      $desk_barang = $this->input->post('desk_barang');
      $foto_barang = $_FILES['foto_barang'];
      if($foto_barang=' '){
        echo "die";
      }
      else{
        $config['upload_path'] = './foto';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload',$config);
        if($this->upload->do_upload('file')){
          $foto_barang = $this->upload->data('file_name');
        }else{
          echo "upload gagal";
        }
      }
      $data = array (
          'nama_barang' => $nama_barang,
          'jenis_barang' => $jenis_barang,
          'uk_barang' => $uk_barang,
          'desk_barang' => $desk_barang,
          'foto_barang' => $foto_barang
      );
    	$this->db->insert('barang_stk', $data);
      redirect('index.php/Shopp/list_barang');
    }
}