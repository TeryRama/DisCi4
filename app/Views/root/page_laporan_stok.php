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
                                        <form action="<?= base_url() ?>/root/laporan/stok-komoditas" method="GET">
                                            <div class="row">
                                                <div class="col-lg-3 row">
                                                    <div class="col-md-6">
                                                        <label for="">Tahun</label>
                                                        <select class="form-control select2" id="tahun" name="tahun" required>
                                                            <option value=""></option>
                                                            <?php
                                                            $y = date('Y');
                                                            $y_min = $y - 7;
                                                            for ($i = $y; $i >= $y_min; $i--) {
                                                            ?>
                                                                <option value="<?= $i ?>" <?= (isset($_GET['tahun']) && $_GET['tahun'] == $i ? "selected" : "") ?>><?= $i ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Bulan</label>
                                                        <select class="form-control select2" id="bulan" name="bulan" required>
                                                            <option value=""></option>
                                                            <option value="01" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '01' ? "selected" : "") ?>>Januari</option>
                                                            <option value="02" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '02' ? "selected" : "") ?>>Februari</option>
                                                            <option value="03" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '03' ? "selected" : "") ?>>Maret</option>
                                                            <option value="04" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '04' ? "selected" : "") ?>>April</option>
                                                            <option value="05" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '05' ? "selected" : "") ?>>Mei</option>
                                                            <option value="06" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '06' ? "selected" : "") ?>>Juni</option>
                                                            <option value="07" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '07' ? "selected" : "") ?>>Juli</option>
                                                            <option value="08" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '08' ? "selected" : "") ?>>Agustus</option>
                                                            <option value="09" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '09' ? "selected" : "") ?>>September</option>
                                                            <option value="10" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '10' ? "selected" : "") ?>>Oktober</option>
                                                            <option value="11" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '11' ? "selected" : "") ?>>November</option>
                                                            <option value="12" <?= (isset($_GET['bulan']) && $_GET['bulan'] == '12' ? "selected" : "") ?>>Desember</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="" class="text-light">.</label>
                                                    <div class="d-flex">
                                                        <input type="submit" name="" id="" class="btn btn-primary" value="cari">
                                                        <?php if (isset($_GET['tahun']) && isset($_GET['bulan']) && $total > 0) { ?>
                                                            <div class="ml-4 dropdown">
                                                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Download Laporan
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    <a href="<?= base_url('/crud/laporan/stok?bulan=' . $_GET['bulan'] . '&tahun=' . $_GET['tahun'] . '&act=pdf') ?>" class="dropdown-item">PDF</a>
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
                                    if (!isset($_GET['tahun']) || !isset($_GET['bulan'])) {
                                        echo "<span class='text-center'>Pilih data yang ingin ditampilkan terlebih dahulu</span>";
                                    }
                                    if (isset($_GET['tahun']) && isset($_GET['bulan']) && $total == 0) {
                                        echo "<span class='text-center'>Tidak ada data ditemukan</span>";
                                    }
                                    if (isset($_GET['tahun']) && isset($_GET['bulan']) && $total > 0) {
                                    ?>
                                        <table class="table table-bordered" id="isiData">
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
        $('#tahun').select2({
            placeholder: 'Pilih Tahun',
            width: "100%"
        });
        $('#bulan').select2({
            placeholder: 'Pilih Bulan',
            width: "100%"
        });

        function exportExcel() {
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#isiData"), "Laporan Stok komoditas");
        }
    </script>
</body>

</html>