<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
</head>

<body>
    <table border="0" style="width: 100%;">
        <tr>
            <?php $logo = base_url('files/web-assets/logo-inhil.png'); ?>
            <td><img src="<?= $logo ?>" width="60px" alt=""></td>
            <td align="center">
                <p style="margin:0; font-size:22px">PEMERINTAH KABUPATEN INDRAGIRI HILIR</p>
                <p style="margin:0; font-size:26px">DINAS PERDAGANGAN DAN PERINDUSTRIAN</p>
                <p style="margin:0">JALAN VETERAN NO. 02 TELP. (0768) 21047 FAX.(0768) 21045</p>
                <p style="margin:0; font-size:22px">TEMBILAHAN</p>
            </td>
        </tr>
    </table>
    <hr style="height: 5px; background-color:black">
    <table border="0" style="width: 100%;">
        <tr>
            <td style="width: 70%; vertical-align: top">
                <table>
                    <tr style="vertical-align: top">
                        <td>Nomor</td>
                        <td>:</td>
                        <td>510/Disdagtri-DAG/LAP/2022/</td>
                    </tr>
                    <tr>
                        <td>Sifat</td>
                        <td>:</td>
                        <td>Biasa</td>
                    </tr>
                    <tr>
                        <td>Lampiran</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Hal</td>
                        <td>:</td>
                        <td>Harga Harian Bahan Pokok.</td>
                    </tr>
                </table>
            </td>
            <td style="width: 30%;">
                <p style="margin: 0; ">Tembilahan, <?= tgl_indo(date('Y-m-d')) ?></p><br>
                <p style="margin: 0;">Kepada Yth,</p>
                <p style="margin: 0;"><b>Bapak Bupati Indragiri Hilir</b></p>
                <p style="margin-top:10px; margin-bottom:10px">di-</p>
                <p style="margin: 0;">
                    <center>Tembilahan</center>
                </p>
            </td>
        </tr>
    </table>
    <p>
        <center>Dengan ini disampaikan hasil pantauan Harga Bahan Pokok dari Pedagang Eceran yang ada di <?= $pasar[0]->pasar_nama ?></center>
    </p>
    <table style="width: 100%; border: 1px solid black; border-collapse: collapse;" id="table-report">
        <thead style="border: 1px solid black; border-collapse: collapse;">
            <tr style="border: 1px solid black; border-collapse: collapse;">
                <th rowspan="2" style="width: 50px;">No.</th>
                <th rowspan="2" style="border: 1px solid black; border-collapse: collapse;">Varian/Jenis</th>
                <th rowspan="2" style="border: 1px solid black; border-collapse: collapse;">Satuan</th>
                <th rowspan="2" style="border: 1px solid black; border-collapse: collapse;">HET (Rp)</th>
                <th colspan="2" style="border: 1px solid black; border-collapse: collapse;">Harga (Rp)</th>
                <th colspan="2" style="border: 1px solid black; border-collapse: collapse;">Perubahan</th>
                <th rowspan="2" style="border: 1px solid black; border-collapse: collapse;">Keterangan</th>
            </tr>
            <tr>
                <th style="border: 1px solid black; border-collapse: collapse;"><?= tgl_indo($tanggal1) ?></th>
                <th style="border: 1px solid black; border-collapse: collapse;"><?= tgl_indo($tanggal2) ?></th>
                <th style="border: 1px solid black; border-collapse: collapse;">Rp</th>
                <th style="border: 1px solid black; border-collapse: collapse;">%</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($grup as $row) {
            ?>
                <tr>
                    <td style="border: 1px solid black; border-collapse: collapse;" align="center"><?= $no++ ?></td>
                    <td style="border: 1px solid black; border-collapse: collapse;"><?= $row->grup_komoditas_nama ?></td>
                    <td style="border: 1px solid black; border-collapse: collapse;"></td>
                    <td style="border: 1px solid black; border-collapse: collapse;"></td>
                    <td style="border: 1px solid black; border-collapse: collapse;"></td>
                    <td style="border: 1px solid black; border-collapse: collapse;"></td>
                    <td style="border: 1px solid black; border-collapse: collapse;"></td>
                    <td style="border: 1px solid black; border-collapse: collapse;"></td>
                    <td style="border: 1px solid black; border-collapse: collapse;"></td>
                </tr>
                <?php
                foreach ($row->komoditas as $r) {
                    if ($r->harga1 != "-") {
                        $harga1 = number($r->harga1);
                    } else {
                        $harga1 = $r->harga1;
                    }

                    if ($r->harga2 != "-") {
                        $harga2 = number($r->harga2);
                    } else {
                        $harga2 = $r->harga2;
                    }

                    if ($r->hargamax != "-") {
                        $hargamax = number($r->hargamax);
                    } else {
                        $hargamax = $r->hargamax;
                    }

                    if ($r->harga1 != '-' && $r->harga2 != '-') {
                        $perubahan = number(abs($r->harga1 - $r->harga2));
                        $persen = round((($perubahan / $r->harga1) * 100), 1);
                    } else {
                        $perubahan = '-';
                        $persen = '-';
                    }

                ?>
                    <tr>
                        <td style="border: 1px solid black; border-collapse: collapse;" align="center"></td>
                        <td style="border: 1px solid black; border-collapse: collapse;">-<?= $r->komoditas_nama ?></td>
                        <td style="border: 1px solid black; border-collapse: collapse;"><?= $r->komoditas_satuan ?></td>
                        <td style="border: 1px solid black; border-collapse: collapse;"><?= $hargamax ?></td>
                        <td style="border: 1px solid black; border-collapse: collapse;"><?= $harga1 ?></td>
                        <td style="border: 1px solid black; border-collapse: collapse;"><?= $harga2 ?></td>
                        <td style="border: 1px solid black; border-collapse: collapse;"><?= $perubahan ?></td>
                        <td style="border: 1px solid black; border-collapse: collapse;"><?= $persen ?></td>
                        <td style="border: 1px solid black; border-collapse: collapse;"></td>
                    </tr>
                <?php
                }
                ?>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>