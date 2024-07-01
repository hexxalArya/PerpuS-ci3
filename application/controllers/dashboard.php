<?php

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() 
    {
        $this->m_akses->getAkses();
        $isi['content'] = 'viewhome';
        $isi['judul'] = 'Home';

        $this->load->model('m_dashboard');
        $isi['anggota'] = $this->m_dashboard->countAnggota();
        $isi['buku'] = $this->m_dashboard->countBuku();
        $isi['peminjaman'] = $this->m_dashboard->countPeminjaman();
        $isi['pengembalian'] = $this->m_dashboard->countKembali();
        $this->load->view('viewdashboard',$isi);
    }
}