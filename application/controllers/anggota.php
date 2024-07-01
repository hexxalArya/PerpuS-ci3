<?php

class Anggota Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_anggota');
    }

    public function index()
    {
        $isi['content'] = 'anggota/viewanggota';
        $isi['judul'] = 'Daftar Data Anggota';
        $isi['data'] = $this->db->get('anggota')->result();
        $this->load->view('viewdashboard', $isi);
    }

    public function tambah_anggota()
    {
        $isi['content'] = 'anggota/form_anggota';
        $isi['judul'] = 'Form Tambah Anggota';
        $isi['id_anggota'] = $this->m_anggota->id_anggota();
        $this->load->view('viewdashboard', $isi);
    }

    public function save()
    {
        $data = array(
            'id_anggota' => $this->input->post('id_anggota'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'gender' => $this->input->post('gender'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
        );
        $query = $this->db->insert('anggota', $data);
        if ($query) {
            $this->session->set_flashdata('pesan', 'Data Berhasil di Simpan');
            redirect('anggota');
        }
    }

    public function edit($id)
    {
        $isi['content'] = 'anggota/edit_anggota';
        $isi['judul'] = 'Form Edit Anggota';
        $isi['data'] = $this->m_anggota->edit($id);
        $this->load->view('viewdashboard', $isi); 
    }

    public function update()
    {
        $id_anggota = $this->input->post('id_anggota');
        $data = array(
            'id_anggota' => $this->input->post('id_anggota'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'gender' => $this->input->post('gender'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
        );
        $query = $this->m_anggota->update($id_anggota, $data);
        if ($query = true) {
            $this->session->set_flashdata('pesan', 'Data Berhasil di Ubah');
            redirect('anggota');
        }
    }

    public function hapus($id)
    {
        $query = $this->m_anggota->hapus($id);
        if ($query = true) {
            $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
            redirect('anggota');
        }
    }
}