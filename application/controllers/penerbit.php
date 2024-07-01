<?php

class Penerbit extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_penerbit');
    }

    public function index()
    {
        $isi['content'] = 'penerbit/viewpenerbit';
        $isi['judul'] = 'Daftar Penerbit';
        $isi['data'] = $this->db->get('penerbit')->result();
        $this->load->view('viewdashboard', $isi);

    }

    public function tambah_penerbit()
    {
        $isi['content'] = 'penerbit/form_penerbit';
        $isi['judul'] = 'Form Tambah Penerbit';
        $this->load->view('viewdashboard', $isi);

    }

    public function save()
    {
        $data['nama_penerbit'] = $this->input->post('nama_penerbit');
        $query = $this->db->insert('penerbit', $data); 
        if ($query = true){
            $this->session->set_flashdata('pesan', 'Data Berhasil di Simpan');
            redirect('penerbit');
        }
    }

    public function edit($id)
    {
        $isi['content'] = 'penerbit/edit_penerbit';
        $isi['judul'] = 'Form Edit Penerbit';
        $isi['data'] = $this->m_penerbit->edit($id);
        $this->load->view('viewdashboard', $isi);
    }

    public function update()
    {
        $id_penerbit           = $this->input->post('id_penerbit');
        $data['nama_penerbit'] = $this->input->post('nama_penerbit');
        $query = $this->m_penerbit->update($id_penerbit, $data); 
        if ($query = true){
            $this->session->set_flashdata('pesan', 'Data Berhasil di Update');
            redirect('penerbit');
        }
    
    }

    public function hapus($id)
    {
        $query = $this->m_penerbit->hapus($id); 
        if ($query = true){
            $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus');
            redirect('penerbit');
        }
    }
}