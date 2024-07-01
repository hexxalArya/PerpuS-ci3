<?php
    if (!empty($this->session->flashdata('pesan'))) {?>
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('pesan');?></div>
    <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href="<?php base_url()?>anggota/tambah_anggota" class="btn btn-success"><i class="fa fa-plus"></i>Tambah Anggota</a>
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
                    <th>ID Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($data as $row) {?>
                <tr>
                    <td><?= $row->id_anggota;?></td>
                    <td><?= $row->nama_anggota;?></td>
                    <td><?= $row->gender;?></td>
                    <td><?= $row->alamat;?></td>
                    <td><?= $row->no_hp;?></td>
                    <td>
                        <a href="<?= base_url()?>anggota/edit/<?= $row->id_anggota;?>" class="btn btn-success btn-xs">Edit</a>
                        <a href="<?= base_url()?>anggota/hapus/<?= $row->id_anggota;?>" class="btn btn-danger btn-xs" onclick="return confirm('ingin dihapus?');">Hapus</a>
                    </td>
                </tr>
            <?php }
        ?>

            </tbody>
        </table>
    </div>
</div>