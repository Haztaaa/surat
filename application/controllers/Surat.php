<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
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
        $data['title'] = 'Halaman Surat';
        $data['page'] =  $this->uri->segment(1);
        $data['surat'] = $this->db->get('surat_permandian')->result_array();
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('surat/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function tambah()
    {
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['title'] = 'Halaman Tambah Surat';
        $data['page'] =  $this->uri->segment(1);


        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tempat_permandian', 'Tempat Permandian', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('surat/t_surat', $data);
            $this->load->view('template/footer', $data);
        } else {
            $tgl_lahir = $this->input->post('tgl_lahir');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_permandian = $this->input->post('tgl_permandian');
            $tempat_permandian = $this->input->post('tempat_permandian');
            $nama_anak = $this->input->post('nama_anak');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $nama_ayah = $this->input->post('nama_ayah');
            $nama_ibu = $this->input->post('nama_ibu');
            $wali_baptis = $this->input->post('wali_baptis');
            $diterima_oleh = $this->input->post('diterima_oleh');
            $tgl_sakramen = $this->input->post('tgl_sakramen');
            $tempat_sakramen = $this->input->post('tempat_sakramen');
            $menikah_dengan = $this->input->post('menikah_dengan');
            $tgl_menikah = $this->input->post('tgl_menikah');
            $tempat_menikah = $this->input->post('tempat_menikah');
            $today = date("Y-m-d");

            $data =
                [
                    'tgl_lahir' => $tgl_lahir,
                    'tmpt_lahir' => $tempat_lahir,
                    'tgl_permandian' => $tgl_permandian,
                    'tmpt_permandian' => $tempat_permandian,
                    'nama_anak' => $nama_anak,
                    'jenis_kelamin' => $jenis_kelamin,
                    'nama_ayah' => $nama_ayah,
                    'nama_ibu' => $nama_ibu,
                    'wali_baptis' => $wali_baptis,
                    'diterima_oleh' => $diterima_oleh,
                    'tgl_sakramen' => $tgl_sakramen,
                    'tmpt_sakramen' => $tempat_sakramen,
                    'menikah_dengan' =>  $menikah_dengan,
                    'tgl_menikah' => $tgl_menikah,
                    'tmpt_menikah' => $tempat_menikah,
                    'tgl_buat' => $today,
                ];
            $this->db->insert('surat_permandian', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Tambah Surat Permandian  Berhasil!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
            redirect('surat');
        }
    }
    public function ubah($id)
    {
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['title'] = 'Halaman Ubah Surat';
        $data['page'] =  $this->uri->segment(1);
        $data['data'] = $this->db->query("SELECT * FROM surat_permandian WHERE id_permandian = '$id'")->row_array();

        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tempat_permandian', 'Tempat Permandian', 'required');



        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('surat/u_surat', $data);
            $this->load->view('template/footer', $data);
        } else {
            $tgl_lahir = $this->input->post('tgl_lahir');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tgl_permandian = $this->input->post('tgl_permandian');
            $tempat_permandian = $this->input->post('tempat_permandian');
            $nama_anak = $this->input->post('nama_anak');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $nama_ayah = $this->input->post('nama_ayah');
            $nama_ibu = $this->input->post('nama_ibu');
            $wali_baptis = $this->input->post('wali_baptis');
            $diterima_oleh = $this->input->post('diterima_oleh');
            $tgl_sakramen = $this->input->post('tgl_sakramen');
            $tempat_sakramen = $this->input->post('tempat_sakramen');
            $menikah_dengan = $this->input->post('menikah_dengan');
            $tgl_menikah = $this->input->post('tgl_menikah');
            $tempat_menikah = $this->input->post('tempat_menikah');


            $data =
                [
                    'tgl_lahir' => $tgl_lahir,
                    'tmpt_lahir' => $tempat_lahir,
                    'tgl_permandian' => $tgl_permandian,
                    'tmpt_permandian' => $tempat_permandian,
                    'nama_anak' => $nama_anak,
                    'jenis_kelamin' => $jenis_kelamin,
                    'nama_ayah' => $nama_ayah,
                    'nama_ibu' => $nama_ibu,
                    'wali_baptis' => $wali_baptis,
                    'diterima_oleh' => $diterima_oleh,
                    'tgl_sakramen' => $tgl_sakramen,
                    'tmpt_sakramen' => $tempat_sakramen,
                    'menikah_dengan' =>  $menikah_dengan,
                    'tgl_menikah' => $tgl_menikah,
                    'tmpt_menikah' => $tempat_menikah,

                ];
            $this->db->where('id_permandian', $id);
            $this->db->update('surat_permandian', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Ubah Surat Permandian  Berhasil!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
            redirect('surat');
        }
    }
    public function detail($id)
    {
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['data'] = $this->db->get_where('surat_permandian', ['id_permandian' => $id])->row_array();

        $this->load->view('surat/detail', $data);
    }
    public function cetak()
    {
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $id = $this->input->post('cetak');

        $data['data'] = $this->db->get_where('surat_permandian', ['id_permandian' => $id])->row_array();
        $data1 = [
            'no' => 'regist'
        ];

        $this->db->insert('regist', $data1);
        $this->load->view('surat/cetak', $data);
    }
    public function get($id)
    {
        $data = $this->db->get_where('surat_permandian', ['id_permandian' => $id])->row();
        //echo "<pre>";echo print_r($data);echo "</pre>";die();
        echo json_encode($data);
    }
}
