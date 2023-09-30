<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?= view('_head') ?>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?= view('_header') ?>
        <section id="page-title">
            <div class="container clearfix">
                <h1 class="m-0"><?= $pasar[0]->pasar_nama ?></h1>
                <span class="text-muted m-0"><?= $pasar[0]->pasar_alamat . ", Kec." . $pasar[0]->nama_kecamatan . ", " . $pasar[0]->nama_kelurahan ?></span>
                <ol class="breadcrumb">
                    <!-- <li class=""><img src="<?= base_url() ?>/files/web-assets/logo-anka.png" width="80px" alt=""></li> -->
                    <li class="ms-2"><img src="<?= base_url() ?>/files/web-assets/logo-inhil.png" width="60px" alt=""></li>
                </ol>
            </div>
        </section>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="fancy-title title-bottom-border mb-3">
                        <h3 class="p-0">Harga Komoditas </h3>
                    </div>
                    <div class="d-flex">
                        <div class="ms-3">
                            <div class="input-group">
                                <div class="input-group">
                                    <input type="text" class="form-control text-start component-datepicker past-enabled" readonly id="tanggal">
                                    <div class="input-group-text"><i class="icon-calendar2"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="komoditas-container">
                        <div id="komoditas" class="row mt-3">

                        </div>
                        <div class="d-flex mb-0 mt-0">
                            <div id="pagination-container-komoditas" class="pagination-container topmargin  ms-auto">
                                <ul id="pagination-komoditas" class="pagination m-0"></ul>
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
    <script>
        $('.component-datepicker.past-enabled').datepicker({
            autoclose: true,
            todayHighlight: true,
            endDate: "today",
            format: "dd-M-yyyy"
        }).on("change", function() {
            getDataKomoditas($("#tanggal").val());
        });

        function getDataKomoditas(tanggal) {
            $.ajax({
                type: "GET",
                url: "<?= base_url() ?>/action/get-transaksi-by-pasar",
                dataType: 'json',
                data: {
                    pasar: '<?= encrypt_url($pasar[0]->pasar_id) ?>',
                    tanggal: tanggal
                },
                success: function(result) {
                    var komoditasHTML = "";
                    var data = '0';
                    $("#tanggal").val(result.date_update);
                    if (result.data_transaksi.length <= 0) {
                        komoditasHTML += '<div class="text-center mt-3"><h5 class="text-muted">Tidak ada data ditemukan</h5></div>';
                    } else {
                        $.each(result.data_transaksi, function(key, value) {
                            if (value.avg != '0') {
                                data = '1';
                                var bg_status = '';
                                var ic_status = '';
                                var selisih = '';
                                if (value.status == "Harga Naik") {
                                    bg_status = "bg-danger";
                                    ic_status = "fas fa-arrow-up";
                                } else if (value.status == "Harga Turun") {
                                    bg_status = "bg-success";
                                    ic_status = "fas fa-arrow-down";
                                } else {
                                    bg_status = "bg-primary";
                                    ic_status = "fas fa-exchange";
                                    selisih = "";
                                }

                                komoditasHTML +=
                                    '<div class="col-lg-3 col-md-3 col-sm-3 col-12">' +
                                    '<div class="card my-1">' +
                                    '<div class="card-header text-center p-1">' +
                                    '<h6 class="m-0">' + value.komoditas_nama + '</h6>' +
                                    '</div>' +
                                    '<div class="card-body px-3 py-3">' +
                                    '<div class="row">' +
                                    '<div class="col-3 p-2">' +
                                    '<img src="<?= base_url() ?>' + value.komoditas_foto + '" width="60px" height="60px" alt="" class="m-0" style="border-radius:8px">' +
                                    '</div>' +
                                    '<div class="col-9 mt-0 mb-0 pt-1">' +
                                    '<div class="text-end">' +
                                    '<span class="mt-auto" style="font-size:12px">Rp. </span>' +
                                    '<span class="h3 m-0">' + convertToNumber(value.transaksi_harga) + '</span>' +
                                    '<span class="mt-auto" style="font-size:12px"> /' + value.komoditas_satuan + '</span>' +
                                    '</div>' +
                                    '<div class="d-flex mt-1">' +
                                    '<span class="' + bg_status + ' text-center text-light m-0 ms-auto px-2" style="border-radius:4px; padding:1px; font-size:12px"><i class="' + ic_status + ' me-2"></i> ' + value.status + ' ' + value.selisih + '</span>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>';
                            }
                        });
                        if (data == '0') {
                            komoditasHTML += '<div class="text-center mt-3"><h5 class="text-muted">Tidak ada data ditemukan</h5></div>';
                        }
                    }
                    $('#komoditas').html(komoditasHTML)
                    $('.komoditas-container').pajinate({
                        items_per_page: 12,
                        item_container_id: '#komoditas',
                        nav_panel_id: '#pagination-container-komoditas ul',
                        show_first_last: false
                    });

                    $('#pagination-komoditas a').click(function() {
                        var t = setTimeout(function() {
                            $('.flexslider .slide').resize();
                        }, 1000);
                    });
                },
                error: function(xhr, textStatus, errorThrown) {
                    swal.fire(
                        'Error',
                        'SQL Error Inserting Data',
                        'error'
                    )
                }
            });
        }
        getDataKomoditas($("#tanggal").val());

        function convertToNumber(angka) {
            var rupiah = '';
            var angkarev = angka.toString().split('').reverse().join('');
            for (var i = 0; i < angkarev.length; i++)
                if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
            return rupiah.split('', rupiah.length - 1).reverse().join('');
        }
    </script>
</body>

</html>