<?php

class Model_perjanjian extends CI_model{
    public function generate_kode()
    {
        $this->db->select_max('id_perjanjian');
        
        
        return $this->db->get('surat_perjanjian')->row_array()['id_perjanjian'];
    
    }
}