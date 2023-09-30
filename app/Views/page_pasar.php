<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?= view('_head') ?>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?= view('_header') ?>
        <section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?= base_url() ?>/files/web-assets/paralax.png'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
            <div class="container clearfix">
                <h1 class="mt-3 mb-0">Data Pasar</h1>
                <span class="mt-0">Indragiri Hilir</span>
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
                                <div class="card-body">Data Pasar yang Menjadi Pantauan <strong>Disdagtri Inhil</strong></div>
                            </div>
                            <div class="portfolio-container">
                                <div id="portfolio" class="portfolio row gutter-20">

                                    <?php
                                    foreach ($pasar as $row) {
                                    ?>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
                                            <div class="card card-stretch shadow">
                                                <img src="<?= base_url() ?>/files/web-assets/ic-pasar.png" class="pasar" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?= $row->pasar_nama ?></h5>
                                                    <span class="text-muted"><?= $row->pasar_alamat ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div><!-- #portfolio end -->

                                <div class="pagination-container topmargin mb-0">
                                    <ul class="pagination m-0"></ul>
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
        </section>
        <?= view('_footer'); ?>
    </div>
    <div id="gotoTop" class="icon-angle-up"></div>
    <?= view('_footer_js') ?>
    <script>
        jQuery(document).ready(function($) {

            $('.portfolio-container').pajinate({
                items_per_page: 6,
                item_container_id: '#portfolio',
                nav_panel_id: '.pagination-container ul',
                show_first_last: false
            });

            $('.pagination a').click(function() {
                var t = setTimeout(function() {
                    $('.flexslider .slide').resize();
                }, 1000);
            });

        });
    </script>
</body>

</html>