<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komuni extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Halaman Komuni';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['komuni'] = $this->db->get('komuni')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('komuni/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function tambah()
    {
        $data['title'] = 'Halaman Tambah Komuni';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('no_baptis', 'No Baptis', 'required');
        $this->form_validation->set_rules('tgl_permandian', 'Tanggal Permandian', 'required');
        $this->form_validation->set_rules('tmpt_permandian', 'Tempat Permandian', 'required');
        $this->form_validation->set_rules('paroki_penerimaan', 'Paroki Penerimaan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('komuni/tambah', $data);
            $this->load->view('template/footer', $data);
        } else {
            $nama = $this->input->post('nama');
            $nama_ayah = $this->input->post('nama_ayah');
            $nama_ibu = $this->input->post('nama_ibu');
            $no_baptis = $this->input->post('no_baptis');
            $tgl_permandian = $this->input->post('tgl_permandian');
            $tmpt_permandian = $this->input->post('tmpt_permandian');
            $paroki_penerimaan = $this->input->post('paroki_penerimaan');

            $data = [
                'nama' => $nama,
                'nama_ayah' => $nama_ayah,
                'nama_ibu' => $nama_ibu,
                'no_baptis' => $no_baptis,
                'tgl_permandian' => $tgl_permandian,
                'tmpt_permandian' => $tmpt_permandian,
                'paroki_penerimaan' => $paroki_penerimaan
            ];
            $this->db->insert('komuni', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Tambah Komuni Pertama berhasil!
                 <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </a>
             </div>');
            redirect('Komuni');
        }
    }
    public function ubah($id)
    {
        $data['title'] = 'Halaman Ubah Komuni';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['data'] = $this->db->query("SELECT * FROM komuni WHERE id_komuni = '$id'")->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('no_baptis', 'No Baptis', 'required');
        $this->form_validation->set_rules('tgl_permandian', 'Tanggal Permandian', 'required');
        $this->form_validation->set_rules('tmpt_permandian', 'Tempat Permandian', 'required');
        $this->form_validation->set_rules('paroki_penerimaan', 'Paroki Penerimaan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('komuni/ubah', $data);
            $this->load->view('template/footer', $data);
        } else {
            $nama = $this->input->post('nama');
            $nama_ayah = $this->input->post('nama_ayah');
            $nama_ibu = $this->input->post('nama_ayah');
            $no_baptis = $this->input->post('no_baptis');
            $tgl_permandian = $this->input->post('tgl_permandian');
            $tmpt_permandian = $this->input->post('tmpt_permandian');
            $paroki_penerimaan = $this->input->post('paroki_penerimaan');

            $data = [
                'nama' => $nama,
                'nama_ayah' => $nama_ayah,
                'nama_ibu' => $nama_ibu,
                'no_baptis' => $no_baptis,
                'tgl_permandian' => $tgl_permandian,
                'tmpt_permandian' => $tmpt_permandian,
                'paroki_penerimaan' => $paroki_penerimaan
            ];
            $this->db->where('id_komuni', $id);
            $this->db->update('komuni', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
           Ubah Data Komuni Pertama berhasil!
                 <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </a>
             </div>');
            redirect('Komuni');
        }
    }
    public function hapus()
    {
        $id = $this->input->post('hapus');

        $this->db->where('id_komuni', $id);
        $this->db->delete('komuni');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
              Hapus data komuni berhasil!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
        redirect('komuni');
    }
    public function get($id)
    {
        $data = $this->db->get_where('komuni', ['id_komuni' => $id])->row();
        //echo "<pre>";echo print_r($data);echo "</pre>";die();
        echo json_encode($data);
    }
}
