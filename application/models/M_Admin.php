<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	//menampilkan daftar user
	public function getAll()
	{
		$this->db->order_by('username', 'asc');
		return $this->db->get('radcheck')->result();
	}
	public function user_add()
	{
		$user = array(
			'username' => $this->input->post('username'), 
			'attribute' => $this->input->post('attribute'), 
			'value' => $this->input->post('value'),
		);
		$this->db->insert('radcheck', $user);
    }
    public function user_getEdit($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('radcheck')->row();
    }
    public function user_edit()
	{
		$id = $this->input->post('id');
		$user = array(
			'username' => $this->input->post('username'), 
			'attribute' => $this->input->post('attribute'), 
			'value' => $this->input->post('value'),
		);
		$this->db->where('id', $id);
		$this->db->update('radcheck', $user);
		redirect('index.php/admin/admin');
	}

}
