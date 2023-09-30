<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?= view('_head') ?>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?= view('_header') ?>
        <section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?= base_url() ?>/files/web-assets/paralax.png'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
            <div class="container clearfix">
                <h1 class="mt-3 mb-0">Informasi Pangan</h1>
                <span class="mt-0">Disperindag Indragiri Hilir</span>
                <ol class="breadcrumb">
                    <li class="ms-2"><img src="<?= base_url() ?>/files/web-assets/logo-inhil.png" width="60px" alt=""></li>
                </ol>
            </div>

        </section>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row col-mb-50">
                        <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                            <!-- <div class="card"> -->


                            <!-- <div class="heading-block topmargin-lg center">
                                <h2><?= $komoditas[0]->komoditas_nama ?></h2>
                                <span class="mx-auto">Update pada <?= tgl_indo($last_update) ?>.</span>
                            </div> -->
                            <div class="fancy-title title-bottom-border mb-0">
                                <h3><?= $komoditas[0]->komoditas_nama ?></h3>
                            </div>
                            <p class="mt-2 text-muted">* Update pada <b><?= tgl_indo($last_update) ?></b></p>
                            <div class="row align-items-center col-mb-50 mb-4">
                                <div class="col-lg-4 col-md-6">

                                    <div class="feature-box flex-md-row-reverse text-md-end" data-animate="fadeIn">
                                        <div class="fbox-icon">
                                            <i class="icon-line-bar-graph-2"></i>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Harga Rata-rata</h3>
                                            <h2 class="text-muted mt-0 mb-0"><?= (is_numeric($komoditas[0]->komoditas_harga) ? rupiah($komoditas[0]->komoditas_harga) : $komoditas[0]->komoditas_harga) ?></h2>
                                        </div>
                                    </div>

                                    <div class="feature-box flex-md-row-reverse text-md-end mt-5" data-animate="fadeIn" data-delay="200">
                                        <div class="fbox-icon">
                                            <i class="icon-line-trending-up"></i>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Harga Eceran Tertinggi (HET)</h3>
                                            <h2 class="text-muted mt-0 mb-0"><?= (is_numeric($komoditas[0]->komoditas_het) ? rupiah($komoditas[0]->komoditas_het) : $komoditas[0]->komoditas_het) ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-md-none d-lg-block text-center">
                                    <img src="<?= base_url($komoditas[0]->komoditas_foto) ?>" class="rounded" style="max-width: 60%;">

                                </div>
                                <div class="col-lg-4 col-md-6">

                                    <div class="feature-box" data-animate="fadeIn">
                                        <div class="fbox-icon">
                                            <i class="icon-line-arrow-down"></i>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Harga Jual Terendah</h3>
                                            <h2 class="text-muted mt-0 mb-0"><?= (is_numeric($komoditas[0]->komoditas_harga_min) ? rupiah($komoditas[0]->komoditas_harga_min) : $komoditas[0]->komoditas_harga_min) ?></h2>
                                        </div>
                                    </div>

                                    <div class="feature-box mt-5" data-animate="fadeIn" data-delay="200">
                                        <div class="fbox-icon">
                                            <i class="icon-line-arrow-up"></i>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Harga Jual Tertinggi</h3>
                                            <h2 class="text-muted mt-0 mb-0"><?= (is_numeric($komoditas[0]->komoditas_harga_max) ? rupiah($komoditas[0]->komoditas_harga_max) : $komoditas[0]->komoditas_harga_max) ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-4">
                                    <div class="card shadow">
                                        <div class="card-header bg-white">
                                            <h5 class="card-title">Harga rata-rata berdasarkan pasar pada <?= tgl_indo($last_update) ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="" class="table" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Pasar</th>
                                                            <th>Kecamatan</th>
                                                            <th>Harga</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($transaksi as $row) {
                                                        ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td><?= $row->pasar_nama ?></td>
                                                                <td><?= $row->name ?></td>
                                                                <td><?= rupiah($row->rata_harga) ?></td>
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
                                <div class="col-xl-6 col-lg-12 col-md-12 col-12 ">
                                    <div class="card shadow">
                                        <div class="card-header bg-white">
                                            <h5 class="card-title">Perkembangan harga rata-rata</h5>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart" style="max-width: 650px; margin: 35px auto;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
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
                                                        <a href="<?= base_url('/artikel/' . $row->artikel_url) ?>"><img class="rounded-4" src="<?= base_url($row->artikel_gambar) ?>" alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="col ps-3">
                                                    <div class="entry-title">
                                                        <h6 class="m-0">
                                                            <a href="<?= base_url('/artikel/' . $row->artikel_url) ?>" class="text-dark">
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
    </div>
    </section>
    <?= view('_footer'); ?>
    </div>
    <div id="gotoTop" class="icon-angle-up"></div>
    <?= view('_footer_js') ?>
    <script src="<?= base_url() ?>/assets/user/js/components/select-boxes.js"></script>
    <script src="<?= base_url() ?>/assets/user/js/components/selectsplitter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0/dist/chartjs-plugin-datalabels.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        $(document).ready(function() {

            $('#datatable1').dataTable({
                paging: false,
                searching: false,
            });
            $('#datatable2').dataTable({
                order: [
                    [1, 'desc']
                ],
            });
        });
    </script>
    <script>
        jQuery(document).ready(function($) {
            $('.pasar-container').pajinate({
                items_per_page: 9,
                item_container_id: '#pasar',
                nav_panel_id: '#pagination-container-pasar ul',
                show_first_last: false
            });

            $('#pagination-pasar a').click(function() {
                var t = setTimeout(function() {
                    $('.flexslider .slide').resize();
                }, 1000);
            });

            $(".select-1").select2({
                placeholder: "Select Multiple Values"
            });

            jQuery("#select_kecamatan").select2().next().hide();
            jQuery("#select_pasar").select2().next().hide();
            $('#select_main').on('change', function() {
                var value = $('#select_main').val();
                if (value == 'inhil') {
                    jQuery("#select_kecamatan").select2().next().hide();
                    jQuery("#select_pasar").select2().next().hide();
                    getDataGrafik('inhil')
                } else if (value == 'kecamatan') {
                    jQuery("#select_kecamatan").select2().next().show();
                    jQuery("#select_pasar").select2().next().hide();
                    getDataGrafik('kecamatan')
                } else {
                    jQuery("#select_kecamatan").select2().next().hide();
                    jQuery("#select_pasar").select2().next().show();
                    getDataGrafik('pasar')
                }
            });

            $('#select_kecamatan').on('change', function() {
                getDataGrafik('kecamatan');
            });

            $('#select_pasar').on('change', function() {
                getDataGrafik('pasar');
            });

            $('#select_bulan').on('change', function() {
                getDataGrafik($('#select_main').val());
            });

            $('#select_tahun').on('change', function() {
                getDataGrafik($('#select_main').val());
            });

        });

        var options = {
            chart: {
                type: 'line'
            },
            series: [{
                name: 'Harga rata-rata',
                data: [
                    <?php
                    foreach ($perubahan as $row) {
                        echo $row->rata_harga . ",";
                    }
                    ?>
                ]
            }, {
                name: 'HET',
                data: [
                    <?php
                    foreach ($perubahan as $row) {
                        echo $row->het . ",";
                    }
                    ?>
                ]
            }],
            xaxis: {
                categories: [
                    <?php
                    foreach ($perubahan as $row) {
                        echo '"' . date('d-m-Y', strtotime($row->transaksi_tanggal)) . '", ';
                    }
                    ?>
                ]
            },
            markers: {
                size: 5,
            }
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();



        function convertToRupiah(angka) {
            var rupiah = '';
            var angkarev = angka.toString().split('').reverse().join('');
            for (var i = 0; i < angkarev.length; i++)
                if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
            return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
        }
    </script>
</body>

</html>