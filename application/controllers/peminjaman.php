<?php

class Peminjaman extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_peminjaman');
    }

    public function index()
    {
        $isi['content'] = 'peminjaman/viewpeminjaman';
        $isi['judul'] = 'Data Peminjaman';
        $isi['data'] = $this->m_peminjaman->get_data_peminjaman();
        $this->load->view('viewdashboard', $isi);
    }

    public function tambah_peminjaman()
    {
        $isi['content'] = 'peminjaman/t_peminjaman';
        $isi['judul'] = 'Form Tambah Peminjaman';
        $isi['id_peminjaman'] = $this->m_peminjaman->id_peminjaman();
        $isi['peminjam'] = $this->db->get('anggota')->result();
        $isi['buku'] = $this->db->get('buku')->result();
        $this->load->view('viewdashboard', $isi);
    }

    public function save()
    {
        $data = array(
            'id_peminjam' => $this->input->post('id_peminjam'),
            'id_anggota' => $this->input->post('id_anggota'),
            'id_buku' => $this->input->post('id_buku'),
            'tgl_pinjam' => $this->input->post('tgl_pinjam'),
            'tgl_kembali' => $this->input->post('tgl_kembali'),
        );
        $query = $this->db->insert('peminjaman', $data);
        if ($query = true) {
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Simpan');
            redirect('peminjaman');
        }
    }

    public function kembalikan($id)
    {
        $data = $this->m_peminjaman->getDataById_peminjam($id);
        $kembalikan = array(
            'id_anggota' => $data['id_anggota'],
            'id_buku' => $data['id_buku'],
            'tgl_pinjam' => $data['tgl_pinjam'],
            'tgl_kembali' => $data['tgl_kembali'],
            'tgl_kembalikan' => date('y-m-d'),
        );
        $query = $this->db->insert('pengembalian', $kembalikan);
        if ($query = true) {
            $delete = $this->m_peminjaman->deletepeminjam($id);
            if ($delete = true) {
                $this->session->set_flashdata('pesan', 'Buku berhasil di Kembalikan');
                redirect('peminjaman');
            }
        }
    }
}