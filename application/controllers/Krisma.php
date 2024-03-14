<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Krisma extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Halaman Krisma';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['krisma'] = $this->db->get('krisma')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('krisma/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function tambah()
    {
        $data['title'] = 'Halaman Tambah Krisma';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('no_baptis', 'No Baptis', 'required');
        $this->form_validation->set_rules('tgl_permandian', 'Tanggal Permandian', 'required');
        $this->form_validation->set_rules('tmpt_permandian', 'Tempat Permandian', 'required');
        $this->form_validation->set_rules('nama_penguatan', 'Nama Penguatan', 'required');
        $this->form_validation->set_rules('tmpt_krisma', 'Tempat Krimsa', 'required');
        $this->form_validation->set_rules('paroki_penerimaan', 'Paroki Penerimaan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('krisma/tambah', $data);
            $this->load->view('template/footer', $data);
        } else {
            $nama = $this->input->post('nama');
            $nama_ayah = $this->input->post('nama_ayah');
            $nama_ibu = $this->input->post('nama_ibu');
            $no_baptis = $this->input->post('no_baptis');
            $tgl_permandian = $this->input->post('tgl_permandian');
            $tmpt_permandian = $this->input->post('tmpt_permandian');
            $nama_penguatan = $this->input->post('nama_penguatan');
            $tmpt_krisma = $this->input->post('tmpt_krisma');
            $paroki_penerimaan = $this->input->post('paroki_penerimaan');

            $data = [
                'nama' => $nama,
                'nama_ayah' => $nama_ayah,
                'nama_ibu' => $nama_ibu,
                'no_baptis' => $no_baptis,
                'tgl_permandian' => $tgl_permandian,
                'tmpt_permandian' => $tmpt_permandian,
                'nama_penguatan' => $nama_penguatan,
                'tmpt_krisma' => $tmpt_krisma,
                'paroki_penerimaan' => $paroki_penerimaan
            ];
            $this->db->insert('krisma', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Tambah Krisma berhasil!
                 <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </a>
             </div>');
            redirect('Krisma');
        }
    }
    public function ubah($id)
    {
        $data['title'] = 'Halaman Ubah Krisma';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['data'] = $this->db->query("SELECT * FROM krisma WHERE id_krisma = '$id'")->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('no_baptis', 'No Baptis', 'required');
        $this->form_validation->set_rules('tgl_permandian', 'Tanggal Permandian', 'required');
        $this->form_validation->set_rules('tmpt_permandian', 'Tempat Permandian', 'required');
        $this->form_validation->set_rules('nama_penguatan', 'Nama Penguatan', 'required');
        $this->form_validation->set_rules('tmpt_krisma', 'Tempat Krimsa', 'required');
        $this->form_validation->set_rules('paroki_penerimaan', 'Paroki Penerimaan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('krisma/ubah', $data);
            $this->load->view('template/footer', $data);
        } else {
            $nama = $this->input->post('nama');
            $nama_ayah = $this->input->post('nama_ayah');
            $nama_ibu = $this->input->post('nama_ayah');
            $no_baptis = $this->input->post('no_baptis');
            $tgl_permandian = $this->input->post('tgl_permandian');
            $tmpt_permandian = $this->input->post('tmpt_permandian');
            $nama_penguatan = $this->input->post('nama_penguatan');
            $tmpt_krisma = $this->input->post('tmpt_krisma');
            $paroki_penerimaan = $this->input->post('paroki_penerimaan');

            $data = [
                'nama' => $nama,
                'nama_ayah' => $nama_ayah,
                'nama_ibu' => $nama_ibu,
                'no_baptis' => $no_baptis,
                'tgl_permandian' => $tgl_permandian,
                'tmpt_permandian' => $tmpt_permandian,
                'nama_penguatan' => $nama_penguatan,
                'tmpt_krisma' => $tmpt_krisma,
                'paroki_penerimaan' => $paroki_penerimaan
            ];
            $this->db->where('id_krisma', $id);
            $this->db->update('krisma', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
           Ubah Data Krisma berhasil!
                 <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </a>
             </div>');
            redirect('Krisma');
        }
    }
    public function hapus()
    {
        $id = $this->input->post('hapus');

        $this->db->where('id_krisma', $id);
        $this->db->delete('krisma');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Hapus data krisma berhasil!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
        redirect('krisma');
    }
    public function get($id)
    {
        $data = $this->db->get_where('krisma', ['id_krisma' => $id])->row();
        //echo "<pre>";echo print_r($data);echo "</pre>";die();
        echo json_encode($data);
    }
}
