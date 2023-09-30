<header id="header" class="full-header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">
                <div id="logo">
                    <a href="index.html" class="standard-logo" data-dark-logo="<?= base_url() ?>/files/web-assets/ic-sibapokting-light.png"><img src="<?= base_url() ?>/files/web-assets/ic-sibapokting-dark.png" alt=""></a>
                    <a href="index.html" class="retina-logo" data-dark-logo="<?= base_url() ?>/files/web-assets/ic-sibapokting-light.png"><img src="<?= base_url() ?>/files/web-assets/ic-sibapokting-dark.png" alt=""></a>
                </div>
                <div class="header-misc">
                    <a href="<?= base_url() ?>/login" class="button bg-color text-light button-light button-rounded ">Login</a>
                </div>
                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100">
                        <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                        <path d="m 30,50 h 40"></path>
                        <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                    </svg>
                </div>
                <nav class="primary-menu">
                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link <?= ($panel == 'home' ? "color" : "") ?>" href="<?= base_url('/') ?>">Home</a>
                        </li>
                        <li class="menu-item">
                            <?php
                            $profil = array("struktur", "tugas", "kadis", "sekretaris", "bid_perdagangan", "bid_pasar", "bid_kemetrologian", "bid_perindustrian");
                            ?>
                            <a class="menu-link <?= (in_array($panel, $profil) ? "color" : "") ?>" href="javscript:;">
                                <div>Profil</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link <?= ($panel == 'struktur' ? "color" : "") ?>" href="struktur">
                                        <div>Struktur Organisasi</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link <?= ($panel == 'tugas' ? "color" : "") ?>" href="<?= base_url() ?>/tugas-dan-fungsi">
                                        <div>Tugas dan Fungsi</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link <?= ($panel == 'kadis' ? "color" : "") ?>" href="<?= base_url() ?>/kadis">
                                        <div>Kepala Dinas</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link <?= ($panel == 'sekretaris' ? "color" : "") ?>" href="<?= base_url() ?>/sekretaris">
                                        <div>Sekretaris</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link <?= ($panel == 'bid_perdagangan' ? "color" : "") ?>" href="<?= base_url() ?>/bidang-perdagangan">
                                        <div>Bidang Perdagangan</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link <?= ($panel == 'bid_pasar' ? "color" : "") ?>" href="<?= base_url() ?>/bidang-pasar">
                                        <div>Bidang Pasar</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link <?= ($panel == 'bid_kemetrologian' ? "color" : "") ?>" href="<?= base_url() ?>/bidang-kemetrologian">
                                        <div>Bidang Kemetrologian</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link <?= ($panel == 'bid_perindustrian' ? "color" : "") ?>" href="<?= base_url() ?>/bidang-perindustrian">
                                        <div>Bidang Perindustrian</div>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link <?= ($panel == 'inovasi' ? "color" : "") ?>" href="#">
                                <div>Inovasi</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="<?= base_url('/sibapokting') ?>">
                                        <div>Sibapokting Inhil</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="<?= base_url('/klinik-putri') ?>">
                                        <div>Klinik Putri</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="<?= base_url('/priuk-wak-atan') ?>">
                                        <div>Priuk Wak Atan</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="<?= base_url('/klinik-ikm') ?>">
                                        <div>Klinik IKM</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link <?php if ($panel == 'komoditas') {
                                                    echo "color";
                                                } ?>" href="<?= base_url('/komoditas') ?>">Harga Komoditas</a>
                        </li>

                        <li class="menu-item">
                            <a class="menu-link <?= ($panel == 'data-pasar' ? "color" : "") ?>" href="<?= base_url('/pasar') ?>">Data Pasar</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link <?php if ($panel == 'statistik_wilayah') {
                                                    echo "color";
                                                } ?>" href="<?= base_url('/statistik') ?>">Statistik</a>
                        </li>

                        <li class="menu-item">
                            <a class="menu-link <?php if ($panel == 'artikel') {
                                                    echo "color";
                                                } ?>" href="<?= base_url('/artikel') ?>">Artikel</a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link <?php if ($panel == 'lapor') {
                                                    echo "color";
                                                } ?>" href="<?= base_url('/lapor') ?>">Lapor</a>
                        <li class="menu-item">
                            <a class="menu-link <?php if ($panel == 'kritik') {
                                                    echo "color";
                                                } ?>" href="<?= base_url('/kritik-dan-saran') ?>">Kritik & Saran</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>