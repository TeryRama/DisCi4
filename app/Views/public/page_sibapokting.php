<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?= view('_head') ?>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?= view('_header') ?>
        <section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?= base_url() ?>/files/web-assets/paralax.png'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
            <div class="container clearfix">
                <h1 class="mt-3 mb-0">SIBAPOKTING INHIL</h1>
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
                            <div class="card bottommargin">
                                <div class="card-body">Inovasi Sibapokting Inhil</div>
                            </div>
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 col-md-12 col-12 mb-3">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ip3KR5yYPTg?si=gXntftOlmzOhsPrG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body">
                                            <h5 class="mb-0"><i class="icon-angle-double-right text-muted"></i> JUKNIS SIBAPOKTING INHIL</h5>
                                            <a class="ms-3 mt-2" href="<?= base_url() ?>/files/doc/juknis_sibapokting.pdf"><i class="icon-file-alt1"></i> Dokumen Juknis</a>
                                        </div>
                                    </div>
                                    <div class="card border-0 shadow-sm mt-3">
                                        <div class="card-body">
                                            <h5 class="mb-0"><i class="icon-angle-double-right text-muted"></i> SOP SIBAPOKTING INHIL</h5>
                                            <a class="ms-3 mt-2" href="<?= base_url() ?>/files/doc/sop_sibapokting.pdf"><i class="icon-file-alt1"></i> Dokumen SOP</a><br>
                                        </div>
                                    </div>
                                    <div class="card border-0 shadow-sm mt-3">
                                        <div class="card-body">
                                            <h5 class="mb-0"><i class="icon-angle-double-right text-muted"></i> KONTAK LAYANAN</h5>
                                            <a href="https://wa.me/6281371296952" class="ms-3">081371296952</a>
                                        </div>
                                    </div>
                                    <div class="card border-0 shadow-sm mt-3">
                                        <div class="card-body">
                                            <h5 class="mb-0"><i class="icon-angle-double-right text-muted"></i> LAYANAN PENGADUAN SIBAPOKTING</h5>
                                            <a href="https://forms.gle/bx3oEk7d7Sskkyas7" class="ms-3">Form Pengaduan</a>
                                        </div>
                                    </div>
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
</body>

</html>