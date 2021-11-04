<?php

class Mitra extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mitra_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Daftar Mitra';

        $data['mitra'] = $this->Mitra_model->getAllMitra();
        $this->load->view('templates/header', $data);
        $this->load->view('mitra/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Mitra';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'Nomor Handphone', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mitra/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mitra_model->tambahDataMitra();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('mitra');
        }
    }

    public function hapus($id)
    {
        $this->Mitra_model->hapusDataMitra($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('mitra');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Mitra';
        $data['mitra'] = $this->Mitra_model->getMitraById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mitra/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Mitra';
        $data['mitra'] = $this->Mitra_model->getMitraById($id);
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'Nomor Handphone', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('mitra/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mitra_model->ubahDataMitra();
            $this->session->set_flashdata('flash', 'diubah');
            redirect('mitra');
        }
    }
}
