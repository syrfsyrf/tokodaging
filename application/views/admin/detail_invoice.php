<div class="container-fluid">
    <h4>Detail Pesanan Pelanggan <div class="btn btn-sm btn-success">
    No. Invoice : <?php echo $invoice->id ?></div> </h4>

    <table class="table table-bordered table-hover table-striped">
    <tr>
    <th style="text-align: left">Id Barang</th>
    <th style="text-align: center">Nama Prodak</th>
    <th style="text-align: center">Jumlah Pesanan</th>
    <th style="text-align: right">Harga</th>
    <th style="text-align: right">Sub-Total</th>
    </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :

            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
            ?> 

        <tr>
            <td align="left"><?php echo $psn->id_brg ?></td>
            <td align="center"><?php echo $psn->nama_brg ?></td>
            <td align="center"><?php echo $psn->jumlah ?></td>
            <td align="right"><?php echo number_format($psn->harga, 0,',','.') ?></td>
            <td align="right"><?php echo number_format($subtotal, 0,',','.') ?></td>
        </tr>

        <?php endforeach; ?>

            <tr>
                <td colspan="4" align="right">Grand Total</td>
                <td align="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
            </tr>

    </table>

    <a href="<?php echo base_url("admin/invoice/index") ?>">
    <div class="btn btn-sm btn-primary">Kembali</div></a>
</div>