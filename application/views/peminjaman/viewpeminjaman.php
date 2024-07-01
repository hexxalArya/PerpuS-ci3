<?php
    if (!empty($this->session->flashdata('pesan'))) {?>
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('pesan');?></div>
    <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href="<?php base_url()?>peminjaman/tambah_peminjaman" class="btn btn-success"><i class="fa fa-plus"></i>Tambah Peminjaman</a>
    </div>
</div>

<br>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Table</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Peminjam</th>
                    <th>Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  
                </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $row) {?>
                <tr>
                    <td><?= $row->id_peminjam;?></td>
                    <td><?= $row->nama_anggota;?></td>
                    <td><?= $row->judul_buku;?></td>
                    <td><?= $row->tgl_pinjam;?></td>
                    <td><?= $row->tgl_kembali;?></td>
                    <td>
                        <a href="<?= base_url()?>peminjaman/kembalikan/<?= $row->id_peminjam;?>" class = "btn btn-primary btn-xs" onclick="return confirm('Yakin Ingin Di Kembalikan?');"> Kembalikan </a>
                    </td>
                </tr>
              <?php }

              ?>
            </tbody>
        </table>
    </div>
</div>