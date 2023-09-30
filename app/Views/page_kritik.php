<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?= view('_head') ?>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?= view('_header') ?>
        <section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?= base_url() ?>/files/web-assets/paralax.png'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
            <div class="container clearfix">
                <h1 class="mt-3 mb-0">Kritik dan Saran</h1>
                <span class="mt-0">Disdagtri Indragiri Hilir</span>
                <ol class="breadcrumb">
                    <!-- <li class=""><img src="<?= base_url() ?>/files/web-assets/logo-anka.png" width="80px" alt=""></li> -->
                    <li class="ms-2"><img src="<?= base_url() ?>/files/web-assets/logo-inhil.png" width="60px" alt=""></li>
                </ol>
            </div>

        </section>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Untuk alasan tertentu Anda tidak puas dengan layanan kami, Anda dapat menyampaikan kritik/saran dibawah!
                                        Tanggapan akan dikirim ke Email Anda.
                                    </p>
                                    <form id="form_kritik">
                                        <div class="form-group">
                                            <label for="">Nama</label>
                                            <input type="text" class="form-control" id="nama" required placeholder="ketik nama anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" id="email" required placeholder="ketik email anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="">No.HP</label>
                                            <input type="text" class="form-control" id="hp" required placeholder="ketik nomor HP">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Topik</label>
                                            <select id="topik" class="form-select" required>
                                                <option value="">-pilih-</option>
                                                <option value="Pengaduan">Pengaduan</option>
                                                <option value="Aspirasi">Aspirasi</option>
                                                <option value="Permintaan Informasi">Permintaan Informasi</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Isi/Uraian</label>
                                            <textarea id="isi" cols="30" rows="5" placeholder="ketik uraian" class="form-control"></textarea>
                                        </div>
                                        <input type="submit" id="btnsubmit" class="button button-color" value="Submit">
                                    </form>
                                </div>
                            </div>


                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                            <div class="widget clearfix">

                                <div class="tabs mb-0 clearfix" id="sidebar-tabs">

                                    <ul class="tab-nav clearfix">
                                        <li><a href="#tabs-1">Populer</a></li>
                                        <li><a href="#tabs-2">Terbaru</a></li>
                                    </ul>

                                    <div class="tab-container">

                                        <div class="tab-content clearfix" id="tabs-1">
                                            <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
                                                <?php
                                                foreach ($berita_populer as $row) {
                                                ?>
                                                    <div class="entry col-12">
                                                        <div class="grid-inner row g-0">
                                                            <div class="col-auto">
                                                                <div class="entry-image">
                                                                    <a href="<?= base_url('/artikel/' . $row->artikel_url) ?>"><img class="rounded" src="<?= base_url($row->artikel_gambar) ?>" alt="<?= $row->artikel_judul ?>"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-3">
                                                                <div class="entry-title">
                                                                    <h4>
                                                                        <a href="<?= base_url('/artikel/' . $row->artikel_url) ?>">
                                                                            <?php
                                                                            echo substr($row->artikel_judul, 0, 50);
                                                                            if (strlen($row->artikel_judul) > 50) {
                                                                                echo "...";
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div class="entry-meta">
                                                                    <ul>
                                                                        <li><i class="icon-book-open"></i><?= ($row->artikel_baca == 0 ? "Belum dibaca" : "Dibaca " . $row->artikel_baca . " kali") ?></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-2">
                                            <div class="posts-sm row col-mb-30" id="recent-post-list-sidebar">
                                                <?php
                                                foreach ($berita_update as $row) {
                                                ?>
                                                    <div class="entry col-12">
                                                        <div class="grid-inner row g-0">
                                                            <div class="col-auto">
                                                                <div class="entry-image">
                                                                    <a href="<?= base_url('/artikel/' . $row->artikel_url) ?>"><img class="rounded" src="<?= base_url($row->artikel_gambar) ?>" alt="<?= $row->artikel_judul ?>"></a>
                                                                </div>
                                                            </div>
                                                            <div class="col ps-3">
                                                                <div class="entry-title">
                                                                    <h4>
                                                                        <a href="<?= base_url('/artikel/' . $row->artikel_url) ?>">
                                                                            <?php
                                                                            echo substr($row->artikel_judul, 0, 50);
                                                                            if (strlen($row->artikel_judul) > 50) {
                                                                                echo "...";
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div class="entry-meta">
                                                                    <ul>
                                                                        <li><i class="icon-calendar3"></i> <?= tgl_indo(date('Y-m-d', strtotime($row->artikel_create_time))) ?></li>
                                                                    </ul>
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
                </div>
            </div>
        </section>
        <?= view('_footer'); ?>
    </div>
    <div id="gotoTop" class="icon-angle-up"></div>
    <?= view('_footer_js') ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $("#form_kritik").submit(function(e) {

            var nama = $("#nama").val();
            var email = $("#email").val();
            var hp = $("#hp").val();
            var topik = $("#topik").val();
            var isi = $("#isi").val();

            var fdata = new FormData();
            fdata.append('nama', nama);
            fdata.append('email', email);
            fdata.append('hp', hp);
            fdata.append('topik', topik);
            fdata.append('isi', isi);

            $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                type: "POST",
                url: "<?= base_url('/kritik-dan-saran/add') ?>",
                dataType: 'json',
                data: fdata,
                success: function(result) {
                    if (result.status == "1") {
                        swal.fire({
                            icon: "success",
                            title: result.msg,
                            showConfirmButton: false,
                            timer: 1000
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else {
                        swal.fire('Error', result.msg, 'error');
                    }

                }
            });

            e.preventDefault();
        });
    </script>
</body>

</html>