<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('root/_head') ?>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <?= view('root/_header_mobile'); ?>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <?= view('root/_sidebar'); ?>
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <?= view('root/_header_desktop'); ?>
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="d-flex flex-column-fluid">
                        <div class="container">
                            <div class="card card-custom">
                                <div class="card-header">
                                    <div class="card-title">
                                        <span class="card-icon">
                                            <i class="flaticon2-fast-next text-primary"></i>
                                        </span>
                                        <h3 class="card-label">Laporan</h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-7">
                                        <form action="<?= base_url() ?>/root/laporan/komoditas-pangan" method="GET">
                                            <div class="row">
                                                <div class="col-lg-3 mb-4">
                                                    <label for="">Pasar</label>
                                                    <select class="form-control select2" data-size="7" data-live-search="true" name="pasar" id="pasar" required>
                                                        <option value=""></option>
                                                        <?php
                                                        foreach ($pasar as $row) {
                                                        ?>
                                                            <option <?= (isset($_GET['pasar']) && encrypt_url($row->pasar_id) == $_GET['pasar'] ? "selected" : "") ?> value="<?= encrypt_url($row->pasar_id) ?>"><?= $row->pasar_nama ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 row">
                                                    <div class="col-md-12 col-lg-6 col-xl-6 col-12">
                                                        <label for="">Tanggal Awal</label>
                                                        <input type="date" class="form-control" name="awal" id="awal" value="<?= (isset($_GET['awal']) ? $_GET['awal'] : "") ?>" required>
                                                    </div>
                                                    <div class="col-md-12 col-lg-6 col-xl-6 col-12">
                                                        <label for="">Pembanding</label>
                                                        <input type="date" class="form-control" name="akhir" id="akhir" value="<?= (isset($_GET['akhir']) ? $_GET['akhir'] : "") ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="" class="text-light">.</label>
                                                    <div class="d-flex">
                                                        <input type="submit" name="" id="" class="btn btn-primary" value="cari">
                                                        <?php if (isset($total) && $total > 0) { ?>
                                                            <div class="ml-4 dropdown">
                                                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Download Laporan
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a href="<?= base_url('/crud/laporan/komoditas-pangan?pasar=' . $_GET['pasar'] . '&awal=' . $_GET['awal'] . '&akhir=' . $_GET['akhir'] . '&act=pdf') ?>" class="dropdown-item">PDF</a>
                                                                    <button onclick="exportExcel()" class="dropdown-item">Excel</button>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <?php
                                    if (!isset($_GET['pasar']) || !isset($_GET['awal']) || !isset($_GET['akhir'])) {
                                        echo "<span class='text-center'>Pilih data yang ingin ditampilkan terlebih dahulu </span>";
                                    }
                                    if (isset($total) && $total == 0) {
                                        echo "<span class='text-center'>Tidak ada data ditemukan</span>";
                                    }
                                    if (isset($total) && $total > 0) {
                                    ?>
                                        <span class="text-muted">*Harga yang diambil merupakan harga dominan</span>
                                        <table class="table table-bordered" id="isiData">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2" style="width: 50px; vertical-align:middle">No.</th>
                                                    <th rowspan="2" style="vertical-align:middle">Varian/Jenis</th>
                                                    <th rowspan="2" style="vertical-align:middle">Satuan</th>
                                                    <th rowspan="2" style="vertical-align:middle">HET (Rp)</th>
                                                    <th rowspan="2" style="vertical-align:middle">Nama Pedagang</th>
                                                    <th colspan="2">Harga (Rp)</th>
                                                    <th colspan="2">Perubahan</th>
                                                    <th rowspan="2" style="vertical-align:middle">Keterangan</th>
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
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= view('root/_footer'); ?>
            </div>
        </div>
    </div>
    <?= view('root/_user_panel'); ?>
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
        </span>
    </div>



    <?= view('root/_footer_js') ?>
    <script src="<?= base_url() ?>/assets/table2excel/table2excel.js"></script>
    <script>
        $('#pasar').select2({
            placeholder: 'Pilih pasar',
            width: "100%"
        });

        function exportExcel() {
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#isiData"), "Laporan Harian Harga Komoditas Pangan");
        }
    </script>
</body>

</html>