<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perjanjian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') == 3) {
            redirect('user/dashboard');
        }
        date_default_timezone_set('Asia/Makassar');
        $this->load->model('Model_perjanjian','perjanjian');
    }

    public function index()
    {
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['title'] = 'Halaman Surat perjanjian';
        $data['page'] =  $this->uri->segment(1);
        $data['surat'] = $this->db->get('surat_perjanjian')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('perjanjian/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Halaman Surat Pernikahan';
        $data['page'] =  $this->uri->segment(1);  
       
       $sqlcek = $this->perjanjian->generate_kode();
       $kode = $sqlcek;
       $kode++;
       $ket = "";
       $kode_auto = $ket . sprintf("%02s", $kode);
       $data['kode_auto'] = $kode_auto;

        $this->form_validation->set_rules('nama_laki', 'Mempelai Pria', 'required');
        $this->form_validation->set_rules('nama_perempuan', 'Mempelai Wanita', 'required');
        $this->form_validation->set_rules('diteguhkan', 'Diteguhkan', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('peneguh', 'Peneguh', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('perjanjian/tambah', $data);
            $this->load->view('template/footer', $data);
        } else {
            $today = date("Y-m-d");
            
            $data = [
                'nama_laki' => $this->input->post('nama_laki'),
                'nama_perempuan' => $this->input->post('nama_perempuan'),
                'diteguhkan' => $this->input->post('diteguhkan'),
                'tanggal' => $this->input->post('tanggal'),
                'peneguh' => $this->input->post('peneguh'),
                'tgl_surat' => $today,
                'kode' => $this->input->post('kode'),
            ];
            $this->db->insert('surat_perjanjian', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Tambah Surat Perjanjian  Berhasil!
                 <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </a>
             </div>');
            redirect('perjanjian');
        }
    }
    public function ubah($id)
    {
        $data['title'] = 'Halaman Surat Pernikahan';
        $data['page'] =  $this->uri->segment(1);
        $data['data'] = $this->db->query("SELECT * FROM surat_perjanjian WHERE id_perjanjian ='$id'")->row_array();

        $this->form_validation->set_rules('nama_laki', 'Mempelai Pria', 'required');
        $this->form_validation->set_rules('nama_perempuan', 'Mempelai Wanita', 'required');
        $this->form_validation->set_rules('diteguhkan', 'Diteguhkan', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('peneguh', 'Peneguh', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('perjanjian/ubah', $data);
            $this->load->view('template/footer', $data);
        } else {

            $data = [
                'nama_laki' => $this->input->post('nama_laki'),
                'nama_perempuan' => $this->input->post('nama_perempuan'),
                'diteguhkan' => $this->input->post('diteguhkan'),
                'tanggal' => $this->input->post('tanggal'),
                'peneguh' => $this->input->post('peneguh'),

            ];
            $this->db->where('id_perjanjian', $id);
            $this->db->update('surat_perjanjian', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Ubah Surat Perjanjian  Berhasil!
                 <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </a>
             </div>');
            redirect('perjanjian');
        }
    }
    public function cetak($id)
    {
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['data'] = $this->db->query("SELECT * FROM surat_perjanjian WHERE id_perjanjian = '$id'")->row_array();
        $this->load->view('perjanjian/cetak', $data);
    }
    public function detail($id)
    {
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['data'] = $this->db->query("SELECT * FROM surat_perjanjian WHERE id_perjanjian = '$id'")->row_array();
        $data['year'] = date('Y');
        $data['month'] = date('m');
        $this->load->view('perjanjian/detail', $data);
    }
}
