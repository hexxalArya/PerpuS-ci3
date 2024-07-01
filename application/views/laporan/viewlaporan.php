<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <div class="box">
    <div class="box-header">
        <form method="POST" action="<?= base_url()?>laporan/peminjaman">

            <div class="row">
                <div class="col-md-3">

                    <h4 class="text-primary"><b>Filter Laporan Peminjaman</b></h4>
                </div>

                <div class="col-md-2">
                    <input type="text" name="tgl_awal" class="form-control" placeholder="Tanggal Awal" onfocus="(this.type='date')">
                </div> 

                <div class="col-md-2">
                    <input type="text" name="tgl_akhir" class="form-control" placeholder="Tanggal Akhir" onfocus="(this.type='date')">
                </div>

                <div class="col-md-1">
                <button type="submit" class="btn btn-primary btn-block btn-filter"><i class="fa fa-filter"></i>Filter</button>
                </div>

                <div class="col-md-1">
                <a href="<?= base_url()?>laporan/refresh" class="btn btn-warning btn-block btn-refresh"><i class="fa fa-refresh"></i>Refresh</a>
                </div>

                <div class="col-md-1">
                <a href="" class="btn btn-danger btn-block btn-pdf"><i class="fa fa-file-pdf-o"></i>View PDF</a>
                </div>

            </div>
        </form>
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
                    </tr>
                <?php }
              ?>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>
