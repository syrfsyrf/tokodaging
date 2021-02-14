<div class="container-fluid">
    <div class="row">
        <div class="col-md2"></div>
        <div class="col-md8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item){
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "Total Belanja Anda : Rp. ".number_format($grand_total,0,',','.');

                   ?>

                </div><br><br>

                <h3>Input Alamat Pengiriman dan Pembayaran</h3>
                <form action="<?php echo base_url('dashboard/proses_pesanan'); ?> "method="post">

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                    </div>

                    <div class="form-group">
                    <label>Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                    </div>

                    <div class="form-group">
                    <label>No. Telpon</label>
                        <input type="text" name="no_telpon" placeholder="Nomor Telpon Anda" class="form-control">
                    </div>

                    <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select>
                        <option>Gosend</option>
                        <option>GrabExpress</option>
                    </select>
                    </div>
                    
                    <div class="form-group">
                    <label>Pilih Bank</label>
                    <select class="form-control">
                        <option>MANDIRI - 0123456789</option>
                        <option>BCA     - 0123456789</option>
                        <option>BNI     - 0123456789</option>
                        <option>BRI     - 0123456789</option>
                        <option>DKI     - 0123456789</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan Sekarang</button>

                </form>
                
                <?php
                } else
                {
                    echo "Keranjang Belanja Anda Masih Kosong !!";
                }
                    ?>
            </div>

            
        <div class="col-md2"></div>
    </div>
</div>