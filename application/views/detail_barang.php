<div class="container-fluid">

    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
            <div class="card-body">
                <?php foreach ($barang as $brg) : ?>
              <div class="row">
              <div class="col-md-4">
            <img src="<?php echo base_url(). '/uploads/'.$brg->gambar ?>" class="card-img-top">
        </div>

        <div class="col-md-8">
            <table class="table">
                <tr>
                    <td>Nama Produk</td>
                    <td><strong><?php echo $brg->nama_brg ?></td></strong>
                    <td></td>
                </tr>

                <tr>
                    <td>Keterangan</td>
                    <td><strong><?php echo $brg->keterangan ?></td></strong>
                    <td></td>
                </tr>

                <tr>
                    <td>Kategori</td>
                    <td><strong><?php echo $brg->kategori ?></td></strong>
                    <td></td>
                </tr>

                <tr>
                    <td>Stok</td>
                    <td><strong><?php echo $brg->stok ?></td></strong>
                    <td></td>
                </tr>

                <tr>
                    <td>Harga</td>
                        <td><strong><div class="btn btn-sm btn-success">Rp. 
                            <?php echo number_format ($brg->harga, 0,',','.') ?></div></strong></td>
                </tr>
            </table>

            <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_brg,
                '<div class="btn btn-sm btn-primary mb-3">Tambah Ke Keranjang</div>') ?>

            <?php echo anchor('dashboard/index/',
                '<div class="btn btn-sm btn-danger mb-3">Kembali</div>') ?>
        
    </div>

                </div>
                        <?php endforeach ; ?>
            </div>
        </div>
    </div>