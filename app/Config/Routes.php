<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// web
$routes->get('/', 'Publik::index');
$routes->get('/komoditas', 'Publik::komoditas');
$routes->get('/komoditas/(:any)', 'Publik::detail_komoditas');
$routes->get('/pasar', 'Publik::pasar');
$routes->get('/pasar/(:any)', 'Publik::detail_pasar');
$routes->get('/statistik', 'Publik::statistik_wilayah');
$routes->get('/statistik-wilayah', 'Publik::statistik_wilayah');
$routes->get('/statistik-komoditas', 'Publik::statistik_komoditas');
$routes->get('/artikel', 'Publik::artikel');
$routes->get('/artikel/(:any)', 'Publik::detail_artikel');
$routes->get('/privasi', 'Publik::privasi');
$routes->get('/sibapokting', 'Publik::sibapokting');
$routes->get('/klinik-putri', 'Publik::klinik_putri');
$routes->get('/klinik-ikm', 'Publik::klinik_ikm');
$routes->get('/priuk-wak-atan', 'Publik::priuk_wak_atan');
$routes->get('/struktur', 'Publik::struktur');
$routes->get('/tugas-dan-fungsi', 'Publik::tugas');
$routes->get('/kadis', 'Publik::kadis');
$routes->get('/sekretaris', 'Publik::sekretaris');
$routes->get('/bidang-perdagangan', 'Publik::bid_perdagangan');
$routes->get('/bidang-pasar', 'Publik::bid_pasar');
$routes->get('/bidang-pasar', 'Publik::bid_pasar');
$routes->get('/bidang-kemetrologian', 'Publik::bid_kemetrologian');
$routes->get('/bidang-perindustrian', 'Publik::bid_perindustrian');
$routes->get('/lapor', 'Publik::lapor');
$routes->get('/kritik-dan-saran', 'Publik::kritik');
$routes->post('/kritik-dan-saran/add', 'Publik::add_kritik');

$routes->get('/lupa-password', 'Login::forgot_password');
$routes->post('/request-forgot-password', 'Login::request_forgot_password');
$routes->get('/reset-password', 'Login::reset_password');
$routes->post('/reset-password-action', 'Login::reset_password_action');


//web admin
$routes->get('/login', 'Login::index');
$routes->post('/login/login-action', 'Login::login_validation');
$routes->get('/login/logout', 'Login::logout');
$routes->get('/root', 'Root::dashboard');
$routes->get('/root/dashboard', 'Root::dashboard');
$routes->get('/root/kategori-artikel', 'Root::kategori_artikel');
$routes->get('/root/artikel', 'Root::artikel');
$routes->get('/root/artikel/tambah', 'Root::add_artikel');
$routes->get('/root/artikel/edit/(:any)', 'Root::edit_artikel');
$routes->get('/root/page-management', 'Root::page_management');
$routes->get('/root/laporan/komoditas-pangan/tanggal', 'Root::laporan_pangan_tanggal');
$routes->get('/root/laporan/komoditas-pangan', 'Root::laporan_pangan');
$routes->get('/root/laporan/barang-penting', 'Root::laporan_penting');
$routes->get('/root/laporan/barang-penting-lainnya', 'Root::laporan_lainnya');
$routes->get('/root/laporan/stok-komoditas', 'Root::laporan_stok');
$routes->get('/root/tes', 'Root::tes');
$routes->get('/root/system-log', 'Root::log');
$routes->get('/root/kritik-dan-saran', 'Root::kritik');

//admin
$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->get('/admin/system-log', 'Admin::log');
$routes->get('/admin/kategori-artikel', 'Admin::kategori_artikel');
$routes->get('/admin/artikel', 'Admin::artikel');
$routes->get('/admin/artikel/tambah', 'Admin::add_artikel');
$routes->get('/admin/artikel/edit/(:any)', 'Admin::edit_artikel');
$routes->get('/admin/laporan/komoditas-pangan/tanggal', 'Admin::laporan_pangan_tanggal');
$routes->get('/admin/laporan/komoditas-pangan', 'Admin::laporan_pangan');
$routes->get('/admin/laporan/barang-penting', 'Admin::laporan_penting');
$routes->get('/admin/laporan/barang-penting-lainnya', 'Admin::laporan_lainnya');
$routes->get('/admin/laporan/stok-komoditas', 'Admin::laporan_stok');
$routes->get('/admin/kritik-dan-saran', 'Admin::kritik');

//pengguna
$routes->get('/root/pengguna', 'Root::pengguna');
$routes->post('/crud/add-pengguna', 'Crud::add_pengguna');
$routes->get('/crud/get-user-detail', 'Crud::get_user_detail');
$routes->post('/crud/edit-pengguna', 'Crud::edit_pengguna');
$routes->post('/crud/delete-user', 'Crud::delete_user');
$routes->get('/crud/user-check/(:any)/(:any)', 'Crud::check_user');
$routes->post('/crud/reset-password-user', 'Crud::reset_password_user');

//crud web admin
//download laporan
$routes->get('/crud/laporan/komoditas-pangan', 'Crud::download_laporan_pangan');
$routes->get('/crud/laporan/komoditas-pangan-tanggal', 'Crud::download_laporan_pangan_tanggal');
$routes->get('/crud/laporan/komoditas-penting', 'Crud::download_laporan_penting');
$routes->get('/crud/laporan/komoditas-lainnya', 'Crud::download_laporan_lainnya');
$routes->get('/crud/laporan/stok', 'Crud::download_laporan_stok');
//Management page
$routes->post('/crud/edit-login-page', 'Crud::edit_login_page');
$routes->post('/crud/edit-main-page', 'Crud::edit_main_page');
//kategori artikel
$routes->post('/crud/add-kategori-artikel', 'Crud::add_kategori_artikel');
$routes->post('/crud/delete-kategori-artikel', 'Crud::delete_kategori_artikel');
$routes->post('/crud/edit-kategori-artikel', 'Crud::edit_kategori_artikel');
$routes->get('/crud/get-detail-kategori-artikel', 'Crud::get_detail_kategori_artikel');
// Artikel
$routes->get('/crud/chekc-url-artikel/(:any)', 'Crud::check_url_artikel');
$routes->post('/crud/add-image-artikel', 'Crud::add_image_artikel');
$routes->post('/crud/delete-image-artikel', 'Crud::delete_image_artikel');
$routes->post('/crud/add-artikel', 'Crud::add_artikel');
$routes->post('/crud/edit-artikel', 'Crud::edit_artikel');
$routes->post('/crud/delete-artikel', 'Crud::delete_artikel');
$routes->get('/crud/get-image-artikel', 'Crud::get_image_artikel');
$routes->get('/crud/delete-image-artikel-by-id', 'Crud::delete_image_artikel_by_id');

// action public
$routes->get('/action/get-avg-kecamatan-by-komoditas', 'Action::get_avg_kecamatan_by_komoditas');
$routes->get('/action/get-transaksi-by-pasar', 'Action::get_transaksi_by_pasar');
$routes->get('/action/get-data-grafik-detail-komoditas/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)', 'Action::get_data_grafik_detail_komoditas');
$routes->get('/action/get-statistik-by-wilayah', 'Action::get_statistik_wilayah');
$routes->get('/action/get-statistik-by-komoditas', 'Action::get_statistik_komoditas');

//backend
$routes->get('/backend', 'Backend::index');
$routes->post('/backend/login', 'Backend::login');
$routes->get('/backend/dashboard_info', 'Backend::dashboard_info');
$routes->get('/backend/detail_user', 'Backend::detail_user');
//pasar
$routes->get('/backend/get_data_pasar', 'Backend::get_data_pasar');
$routes->post('/backend/add_pasar', 'Backend::add_pasar');
$routes->post('/backend/edit_pasar', 'Backend::edit_pasar');
$routes->get('/backend/get_detail_pasar', 'Backend::get_detail_pasar');
$routes->post('/backend/delete_pasar', 'Backend::delete_pasar');

//area
$routes->get('/backend/get_kecamatan', 'Backend::get_kecamatan');
$routes->get('/backend/get_kelurahan', 'Backend::get_kelurahan');

//grup komoditas
$routes->get('/backend/get_grup_komoditas', 'Backend::get_grup_komoditas');
$routes->post('/backend/add_grup_komoditas', 'Backend::add_grup_komoditas');
$routes->post('/backend/edit_grup_komoditas', 'Backend::edit_grup_komoditas');
$routes->post('/backend/delete_grup_komoditas', 'Backend::delete_grup_komoditas');

//komoditas
$routes->get('/backend/get_komoditas', 'Backend::get_komoditas');
$routes->post('/backend/add_komoditas', 'Backend::add_komoditas');
$routes->post('/backend/edit_komoditas', 'Backend::edit_komoditas');
$routes->post('/backend/delete_komoditas', 'Backend::delete_komoditas');

//user
$routes->get('/backend/get_user', 'Backend::get_user');
$routes->get('/backend/get_user_by_id', 'Backend::get_user_by_id');
$routes->get('/backend/get_user_role', 'Backend::get_user_role');
$routes->post('/backend/add_user', 'Backend::add_user');
$routes->post('/backend/edit_user', 'Backend::edit_user');
$routes->post('/backend/delete_user', 'Backend::delete_user');
$routes->post('/backend/reset_password', 'Backend::reset_password');

//pedagang
$routes->get('/backend/get_pedagang_pangan', 'Backend::get_pedagang_pangan');
$routes->post('/backend/add_pedagang', 'Backend::add_pedagang');
$routes->post('/backend/edit_pedagang', 'Backend::edit_pedagang');
$routes->post('/backend/delete_pedagang', 'Backend::delete_pedagang');

//jualan
$routes->get('/backend/get_jualan', 'Backend::get_jualan');
$routes->post('/backend/add_jualan', 'Backend::add_jualan');
$routes->post('/backend/delete_jualan', 'Backend::delete_jualan');

//transaksi
$routes->get('/backend/get_transaksi', 'Backend::get_transaksi');
$routes->get('/backend/get_transaksi_by_id', 'Backend::get_transaksi_by_id');
$routes->post('/backend/add_transaksi_pangan', 'Backend::add_transaksi_pangan');
$routes->post('/backend/edit_transaksi_pangan', 'Backend::edit_transaksi_pangan');
$routes->post('/backend/delete_transaksi', 'Backend::delete_transaksi');
$routes->post('/backend/edit_harga_pangan', 'Backend::edit_harga_pangan');
$routes->get('/backend/get_jualan_pedagang_harian', 'Backend::get_jualan_pedagang_harian');

//harga komoditas
$routes->get('/backend/get_harga_komoditas_harian', 'Backend::get_harga_komoditas_harian');
$routes->post('/backend/edit_harga_komoditas', 'Backend::edit_harga_komoditas');

//barang penting
$routes->get('/backend/get_barang_penting', 'Backend::get_barang_penting');
$routes->post('/backend/add_barang_penting', 'Backend::add_barang_penting');
$routes->post('/backend/edit_barang_penting', 'Backend::edit_barang_penting');
$routes->post('/backend/delete_barang_penting', 'Backend::delete_barang_penting');

//distributor barang penting
$routes->get('/backend/get_distributor_barang_penting', 'Backend::get_distributor_barang_penting');
$routes->post('/backend/add_distributor_barang_penting', 'Backend::add_distributor_barang_penting');
$routes->post('/backend/edit_distributor_barang_penting', 'Backend::edit_distributor_barang_penting');
$routes->post('/backend/delete_distributor_barang_penting', 'Backend::delete_distributor_barang_penting');

//relasi distributor barang penting
$routes->get('/backend/get_relasi_distributor_barang_penting', 'Backend::get_relasi_distributor_barang_penting');
$routes->post('/backend/add_relasi_distributor_barang_penting', 'Backend::add_relasi_distributor_barang_penting');
$routes->post('/backend/delete_relasi_distributor_barang_penting', 'Backend::delete_relasi_distributor_barang_penting');

//transaksi barang penting
$routes->post('/backend/edit_harga_barang_penting', 'Backend::edit_harga_barang_penting');
$routes->get('/backend/get_harga_barang_penting_distributor_harian', 'Backend::get_harga_barang_penting_distributor_harian');
$routes->get('/backend/get_transaksi_barang_penting', 'Backend::get_transaksi_barang_penting');
$routes->get('/backend/get_transaksi_penting_by_id', 'Backend::get_transaksi_penting_by_id');
$routes->post('/backend/edit_transaksi_barang_penting', 'Backend::edit_transaksi_barang_penting');
$routes->post('/backend/delete_transaksi_barang_penting', 'Backend::delete_transaksi_barang_penting');
$routes->post('/backend/add_transaksi_barang_penting', 'Backend::add_transaksi_barang_penting');

//barang lainnya
$routes->get('/backend/get_barang_lainnya', 'Backend::get_barang_lainnya');
$routes->post('/backend/add_barang_lainnya', 'Backend::add_barang_lainnya');
$routes->post('/backend/edit_barang_lainnya', 'Backend::edit_barang_lainnya');
$routes->post('/backend/delete_barang_lainnya', 'Backend::delete_barang_lainnya');

//distributor barang lainnya
$routes->get('/backend/get_distributor_barang_lainnya', 'Backend::get_distributor_barang_lainnya');
$routes->post('/backend/add_distributor_barang_lainnya', 'Backend::add_distributor_barang_lainnya');
$routes->post('/backend/edit_distributor_barang_lainnya', 'Backend::edit_distributor_barang_lainnya');
$routes->post('/backend/delete_distributor_barang_lainnya', 'Backend::delete_distributor_barang_lainnya');

//relasi distributor barang lainnya
$routes->get('/backend/get_relasi_distributor_barang_lainnya', 'Backend::get_relasi_distributor_barang_lainnya');
$routes->post('/backend/add_relasi_distributor_barang_lainnya', 'Backend::add_relasi_distributor_barang_lainnya');
$routes->post('/backend/delete_relasi_distributor_barang_lainnya', 'Backend::delete_relasi_distributor_barang_lainnya');

//transaksi barang lainnya
$routes->post('/backend/edit_harga_barang_lainnya', 'Backend::edit_harga_barang_lainnya');
$routes->get('/backend/get_harga_barang_lainnya_distributor_harian', 'Backend::get_harga_barang_lainnya_distributor_harian');
$routes->get('/backend/get_transaksi_barang_lainnya', 'Backend::get_transaksi_barang_lainnya');
$routes->get('/backend/get_transaksi_lainnya_by_id', 'Backend::get_transaksi_lainnya_by_id');
$routes->post('/backend/edit_transaksi_barang_lainnya', 'Backend::edit_transaksi_barang_lainnya');
$routes->post('/backend/delete_transaksi_barang_lainnya', 'Backend::delete_transaksi_barang_lainnya');
$routes->post('/backend/add_transaksi_barang_lainnya', 'Backend::add_transaksi_barang_lainnya');

//komoditas stok
$routes->get('/backend/get_komoditas_stok', 'Backend::get_komoditas_stok');
$routes->post('/backend/add_komoditas_stok', 'Backend::add_komoditas_stok');
$routes->post('/backend/edit_komoditas_stok', 'Backend::edit_komoditas_stok');
$routes->post('/backend/delete_komoditas_stok', 'Backend::delete_komoditas_stok');

//distributor stok
$routes->get('/backend/get_distributor_stok', 'Backend::get_distributor_stok');
$routes->post('/backend/add_distributor_stok', 'Backend::add_distributor_stok');
$routes->post('/backend/edit_distributor_stok', 'Backend::edit_distributor_stok');
$routes->post('/backend/delete_distributor_stok', 'Backend::delete_distributor_stok');

//relasi distributor stok
$routes->get('/backend/get_relasi_distributor_stok', 'Backend::get_relasi_distributor_stok');
$routes->post('/backend/add_relasi_distributor_stok', 'Backend::add_relasi_distributor_stok');
$routes->post('/backend/delete_relasi_distributor_stok', 'Backend::delete_relasi_distributor_stok');

//transaksi barang lainnya
$routes->post('/backend/edit_stok', 'Backend::edit_stok');
$routes->get('/backend/get_stok_distributor_harian', 'Backend::get_stok_distributor_harian');
$routes->get('/backend/get_transaksi_stok', 'Backend::get_transaksi_stok');
$routes->get('/backend/get_transaksi_stok_by_id', 'Backend::get_transaksi_stok_by_id');
$routes->post('/backend/edit_transaksi_stok', 'Backend::edit_transaksi_stok');
$routes->post('/backend/delete_transaksi_stok', 'Backend::delete_transaksi_stok');
$routes->post('/backend/add_transaksi_stok', 'Backend::add_transaksi_stok');

//laporan
$routes->get('/backend/laporan', 'Backend::laporan');
$routes->get('/backend/unduh-laporan', 'Backend::unduh_laporan');
$routes->get('/backend/format-laporan', 'Backend::format_laporan');

//profil
$routes->post('/backend/perbarui-profil', 'Backend::perbarui_profil');
$routes->post('/backend/perbarui_pass', 'Backend::perbarui_password');

//statistik
$routes->get('/backend/get-statistik', 'Backend::get_statistik');
$routes->get('/backend/detail-statistik', 'Backend::detail_statistik');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
