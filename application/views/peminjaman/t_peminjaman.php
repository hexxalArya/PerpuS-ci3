<?php 
    $tgl_pinjam = date ('y-m-d');
    $tgl_kembali = date ('y-m-d');
?>


<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul;?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post" action="<?= base_url()?>peminjaman/save" class="form-horizontal">
            <div class="box-body">
                
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">ID Peminjaman</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_peminjam" value="<?= $id_peminjaman;?>"class="form-control" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Peminjam</label>
                    <div class="col-sm-10">
                        <select name="id_anggota"class="form-control">
                            <option value="">Pilih Peminjam</option>
                            <?php 
                                foreach ($peminjam as $row) {?>
                                    <option value="<?= $row->id_anggota;?>"><?= $row->nama_anggota;?></option>
                                <?php }
                            
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Buku</label>
                    <div class="col-sm-10">
                    <select name="id_buku"class="form-control">
                            <option value="">Pilih Buku</option>
                            <?php 
                                foreach ($buku as $row) {?>
                                    <option value="<?= $row->id_buku;?>"><?= $row->judul_buku;?></option>
                                <?php }
                            
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Peminjaman</label>
                    <div class="col-sm-10">
                    <input type="date" name="tgl_pinjam" value="<?= $tgl_pinjam;?>" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Pengembalian</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_kembali" value="<?= $tgl_kembali;?>" class="form-control">
                    </div>
                </div>

                

            <div class="box-footer">
                <a href="<?= base_url()?>peminjaman" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>

    </div>
</div>