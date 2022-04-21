<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Matkul_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar matkul';
        $data['matkul'] = $this->Matkul_model->getAllMatkul();
        if ($this->input->post('keyword')) {
            $data['matkul'] = $this->Matkul_model->cariDataMatkul();
        }
        $this->load->view('template/header', $data);
        $this->load->view('matkul/index', $data);
        $this->load->view('template/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Matkul';
        $data['matkul'] = $this->Matkul_model->getMatkulById($id);
        $this->load->view('template/header', $data);
        $this->load->view('matkul/detail', $data);
        $this->load->view('template/footer');
    }


    public function hapus($id)
    {
        $this->Matkul_model->hapusDatMatkul($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('matkul');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Matkul';
        $this->form_validation->set_rules('nm_matkul', 'Nama Mata Kuliah', 'required');
        $this->form_validation->set_rules('kd_matkul', 'Kode Mata Kuliah', 'required');
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('matkul/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Matkul_model->tambahDataMatkul();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('matkul');
        }
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Matkul';
        $data['matkul'] = $this->Matkul_model->getMatkulById($id);
        $data['ruangan'] = ['Ruangan 1A', 'Ruangan 1B', 'Ruangan 2A', 'Ruangan 2B', 'Ruangan 3A', 'Ruangan 3B'];

        $this->form_validation->set_rules('nm_matkul', 'Nama Mata Kuliah', 'required');
        $this->form_validation->set_rules('kd_matkul', 'Kode Mata Kuliah', 'required');
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('matkul/ubah', $data);
            $this->load->view('template/footer');
        } else {
            $this->Matkul_model->ubahDataMatkul();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('matkul');
        }
    }
}
