<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?= view('_head') ?>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?= view('_header') ?>
        <section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?= base_url() ?>/files/web-assets/paralax.png'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
            <div class="container clearfix">
                <h1 class="mt-3 mb-0"><?= $title ?></h1>
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
                            <?php if ($panel == 'kadis') { ?>
                                <strong>Profil Kepala Dinas</strong><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="<?= base_url() ?>/files/web-assets/kadis.png" width="90%" alt="">
                                    </div>
                                    <div class="col-md-9 d-flex">
                                        <div class="my-auto">
                                            Nama : <strong>MARTA HARYADI.SH.MH</strong> <br>
                                            NIP : 19670310 199402 1 002<br>
                                            Pangkat Golongan : Pembina Utama Muda (IV/c)<br>
                                            Jabatan : Kepala Dinas Perdagangan dan Perindustrian Kabupaten Indragiri Hilir
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if ($panel == 'sekretaris') { ?>
                                <strong>Profil Sekretaris</strong><br>
                                Nama : <strong>AL YUSRONI PAGTA, S.STP, MH </strong> <br>
                                NIP : 19810614 200112 1 003<br>
                                Pangkat Golongan : Pembina Tk.I (IV/b)<br>
                                Jabatan : Sekretaris Dinas Perdagangan dan Perindustrian Kabupaten Indragiri Hilir
                            <?php } ?>
                            <?php if ($panel == 'bid_perdagangan') { ?>
                                <strong>Profil Kepala Bidang Perdagangan</strong><br>
                                Nama : <strong>Hj. SALBIAH, SE </strong> <br>
                                NIP : 19711102 199003 2 001<br>
                                Pangkat Golongan : Pembina (IV/a)<br>
                                Jabatan : Kepala Bidang Perdagangan<br><br>
                                <strong>Berikut adalah tugas pokok dan fungsi bidang perdaganan.</strong>
                                <ol class="ms-3">
                                    <li>
                                        Bidang Perdagangan menyelenggarakan tugas yang terkait dengan fasilitasi, pembinaan dan pengawasan perizinan pendaftaran perusahaan, stabilisasi harga barang kebutuhan pokok dan barang penting, serta pengembangan ekspor.
                                    </li>
                                    <li>
                                        Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1) Bidang Perdagangan menyelenggarakan fungsi:
                                        <ol type="a" class="ms-3">
                                            <li>pengkajian, penyusunan, pengusulan dan pengembangan rencana program/kegiatan dan anggaran Bidang Perdagangan;</li>
                                            <li>penyusunan dan pembinaan pelaksanaan standar operasional prosedur lingkup Bidang Perdagangan;</li>
                                            <li>pelaksanaan kebijakan di Bidang Perdagangan, antara lain meliputi fasilitasi, pembinaan dan pengawasan perizinan pendaftaran perusahaan, stabilisasi harga barang kebutuhan pokok dan barang penting, serta pengembangan ekspor;</li>
                                            <li>pelaksanaan koordinasi perumusan dan penyusunan kebijakan perdagangan dengan Sekretariat Daerah dan/atau Perangkat Daerah terkait;</li>
                                            <li>pelaksanaan koordinasi, fasilitasi, pengawasan, pemantauan, evaluasi dan pelaporan pelaksanaan tugas dan kegiatan lingkup Bidang Perdagangan; dan</li>
                                            <li>pelaksanaan tugas kedinasan lain yang diberikan pimpinan sesuai dengan tugas dan fungsinya.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        Dalam pelaksanaan tugas sebagaimana dimaksud pada ayat (1), Kepala Bidang Perdagangan dibantu oleh Kelompok JF.
                                    </li>
                                </ol>
                            <?php } ?>
                            <?php if ($panel == 'bid_pasar') { ?>
                                <strong>Profil Kepala Bidang Pasar</strong><br>
                                Nama : <strong>AHMAD FITRI, S.sos</strong> <br>
                                NIP : 19660124 198603 1 003<br>
                                Pangkat Golongan : Pembina (IV/a)<br>
                                Jabatan : Kepala Bidang Pasar<br><br>
                                <strong>Berikut adalah tugas pokok dan fungsi bidang pasar.</strong>
                                <ol class="ms-3">
                                    <li>
                                        Bidang Pasar menyelenggarakan tugas yang terkait dengan prasarana dan penempatan, pembinaan dan restribusi, serta ketertiban dan penyuluhan.
                                    </li>
                                    <li>
                                        Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1) Bidang Pasar menyelenggarakan fungsi:
                                        <ol type="a" class="ms-3">
                                            <li>pengkajian, penyusunan, pengusulan dan pengembangan rencana program/kegiatan dan anggaran Bidang Pasar;</li>
                                            <li>penyusunan dan pembinaan pelaksanaan standar operasional;</li>
                                            <li>prosedur lingkup Bidang Pasar; pelaksanaan kebijakan di Bidang Pasar, antara lain meliputi prasarana dan penempatan, pembinaan dan restribusi, serta ketertiban dan penyuluhan;</li>
                                            <li>pelaksanaan koordinasi perumusan dan penyusunan kebijakan pasar dengan Sekretariat Daerah dan/atau Perangkat Daerah terkait;</li>
                                            <li>pelaksanaan koordinasi, fasilitasi, pengawasan, pemantauan, evaluasi dan pelaporan pelaksanaan tugas dan kegiatan lingkup Bidang Pasar; dan</li>
                                            <li>pelaksanaan tugas kedinasan lain yang diberikan pimpinan sesuai dengan tugas dan fungsinya.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        Dalam pelaksanaan tugas sebagaimana dimaksud pada ayat (1), Kepala Bidang Perdagangan dibantu oleh Kelompok JF.
                                    </li>
                                </ol>
                            <?php } ?>
                            <?php if ($panel == 'bid_kemetrologian') { ?>
                                <strong>Profil Kepala Bidang Kemetrologian</strong><br>
                                Nama : <strong>Hj. MARINI, SE, M. SI</strong> <br>
                                NIP : 19730702 199703 2 001<br>
                                Pangkat Golongan : Pembina (IV/a)<br>
                                Jabatan : Kepala Bidang Kemetrologian<br><br>
                                <strong>Berikut adalah tugas pokok dan fungsi bidang kemetrologian.</strong>
                                <ol class="ms-3">
                                    <li>
                                        Bidang Kemetrologian menyelenggarakan tugas yang terkait dengan pelayanan tera dan tera ulang, pengawasan kemetrologian, serta pembinaan SDM kemetrologian.
                                    </li>
                                    <li>
                                        Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1) Bidang Kemetrologian menyelenggarakan fungsi:
                                        <ol type="a" class="ms-3">
                                            <li>pengkajian, penyusunan, pengusulan dan pengembangan rencana program/kegiatan dan anggaran Bidang Kemetrologian; </li>
                                            <li>penyusunan dan pembinaan pelaksanaan standar operasional prosedur lingkup Bidang Kemetrologian; </li>
                                            <li>pelaksanaan kebijakan di Bidang Kemetrologian, antara lain meliputi pelayanan tera dan tera ulang, pengawasan kemetrologian, serta pembinaan SDM kemetrologian; </li>
                                            <li>pelaksanaan koordinasi perumusan dan penyusunan kebijakan kemetrologian dengan Sekretariat Daerah dan/atau Perangkat Daerah terkait;</li>
                                            <li>pelaksanaan koordinasi, fasilitasi, pengawasan, pemantauan, evaluasi dan pelaporan pelaksanaan tugas dan kegiatan lingkup Bidang Kemetrologian; dan </li>
                                            <li>pelaksanaan tugas kedinasan lain yang diberikan pimpinan sesuai dengan tugas dan fungsinya.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        Dalam pelaksanaan tugas sebagaimana dimaksud pada ayat (1), Kepala Bidang Kemetrologian dibantu oleh Kelompok JF
                                    </li>
                                </ol>
                            <?php } ?>
                            <?php if ($panel == 'bid_perindustrian') { ?>
                                <strong>Profil Kepala Bidang Perindustrian</strong><br>
                                Nama : <strong>Hj. ERNI YUSNITA, SE, MH </strong> <br>
                                NIP : 19740601 199703 2 004<br>
                                Pangkat Golongan : Pembina (IV/a)<br>
                                Jabatan : Kepala Bidang Perindustrian<br><br>
                                <strong>Berikut adalah tugas pokok dan fungsi bidang perindustrian.</strong>
                                <ol class="ms-3">
                                    <li>
                                        Bidang Perindustrian menyelenggarakan tugas yang terkait dengan pembangunan industri, fasilitasi Industri Kecil dan Menengah (IKM), serta fasilitasi pengawasan perizinan dan informasi industri.
                                    </li>
                                    <li>
                                        Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1) Bidang Perindustrian menyelenggarakan fungsi:
                                        <ol type="a" class="ms-3">
                                            <li>pengkajian, penyusunan, pengusulan dan pengembangan rencana program/kegiatan dan anggaran Bidang Perindustrian;</li>
                                            <li>penyusunan dan pembinaan pelaksanaan standar operasional prosedur lingkup Bidang Perindustrian;</li>
                                            <li>pelaksanaan kebijakan di Bidang Perindustrian, antara lain meliputi pembangunan industri, fasilitasi Industri Kecil dan Menengah (IKM), serta fasilitasi pengawasan perizinan dan informasi industri;</li>
                                            <li>pelaksanaan koordinasi perumusan dan penyusunan kebijakan perindustrian dengan Sekretariat Daerah dan/atau Perangkat Daerah terkait;</li>
                                            <li>pelaksanaan koordinasi, fasilitasi, pengawasan, pemantauan, evaluasi dan pelaporan pelaksanaan tugas dan kegiatan lingkup Bidang Perindustrian; dan f. pelaksanaan tugas kedinasan lain yang diberikan pimpinan sesuai dengan tugas dan fungsinya.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        Dalam pelaksanaan tugas sebagaimana dimaksud pada ayat (1), Kepala Bidang Perindustrian dibantu oleh Kelompok JF.
                                    </li>
                                </ol>
                            <?php } ?>
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