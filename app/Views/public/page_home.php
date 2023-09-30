<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?= view('_head') ?>

<body class="stretched">
	<div id="wrapper" class="clearfix">
		<?= view('_header') ?>
		<section id="slider" class="slider-element h-auto" style="background-color: #222;">
			<div class="slider-inner">

				<!-- <div class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="true" data-loop="true" data-animate-in="fadeIn" data-speed="5000" data-animate-out="fadeOut" data-autoplay="5000">
					<a href="#"><img src="<?= base_url() ?>/files/web-assets/dashboard1.png" alt=""></a>
					<a href="#"><img src="<?= base_url() ?>/files/web-assets/dashboard1.png" alt=""></a>
				</div> -->
				<img src="<?= base_url() ?>/files/web-assets/dashboard1.png" width="100%" alt="">

			</div>
		</section>
		<section id="content">
			<div class="content-wrap py-0">
				<div style="background-color: #0a7b5c;">
					<div class="container clearfix">
						<div class="row pt-4 justify-content-center">
							<div class="col-lg-3 col-6 col-md-6 d-flex">
								<img src="<?= base_url() ?>/files/web-assets/kadis.png" class="mt-auto mx-auto" alt="" width="100%">
							</div>
							<div class="col-lg-7">

								<h3 class="text-white mt-4">SEKAPUR SIRIH</h3>
								<p class="text-white" style="font-size: 16px;">
									Selamat Datang di website resmi Disperindag Pemerintah Kabupaten Indragiri Hilir. Website ini menjadi salah satu pendukung berjalannya pelaksanaan Undang-undang Republik Indonesia Nomor 14 Tahun 2010 yaitu tentang keterbukaan Informasi Publik, sejalan dengan kewajiban Pemda Indragiri Hilir memberikan layanan informasi publik secara transparan dan efisien kepada masyarakat.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="container clearfix" style="background-color: #2c7e58;">

				</div>
				<div class="section bg-transparent">
					<div class="container clearfix">
						<div class="row justify-content-center">
							<div class="col-md-7 center">
								<div class="heading-block border-bottom-0 mb-4">
									<h1 class="mb-4" style="color:#2c7e58">Pelayanan Publik</h1>
								</div>
							</div>
						</div>
						<div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-items-xs="1" data-items-sm="2" data-items-lg="3" data-items-xl="3">
							<div class="oc-item me-3">
								<img src="<?= base_url() ?>/files/web-assets/cor1.jpg" alt="">
							</div>
							<div class="oc-item me-3">
								<img src="<?= base_url() ?>/files/web-assets/cor2.jpg" alt="">
							</div>
							<div class="oc-item me-3">
								<img src="<?= base_url() ?>/files/web-assets/cor3.jpg" alt="">
							</div>
							<div class="oc-item me-3">
								<img src="<?= base_url() ?>/files/web-assets/cor4.jpg" alt="">
							</div>
							<div class="oc-item me-3">
								<img src="<?= base_url() ?>/files/web-assets/cor5.jpg" alt="">
							</div>

						</div>
					</div>
				</div>
				<div class="section parallax dark mb-0" style="background-image: url('<?= base_url() ?>/files/web-assets/paralax.jpg'); padding: 100px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
					<div class="heading-block center mb-0">
						<h3>Statistik Data</h3>
					</div>
					<div class="container clearfix mt-0">
						<div class="d-flex flex-column align-items-center justify-content-center center counter-section position-relative">
							<div class="row align-items-stretch m-0 w-100 clearfix">
								<div class="col-lg-3 col-sm-6 center mt-5">
									<!-- <img src="<?= base_url() ?>/files/web-assets/ic-mitra.png" alt="Counter Icon" width="70" class="mb-4"> -->
									<div class="counter font-secondary"><span data-from="0" data-to="<?= $pasar ?>" data-refresh-interval="50" data-speed="2200" data-comma="true"></span>+</div>
									<h5 class="nott ls0 mt-0">Total Pasar yang Dipantau</h5>
								</div>

								<div class="col-lg-3 col-sm-6 center mt-5">
									<div class="counter font-secondary"><span data-from="0" data-to="<?= $pangan ?>" data-refresh-interval="25" data-speed="2300" data-comma="true"></span>+</div>
									<h5 class="nott ls0 mt-0">Jumlah Komoditas Pangan</h5>
								</div>
								<div class="col-lg-3 col-sm-6 center mt-5">
									<div class="counter font-secondary"><span data-from="0" data-to="<?= $penting ?>" data-refresh-interval="25" data-speed="2300" data-comma="true"></span>+</div>
									<h5 class="nott ls0 mt-0">Jumlah Komoditas Penting</h5>
								</div>
								<div class="col-lg-3 col-sm-6 center mt-5">
									<h3>96,1 %</h3>
									<h5 class="nott ls0 mt-0">Index Kepuasan Masyarakat</h5>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="container clearfix mb-4">
					<div class="heading-block topmargin-lg center">
						<h2>Berita Terbaru</h2>
					</div>
					<div class="row">
						<?php
						foreach ($artikel as $row) {
						?>
							<div class="col-lg-3 col-md-6">
								<div class="entry">
									<div class="entry-image">
										<a href="<?= base_url('/artikel/' . $row->artikel_url) ?>"><img src="<?= base_url($row->artikel_gambar) ?>" alt="Image" style="height: 180px;"></a>
									</div>
									<div class="entry-title title-xs nott">
										<h3>
											<a href="<?= base_url('/artikel/' . $row->artikel_url) ?>">
												<?php
												echo substr($row->artikel_judul, 0, 70);
												if (strlen($row->artikel_judul) > 70) {
													echo "...";
												}
												?>
											</a>
										</h3>
									</div>
									<div class="entry-meta">
										<ul>
											<li><i class="icon-calendar3"></i> <?= tgl_indo(date('Y-m-d', strtotime($row->artikel_create_time))) ?></li>
											<li><span><i class="icon-folder-close"></i> <?= $row->kategori_nama ?></span></li>
										</ul>
									</div>
									<div class="entry-content">
										<p id="konten_artikel">
											<?php
											$konten = strip_tags(html_entity_decode($row->artikel_konten));
											echo substr($konten, 0, 160);
											if (strlen($konten) > 200) {
												echo " ...";
											}
											?>
										</p>
										<a href="<?= base_url('/artikel/' . $row->artikel_url) ?>" class="text-center">Lihat Selengkapnya <i class="ms-2 fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						<?php
						}
						?>
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