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
    Laporan hasil pantauan Harga Bahan Pokok dari Pedagang Eceran yang ada di <?= $pasar[0]->pasar_nama ?>
</h3>
<table class="" border="1" style="border-collapse: collapse; width:100%; margin-top:20px">
    <thead>
        <tr>
            <th rowspan="2" style="width: 50px;">No.</th>
            <th rowspan="2">Varian/Jenis</th>
            <th rowspan="2">Satuan</th>
            <th rowspan="2">HET (Rp)</th>
            <th rowspan="2">Nama Pedagang</th>
            <th colspan="2">Harga (Rp)</th>
            <th colspan="2">Perubahan</th>
            <th rowspan="2">Keterangan</th>
        </tr>
        <tr>
            <th><?= tgl_indo($_GET['awal']) ?></th>
            <th><?= tgl_indo($_GET['akhir']) ?></th>
            <th>Rp</th>
            <th>%</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($laporan as $grup) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><b><?= $grup->grup_komoditas_nama ?></b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            foreach ($grup->komoditas as $komoditas) {
                foreach ($komoditas->transaksi as $row) {
                    $het = $row->transaksi_het;
                    if (is_numeric($het)) {
                        $het = number_format($het);
                    } else {
                        $het = $het;
                    }

                    $perubahan = $row->perubahan;
                    if (is_numeric($perubahan)) {
                        $perubahan = number_format($perubahan);
                    } else {
                        $perubahan = $perubahan;
                    }

                    $transaksi_harga2 = $row->transaksi_harga2;
                    if (is_numeric($transaksi_harga2)) {
                        $transaksi_harga2 = number_format($transaksi_harga2);
                    } else {
                        $transaksi_harga2 = $transaksi_harga2;
                    }
            ?>
                    <tr>
                        <td></td>
                        <td><?= ($row->no == '1' ? $row->komoditas_nama : "") ?></td>
                        <td><?= ($row->no == '1' ? $row->komoditas_satuan : "") ?></td>
                        <td><?= ($row->no == '1' ? $het : "") ?></td>
                        <td><?= $row->pedagang_nama ?></td>
                        <td><?= number_format($row->transaksi_harga) ?></td>
                        <td><?= $transaksi_harga2 ?></td>
                        <td><?= $perubahan ?></td>
                        <td><?= $row->persen; ?></td>
                        <td><?= $row->keterangan ?></td>
                    </tr>

            <?php
                }
            }
            ?>
        <?php
        }
        ?>
    </tbody>
</table>
<p>Laporan ini dibuat otomatis melalui <a href="<?= base_url() ?>"><?= base_url() ?></a> pada tanggal <?= tgl_indo(date('Y-m-d')) ?></p>