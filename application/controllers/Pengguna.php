<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Halaman Surat';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['user'] = $this->db->get_where('user', ['level !=' => '1'])->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('pengguna/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function tambah()
    {
        $data['title'] = 'Halaman Tambah Pengguna';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'required');
        $this->form_validation->set_rules('kata_sandi', 'Kata Sandi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pengguna/tambah', $data);
            $this->load->view('template/footer', $data);
        } else {
            $nama = $this->input->post('nama');
            $nama_pengguna = $this->input->post('nama_pengguna');
            $kata_sandi = $this->input->post('kata_sandi');
            $jabatan = $this->input->post('jabatan');

            if ($jabatan == "Sekertariat") {
                $level = 2;
                $jabatan = "Sekertariat";
            } else {
                $level = 3;
                $jabatan = "Ketua Wilayah";
            }

            $data = [
                'nama' => $nama,
                'username' => $nama_pengguna,
                'password' => $kata_sandi,
                'jabatan' => $jabatan,
                'level' => $level,
                'status' => '0',
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Tambah Pengguna berhasil!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
            redirect('pengguna');
        }
    }
    public function ubah($id)
    {
        $data['title'] = 'Halaman Ubah Pengguna';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['data'] = $this->db->query("SELECT * FROM user WHERE id_user = '$id'")->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'required');
        $this->form_validation->set_rules('kata_sandi', 'Kata Sandi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('pengguna/ubah', $data);
            $this->load->view('template/footer', $data);
        } else {
            $nama = $this->input->post('nama');
            $nama_pengguna = $this->input->post('nama_pengguna');
            $kata_sandi = $this->input->post('kata_sandi');
            $jabatan = $this->input->post('jabatan');

            if ($jabatan == "sekertariat") {
                $level = 2;
                $jabatan = "Sekertariat";
            } else {
                $level = 3;
                $jabatan = "Ketua Wilayah";
            }

            $data = [
                'nama' => $nama,
                'username' => $nama_pengguna,
                'password' => $kata_sandi,
                'jabatan' => $jabatan,
                'level' => $level,
                'status' => '0',
            ];
            $this->db->where('id_user', $id);
            $this->db->update('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Ubah data pengguna berhasil!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
            redirect('pengguna');
        }
    }
    public function hapus()
    {
        $id = $this->input->post('hapus');

        $this->db->where('id_user', $id);
        $this->db->delete('user');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Hapus data pengguna berhasil!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
        redirect('pengguna');
    }
    public function aktif()
    {
        $id = $this->input->post('a_id_user');
        $data = [
            'status' => '0'
        ];
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Akun diaktifkan berhasil!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
        redirect('pengguna');
    }
    public function tidak()
    {
        $id = $this->input->post('t_id_user');
        $data = [
            'status' => '1'
        ];
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Akun dinonaktifkan berhasil!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
        redirect('pengguna');
    }
    public function get($id)
    {
        $data = $this->db->get_where('user', ['id_user' => $id])->row();
        //echo "<pre>";echo print_r($data);echo "</pre>";die();
        echo json_encode($data);
    }
}
