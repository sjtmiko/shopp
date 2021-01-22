<?php

class Admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('M_admin');
	}
	public function index()	{
		//Pemanggilan Tampil Admin
		$data = array(  'isi' 	=> 'admin/v_admin',
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data); 
	}
	public function admin()	{
		//Pemanggilan Tampil Admin
		$data = array(  'isi' 	=> 'admin/wifiadmin/admin',
			'user'	=>	$this->M_admin->getAll(),
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data); 
	}
	public function user_add()
	{
		$data = array(  'isi' 	=> 'admin/wifiadmin/user_add',
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data);
	}
	public function user_add_act()
	{
		$this->M_admin->user_add();
		redirect('index.php/admin/admin');
	}
	public function user_edit($id)
	{
		$data = array(  'isi' 	=> 'admin/wifiadmin/user_edit',
						'user'	=>	$this->M_admin->user_getEdit($id),
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data);
	}
	public function user_edit_act()
	{
		$this->M_admin->user_edit();
		redirect('index.php/admin/admin');
	}
	public function user_delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('radcheck');
		redirect('index.php/admin/admin');
	}

}