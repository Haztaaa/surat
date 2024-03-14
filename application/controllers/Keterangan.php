<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keterangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') == 3) {
            redirect('user/dashboard');
        }
        date_default_timezone_set('Asia/Makassar');
    }

    public function index()
    {
        $data['title'] = 'Halaman Surat Pernikahan';
        $data['page'] =  $this->uri->segment(1);
        $data['surat'] = $this->db->get('surat_keterangan')->result_array();
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('keterangan/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function detail($id)
    {
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['data'] = $this->db->query("SELECT * FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();

        $d2 = $this->db->query("SELECT monthname(tgl_perkawinan)  FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();
        $d3 = implode('', $d2);
        $data['data_bulan'] = $d3;

        $d =  $this->db->query("SELECT YEAR(tgl_perkawinan) FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();
        $d1 = implode('', $d);
        $h = $this->db->query("SELECT day(tgl_perkawinan)  FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();
        $h2 = implode('', $h);
        $data['hari'] = $h2;
        $data['data_tahun'] = $d1;

        $b1 = $this->db->query("SELECT monthname(tgl_diberikan)  FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();
        $b2 = implode('', $b1);
        $data['bulan_diberikan'] = $b2;

        $t =  $this->db->query("SELECT YEAR(tgl_diberikan) FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();
        $t1 = implode('', $t);
        $data['tahun_diberikan'] = $t1;

        $hh = $this->db->query("SELECT day(tgl_diberikan)  FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();
        $hhh = implode('', $hh);
        $data['hari_diberikan'] = $hhh;

        $this->load->view('keterangan/tulis', $data);
    }
    public function cetak($id)
    {
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['data'] = $this->db->query("SELECT * FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();

        $d2 = $this->db->query("SELECT monthname(tgl_perkawinan)  FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();
        $d3 = implode('', $d2);
        $data['data_bulan'] = $d3;

        $d =  $this->db->query("SELECT YEAR(tgl_perkawinan) FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();
        $d1 = implode('', $d);
        $h = $this->db->query("SELECT day(tgl_perkawinan)  FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();
        $h2 = implode('', $h);
        $data['hari'] = $h2;
        $data['data_tahun'] = $d1;

        $b1 = $this->db->query("SELECT monthname(tgl_diberikan)  FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();
        $b2 = implode('', $b1);
        $data['bulan_diberikan'] = $b2;

        $t =  $this->db->query("SELECT YEAR(tgl_diberikan) FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();
        $t1 = implode('', $t);
        $data['tahun_diberikan'] = $t1;

        $hh = $this->db->query("SELECT day(tgl_diberikan)  FROM surat_keterangan WHERE id_keterangan ='$id'")->row_array();
        $hhh = implode('', $hh);
        $data['hari_diberikan'] = $hhh;

        $this->load->view('keterangan/cetak', $data);
    }
    public function tambah()
    {
        $data['title'] = 'Halaman Tambah';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $this->form_validation->set_rules('buku_perkawinan', 'Buku Perkawinan', 'required');
        $this->form_validation->set_rules('tgl_perkawinan', 'Tanggal Perkawinan', 'required');
        $this->form_validation->set_rules('gereja', 'Di Gereja', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('nama_pria', 'Nama Pria', 'required');
        $this->form_validation->set_rules('nama_wanita', 'Nama Wanita', 'required');
        $this->form_validation->set_rules('ayah_pria', 'Nama Ayah (Pria)', 'required');
        $this->form_validation->set_rules('ibu_pria', 'Nama Ibu (Pria)', 'required');
        $this->form_validation->set_rules('ayah_wanita', 'Nama Ayah (Wanita)', 'required');
        $this->form_validation->set_rules('ibu_wanita', 'Nama Ibu (Wanita)', 'required');
        $this->form_validation->set_rules('saksi', 'Saksi', 'required');
        $this->form_validation->set_rules('saksi_resmi', 'Saksi Resmi', 'required');
        $this->form_validation->set_rules('diberikan', 'Diberikan Di', 'required');
        $this->form_validation->set_rules('tgl_diberikan', 'Tanggal Diberikan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('keterangan/tambah', $data);
            $this->load->view('template/footer', $data);
        } else {
            $today = date("Y-m-d");

            $data = [
                'buku_perkawinan' => $this->input->post('buku_perkawinan'),
                'tgl_perkawinan' => $this->input->post('tgl_perkawinan'),
                'gereja' => $this->input->post('gereja'),
                'tempat' => $this->input->post('tempat'),
                'nama_pria' => $this->input->post('nama_pria'),
                'nama_wanita' => $this->input->post('nama_wanita'),
                'ayah_pria' => $this->input->post('ayah_pria'),
                'ibu_pria' => $this->input->post('ibu_pria'),
                'ayah_wanita' => $this->input->post('ayah_wanita'),
                'ibu_wanita' => $this->input->post('ibu_wanita'),
                'saksi' => $this->input->post('saksi'),
                'saksi_resmi' => $this->input->post('saksi_resmi'),
                'diberikan' => $this->input->post('diberikan'),
                'tgl_diberikan' => $this->input->post('tgl_diberikan'),
                'tgl_surat' => $today
            ];
            $this->db->insert('surat_keterangan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Tambah Surat Keterangan Berhasil!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
            redirect('keterangan');
        }
    }
    public function ubah($id)
    {
        $data['title'] = 'Halaman Ubah ';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['data'] = $this->db->query("SELECT * FROM surat_keterangan WHERE  id_keterangan='$id'")->row_array();


        $this->form_validation->set_rules('buku_perkawinan', 'Buku Perkawinan', 'required');
        $this->form_validation->set_rules('tgl_perkawinan', 'Tanggal Perkawinan', 'required');
        $this->form_validation->set_rules('gereja', 'Di Gereja', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        $this->form_validation->set_rules('nama_pria', 'Nama Pria', 'required');
        $this->form_validation->set_rules('nama_wanita', 'Nama Wanita', 'required');
        $this->form_validation->set_rules('ayah_pria', 'Nama Ayah (Pria)', 'required');
        $this->form_validation->set_rules('ibu_pria', 'Nama Ibu (Pria)', 'required');
        $this->form_validation->set_rules('ayah_wanita', 'Nama Ayah (Wanita)', 'required');
        $this->form_validation->set_rules('ibu_wanita', 'Nama Ibu (Wanita)', 'required');
        $this->form_validation->set_rules('saksi', 'Saksi', 'required');
        $this->form_validation->set_rules('saksi_resmi', 'Saksi Resmi', 'required');
        $this->form_validation->set_rules('diberikan', 'Diberikan Di', 'required');
        $this->form_validation->set_rules('tgl_diberikan', 'Tanggal Diberikan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('keterangan/ubah', $data);
            $this->load->view('template/footer', $data);
        } else {

            $data = [
                'buku_perkawinan' => $this->input->post('buku_perkawinan'),
                'tgl_perkawinan' => $this->input->post('tgl_perkawinan'),
                'gereja' => $this->input->post('gereja'),
                'tempat' => $this->input->post('tempat'),
                'nama_pria' => $this->input->post('nama_pria'),
                'nama_wanita' => $this->input->post('nama_wanita'),
                'ayah_pria' => $this->input->post('ayah_pria'),
                'ibu_pria' => $this->input->post('ibu_pria'),
                'ayah_wanita' => $this->input->post('ayah_wanita'),
                'ibu_wanita' => $this->input->post('ibu_wanita'),
                'saksi' => $this->input->post('saksi'),
                'saksi_resmi' => $this->input->post('saksi_resmi'),
                'diberikan' => $this->input->post('diberikan'),
                'tgl_diberikan' => $this->input->post('tgl_diberikan'),

            ];
            $this->db->where('id_keterangan', $id);
            $this->db->update('surat_keterangan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Ubah Surat Keterangan Berhasil!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
            redirect('keterangan');
        }
    }
}
