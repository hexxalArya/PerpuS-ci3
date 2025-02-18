<?php
    if (!empty($this->session->flashdata('pesan'))) {?>
    <div class="alert alert-success" role="alert"><?= $this->session->flashdata('pesan');?></div>
    <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href="<?php base_url()?>pengarang/tambah_pengarang" class="btn btn-success"><i class="fa fa-plus"></i>Tambah Pengarang</a>
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
                    <th>ID Pengarang</th>
                    <th>Nama Pengarang</th>
                    <th>Aksi</th>
                  
                </tr>
            </thead>
            <tbody>
               
            <?php 
                foreach ($data as $row) {?>
                    <tr>
                        <td><?= $row->id_pengarang;?></td>
                        <td><?= $row->nama_pengarang;?></td>
                        <td>
                            <a href="<?= base_url()?>pengarang/edit/<?= $row->id_pengarang;?>" class="btn btn-success btn-xs">Edit</a>
                            <a href="<?= base_url()?>pengarang/hapus/<?= $row->id_pengarang;?>" class="btn btn-danger btn-xs" onclick="return confirm('mau dihapus');">Hapus</a>
                        </td>
                    </tr>
            <?php }
            ?>

            </tbody>
        </table>
    </div>
</div>