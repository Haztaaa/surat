<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_p extends CI_Controller
{



    public function index()
    {
        $data['title'] = 'Halaman Surat';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $data['t_pengguna'] = $this->db->get('user')->num_rows();
        $data['permintaan_surat'] = $this->db->get_where('permintaan', ['status' => '0'])->num_rows();
        $data['komuni'] = $this->db->get('komuni')->num_rows();
        $data['krisma'] = $this->db->get('krisma')->num_rows();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('template/footer', $data);
    }
}
