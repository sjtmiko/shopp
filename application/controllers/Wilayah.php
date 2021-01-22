<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Wilayah extends CI_Controller {
	
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Provinsi');
    }

    public function index()
    {
        $data['data'] = $this->M_Provinsi->get_province();
        $this->load->view('admin/view_wilayah', $data);
    }

    public function get_city()
    {
        $id = $this->input->post('id');
        $data = $this->M_Provinsi->get_city($id);
        echo json_encode($data);
    }
}