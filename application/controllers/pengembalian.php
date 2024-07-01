<?php 

class Pengembalian extends CI_Controller{

    public function index()
    {
        $isi['content'] = 'pengembalian/viewpengembalian';
        $isi['judul'] = 'Data Pengembalian Buku';
        $this->load->model('m_pengembalian');
        $isi['data'] = $this->m_pengembalian->getAllData();
        $this->load->view('viewdashboard', $isi);
    }
}