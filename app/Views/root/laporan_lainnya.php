<table border="0" style="width: 100%;">
    <tr>
        <?php $logo = base_url('files/web-assets/logo-inhil.png'); ?>
        <td><img src="<?= get_logo_inhil_encode() ?>" width="60px" alt=""></td>
        <td>
            <div align="center" style="margin-left: -60px;">
                <p style="margin:0; font-size:22px">PEMERINTAH KABUPATEN INDRAGIRI HILIR</p>
                <p style="margin:0; font-size:26px">DINAS PERDAGANGAN DAN PERINDUSTRIAN</p>
                <p style="margin:0">JALAN VETERAN NO. 02 TELP. (0768) 21047 FAX.(0768) 21045</p>
                <p style="margin:0; font-size:22px">TEMBILAHAN</p>
            </div>

        </td>
    </tr>
</table>
<hr style="height: 5px; background-color:black">

<h3>
    Laporan hasil pantauan harga barang penting lainnya periode <?= $periode ?>
</h3>
<table class="" border="1" style="border-collapse: collapse; width:100%; margin-top:20px">
    <thead>
        <tr>
            <td rowspan="2">No</td>
            <td rowspan="2">Jenis Barang</td>
            <td rowspan="2">Satuan</td>
            <td rowspan="2">Distributor</td>
            <td colspan="<?= count($tanggal) ?>">Perkembangan Harga Dalam Rupiah</td>
            <td rowspan="2">Keterangan</td>
        </tr>
        <tr>
            <?php
            foreach ($tanggal as $tr) {
                $tgl = date('d-m-Y', strtotime($tr->transaksi_tanggal))
            ?>
                <td><?= $tgl ?></td>
            <?php
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($komoditas as $row) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->barang_nama ?></td>
                <td><?= $row->barang_satuan ?></td>
                <td><?= $row->distributor ?></td>
                <?php
                for ($i = 0; $i < count($tanggal); $i++) {
                ?>
                    <td><?= (is_numeric($row->$i) ? number_format($row->$i) : $row->$i) ?></td>
                <?php
                }
                ?>
                <td></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<p>Laporan ini dibuat otomatis melalui <a href="<?= base_url() ?>"><?= base_url() ?></a> pada tanggal <?= tgl_indo(date('Y-m-d')) ?></p>