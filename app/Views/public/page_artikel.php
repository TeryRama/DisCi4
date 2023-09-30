<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?= view('_head') ?>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?= view('_header') ?>
        <section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?= base_url() ?>/files/web-assets/paralax.png'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
            <div class="container clearfix">
                <h1 class="mt-3 mb-0">Artikel</h1>
                <span class="mt-0">Disperindag Indragiri Hilir</span>
                <ol class="breadcrumb">
                    <!-- <li class=""><img src="<?= base_url() ?>/files/web-assets/logo-anka.png" width="80px" alt=""></li> -->
                    <li class="ms-2"><img src="<?= base_url() ?>/files/web-assets/logo-inhil.png" width="60px" alt=""></li>
                </ol>
            </div>

        </section>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">

                    <div class="row gutter-40 col-mb-80">
                        <!-- Post Content
    ============================================= -->
                        <div class="postcontent col-lg-9">
                            <?php if ((isset($_GET['keyword']) && $_GET['keyword'] != "") || (isset($_GET['kategori']) && $_GET['kategori'] != "")) { ?>
                                <div class="card bottommargin">
                                    <div class="card-body d-flex">
                                        Pencarian untuk <?= (isset($_GET['kategori']) && $_GET['kategori'] != "" && $_GET['kategori'] != "seluruh" ? "<strong class='ms-1 me-1'> Kategori " . $kat[0]->kategori_nama . ',</strong>' : "") ?> <?= (isset($_GET['keyword']) && $_GET['keyword'] != "" ? "<strong class='ms-1 me-1'> Keyword " . $_GET['keyword'] . '</strong>' : "") ?>
                                        <div class="ms-auto">
                                            <a href="<?= base_url() ?>/berita" class="text-dark text-hover-danger"><i class="icon-window-close1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php
                            if (count($berita) == 0) {
                                echo '<div class="text-center"><span class="text-muted"> Artikel tidak ditemukan </span></div>';
                            }
                            ?>
                            <!-- Posts
        ============================================= -->
                            <div id="posts" class="row gutter-40">
                                <?php
                                foreach ($berita as $row) {
                                ?>
                                    <div class="entry col-12">
                                        <div class="grid-inner row g-0">
                                            <div class="col-md-4">
                                                <div class="entry-image">
                                                    <a href="<?= base_url('/artikel/' . $row['artikel_url']) ?>" data-lightbox="image"><img src="<?= base_url($row['artikel_gambar']) ?>" alt="<?= $row['artikel_judul'] ?>"></a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 ps-md-4">
                                                <div class="entry-title title-sm">
                                                    <h2><a href="<?= base_url('/artikel/' . $row['artikel_url']) ?>"><?= $row['artikel_judul'] ?></a></h2>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li><i class="icon-calendar3"></i> <?= tgl_indo(date('Y-m-d', strtotime($row['artikel_create_time']))) ?></li>
                                                        <li><i class="icon-folder-open"></i> <?= $row['kategori_nama'] ?></li>
                                                        <li><i class="icon-book-open"></i><?= ($row['artikel_baca'] == 0 ? "Belum dibaca" : "Dibaca " . $row['artikel_baca'] . " kali") ?></li>
                                                    </ul>
                                                </div>
                                                <div class="entry-content mt-2">
                                                    <p class="mt-0 mb-0" style="font-size: 14px;">
                                                        <?php
                                                        $konten = strip_tags(html_entity_decode($row['artikel_konten']));
                                                        echo substr($konten, 0, 350);
                                                        if (strlen($konten) > 350) {
                                                            echo " ...";
                                                        }
                                                        ?>
                                                    </p>
                                                    <a href="<?= base_url('/artikel/' . $row['artikel_url']) ?>" class="more-link">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="d-flex">
                                <div class="ms-auto me-auto">
                                    <?= $pager->links('artikel', 'canvas_pagination'); ?>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar
    ============================================= -->
                        <div class="sidebar col-lg-3">
                            <div class="sidebar-widgets-wrap">

                                <div class="widget widget-twitter-feed clearfix">

                                    <h4>Cari Berita</h4>
                                    <form action="<?= base_url('/artikel') ?>" method="get">
                                        <div class="input-group mb-3 pb-1">
                                            <input type="hidden" name="kategori" id="kategori" value="<?= (isset($_GET['kategori']) ? $_GET['kategori'] : "seluruh") ?>">
                                            <input class="form-control box-shadow-none text-1 border-0 bg-light" placeholder="ketik judul berita..." name="keyword" id="keyword" type="text">
                                            <button type="submit" class="btn bg-color-grey text-1 p-2"><i class="fas fa-search m-2"></i></button>
                                        </div>
                                    </form>

                                </div>

                                <div class="widget clearfix sidebar-widgets-wrap">
                                    <div class="widget widget_links clearfix">
                                        <h4 class="">Kategori Berita</h4>
                                        <ul class="mt-4">
                                            <?php
                                            if (isset($_GET['keyword'])) {
                                                $fil = $_GET['keyword'];
                                            } else {
                                                $fil = "";
                                            }
                                            foreach ($kategori as $row) {
                                            ?>
                                                <li class="d-flex align-items-center"><a href="<?= base_url('/artikel?kategori=' . encrypt_small($row->kategori_id) . "&keyword=" . $fil) ?>" class="flex-fill"><?= $row->kategori_nama ?></a><span class="badge text-light bg-secondary"><?= $row->jumlah ?></span></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>

                                </div>

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

                        </div><!-- .sidebar end -->
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
</body>

</html>