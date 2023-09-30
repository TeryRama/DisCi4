<style>
    .table-scroll {
        position: relative;
        margin: auto;
        overflow: hidden;
    }

    .table-wrap {
        width: 100%;
        overflow: auto;
    }

    .table-scroll table {
        width: 100%;
        margin: auto;
        border-spacing: 0;
    }

    .table-scroll th,
    .table-scroll td {
        padding: 5px 10px;
        background: #fff;
        white-space: nowrap;
        vertical-align: top;
    }

    .table-scroll thead {
        background: #f9f9f9;
    }

    .clone {
        position: absolute;
        top: 0;
        left: 0;
        pointer-events: none;
    }

    .clone th,
    .clone td {
        visibility: hidden
    }

    .clone td,
    .clone th {}

    .clone tbody th {
        visibility: visible;
    }

    .clone .fixed-side {
        background: #eee;
        visibility: visible;
    }

    .clone thead {
        background: transparent;
    }
</style>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?= view('_head') ?>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?= view('_header') ?>
        <section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?= base_url() ?>/files/web-assets/paralax.png'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
            <div class="container clearfix">
                <h1 class="mt-3 mb-0">Data Statistik</h1>
                <span class="mt-0">Indragiri Hilir</span>
                <ol class="breadcrumb">
                    <!-- <li class=""><img src="<?= base_url() ?>/files/web-assets/logo-anka.png" width="80px" alt=""></li> -->
                    <li class="ms-2"><img src="<?= base_url() ?>/files/web-assets/logo-inhil.png" width="60px" alt=""></li>
                </ol>
            </div>

        </section>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix ">
                    <div class="row col-mb-50">
                        <div class="col-xl-9 col-lg-9 col-md-12 col-12 ">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-center">
                                        <?php
                                        if (isset($_GET['tipe']) && $_GET['tipe'] == "seluruh") {
                                            $status = "Secara Keseluruhan";
                                        } elseif (!isset($_GET['tipe'])) {
                                            $status = "Secara Keseluruhan";
                                        } elseif (isset($_GET['tipe']) && $_GET['tipe'] == "pasar") {
                                            $status = "di " . $status_filter;
                                        } elseif (isset($_GET['tipe']) && $_GET['tipe'] == "kecamatan") {
                                            $status = "di Kecamatan " . $status_filter;
                                        } else {
                                            $status = "Secara Keseluruhan";
                                        }

                                        if (isset($_GET['bulan']) && $_GET['bulan'] != "") {
                                            $bulan_status = bulan_indo($_GET['bulan']);
                                        } else {
                                            $bulan_status = bulan_indo(date('m'));
                                        }

                                        if (isset($_GET['tahun']) && $_GET['tahun'] != "") {
                                            $tahun_status = $_GET['tahun'];
                                        } else {
                                            $tahun_status = date('Y');
                                        }
                                        ?>
                                        Perkembangan Harga Komoditas <?= $status ?> pada <?= $bulan_status . " " . $tahun_status ?>
                                    </h4>

                                    <div id="table-scroll" class="table-scroll">
                                        <div class="table-wrap">
                                            <table class="table main-table">
                                                <thead>
                                                    <tr>
                                                        <th class="fixed-side" scope="col">Komoditas</th>
                                                        <?php
                                                        foreach ($tanggal as $row) {
                                                        ?>
                                                            <th scope="col"><?= date('d-m-Y', strtotime($row->transaksi_tanggal)) ?></th>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($komoditas as $row) {
                                                    ?>
                                                        <tr>
                                                            <td class="fixed-side"><?= $row->komoditas_nama ?></td>
                                                            <?php
                                                            foreach ($row->harga as $harga) {
                                                            ?>
                                                                <td><?= (is_numeric($harga) ? number_format($harga) : $harga) ?></td>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                            <div class="card shadow-md">
                                <div class="card-body">
                                    <form action="<?= base_url() ?>/statistik-wilayah" method="GET" class="mb-0">
                                        <label for="" class="mb-1">Perkembangan Berdasarkan</label>
                                        <select class="select-1  form-control" name="tipe" id="select_main">
                                            <option value="seluruh">Keseluruhan</option>
                                            <option value="pasar" <?= (isset($_GET['tipe']) && $_GET['tipe'] == 'pasar' ? "selected" : "") ?>>Pasar</option>
                                            <option value="kecamatan" <?= (isset($_GET['tipe']) && $_GET['tipe'] == 'kecamatan' ? "selected" : "") ?>>Kecamatan</option>
                                        </select>
                                        <div class="my-2">

                                        </div>
                                        <select class="select-1  form-control" name="kec" id="select_kecamatan">
                                            <?php
                                            foreach ($kecamatan as $row) {
                                            ?>
                                                <option value="<?= $row->code ?>" <?= (isset($_GET['kec']) && $_GET['kec'] == $row->code ? "selected" : "") ?>><?= $row->name ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <select class="select-1  form-control" name="psr" id="select_pasar">
                                            <?php
                                            foreach ($pasar as $row) {
                                            ?>
                                                <option value="<?= encrypt_url($row->pasar_id) ?>" <?= (isset($_GET['psr']) && $_GET['psr'] == encrypt_url($row->pasar_id) ? "selected" : "") ?>><?= $row->pasar_nama ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <label for="" class="mt-2 mb-1">Filter Waktu</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select class="select-1  form-control" id="select_bulan" name="bulan" style="width:auto;">
                                                    <?php
                                                    $month = date('n');
                                                    for ($i = 1; $i <= 12; $i++) {
                                                        if ($i <= 9) {
                                                            $val = '0' . $i;
                                                        } else {
                                                            $val = $i;
                                                        }
                                                    ?>
                                                        <option value="<?= $val ?>" <?php
                                                                                    if (isset($_GET['bulan']) && $_GET['bulan'] == $val) {
                                                                                        echo "selected";
                                                                                    } elseif (!isset($_GET['bulan']) && $i == $month) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>><?= bulan_indo($i) ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="select-1  form-control" id="select_tahun" name="tahun" style="width:auto;">
                                                    <?php
                                                    $year = date('Y');
                                                    $year_min = $year - 10;
                                                    for ($i = $year; $i >= $year_min; $i--) {
                                                    ?>
                                                        <option value="<?= $i ?>" <?= (isset($_GET['tahun']) && $_GET['tahun'] == $i ? "selected" : "") ?>><?= $i ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="text-end mt-4">
                                            <input type="submit" class="btn btn-success" name="" id="" value="Cari Data">
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="widget widget_links clearfix">
                                <h4 class="mb-0 ls1 text-uppercase fw-bold">Berita Terbaru</h4>
                                <div class="line line-xs line-sports mt-0 mb-4"></div>
                                <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
                                    <?php
                                    foreach ($artikel as $row) {
                                    ?>
                                        <div class="entry col-12">
                                            <div class="grid-inner row g-0">
                                                <div class="col-auto">
                                                    <div class="entry-image">
                                                        <a href="<?= base_url('/berita/' . $row->artikel_url) ?>"><img class="rounded-4" src="<?= base_url($row->artikel_gambar) ?>" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h6 class="m-0">
                                                            <a href="<?= base_url('/berita/' . $row->artikel_url) ?>" class="text-dark">
                                                                <?php
                                                                echo substr($row->artikel_judul, 0, 60);
                                                                if (strlen($row->artikel_judul) > 60) {
                                                                    echo "...";
                                                                }
                                                                ?>
                                                            </a>
                                                        </h6>
                                                        <span class="text-muted" style="font-size:12px"><i class="icon-calendar3"></i> <?= tgl_indo(date('Y-m-d', strtotime($row->artikel_create_time))) ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?= view('_footer'); ?>
    </div>
    <div id="gotoTop" class="icon-angle-up"></div>
    <?= view('_footer_js') ?>
    <script src="<?= base_url() ?>/assets/user/js/components/select-boxes.js"></script>
    <script src="<?= base_url() ?>/assets/user/js/components/selectsplitter.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".main-table").clone(true).appendTo('#table-scroll').addClass('clone');
        });


        $(".select-1").select2({
            width: "100%",
        });



        jQuery("#select_kecamatan").select2().next().hide();
        jQuery("#select_pasar").select2().next().hide();
        $('#select_main').on('change', function() {
            var value = $('#select_main').val();
            if (value == 'seluruh') {
                jQuery("#select_kecamatan").select2().next().hide();
                jQuery("#select_pasar").select2().next().hide();
            } else if (value == 'kecamatan') {
                jQuery("#select_kecamatan").select2().next().show();
                jQuery("#select_pasar").select2().next().hide();
            } else {
                jQuery("#select_kecamatan").select2().next().hide();
                jQuery("#select_pasar").select2().next().show();
            }
            // getStatistik();
        });

        var tipe = '<?= (isset($_GET['tipe']) ? $_GET['tipe'] : "") ?>';
        if (tipe == 'seluruh' || tipe == "") {
            jQuery("#select_kecamatan").select2().next().hide();
            jQuery("#select_pasar").select2().next().hide();
        } else if (tipe == 'kecamatan') {
            jQuery("#select_kecamatan").select2().next().show();
            jQuery("#select_pasar").select2().next().hide();
        } else {
            jQuery("#select_kecamatan").select2().next().hide();
            jQuery("#select_pasar").select2().next().show();
        }
        // alert(tipe);

        $('#select_pasar').on('change', function() {
            // getStatistik();
        });
        $('#select_kecamatan').on('change', function() {
            // getStatistik();
        });

        $('#select_bulan').on('change', function() {
            // getStatistik();
        });

        $('#select_tahun').on('change', function() {
            // getStatistik();
        });

        function getStatistik() {
            var tipe = $('#select_main').val();
            var kecamatan = $('#select_kecamatan').val();
            var pasar = $('#select_pasar').val();
            var bulan = $('#select_bulan').val();
            var tahun = $('#select_tahun').val();
            $.ajax({
                type: "GET",
                url: "<?= base_url() ?>/action/get-statistik-by-wilayah",
                dataType: 'json',
                data: {
                    tipe: tipe,
                    kecamatan: kecamatan,
                    pasar: pasar,
                    bulan: bulan,
                    tahun: tahun
                },
                success: function(result) {
                    var theadHTML =
                        '<tr>' +
                        '<th rowspan="2">No</th>' +
                        '<th rowspan="2" style="white-space: nowrap;">Komoditas</th>' +
                        '<th colspan="' + result.last_date + '" class="text-center">' + bulanIndo(bulan) + ' ' + tahun + '</th>' +
                        '<th rowspan="2">Harga Tertinggi</th>' +
                        '<th rowspan="2">Harga Terendah</th>' +
                        '<th rowspan="2">Rata-rata</th>' +
                        '</tr><tr>';
                    for (let i = 1; i <= result.last_date; i++) {
                        theadHTML += '<th>' + i + '</th>';
                    }
                    theadHTML += '</tr>';

                    var tbodyHTML = '';
                    for (let i = 0; i < result.komoditas.length; i++) {
                        var no = i + 1;
                        tbodyHTML +=
                            '<tr>' +
                            '<td>' + no + '</th>' +
                            '<td style="white-space: nowrap;">' + result.komoditas[i].komoditas_nama + '</th>';
                        var harga = result.komoditas[i].harga;
                        for (let x = 1; x <= harga.length; x++) {
                            var num = x - 1;
                            tbodyHTML += '<td style="min-width: 80px; max-width: 80px">' + convertToNumber(harga[num]) + '</td>';
                        }
                        tbodyHTML +=
                            '<td>' + convertToNumber(result.komoditas[i].max_harga) + '</th>' +
                            '<td>' + convertToNumber(result.komoditas[i].min_harga) + '</th>' +
                            '<td>' + convertToNumber(result.komoditas[i].rata) + '</th>';

                        tbodyHTML += '</tr>';
                    }

                    // tableHTML = theadHTML + tbodyHTML;
                    $("#head_table").html(theadHTML);
                    $("#body_table").html(tbodyHTML);
                },
                error: function(xhr, textStatus, errorThrown) {
                    alert("error");
                }
            });
        }
        // getStatistik();

        function convertToNumber(angka) {
            var rupiah = '';
            var angkarev = angka.toString().split('').reverse().join('');
            for (var i = 0; i < angkarev.length; i++)
                if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
            return rupiah.split('', rupiah.length - 1).reverse().join('');
        }

        function bulanIndo(number) {
            if (number == '1') {
                return 'Januari';
            }
            if (number == '2') {
                return 'Februari';
            }
            if (number == '3') {
                return 'Maret';
            }
            if (number == '4') {
                return 'April';
            }
            if (number == '5') {
                return 'Mei';
            }
            if (number == '6') {
                return 'Juni';
            }
            if (number == '7') {
                return 'Juli';
            }
            if (number == '8') {
                return 'Agustus';
            }
            if (number == '9') {
                return 'September';
            }
            if (number == '10') {
                return 'Oktober';
            }
            if (number == '11') {
                return 'November';
            }
            if (number == '12') {
                return 'Desember';
            }
        }
    </script>
</body>

</html>