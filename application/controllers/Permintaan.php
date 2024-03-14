<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permintaan extends CI_Controller
{



    public function index()
    {
        $data['title'] = 'Halaman Permintaan';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['permintaan'] = $this->db->get('permintaan')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('permintaan/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function tambah()
    {
        $data['title'] = 'Halaman Tambah Permintaan';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();


        $this->form_validation->set_rules('wilayah_rohani', 'Wilayah Rohani', 'required');
        $this->form_validation->set_rules('atas_nama', 'Atas Nama', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('permintaan/tambah', $data);
            $this->load->view('template/footer', $data);
        } else {
            $nama_pemohon = $this->input->post('nama_pemohon');
            $atas_nama = $this->input->post('atas_nama');
            $wilayah_rohani = $this->input->post('wilayah_rohani');
            $no_telp = $this->input->post('no_telp');
            $jenis_surat = $this->input->post('jenis_surat');
            $keterangan = $this->input->post('keterangan');

            $data = [
                'nama_pemohon' => $nama_pemohon,
                'atas_nama' => $atas_nama,
                'wilayah_rohani' => $wilayah_rohani,
                'no_telp' => $no_telp,
                'jenis_surat' => $jenis_surat,
                'keterangan' => $keterangan,
                'status' => '0',
            ];
            $this->db->insert('permintaan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Tambah Permintaan berhasil
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
            redirect('permintaan');
        }
    }
    public function ubah($id)
    {
        $data['title'] = 'Halaman Ubah Permintaan';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['data'] = $this->db->query("SELECT * FROM permintaan WHERE id_permintaan = '$id'")->row_array();

        $this->form_validation->set_rules('wilayah_rohani', 'Wilayah Rohani', 'required');
        $this->form_validation->set_rules('atas_nama', 'Atas Nama', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('permintaan/ubah', $data);
            $this->load->view('template/footer', $data);
        } else {
            $nama_pemohon = $this->input->post('nama_pemohon');
            $atas_nama = $this->input->post('atas_nama');
            $wilayah_rohani = $this->input->post('wilayah_rohani');
            $no_telp = $this->input->post('no_telp');
            $jenis_surat = $this->input->post('jenis_surat');
            $keterangan = $this->input->post('keterangan');

            $data = [
                'nama_pemohon' => $nama_pemohon,
                'atas_nama' => $atas_nama,
                'wilayah_rohani' => $wilayah_rohani,
                'no_telp' => $no_telp,
                'jenis_surat' => $jenis_surat,
                'keterangan' => $keterangan,
            ];
            $this->db->where('id_permintaan', $id);
            $this->db->update('permintaan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Ubah data permintaan berhasil!
             <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </a>
         </div>');
            redirect('permintaan');
        }
    }
    public function hapus()
    {
        $id = $this->input->post('hapus');

        $this->db->where('id_permintaan', $id);
        $this->db->delete('permintaan');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Hapus data permintaan berhasil!
             <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </a>
         </div>');
        redirect('permintaan');
    }
    public function validasi()
    {
        $data['title'] = 'Halaman Validasi';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['permintaan'] = $this->db->get_where('permintaan', ['status !=' => '3'])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('permintaan/validasi', $data);
        $this->load->view('template/footer', $data);
    }
    public function terima()
    {
        $id = $this->input->post('terima');
        $data = [
            'status' => '1',
        ];
        $this->db->where('id_permintaan', $id);
        $this->db->update('permintaan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Permohonan berhasil diterima!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
        redirect('permintaan/validasi');
    }
    public function tolak()
    {
        $id = $this->input->post('tolak');
        $data = [
            'status' => '2',
        ];
        $this->db->where('id_permintaan', $id);
        $this->db->update('permintaan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
               Permohonan berhasil diolak!
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>');
        redirect('permintaan/validasi');
    }
    public function diterima()
    {
        $data['title'] = 'Halaman Validasi';
        $data['page'] =  $this->uri->segment(1);
        $data['pengguna'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $data['permintaan'] = $this->db->query("SELECT * FROM permintaan WHERE status ='1'")->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('permintaan/diterima', $data);
        $this->load->view('template/footer', $data);
    }
    public function get($id)
    {
        $data = $this->db->get_where('permintaan', ['id_permintaan' => $id])->row();
        //echo "<pre>";echo print_r($data);echo "</pre>";die();
        echo json_encode($data);
    }
    public function selesai()
    {
        $id = $this->input->post('selesai');

        $data = [
            'status' => '3',
        ];
        $this->db->where('id_permintaan', $id);
        $this->db->update('permintaan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Permintaan Surat Telah Selesai!
             <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">×</span>
             </a>
         </div>');
        redirect('permintaan/diterima');
    }
}
