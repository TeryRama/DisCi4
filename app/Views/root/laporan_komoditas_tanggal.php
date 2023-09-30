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
<?php
if ($tanggal_awal == $tanggal_akhir) {
    $judul_tanggal = tgl_indo($tanggal_awal);
} else {
    $judul_tanggal = tgl_indo($tanggal_awal) . " sampai " . tgl_indo($tanggal_akhir);
}
?>
<h3>
    Laporan hasil pantauan Harga Bahan Pokok dari Pedagang Eceran yang ada di <?= $pasar[0]->pasar_nama ?> Periode <?= $judul_tanggal ?>
</h3>
<table class="" border="1" style="border-collapse: collapse; width:100%; margin-top:20px">
    <thead>
        <tr>
            <th rowspan="2" style="width: 50px;">No.</th>
            <th rowspan="2">Varian</th>
            <th rowspan="2">Satuan</th>
            <th colspan="<?= count($tanggal) ?>" style="text-align:center">Harga</th>
            <!-- <th rowspan="2">Deskripsi</th> -->
        </tr>
        <tr>
            <?php
            foreach ($tanggal as $row) {
            ?>
                <th><?= tgl_indo($row) ?></th>
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
                <td><?= $row->komoditas_nama ?></td>
                <td><?= $row->komoditas_satuan ?></td>
                <?php
                foreach ($row->harga as $harga) {
                ?>
                    <td><?= (is_numeric($harga) ? number_format($harga) : $harga) ?></td>
                <?php
                }
                ?>
                <!-- <td></td> -->
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<p>Laporan ini dibuat otomatis melalui <a href="<?= base_url() ?>"><?= base_url() ?></a> pada tanggal <?= tgl_indo(date('Y-m-d')) ?></p>