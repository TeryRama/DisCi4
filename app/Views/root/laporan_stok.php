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
    Laporan hasil pantauan stok komoditas periode <?= $periode ?>
</h3>
<table class="" border="1" style="border-collapse: collapse; width:100%; margin-top:20px">
    <thead>

        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Distributor</th>
            <th rowspan="2">Alamat Distributor</th>
            <th rowspan="2">Kontak</th>
            <th colspan="2">Barang Yang Disimpan</th>
            <th rowspan="2">Tanggal Pendataan</th>
            <th rowspan="2">Ketahanan</th>
            <th rowspan="2">Daerah Pemasok</th>
            <th rowspan="2">Keterangan</th>
        </tr>
        <tr>
            <th>Jenis Barang</th>
            <th>Stok Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($laporan as $lap) {
            foreach ($lap->komoditas as $row) {
        ?>
                <tr>
                    <td><?= ($row->no == '1' ? $no : "") ?></td>
                    <td><?= ($row->no == '1' ? $row->distributor_nama : "") ?></td>
                    <td><?= ($row->no == '1' ? $row->distributor_alamat : "") ?></td>
                    <td><?= ($row->no == '1' ? $row->distributor_kontak : "") ?></td>
                    <td><?= $row->komoditas_nama ?></td>
                    <td><?= (is_numeric($row->stok) ? number_format($row->stok) . " " . $row->komoditas_satuan : $row->stok) ?></td>
                    <td><?= $row->tanggal ?></td>
                    <td><?= $row->ketahanan ?></td>
                    <td><?= $row->pemasok ?></td>
                    <td></td>
                </tr>
        <?php
                if ($row->no == '1') {
                    $no++;
                }
            }
        }
        ?>
    </tbody>
</table>
<p>Laporan ini dibuat otomatis melalui <a href="<?= base_url() ?>"><?= base_url() ?></a> pada tanggal <?= tgl_indo(date('Y-m-d')) ?></p>