<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rekap_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Rekap';
        $data['rekap'] = $this->Rekap_model->getAllRekap();
        if ($this->input->post('keyword')) {
            $data['rekap'] = $this->Rekap_model->cariDataRekap();
        }
        $this->load->view('template/header', $data);
        $this->load->view('rekap/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Rekap';
        $this->form_validation->set_rules('nm_mhs', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required');
        $this->form_validation->set_rules('nm_matkul', 'Nama Matkul', 'required');
        $this->form_validation->set_rules('kd_matkul', 'Kode Matkul', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('rekap/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Rekap_model->tambahDataRekap();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('rekap');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Rekap';
        $data['rekap'] = $this->Rekap_model->getRekapById($id);
        $this->load->view('template/header', $data);
        $this->load->view('rekap/detail', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {
        $this->Rekap_model->hapusDataRekap($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('rekap');
    }


    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Rekap';
        $data['rekap'] = $this->Rekap_model->getRekapById($id);

        $this->form_validation->set_rules('nm_mhs', 'Nama Mahasiswa', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required');
        $this->form_validation->set_rules('nm_matkul', 'Nama Matkul', 'required');
        $this->form_validation->set_rules('kd_matkul', 'Kode Matkul', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('rekap/ubah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Rekap_model->ubahDataRekap();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('rekap');
        }
    }
}
