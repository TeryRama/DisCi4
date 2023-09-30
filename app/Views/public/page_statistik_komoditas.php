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
                <div class="container clearfix table-responsive">
                    <div class="row">
                        <div class="col-9">
                            <label for="">Perkembangan komoditas</label>
                            <select class="select-1 form-select form-control" id="select_komoditas" style="width:auto;">
                                <?php
                                foreach ($komoditas as $row) {
                                ?>
                                    <option value="<?= encrypt_url($row->komoditas_id) ?>"><?= $row->komoditas_nama ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-3">
                            <select class="select-1 form-select form-control" id="select_bulan" style="width:auto;">
                                <?php
                                $month = date('n');
                                for ($i = 1; $i <= 12; $i++) {
                                ?>
                                    <option value="<?= $i ?>" <?php if ($i == $month) {
                                                                    echo "selected";
                                                                } ?>><?= bulan_indo($i) ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <select class="select-1 form-select form-control" id="select_tahun" style="width:auto;">
                                <?php
                                $year = date('Y');
                                $year_min = $year - 10;
                                for ($i = $year; $i >= $year_min; $i--) {
                                ?>
                                    <option value="<?= $i ?>"><?= $i ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <table id="tabel-pasar" class="table table-bordered table-responsive mt-4" cellspacing="0" width="100%">
                        <thead id="head_table" style="vertical-align: middle; text-align: center;">

                        </thead>
                        <tbody id="body_table" style="text-align: center;">

                        </tbody>
                    </table>
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
        $(".select-1").select2({
            placeholder: "Select Multiple Values"
        });

        $('#select_komoditas').on('change', function() {
            getStatistik();
        });

        $('#select_bulan').on('change', function() {
            getStatistik();
        });

        $('#select_tahun').on('change', function() {
            getStatistik();
        });

        function getStatistik() {
            var komoditas = $('#select_komoditas').val();
            var bulan = $('#select_bulan').val();
            var tahun = $('#select_tahun').val();
            $.ajax({
                type: "GET",
                url: "<?= base_url() ?>/action/get-statistik-by-komoditas",
                dataType: 'json',
                data: {
                    komoditas: komoditas,
                    bulan: bulan,
                    tahun: tahun
                },
                success: function(result) {
                    console.log(result);
                    var theadHTML =
                        '<tr>' +
                        '<th rowspan="2">No</th>' +
                        '<th rowspan="2" style="white-space: nowrap;">Pasar</th>' +
                        '<th colspan="' + result.last_date + '" class="text-center">' + bulanIndo(bulan) + ' ' + tahun + '</th>' +
                        '<th rowspan="2">Harga Tertinggi</th>' +
                        '<th rowspan="2">Harga Terendah</th>' +
                        '<th rowspan="2" >Rata-rata</th>' +
                        '</tr><tr>';
                    for (let i = 1; i <= result.last_date; i++) {
                        theadHTML += '<th >' + i + '</th>';
                    }
                    theadHTML += '</tr>';

                    var tbodyHTML = '';
                    for (let i = 0; i < result.pasar.length; i++) {
                        var no = i + 1;
                        tbodyHTML +=
                            '<tr>' +
                            '<td>' + no + '</th>' +
                            '<td style="white-space: nowrap;">' + result.pasar[i].pasar_nama + '</th>';
                        var harga = result.pasar[i].harga;
                        for (let x = 1; x <= harga.length; x++) {
                            var num = x - 1;
                            tbodyHTML += '<td style="min-width: 80px; max-width: 80px">' + convertToNumber(harga[num]) + '</td>';
                        }
                        tbodyHTML +=
                            '<td>' + convertToNumber(result.pasar[i].max_harga) + '</th>' +
                            '<td>' + convertToNumber(result.pasar[i].min_harga) + '</th>' +
                            '<td>' + convertToNumber(result.pasar[i].rata) + '</th>';

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
        getStatistik();

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