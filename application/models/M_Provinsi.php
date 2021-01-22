<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Provinsi extends CI_Model {
    
    public function get_province()
    {
        $this->db->from('provinsi');
        $data = $this->db->get();

        return $data;
    }

    public function get_city($id)
    {
        $this->db->from('wilayah');
        $this->db->where('id_provinsi', $id);
        $query = $this->db->get();

        return $query->result();
    }
 
}