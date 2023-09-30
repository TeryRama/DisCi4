<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?= view('_head') ?>

<body class="stretched">
	<div id="wrapper" class="clearfix">
		<?= view('_header') ?>
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?= base_url() ?>/files/web-assets/paralax.png'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
			<div class="container clearfix">
				<h1 class="mt-3 mb-0">Harga Komoditas</h1>
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
							<div class="fancy-title title-bottom-border mb-0">
								<h3>Harga Rata-Rata Komoditas Pangan di Indragiri Hilir</h3>
							</div>
							<p class="mt-2 text-muted">* Update pada <b><?= tgl_indo($last_update) ?></b></p>
							<div class="portfolio-container mb-4">
								<div id="portfolio" class="portfolio row mb-0">
									<?php
									foreach ($komoditas as $row) {
										if ($row->status == "Harga Naik") {
											$bg_status = "bg-danger";
											$ic_status = "fas fa-arrow-up";
											$selisih = rupiah($row->avg_harga - $row->avg_prev);
										} elseif ($row->status == "Harga Turun") {
											$bg_status = "bg-success";
											$ic_status = "fas fa-arrow-down";
											$selisih = rupiah($row->avg_prev - $row->avg_harga);
										} else {
											$bg_status = "bg-primary";
											$ic_status = "fas fa-exchange";
											$selisih = "";
										}
										if ($row->avg_harga != 0) {
									?>
											<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 my-1">
												<a href="<?= base_url('/komoditas/' . encrypt_small($row->komoditas_id)) ?>">
													<div class="card shadow">
														<img src="<?= base_url($row->komoditas_foto) ?>" class="card-img-top" alt="" style="height: 180px;">
														<div class="card-body text-center" style="height: 6rem;">
															<span class=""><?= $row->komoditas_nama ?></span>
															<div class="">
																<span class="mt-auto" style="font-size:12px">Rp. </span>
																<span class="h5 m-0"><?= number($row->avg_harga) ?></span>
																<span class="mt-auto" style="font-size:12px"> /<?= $row->komoditas_satuan ?></span>
															</div>
														</div>
														<div class="card-footer text-center <?= $bg_status ?>">
															<h6 class="m-0 text-light"><i class="<?= $ic_status ?> me-2"></i> <?= $row->status . " " . $selisih ?></h6>
														</div>
													</div>
												</a>
											</div>
									<?php
										}
									}
									?>
								</div>
								<div class="d-flex mb-0 mt-3">
									<div class="pagination-container  ms-auto">
										<ul class="pagination pagination-circle m-0"></ul>
									</div>
								</div>
							</div>
							<div class="section bg-white">
								<div class="fancy-title title-bottom-border mb-0">
									<h3>Harga rata-rata Komoditas Penting di Indragiri Hilir</h3>
								</div>
								<p class="mt-2 text-muted">* Update pada <b><?= tgl_indo($last_update_penting) ?></b></p>
								<div class="penting-container">
									<div id="penting" class="row mb-0">
										<?php
										foreach ($barang_penting as $row) {
											if ($row->status == "Harga Naik") {
												$bg_status = "bg-danger";
												$ic_status = "fas fa-arrow-up";
												$selisih = rupiah($row->avg_harga - $row->avg_prev);
											} elseif ($row->status == "Harga Turun") {
												$bg_status = "bg-success";
												$ic_status = "fas fa-arrow-down";
												$selisih = rupiah($row->avg_prev - $row->avg_harga);
											} else {
												$bg_status = "bg-primary";
												$ic_status = "fas fa-exchange";
												$selisih = "";
											}
											if ($row->avg_harga != 0) {
										?>
												<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 my-1">
													<a href="#">

														<div class="card shadow">
															<div class="card-header text-center p-1">
																<h6 class="m-0"><?= $row->barang_nama ?></h6>
															</div>
															<div class="card-body px-3 py-3">
																<div class="row">
																	<div class="col-3 p-2">
																		<img src="<?= base_url($row->barang_foto) ?>" alt="" width="60px" height="60px" class="m-0" style="border-radius:8px">
																	</div>
																	<div class="col-9 mt-0 mb-0 pt-1">
																		<div class="text-end">
																			<span class="mt-auto" style="font-size:12px">Rp. </span>
																			<span class="h3 m-0"><?= number($row->avg_harga) ?></span>
																			<span class="mt-auto" style="font-size:12px">/ <?= $row->barang_satuan ?></span>
																		</div>
																		<div class="d-flex mt-1">
																			<span class="<?= $bg_status ?> text-center text-light m-0 ms-auto px-2" style="border-radius:4px; padding:1px; font-size:12px"><i class="<?= $ic_status ?> me-2"></i><?= $row->status . " " . $selisih ?></span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</a>
												</div>
										<?php
											}
										}
										?>
									</div>
									<div class="d-flex mb-0 mt-3">
										<div id="pagination-container-penting" class="pagination-container  ms-auto">
											<ul id="pagination-penting" class="pagination pagination-circle m-0"></ul>
										</div>
									</div>
								</div>
							</div>
							<div class="fancy-title title-bottom-border mb-0">
								<h3>Harga rata-rata Komoditas Penting Lainnya di Indragiri Hilir</h3>
							</div>
							<p class="mt-2 text-muted">* Update pada <b><?= tgl_indo($last_update_lainnya) ?></b></p>
							<div class="lainnya-container">
								<div id="lainnya" class="row mb-0">
									<?php
									foreach ($barang_lainnya as $row) {
										if ($row->status == "Harga Naik") {
											$bg_status = "bg-danger";
											$ic_status = "fas fa-arrow-up";
											$selisih = rupiah($row->avg_harga - $row->avg_prev);
										} elseif ($row->status == "Harga Turun") {
											$bg_status = "bg-success";
											$ic_status = "fas fa-arrow-down";
											$selisih = rupiah($row->avg_prev - $row->avg_harga);
										} else {
											$bg_status = "bg-primary";
											$ic_status = "fas fa-exchange";
											$selisih = "";
										}
										if ($row->avg_harga != 0) {
									?>
											<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 my-1">
												<a href="#">
													<div class="card shadow">
														<div class="card-header text-center p-1">
															<h6 class="m-0"><?= $row->barang_nama ?></h6>
														</div>
														<div class="card-body px-3 py-3">
															<div class="row">
																<div class="col-3 p-2">
																	<img src="<?= base_url($row->barang_foto) ?>" alt="" width="60px" height="60px" class="m-0" style="border-radius:8px">
																</div>
																<div class="col-9 mt-0 mb-0 pt-1">
																	<div class="text-end">
																		<span class="mt-auto" style="font-size:12px">Rp. </span>
																		<span class="h3 m-0"><?= number($row->avg_harga) ?></span>
																		<span class="mt-auto" style="font-size:12px">/ <?= $row->barang_satuan ?></span>
																	</div>
																	<div class="d-flex mt-1">
																		<span class="<?= $bg_status ?> text-center text-light m-0 ms-auto px-2" style="border-radius:4px; padding:1px; font-size:12px"><i class="<?= $ic_status ?> me-2"></i><?= $row->status . " " . $selisih ?></span>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</a>
											</div>
									<?php
										}
									}
									?>
								</div>
								<div class="d-flex mb-0 mt-3">
									<div id="pagination-container-lainnya" class="pagination-container  ms-auto">
										<ul id="pagination-lainnya" class="pagination pagination-circle m-0"></ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-12 col-12">
							<div class="card ">
								<div class="card-header" style="background-color: #1abc9c;">
									<h4 class="m-0 text-white">Perubahan Harga</h4>
								</div>
								<div class="card-body">
									<div class="perubahan-container">
										<div id="perubahan" class="row mb-0">
											<?php
											foreach ($komoditas as $row) {
												if ($row->status == "Harga Naik") {
													$bg_status = "text-danger";
													$ic_status = "fas fa-arrow-circle-up";
													$selisih = number($row->avg_harga - $row->avg_prev);
												} elseif ($row->status == "Harga Turun") {
													$bg_status = "text-success";
													$ic_status = "fas fa-arrow-circle-down";
													$selisih = number($row->avg_prev - $row->avg_harga);
												} else {
													$bg_status = "text-primary";
													$ic_status = "fas fa-exchange";
													$selisih = "";
												}
												if ($row->avg_harga != 0) {
											?>
													<div class="col-12">
														<div class="d-flex">
															<span class="my-auto" style="font-size: 14px;"><?= $row->komoditas_nama ?></span>
															<span class="d-inline-block ms-auto my-auto" data-toggle="tooltip" data-placement="top" title="<?= $row->status . " " . $selisih ?>">
																<span class="my-0 <?= $bg_status ?>" style="font-size: 14px;"><i class="me-1 <?= $ic_status ?>"></i><?= $selisih ?></span>
															</span><br>
														</div>
														<hr class="mt-1 mb-2" style="background-color: #6b6b6b;">
													</div>

											<?php
												}
											}
											?>
										</div>
										<?php
										if (count($komoditas) >= 10) {
										?>
											<div class="d-flex mb-0 mt-1 p-0">
												<div id="pagination-container-perubahan" class="pagination-container   ms-auto">
													<ul id="pagination-perubahan" class="pagination pagination-circle pagination-sm m-0"></ul>
												</div>
											</div>
										<?php
										}
										?>
									</div>
									<span style="font-size:12px"><i class="text-danger fas fa-arrow-circle-up"></i> : Naik</span>
									<span class="mx-3" style="font-size:12px"><i class="text-success fas fa-arrow-circle-down"></i> : Turun</span>
									<span style="font-size:12px"><i class="text-primary fas fa-exchange"></i> : Stabil</span>
								</div>
							</div>
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
				items_per_page: 8,
				item_container_id: '#portfolio',
				nav_panel_id: '.pagination-container ul',
				show_first_last: true,
				nav_label_prev: "<i class='icon-angle-left'></i>",
				nav_label_next: "<i class='icon-angle-right'></i>",
				nav_label_first: "<i class='icon-double-angle-left'></i>",
				nav_label_last: "<i class='icon-double-angle-right'></i>"
			});

			$('.pagination a').click(function() {
				var t = setTimeout(function() {
					$('.flexslider .slide').resize();
				}, 1000);
			});

			$('.perubahan-container').pajinate({
				items_per_page: 10,
				item_container_id: '#perubahan',
				nav_panel_id: '#pagination-container-perubahan ul',
				show_first_last: false,
				nav_label_prev: "<i class='icon-angle-left'></i>",
				nav_label_next: "<i class='icon-angle-right'></i>",
			});

			$('#pagination-perubahan a').click(function() {
				var t = setTimeout(function() {
					$('.flexslider .slide').resize();
				}, 1000);
			});

			$('.penting-container').pajinate({
				items_per_page: 8,
				item_container_id: '#penting',
				nav_panel_id: '#pagination-container-penting ul',
				show_first_last: true,
				nav_label_prev: "<i class='icon-angle-left'></i>",
				nav_label_next: "<i class='icon-angle-right'></i>",
				nav_label_first: "<i class='icon-double-angle-left'></i>",
				nav_label_last: "<i class='icon-double-angle-right'></i>"
			});

			$('#pagination-penting a').click(function() {
				var t = setTimeout(function() {
					$('.flexslider .slide').resize();
				}, 1000);
			});

			$('.lainnya-container').pajinate({
				items_per_page: 8,
				item_container_id: '#lainnya',
				nav_panel_id: '#pagination-container-lainnya ul',
				show_first_last: true,
				nav_label_prev: "<i class='icon-angle-left'></i>",
				nav_label_next: "<i class='icon-angle-right'></i>",
				nav_label_first: "<i class='icon-double-angle-left'></i>",
				nav_label_last: "<i class='icon-double-angle-right'></i>"
			});

			$('#pagination-lainnya a').click(function() {
				var t = setTimeout(function() {
					$('.flexslider .slide').resize();
				}, 1000);
			});


		});




		function convertToRupiah(angka) {
			var rupiah = '';
			var angkarev = angka.toString().split('').reverse().join('');
			for (var i = 0; i < angkarev.length; i++)
				if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + ',';
			return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
		}
	</script>
</body>

</html>