-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2023 pada 14.53
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_area`
--

CREATE TABLE `tb_area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `artikel_id` varchar(255) NOT NULL,
  `artikel_judul` varchar(255) NOT NULL,
  `artikel_konten` text NOT NULL,
  `artikel_url` varchar(255) NOT NULL,
  `artikel_akses` varchar(100) NOT NULL,
  `artikel_kategori` varchar(10) NOT NULL,
  `artikel_gambar` varchar(255) NOT NULL,
  `artikel_status` varchar(5) NOT NULL,
  `artikel_img_kode` varchar(20) DEFAULT NULL,
  `artikel_create_by` varchar(100) NOT NULL,
  `artikel_create_time` datetime NOT NULL,
  `artikel_update_by` varchar(100) DEFAULT NULL,
  `artikel_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`artikel_id`, `artikel_judul`, `artikel_konten`, `artikel_url`, `artikel_akses`, `artikel_kategori`, `artikel_gambar`, `artikel_status`, `artikel_img_kode`, `artikel_create_by`, `artikel_create_time`, `artikel_update_by`, `artikel_update_time`) VALUES
('23892370-EA79-4290-938C-9675A69EC8EC', 'Tinjau pasar murah, Bupati Inhil harapkan tepat sasaran', '&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;Tembilahan (ANTARA) - Bupati Indragiri Hilir, Muhammad Wardan meninjau pelaksanaan pasar murah yang diselenggarakan oleh Pemerintah Daerah melalui Disperindag Inhil. Senin (19/9). Ia berharap pelaksanaan pasar tepat sasaran hingga membantu masyarakat memenuhi kebutuhan pokok.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;&ldquo;Semoga kegiatan ini dapat dimanfaatkan masyarakat serta meminta kepada pihak penyelenggara agar dapat selektif dalam pelaksanaannya&rdquo;, ucap Bupati di sela kunjungannya.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;Pada kesempatan tersebut, tampak Bupati langsung meninjau sekaligus mengecek kualitas barang serta harga yang tentunya di bawah harga pasaran.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;\"Alhamdulillah barang yang dijual di sini tentunya berkualitas bagus dan pastinya lebih murah, tujuan pelaksanaan demi membantu masyarakat dalam memenuhi kebutuhan pokok dapur di saat harga di pasaran yang sedang tinggi,\" ujar Bupati&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;Pasar murah yang diadakan di halaman kantor Disperindag Inhil ini diselenggarakan selama tiga hari dengan tujuan untuk menjaga kestabilan harga sembako sekaligus membantu masyarakat terutama yang terdampak akibat dari kenaikan BBM bersubsidi beberapa waktu yang lalu.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;Di sela peninjauan, Bupati juga mempersilahkan kepada masyarakat yang terdampak untuk dapat memanfaatkan kegiatan pasar murah ini dalam memenuhi kebutuhan pokoknya sehari-hari.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;&ldquo;Apa yang dilakukan pada hari ini merupakan wujud kepedulian pemerintah daerah terhadap masyarakat dalam pemenuhan kebutuhan pokoknya terutama yang terdampak akibat dari kenaikan bahan bakar minyak beberapa waktu yang lalu&rdquo; tuturnya.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;\"Ayo berbelanja di operasi pasar murah yang telah di sediakan ini, saya tekan kan untuk masyarakat yang betul betul terdampak bukan untuk di jual lagi,\" tambahnya lagi.&lt;/span&gt;&lt;/p&gt;', 'tinjau-pasar-murah-bupati-inhil-harapkan-tepat-sasaran', 'Published', '8', 'files/artikel/23892370-EA79-4290-938C-9675A69EC8EC-bupati.png', '1', 'img-63304801', 'root', '2022-12-19 06:41:52', 'root', '2022-12-19 06:44:21'),
('32D618E4-3AD1-4F05-BA17-6B66C795EAA1', 'Jamin Ketersediaan Bahan Pokok, Disperindag Inhil Sidak 4 Kecamatan', '&lt;p class=\"ql-align-justify\"&gt;INHIL- Dinas Perdagangan dan Perindustrian (Disperindag) Kabupaten Indragiri Hilir (Inhil) Inspeksi Mendadak (Sidak) harga dan ketersediaan bahan pokok di empat kecamatan, Kamis (2/4/2020).&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Empat Kecamatan se- Inhil itu diantaranya Tempuling, Enok, Kempas dan Keritang.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Kepala Disdagtrin saat dikonfirmasi melalui Kabid Perdagangan,&amp;nbsp;Arispuddin mengatakan ketersediaan bahan pokok untuk saat ini masih dalam keadaan aman.&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;\"Setelah kami melakukan Sidak pasar dan toko di 4 kecamatan tersebut, stok dan distribusi bahan pokok masih dalam kondisi aman, tapi untuk saat ini terjadi kenaikan harga pada gula, dan stok dalam kondisi kurang,\" kata Arispuddin didampingi Kasi Stabilisasi dan Harga, Ifdiarman.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Untuk itu, ia mengimbau masyarakat agar tidak belanja berlebihan di tengah situasi isu Corona ini.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;\"Jadi, warga jangan panic buying (Panik, lalu berbelanja dengan stok tak terbatas_) dalam situasi isu virus corona ini. Normal-normal saja, kami pastikan sembako lancar dan aman,&rdquo; lanjutnya.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Menurutnya, pergi ke pasar untuk membeli bahan pokok merupakan kebutuhan yang sifatnya wajib. Namun, ia meminta agar warga tetap menjaga jarak dan tetap waspada.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Berikut laporan pantauan ketersediaan, stabilisasi harga Bahan Pokok dan Barang Penting (Bapokting) per 2 April 2020;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;- Kecamatan Tempuling (Pasar Sungai Salak )&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Beras: 12.000,&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Gula: 19.000,&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Minyak Goreng: 12.000,&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Telur: 42.000 per papan,&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Cabe merah: 40.000,&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Bawang putih: 50.000,&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Cabe Rawit: 40.000,&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Bawang Merah: 35.000,&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Tomat: 10.000.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;- Kecamatan Enok (Desa Bagan jaya)&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Beras: 12.000,&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Minyak Goreng: 12.500,&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Gula :19.000,&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Telur 43.000 per papan.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;- Kecamatan Kempas, (Kel Harapan Tani)&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Beras: 11.500,&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Gula: 19.000,&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Minyak: 12.000.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;- Kecamatan Keritang (Kotabaru) Beras: 12.000,&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Gula: 18.000,&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Tepung: 9.000,&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Telur: 42.000 per papan,&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Minyak goreng: 13.000.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'jamin-ketersediaan-bahan-pokok-disperindag-inhil-sidak-4-kecamatan', 'Published', '8', 'files/artikel/32D618E4-3AD1-4F05-BA17-6B66C795EAA1-gambar2.jpg', '1', 'img-7463937', 'root', '2022-12-19 06:45:20', NULL, NULL),
('65A32F84-211B-4AEC-9585-5662F06D030A', 'Disperindag Inhil Batasi Penjualan Barang di Pasar Murah', '&lt;p&gt;Indragiri Hilir - Kepala Dinas Perindustrian Dan Perdagangan (Diperindag) Kabupaten Indragiri Hilir (Inhil) antisipasi terjadinya menjual belikan harga yang tidak sesuai harga saat operasi pasar (Pasar murah) yang dilaksanakan di jalan KH Hajar Dewantara Tembilahan, Rabu (21/9/22).&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Kepala Disperindag Inhil, Dhoan Dwi Anggara, S.STP, MH, menyampaikan, Pasar murah ini kami beruntungkan untuk masyarakat yang memang terlimbas dengan kondisi saat ini tentunya jika diperjualbelikan kembali sangat tidak akan terjadi bahkan dengan harga operasi pasar ini bisa membantu semua masyarakat.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;\"Intinya setelah dia beli apakah dia mau jual berbagi dengan tetangganya atau pengepul tidak mungkin terjadi&amp;nbsp;karena kita lakukan pembatasan dalam pembelian minyak goreng hanya boleh 5 kg telur satu papan beras 10 kg,\" ujar Kadis Disperindag Inhil Dhoan Dwi Anggara, S.STP, MH,.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Selain itu, pihaknya juga berharap ke depannya kegiatan pasar murah seperti ini akan terus berlanjut dan bisa membantu masyarakat dan pedagang lainnya.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;\"Sehingga kita berharap dengan adanya operasi pasar murah ini, dapat membantu meringankan beban biaya belanja yang harus dikeluarkan oleh masyarakat dengan harga normal seperti hari biasa, dan membantu pendapatan ekonomi penjual,\" tutur Kadis Disperindag Inhil Dhoan Dwi Anggara, S.STP, MH,.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Kendati demikian, Wakil Bupati Inhil H Syamsudin Uti yang menyempatkan waktu untuk melihat pasar murah yang dilaksanakan oleh Disperindag yang kerjasama Intansi lainnya mengatakan tujuan operasi pasar ini adalah meringankan beban masyarakat, melihat penekanan harga Karena sekarang ini banyak harga bervariasi.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;\"Dengan dilakukannya kegiatan ini mudah-mudahan kita ini bisa teratasi dan bisa dinikmati oleh masyarakat,\" katanya Wabup Inhil.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Terakhir, pasar murah ini kemungkinan kita akan lakukan setiap bulannya, tentunya kita adakan pertemuan dan rapat dari pihak pihak Terkait.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;\"Jika nantinya pasar ini terlaksana kembali, insyaallah kita akan lakukan 2 sampai 3 Bulan sekali, yang penting kita membantu masyarakat supaya prinsipnya itu jadi masyarakat tidak tertekan apalagi banyak isu-isu mengenai BBM naik,\" tutupnya.*&lt;/p&gt;', 'disperindag-inhil-batasi-penjualan-barang-di-pasar-murah', 'Published', '6', 'files/artikel/65A32F84-211B-4AEC-9585-5662F06D030A-1.jpeg', '1', 'img-39778139', 'root', '2022-11-21 10:25:41', 'root', '2022-12-19 01:46:01'),
('A5DC2F9D-2A9E-4B53-85AE-120D9BAE1AC0', 'Disperindag Inhil Siapkan Klinik Bagi Industri Kecil Menengah', '&lt;p&gt;Indragiri Hilir - Dinas Perindustrian dan Perdagangan (Disperindag) Kabupaten Indragiri Hilir (Inhil) menyiapkan bangunan yang diperuntukkan bagi Klinik Industri Kecil Menengah (IKM).&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Kepala Dinas Perdagangan dan Perindustrian Inhil, Dhoan Dwi Anggara saat diwawancarai wartawan mengatakan, tujuan dibentuknya klinik tersebut untuk memudahkan masyarakat mengurus persyaratan dokumen yang diperlukan bagi pelaku IKM.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;\"Klinik IKM mungkin kita realisasikan di anggaran perubahan ini, kita siapkan bangunan, sifatnya tu pelayanan fasilitas. Jadi kita fasilitasi IKM - IKM tersebut terhadap apa kendalanya, itu tujuan klinik itu di bentuk, bagian dari inovasi kita,\" ucapnya, Rabu (12/10/22).&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Mantan Camat Tembilahan Hulu itu menjelaskan, klinik IKM merupakan wadah bagi para pelaku IKM yang nantinya akan lebih mudah untuk mengurus segala keperluan seperti membuat merek, standarisasi produk, kemasan dan lain sebagainya.\'&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;\"Nanti akan kita fasilitasi, tapi kita berangsur-angsur tidak bisa serta-merta ketika klinik di bentuk, mungkin kita bantu fasilitasi desain kemasan, atau mungkin logonya kita bantu desain,\" katanya.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Kadis Perindustrian dan Perdagangan Kabupaten Inhil ini menyebut, untuk mempermudah masyarakat mengurus persyaratan-persyaratan yang diperlukan untuk IKM, pihaknya telah melakukan Memorandum of Understanding (MoU) dengan beberapa instansi -instansi terkait.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;\"Terus juga masalah P-IRT (Pangan Industri Rumah Tangga) kita akan bantu fasilitasi makanya kami beberapa tahun ini dalam penyiapan klinik IKM, kami sudah ber MoU dengan beberapa instansi terkait, terutama Balai Standardisasi dan Pelayanan Jasa Industri (BSPJI) Pekanbaru, yang ke 2 kita juga sudah MoU dengan Kemenkumham untuk fasilitasi pendaftar merek dagang, hak kekayaan intelektual, dan sebagainya,\" ungkapnya.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Terakhir, ia berharap dengan adanya klinik IKM ini nanti, bisa memudahkan masyarakat pelaku IKM, dan masyarakat diharapkan memproduksi produk-produknya sesuai dengan kebutuhan pasar.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;\"Kadang kan kendala IKM ini dia mau berurusan tapi tidak tau kemana mengurusnya, kita fasilitasi disini sehingga masyarakat kira-kira nya dia butuh ini apa kita bisa fasilitasi, kalau untuk mendaftarkan mereknya cukup lewat Dinas di klinik IKM, Dinas yang akan membantu fasilitasi pengiriman berkas ke Pekanbaru dan lain sebagainya.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Harapannya juga kepada masyarakat pelaku IKM ini bagaimana mereka menciptakan produk-produk yang memang diinginkan pasar,\" pungkasnya.&lt;/p&gt;', 'disperindag-inhil-siapkan-klinik-bagi-industri-kecil-menengah', 'Published', '6', 'files/artikel/A5DC2F9D-2A9E-4B53-85AE-120D9BAE1AC0-2.jpeg', '1', 'img-90744300', 'root', '2022-12-19 01:42:50', NULL, NULL),
('EF5024A3-C53A-4975-8E85-A0ECC445A82A', 'Disperindag Inhil bangga Riau juara satu pemantauan harga bahan pokok', '&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;Indragiri Hilir (ANTARA) - Dinas Perindustrian dan Perdagangan (Disperindag) Inhil ikut andil dalam suksesnya Dinas Dinas Perdagangan Koperasi Usaha Kecil dan Menengah (Disdagkop UKM) Riau dalam meraih juara 1 pemantauan harga bahan pokok terbaik se Indonesia tahun 2019.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;\"Keberhasilan tersebut selain Kota Tembilahan, turut serta juga Kota Pekanbaru dan Dumai. Tiga ini menjadi sampel Provinsi Riau untuk pemantauan harga bahan pokok,\" sebut Kepala Disperindag Inhil, melalui Kabid Perdagangan, Arispuddindi Tembilahan, Senin.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;Keberhasilan Disdagkop UKM Riau tersebut disampaikan langsung oleh Kementerian Perdagangan RI disampaikan oleh Direktur Barang Kebutuhan Pokok dan Barang Penting di Yogyakarta, saat Pelatihan Kontributor Harga dan Stok Pasokan. Jumat (14/2).&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;\"Kami tentu sangat merasa bangga atas keberhasilan tersebut. Sebab, menjadi yang nomor satu dari 34 Provinsi di Indonesia bukan hal yang mudah,\" ujar Arispuddin.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;Arispuddin berkomitmen akan terus melakukan pemantauan harga bahan pokok di Inhil untuk dilaporkan nantinya kepada Bupati Inhil, HM Wardan.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;Pemantauan harga pokok tersebut akan dilakukan setiap hari mulai dimulai dari pukul 09.00 WIB.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"color: rgb(85, 85, 85);\"&gt;\"Pemantauan harga bahan pokok ini nantinya akan kami lakukan setiap hari, terkecuali hari Sabtu dan Minggu,\" tukasnya&lt;/span&gt;&lt;/p&gt;', 'disperindag-inhil-bangga-riau-juara-satu-pemantauan-harga-bahan-pokok', 'Published', '6', 'files/artikel/EF5024A3-C53A-4975-8E85-A0ECC445A82A-artikel3.png', '1', 'img-22857007', 'root', '2022-12-19 06:46:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang_lainnya`
--

CREATE TABLE `tb_barang_lainnya` (
  `barang_id` int(11) NOT NULL,
  `barang_grup` varchar(20) NOT NULL,
  `barang_nama` varchar(100) NOT NULL,
  `barang_satuan` varchar(100) NOT NULL,
  `barang_het` int(11) NOT NULL,
  `barang_foto` varchar(255) NOT NULL,
  `barang_status` varchar(5) NOT NULL,
  `barang_create_by` varchar(100) NOT NULL,
  `barang_create_time` datetime NOT NULL,
  `barang_update_by` varchar(100) DEFAULT NULL,
  `barang_update_time` datetime DEFAULT NULL,
  `barang_het_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang_lainnya`
--

INSERT INTO `tb_barang_lainnya` (`barang_id`, `barang_grup`, `barang_nama`, `barang_satuan`, `barang_het`, `barang_foto`, `barang_status`, `barang_create_by`, `barang_create_time`, `barang_update_by`, `barang_update_time`, `barang_het_update_time`) VALUES
(1, '11', 'Kelapa', 'Butir', 4000, 'files/komoditas/Kelapa-6720221215153849.jpeg', '1', 'root', '2022-12-15 15:38:49', 'root', '2022-12-15 16:11:07', '2022-12-15 15:38:49'),
(2, '11', 'Sawit', '1 kg', 2100, 'files/komoditas/Sawit-8520221215154046.jpeg', '1', 'root', '2022-12-15 15:40:46', 'root', '2022-12-15 16:10:59', '2022-12-15 15:40:46'),
(3, '11', 'Pinang Kering', '1 kg', 8000, 'files/komoditas/Pinang Kering-3320221217155348.jpg', '1', 'root', '2022-12-17 15:53:48', NULL, NULL, '2022-12-17 15:53:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang_penting`
--

CREATE TABLE `tb_barang_penting` (
  `barang_id` int(11) NOT NULL,
  `barang_grup` varchar(20) NOT NULL,
  `barang_nama` varchar(100) NOT NULL,
  `barang_satuan` varchar(100) NOT NULL,
  `barang_het` int(11) NOT NULL,
  `barang_foto` varchar(255) NOT NULL,
  `barang_status` varchar(5) NOT NULL,
  `barang_create_by` varchar(100) NOT NULL,
  `barang_create_time` datetime NOT NULL,
  `barang_update_by` varchar(100) DEFAULT NULL,
  `barang_update_time` datetime DEFAULT NULL,
  `barang_het_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang_penting`
--

INSERT INTO `tb_barang_penting` (`barang_id`, `barang_grup`, `barang_nama`, `barang_satuan`, `barang_het`, `barang_foto`, `barang_status`, `barang_create_by`, `barang_create_time`, `barang_update_by`, `barang_update_time`, `barang_het_update_time`) VALUES
(2, '14', 'Semen Holcim 30 Kg', 'kg', 2100, 'files/komoditas/Semen Holcim 30 Kg-5220221213121613.jpg', '1', 'root', '2022-12-13 11:53:20', 'root', '2022-12-15 16:09:45', '2022-12-15 16:08:38'),
(3, '12', 'Semen Tiga Roda 50 Kg', '50 Kg', 85000, 'files/komoditas/Semen Tiga Roda 50 Kg-520221213143605.jpeg', '1', 'root', '2022-12-13 14:36:05', 'root', '2022-12-13 15:01:46', '2022-12-13 14:36:05'),
(4, '13', 'Pupuk KCL ', '1 Kg', 18000, 'files/komoditas/Pupuk KCL -9720221213145303.jpeg', '1', 'root', '2022-12-13 14:53:03', 'root', '2022-12-13 15:03:46', '2022-12-13 14:53:03'),
(5, '12', 'Paku 2 Inc', '1 kg', 20000, 'files/komoditas/Paku 2 Inc-1120221217154847.jpg', '1', 'root', '2022-12-17 15:48:47', NULL, NULL, '2022-12-17 15:48:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_distributor_barang_lainnya`
--

CREATE TABLE `tb_distributor_barang_lainnya` (
  `distributor_id` int(11) NOT NULL,
  `distributor_nama` varchar(100) NOT NULL,
  `distributor_status` varchar(5) NOT NULL,
  `distributor_create_by` varchar(100) NOT NULL,
  `distributor_create_time` datetime NOT NULL,
  `distributor_update_by` varchar(100) DEFAULT NULL,
  `distributor_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_distributor_barang_lainnya`
--

INSERT INTO `tb_distributor_barang_lainnya` (`distributor_id`, `distributor_nama`, `distributor_status`, `distributor_create_by`, `distributor_create_time`, `distributor_update_by`, `distributor_update_time`) VALUES
(1, 'Mulia Jaya', '1', 'root', '2022-12-15 16:25:21', 'root', '2022-12-15 16:28:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_distributor_barang_penting`
--

CREATE TABLE `tb_distributor_barang_penting` (
  `distributor_id` int(11) NOT NULL,
  `distributor_nama` varchar(100) NOT NULL,
  `distributor_status` varchar(5) NOT NULL,
  `distributor_create_by` varchar(100) NOT NULL,
  `distributor_create_time` datetime NOT NULL,
  `distributor_update_by` varchar(100) DEFAULT NULL,
  `distributor_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_distributor_barang_penting`
--

INSERT INTO `tb_distributor_barang_penting` (`distributor_id`, `distributor_nama`, `distributor_status`, `distributor_create_by`, `distributor_create_time`, `distributor_update_by`, `distributor_update_time`) VALUES
(1, 'CV Sinar Utama', '1', 'root', '2022-12-13 13:46:23', 'root', '2022-12-14 10:40:31'),
(2, 'Toko ACC', '1', 'root', '2022-12-13 16:40:59', NULL, NULL),
(3, 'Bangsal Yulius', '1', 'root', '2022-12-13 16:41:09', 'root', '2022-12-14 09:43:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_distributor_stok`
--

CREATE TABLE `tb_distributor_stok` (
  `distributor_id` int(11) NOT NULL,
  `distributor_nama` varchar(100) NOT NULL,
  `distributor_toko` varchar(100) NOT NULL,
  `distributor_alamat` varchar(255) NOT NULL,
  `distributor_kontak` varchar(100) NOT NULL,
  `distributor_status` varchar(5) NOT NULL,
  `distributor_create_by` varchar(100) NOT NULL,
  `distributor_create_time` datetime NOT NULL,
  `distributor_update_by` varchar(100) DEFAULT NULL,
  `distributor_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_distributor_stok`
--

INSERT INTO `tb_distributor_stok` (`distributor_id`, `distributor_nama`, `distributor_toko`, `distributor_alamat`, `distributor_kontak`, `distributor_status`, `distributor_create_by`, `distributor_create_time`, `distributor_update_by`, `distributor_update_time`) VALUES
(1, 'Bulog', '', 'jl. pendidikan', '081272927000', '1', 'root', '2022-12-16 14:54:47', 'root', '2022-12-17 16:44:52'),
(2, 'Hadi', 'Toko Hadi', 'Lr  Kampung Melayu', '081268800838', '1', 'root', '2022-12-17 16:44:08', NULL, NULL),
(3, 'Liping', 'Bintang Utama', 'JL.Kartini', '085282048585', '1', 'root', '2022-12-17 16:44:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_grup_komoditas`
--

CREATE TABLE `tb_grup_komoditas` (
  `grup_komoditas_id` int(11) NOT NULL,
  `grup_komoditas_tipe` varchar(100) NOT NULL,
  `grup_komoditas_nama` varchar(255) NOT NULL,
  `grup_komoditas_status` varchar(5) NOT NULL,
  `grup_komoditas_create_by` varchar(100) NOT NULL,
  `grup_komoditas_create_time` datetime NOT NULL,
  `grup_komoditas_update_by` varchar(100) DEFAULT NULL,
  `grup_komoditas_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_grup_komoditas`
--

INSERT INTO `tb_grup_komoditas` (`grup_komoditas_id`, `grup_komoditas_tipe`, `grup_komoditas_nama`, `grup_komoditas_status`, `grup_komoditas_create_by`, `grup_komoditas_create_time`, `grup_komoditas_update_by`, `grup_komoditas_update_time`) VALUES
(1, 'Barang Pangan', 'Beras', '1', 'root', '2022-10-05 09:28:53', NULL, NULL),
(2, 'Barang Pangan', 'Sayur', '1', 'root', '2022-10-05 09:28:53', 'root', '2022-11-21 13:45:11'),
(3, 'Barang Pangan', 'Bumbu', '1', 'root', '2022-10-05 15:51:10', NULL, NULL),
(4, 'Barang Pangan', 'Ikan', '1', 'root', '2022-10-05 15:51:49', NULL, NULL),
(5, 'Barang Pangan', 'Daging', '1', 'root', '2022-10-05 15:55:50', NULL, NULL),
(6, 'Barang Pangan', 'Susu', '0', 'root', '2022-10-05 15:55:57', 'root', '2022-10-06 09:18:06'),
(7, 'Barang Pangan', 'Minyak', '1', 'root', '2022-10-05 15:56:10', NULL, NULL),
(11, 'Barang Penting Lainnya', 'Pertanian', '1', 'root', '2022-11-21 13:12:33', NULL, NULL),
(12, 'Barang Penting', 'Bahan Bangunan', '1', 'root', '2022-12-13 10:34:15', NULL, NULL),
(13, 'Barang Penting', 'Bahan Pertanian', '1', 'root', '2022-12-13 10:34:55', NULL, NULL),
(14, 'Barang Penting', 'Komoditas Perkebunan', '1', 'root', '2022-12-13 10:35:05', NULL, NULL),
(15, 'Barang Pangan', 'tes', '0', 'root', '2022-12-13 14:39:47', 'root', '2022-12-13 14:46:13'),
(16, 'Bahan Pangan', 'he', '1', 'root', '2022-12-13 14:42:20', NULL, NULL),
(17, 'Barang Pangan', 'gaddd', '0', 'root', '2022-12-13 14:45:52', 'root', '2022-12-13 14:46:10'),
(18, 'Stok', 'Bahan Pokok', '1', 'root', '2022-12-16 11:22:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_img_artikel`
--

CREATE TABLE `tb_img_artikel` (
  `img_id` int(11) NOT NULL,
  `img_artikel` varchar(255) NOT NULL,
  `img_nama` varchar(255) NOT NULL,
  `img_action_in` varchar(20) NOT NULL,
  `img_token_edit` varchar(50) DEFAULT NULL,
  `img_status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_img_artikel`
--

INSERT INTO `tb_img_artikel` (`img_id`, `img_artikel`, `img_nama`, `img_action_in`, `img_token_edit`, `img_status`) VALUES
(18, '224B36FE-AACB-409B-AFE6-CB76C28D5F47', 'files/artikel/img-76747260-gtx.jpg', 'add', NULL, '1'),
(19, '224B36FE-AACB-409B-AFE6-CB76C28D5F47', 'files/artikel/img-76747260-ice-cream-vector-4666465.jpg', 'add', NULL, '0'),
(21, '224B36FE-AACB-409B-AFE6-CB76C28D5F47', 'files/artikel/img-76747260-912044.jpg', 'edit', 'GcgGFpggXTcYVKqUFxQCZGJRFKHDvH', '1'),
(22, '90B85C6E-CBCC-40C6-AFB6-60A55F91FE76', 'files/artikel/img-38618406-343544b66258d4f010b482c4b6046e71.png', 'add', NULL, '1'),
(23, '584251B2-D87D-437F-A698-BB982638AF65', 'files/artikel/img-31953712-ssl1.JPG', 'add', NULL, '1'),
(24, '584251B2-D87D-437F-A698-BB982638AF65', 'files/artikel/img-31953712-swee.jpg', 'add', NULL, '1'),
(25, '18F98E71-B6DA-4F67-99F0-6F1CDCAF8A49', 'files/artikel/img-41435737-67437691381-inhil.jpg', 'add', NULL, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jualan`
--

CREATE TABLE `tb_jualan` (
  `jualan_id` int(11) NOT NULL,
  `jualan_pedagang` varchar(20) NOT NULL,
  `jualan_komoditas` varchar(20) NOT NULL,
  `jualan_status` varchar(50) NOT NULL,
  `jualan_create_by` varchar(100) NOT NULL,
  `jualan_create_time` datetime NOT NULL,
  `jualan_update_by` varchar(100) DEFAULT NULL,
  `jualan_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jualan`
--

INSERT INTO `tb_jualan` (`jualan_id`, `jualan_pedagang`, `jualan_komoditas`, `jualan_status`, `jualan_create_by`, `jualan_create_time`, `jualan_update_by`, `jualan_update_time`) VALUES
(13, '11', '54', '1', 'root', '2022-11-25 10:16:35', NULL, NULL),
(14, '11', '52', '1', 'root', '2022-11-25 10:16:48', NULL, NULL),
(15, '11', '4', '1', 'root', '2022-11-25 10:16:58', NULL, NULL),
(16, '11', '3', '1', 'root', '2022-11-25 10:17:07', NULL, NULL),
(17, '10', '1', '1', 'root', '2022-11-25 10:22:47', NULL, NULL),
(18, '10', '55', '1', 'root', '2022-11-25 10:23:00', NULL, NULL),
(19, '10', '6', '1', 'root', '2022-11-25 10:23:12', NULL, NULL),
(20, '10', '5', '1', 'root', '2022-11-25 10:23:20', NULL, NULL),
(21, '9', '55', '1', 'root', '2022-11-25 10:23:39', NULL, NULL),
(22, '9', '1', '1', 'root', '2022-11-25 10:23:44', NULL, NULL),
(23, '9', '5', '1', 'root', '2022-11-25 10:23:54', NULL, NULL),
(24, '9', '6', '1', 'root', '2022-11-25 10:24:04', NULL, NULL),
(25, '8', '52', '1', 'root', '2022-11-25 10:24:17', NULL, NULL),
(26, '8', '11', '1', 'root', '2022-11-25 10:24:25', NULL, NULL),
(27, '8', '10', '1', 'root', '2022-11-25 10:24:35', NULL, NULL),
(28, '8', '9', '1', 'root', '2022-11-25 10:24:40', NULL, NULL),
(29, '8', '4', '1', 'root', '2022-11-25 10:24:51', NULL, NULL),
(30, '6', '54', '1', 'root', '2022-11-25 10:25:06', NULL, NULL),
(31, '6', '10', '1', 'root', '2022-11-25 10:25:32', NULL, NULL),
(32, '6', '9', '1', 'root', '2022-11-25 10:25:44', NULL, NULL),
(33, '6', '8', '1', 'root', '2022-11-25 10:25:53', NULL, NULL),
(34, '6', '7', '1', 'root', '2022-11-25 10:25:58', NULL, NULL),
(35, '6', '3', '1', 'root', '2022-11-25 10:26:07', NULL, NULL),
(36, '4', '55', '1', 'root', '2022-11-25 10:26:20', NULL, NULL),
(37, '4', '1', '1', 'root', '2022-11-25 10:26:25', NULL, NULL),
(38, '4', '6', '1', 'root', '2022-11-25 10:26:30', NULL, NULL),
(39, '4', '5', '1', 'root', '2022-11-25 10:26:36', NULL, NULL),
(40, '5', '54', '1', 'root', '2022-11-25 10:26:50', NULL, NULL),
(41, '5', '11', '1', 'root', '2022-11-25 10:26:59', NULL, NULL),
(42, '5', '10', '1', 'root', '2022-11-25 10:27:17', NULL, NULL),
(43, '5', '9', '1', 'root', '2022-11-25 10:27:38', NULL, NULL),
(44, '5', '8', '1', 'root', '2022-11-25 10:27:46', NULL, NULL),
(45, '5', '7', '1', 'root', '2022-11-25 10:27:52', NULL, NULL),
(46, '5', '4', '1', 'root', '2022-11-25 10:28:08', NULL, NULL),
(47, '5', '3', '1', 'root', '2022-11-25 10:28:13', NULL, NULL),
(48, '14', '55', '1', 'root', '2022-11-28 13:51:25', NULL, NULL),
(49, '13', '55', '1', 'root', '2022-11-28 13:51:38', NULL, NULL),
(50, '12', '55', '1', 'root', '2022-11-28 13:51:47', NULL, NULL),
(51, '14', '1', '1', 'root', '2022-11-28 13:54:04', NULL, NULL),
(52, '13', '1', '1', 'root', '2022-11-28 13:54:20', NULL, NULL),
(54, '11', '8', '0', 'pasarpusat', '2023-01-05 16:30:53', 'pasarpusat', '2023-01-05 16:30:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_artikel`
--

CREATE TABLE `tb_kategori_artikel` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(100) NOT NULL,
  `kategori_status` varchar(5) NOT NULL,
  `kategori_create_by` varchar(100) NOT NULL,
  `kategori_create_time` datetime NOT NULL,
  `kategori_update_by` varchar(100) NOT NULL,
  `kategori_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori_artikel`
--

INSERT INTO `tb_kategori_artikel` (`kategori_id`, `kategori_nama`, `kategori_status`, `kategori_create_by`, `kategori_create_time`, `kategori_update_by`, `kategori_update_time`) VALUES
(1, 'Teknologi', '0', 'root', '2022-09-25 17:28:19', 'root', '2022-11-21 10:17:04'),
(6, 'Ekonomi', '1', 'root', '2022-11-21 10:17:10', '', NULL),
(7, 'Kerja sama', '1', 'root', '2022-11-21 10:18:08', '', NULL),
(8, 'Kegiatan', '1', 'root', '2022-12-19 06:36:56', '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komoditas`
--

CREATE TABLE `tb_komoditas` (
  `komoditas_id` int(11) NOT NULL,
  `komoditas_nama` varchar(255) NOT NULL,
  `komoditas_grup` varchar(100) NOT NULL,
  `komoditas_satuan` varchar(100) NOT NULL,
  `komoditas_het` int(11) NOT NULL,
  `komoditas_foto` varchar(255) NOT NULL,
  `komoditas_status` varchar(5) NOT NULL,
  `komoditas_create_by` varchar(100) NOT NULL,
  `komoditas_create_time` datetime NOT NULL,
  `komoditas_update_by` varchar(100) DEFAULT NULL,
  `komoditas_update_time` datetime DEFAULT NULL,
  `komoditas_het_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_komoditas`
--

INSERT INTO `tb_komoditas` (`komoditas_id`, `komoditas_nama`, `komoditas_grup`, `komoditas_satuan`, `komoditas_het`, `komoditas_foto`, `komoditas_status`, `komoditas_create_by`, `komoditas_create_time`, `komoditas_update_by`, `komoditas_update_time`, `komoditas_het_update_time`) VALUES
(1, 'Beras Bulog', '1', '1 kg', 12000, 'files/komoditas/img-20221011125436images (18).jpeg', '1', 'root', '2022-10-06 04:30:54', 'root', '2022-11-18 16:29:33', NULL),
(3, 'Daging Sapi', '5', '1 kg', 120000, 'files/komoditas/img-20221009102223images (12).jpeg', '1', 'root', '2022-10-06 10:48:46', 'root', '2022-11-25 14:48:25', NULL),
(4, 'Ikan Selais', '4', 'kg', 115000, 'files/komoditas/img-20221006164620download (1).jpeg', '1', 'root', '2022-10-06 10:50:04', 'root', '2022-11-25 14:48:14', NULL),
(5, 'Lada merah', '3', 'kg', 20000, 'files/komoditas/img-20221010103940download (2).jpeg', '1', 'root', '2022-10-06 11:04:05', 'root', '2022-11-18 16:37:23', NULL),
(6, 'Minyak Goreng ', '7', '1 liter', 22000, 'files/komoditas/img-20221006164536images (11).jpeg', '1', 'root', '2022-10-06 15:05:06', 'root', '2022-11-25 14:48:45', NULL),
(7, 'kangkung', '2', 'ikat', 2500, 'files/komoditas/img-20221010103818images (16).jpeg', '1', 'root', '2022-10-10 10:36:19', 'root', '2022-11-28 06:37:05', NULL),
(8, 'Bayam', '2', 'ikat', 2500, 'files/komoditas/img-20221010103752images (17).jpeg', '1', 'root', '2022-10-10 10:37:52', 'root', '2022-11-28 06:36:55', NULL),
(9, 'Ayam Potong', '5', 'kg', 21000, 'files/komoditas/img-20221010104729images (15).jpeg', '1', 'root', '2022-10-10 10:47:29', 'root', '2022-11-25 14:50:00', NULL),
(10, 'Ayam Kampung', '5', 'kg', 61000, 'files/komoditas/img-20221010104748images (15).jpeg', '1', 'root', '2022-10-10 10:47:48', 'root', '2022-11-25 14:50:15', NULL),
(11, 'Jahe', '3', '1 kg', 15000, 'files/komoditas/img-20221010104808images (14).jpeg', '1', 'root', '2022-10-10 10:48:08', 'root', '2022-11-25 14:49:34', NULL),
(50, 'Ulat Melati', '5', 'ekor', 0, 'files/komoditas/img-2022101012492620221008_080051.jpg', '0', 'root', '2022-10-10 12:49:26', 'root', '2022-11-25 10:07:51', NULL),
(52, 'Lele Akar (Lembat)', '4', 'kg', 30000, 'files/komoditas/img-20221012120710images (19).jpeg', '1', 'root', '2022-10-12 12:07:10', 'root', '2022-11-25 14:49:42', NULL),
(53, 'Adrian', '5', 'org', 0, 'files/komoditas/img-2022101213163620221012_122833.jpg', '0', 'root', '2022-10-12 13:16:36', 'root', '2022-10-17 15:57:17', NULL),
(54, 'daging kerbau', '5', 'kg', 140000, 'files/komoditas/daging kerbau-8320221012134018.jpeg', '1', 'root', '2022-10-12 13:40:18', 'root', '2022-11-25 14:49:14', NULL),
(55, 'Beras Cap Kayu Manis', '1', '1 kg', 13300, 'files/komoditas/Beras IR46-8920221012195526.jpeg', '1', 'root', '2022-10-12 19:55:26', 'root', '2022-11-28 13:55:56', NULL),
(56, 'kik', '7', 'kg', 0, 'files/komoditas/kik-4120221112212917.png', '0', 'root', '2022-11-12 21:29:17', 'root', '2022-11-25 09:19:23', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komoditas_stok`
--

CREATE TABLE `tb_komoditas_stok` (
  `komoditas_id` int(11) NOT NULL,
  `komoditas_grup` varchar(20) NOT NULL,
  `komoditas_nama` varchar(255) NOT NULL,
  `komoditas_satuan` varchar(50) NOT NULL,
  `komoditas_status` varchar(5) NOT NULL,
  `komoditas_foto` varchar(255) NOT NULL,
  `komoditas_create_by` varchar(100) NOT NULL,
  `komoditas_create_time` datetime NOT NULL,
  `komoditas_update_by` varchar(100) DEFAULT NULL,
  `komoditas_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_komoditas_stok`
--

INSERT INTO `tb_komoditas_stok` (`komoditas_id`, `komoditas_grup`, `komoditas_nama`, `komoditas_satuan`, `komoditas_status`, `komoditas_foto`, `komoditas_create_by`, `komoditas_create_time`, `komoditas_update_by`, `komoditas_update_time`) VALUES
(2, '18', 'Beras', 'Ton', '1', 'files/komoditas/img-20221217164233images (8).jpeg', 'root', '2022-12-16 14:17:20', 'root', '2022-12-17 16:42:33'),
(3, '18', 'Gula Pasir', 'Ton', '1', 'files/komoditas/Gula Pasir-9820221216141821.jpeg', 'root', '2022-12-16 14:18:21', NULL, NULL),
(4, '18', 'Tepung', 'Ton', '1', 'files/komoditas/Tepung-6020221217164248.jpeg', 'root', '2022-12-17 16:42:48', NULL, NULL),
(5, '18', 'Minyak Goreng', 'Liter', '1', 'files/komoditas/Minyak Goreng-9120221217164305.jpeg', 'root', '2022-12-17 16:43:05', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_log`
--

CREATE TABLE `tb_log` (
  `log_id` int(11) NOT NULL,
  `log_user` varchar(100) NOT NULL,
  `log_time` datetime NOT NULL,
  `log_activity` text NOT NULL,
  `log_modul` varchar(100) NOT NULL,
  `log_type` text NOT NULL,
  `log_ip` varchar(30) NOT NULL,
  `log_so` varchar(100) NOT NULL,
  `log_browser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_log`
--

INSERT INTO `tb_log` (`log_id`, `log_user`, `log_time`, `log_activity`, `log_modul`, `log_type`, `log_ip`, `log_so`, `log_browser`) VALUES
(709, 'root', '2022-10-04 12:01:41', '{\"pasar_id\":null,\"pasar_nama\":\"a\",\"pasar_alamat\":\"a\",\"pasar_longitude\":\"101.4418368\",\"pasar_latitude\":\"0.5066603\",\"pasar_create_by\":\"root\",\"pasar_status\":\"1\",\"pasar_create_time\":\"2022-10-04 12:01:41\"}', 'Data Pasar', 'Insert', '192.168.137.51', 'Unknown Platform', 'Aplikasi Android'),
(710, 'root', '2022-10-04 12:03:37', '{\"pasar_id\":null,\"pasar_nama\":\"w\",\"pasar_alamat\":\"g\",\"pasar_longitude\":\"101.4418368\",\"pasar_latitude\":\"0.5066603\",\"pasar_create_by\":\"root\",\"pasar_status\":\"1\",\"pasar_create_time\":\"2022-10-04 12:03:37\"}', 'Data Pasar', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(711, 'root', '2022-10-04 16:22:49', '{\"pasar_id\":\"12\",\"pasar_update_by\":\"root\",\"pasar_status\":\"0\",\"pasar_update_time\":\"2022-10-04 16:22:49\"}', 'Data Pasar', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(712, 'root', '2022-10-04 16:22:54', '{\"pasar_id\":\"11\",\"pasar_update_by\":\"root\",\"pasar_status\":\"0\",\"pasar_update_time\":\"2022-10-04 16:22:54\"}', 'Data Pasar', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(713, 'root', '2022-10-04 16:23:01', '{\"pasar_id\":\"10\",\"pasar_update_by\":\"root\",\"pasar_status\":\"0\",\"pasar_update_time\":\"2022-10-04 16:23:01\"}', 'Data Pasar', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(714, 'root', '2022-10-05 10:16:36', '{\"pasar_id\":null,\"pasar_nama\":\"Pasar Pusat Tembilahan\",\"pasar_alamat\":\"Jalan Sudirman Depan Pelabuhan\",\"pasar_kecamatan\":\"14.04.04\",\"pasar_kelurahan\":\"14.04.04.1001\",\"pasar_create_by\":\"root\",\"pasar_status\":\"1\",\"pasar_create_time\":\"2022-10-05 10:16:36\"}', 'Data Pasar', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(715, 'root', '2022-10-05 12:06:28', '{\"pasar_id\":\"13\",\"pasar_nama\":\"Pasar Pusat Tembilahan new\",\"pasar_alamat\":\"Jalan Sudirman Depan Pelabuhan\",\"pasar_kecamatan\":\"14.04.04\",\"pasar_kelurahan\":\"14.04.04.1001\",\"pasar_update_by\":\"root\",\"pasar_status\":\"1\",\"pasar_update_time\":\"2022-10-05 12:06:28\"}', 'Data Pasar', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(716, 'root', '2022-10-05 12:07:14', '{\"pasar_id\":\"13\",\"pasar_nama\":\"Pasar Pusat Tembilahan n\",\"pasar_alamat\":\"Jalan Sudirman Depan Pelabuhan\",\"pasar_kecamatan\":\"14.04.04\",\"pasar_kelurahan\":\"14.04.04.1001\",\"pasar_update_by\":\"root\",\"pasar_status\":\"1\",\"pasar_update_time\":\"2022-10-05 12:07:14\"}', 'Data Pasar', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(717, 'root', '2022-10-05 12:11:28', '{\"pasar_id\":\"13\",\"pasar_nama\":\"Pasar Pusat Tembilahan new\",\"pasar_alamat\":\"Jalan Sudirman Depan Pelabuhan\",\"pasar_kecamatan\":\"14.04.04\",\"pasar_kelurahan\":\"14.04.04.1001\",\"pasar_update_by\":\"root\",\"pasar_status\":\"1\",\"pasar_update_time\":\"2022-10-05 12:11:28\"}', 'Data Pasar', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(718, 'root', '2022-10-05 12:11:37', '{\"pasar_id\":\"13\",\"pasar_nama\":\"Pasar Pusat Tembilahan new\",\"pasar_alamat\":\"Jalan Sudirman Depan Pelabuhan\",\"pasar_kecamatan\":\"14.04.07\",\"pasar_kelurahan\":\"14.04.07.2002\",\"pasar_update_by\":\"root\",\"pasar_status\":\"1\",\"pasar_update_time\":\"2022-10-05 12:11:37\"}', 'Data Pasar', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(719, 'root', '2022-10-05 13:46:16', '{\"pasar_id\":null,\"pasar_nama\":\"Pasar Anka Aseng\",\"pasar_alamat\":\"Jalan Manggis No.51A\",\"pasar_kecamatan\":\"14.04.05\",\"pasar_kelurahan\":\"14.04.05.2007\",\"pasar_create_by\":\"root\",\"pasar_status\":\"1\",\"pasar_create_time\":\"2022-10-05 13:46:16\"}', 'Data Pasar', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(720, 'root', '2022-10-05 15:51:10', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"Bumbu\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-10-05 15:51:10\"}', 'Grup Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(721, 'root', '2022-10-05 15:51:49', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"Ikan\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-10-05 15:51:49\"}', 'Grup Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(722, 'root', '2022-10-05 15:55:50', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"Daging\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-10-05 15:55:50\"}', 'Grup Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(723, 'root', '2022-10-05 15:55:57', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"Susu\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-10-05 15:55:57\"}', 'Grup Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(724, 'root', '2022-10-05 15:56:10', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"Minyak\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-10-05 15:56:10\"}', 'Grup Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(725, 'root', '2022-10-05 16:41:38', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"gas\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-10-05 16:41:38\"}', 'Grup Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(726, 'root', '2022-10-05 16:47:08', '{\"grup_komoditas_id\":\"8\",\"grup_komoditas_nama\":\"gasik\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_update_by\":\"root\",\"grup_komoditas_update_time\":\"2022-10-05 16:47:08\"}', 'Grup Komoditas', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(727, 'root', '2022-10-05 16:52:35', '{\"grup_komoditas_id\":\"8\",\"grup_komoditas_status\":\"0\",\"grup_komoditas_update_by\":\"root\",\"grup_komoditas_update_time\":\"2022-10-05 16:52:35\"}', 'Grup Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(728, 'root', '2022-10-06 09:18:06', '{\"grup_komoditas_id\":\"6\",\"grup_komoditas_status\":\"0\",\"grup_komoditas_update_by\":\"root\",\"grup_komoditas_update_time\":\"2022-10-06 09:18:06\"}', 'Grup Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(729, 'root', '2022-10-06 10:48:44', '{\"komoditas_id\":null,\"komoditas_grup\":\"7\",\"komoditas_nama\":\"Minyak Angin\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-06 10:48:44\"}', 'Komoditas', 'Insert', '::1', 'Android', 'Aplikasi Android'),
(730, 'root', '2022-10-06 10:48:46', '{\"komoditas_id\":null,\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Daging Sapi\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-06 10:48:46\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(731, 'root', '2022-10-06 10:50:04', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"Ikan Selais\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-06 10:50:04\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(732, 'root', '2022-10-06 11:04:05', '{\"komoditas_id\":null,\"komoditas_grup\":\"3\",\"komoditas_nama\":\"Lada merah\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-06 11:04:05\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(733, 'root', '2022-10-06 11:08:54', '{\"komoditas_id\":\"2\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-06 11:08:54\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(734, 'root', '2022-10-06 11:36:14', '{\"komoditas_id\":\"4\",\"komoditas_grup\":\"4\",\"komoditas_nama\":\"Ikan Selais new\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-06 11:36:14\"}', 'Komoditas', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(735, 'root', '2022-10-06 15:05:06', '{\"komoditas_id\":null,\"komoditas_grup\":\"5\",\"komoditas_nama\":\"gas\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-06 15:05:06\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221006150506images (9).jpeg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(736, 'root', '2022-10-06 16:24:21', '{\"komoditas_id\":\"6\",\"komoditas_grup\":\"7\",\"komoditas_nama\":\"gas new\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-06 16:24:21\"}', 'Komoditas', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(737, 'root', '2022-10-06 16:28:45', '{\"komoditas_id\":\"6\",\"komoditas_grup\":\"7\",\"komoditas_nama\":\"gas new\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-06 16:28:45\"}', 'Komoditas', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(738, 'root', '2022-10-06 16:29:09', '{\"komoditas_id\":\"6\",\"komoditas_grup\":\"7\",\"komoditas_nama\":\"gas new\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-06 16:29:09\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221006162909Snapchat-2043807028-removebg-preview.png\"}', 'Komoditas', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(739, 'root', '2022-10-06 16:31:07', '{\"komoditas_id\":\"6\",\"komoditas_grup\":\"7\",\"komoditas_nama\":\"Minyak Goreng \",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-06 16:31:07\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221006163107images (10).jpeg\"}', 'Komoditas', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(740, 'root', '2022-10-06 16:45:36', '{\"komoditas_id\":\"6\",\"komoditas_grup\":\"7\",\"komoditas_nama\":\"Minyak Goreng \",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-06 16:45:36\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221006164536images (11).jpeg\"}', 'Komoditas', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(741, 'root', '2022-10-06 16:46:20', '{\"komoditas_id\":\"4\",\"komoditas_grup\":\"4\",\"komoditas_nama\":\"Ikan Selais new\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-06 16:46:20\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221006164620download (1).jpeg\"}', 'Komoditas', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(742, 'root', '2022-10-07 16:55:59', 'login', 'Login', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(743, 'wati', '2022-10-09 09:10:35', '{\"user_id\":\"DB2ACD66-B618-47DA-8B47-BCCC8BD4CFA3\",\"user_username\":\"wati\",\"user_email\":\"wati@gmail.coma\",\"user_name\":\"Wati Yani \",\"user_status\":\"1\",\"user_role\":\"2\",\"user_update_by\":\"wati\",\"user_update_time\":\"2022-10-09 09:10:35\"}', 'User Management', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(744, 'root', '2022-10-09 09:13:38', '{\"user_id\":\"DB2ACD66-B618-47DA-8B47-BCCC8BD4CFA3\",\"user_update_by\":\"root\",\"user_update_time\":\"2022-10-09 09:13:38\"}', 'User Management', 'Delete', '192.168.80.208', 'Android', 'Aplikasi Android'),
(745, 'root', '2022-10-09 10:22:06', '{\"pasar_id\":\"13\",\"pasar_nama\":\"Pasar Pusat Tembilahan\",\"pasar_alamat\":\"Jalan Sudirman Depan Pelabuhan\",\"pasar_kecamatan\":\"14.04.07\",\"pasar_kelurahan\":\"14.04.07.2002\",\"pasar_update_by\":\"root\",\"pasar_status\":\"1\",\"pasar_update_time\":\"2022-10-09 10:22:06\"}', 'Data Pasar', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(746, 'root', '2022-10-09 10:22:23', '{\"komoditas_id\":\"3\",\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Daging Sapi\",\"komoditas_satuan\":\"\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-09 10:22:23\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221009102223images (12).jpeg\"}', 'Komoditas', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(747, 'root', '2022-10-09 12:21:36', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-09\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"10000\",\"transaksi_catatan\":\"12\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-09 12:21:36\"}', 'Transaksi', 'Insert', '::1', 'Android', 'Aplikasi Android'),
(748, 'root', '2022-10-09 12:21:39', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-09\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"150000\",\"transaksi_catatan\":\"ntaps\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-09 12:21:39\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(749, 'root', '2022-10-09 12:59:29', '{\"transaksi_id\":\"3\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"10000\",\"transaksi_catatan\":\"12\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-09 12:59:29\"}', 'Transaksi', 'Update', '::1', 'Android', 'Aplikasi Android'),
(750, 'root', '2022-10-09 12:59:31', '{\"transaksi_id\":\"3\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"130000\",\"transaksi_catatan\":\"ntaps\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-09 12:59:31\"}', 'Transaksi', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(751, 'root', '2022-10-09 12:59:47', '{\"transaksi_id\":\"3\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"130000\",\"transaksi_catatan\":\"ntaps\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-09 12:59:47\"}', 'Transaksi', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(752, 'root', '2022-10-09 12:59:55', '{\"komoditas_id\":\"4\",\"komoditas_grup\":\"4\",\"komoditas_nama\":\"Ikan Selais\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-09 12:59:55\"}', 'Komoditas', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(753, 'root', '2022-10-09 13:00:22', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-09\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-09 13:00:22\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(754, 'root', '2022-10-09 13:10:45', '{\"transaksi_id\":\"4\",\"transaksi_status\":\"0\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-09 13:10:45\"}', 'Transaksi', 'Delete', '192.168.80.208', 'Android', 'Aplikasi Android'),
(755, 'root', '2022-10-10 10:36:19', '{\"komoditas_id\":null,\"komoditas_grup\":\"2\",\"komoditas_nama\":\"kangkung\",\"komoditas_satuan\":\"Kg\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 10:36:19\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010103619images (17).jpeg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(756, 'root', '2022-10-10 10:37:52', '{\"komoditas_id\":null,\"komoditas_grup\":\"2\",\"komoditas_nama\":\"Bayam\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 10:37:52\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010103752images (17).jpeg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(757, 'root', '2022-10-10 10:38:12', '{\"komoditas_id\":\"7\",\"komoditas_grup\":\"2\",\"komoditas_nama\":\"kangkung\",\"komoditas_satuan\":\"Kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 10:38:12\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010103812images (16).jpeg\"}', 'Komoditas', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(758, 'root', '2022-10-10 10:38:18', '{\"komoditas_id\":\"7\",\"komoditas_grup\":\"2\",\"komoditas_nama\":\"kangkung\",\"komoditas_satuan\":\"Kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 10:38:18\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010103818images (16).jpeg\"}', 'Komoditas', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(759, 'root', '2022-10-10 10:38:52', '{\"komoditas_id\":\"7\",\"komoditas_grup\":\"2\",\"komoditas_nama\":\"kangkung\",\"komoditas_satuan\":\"Kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 10:38:52\"}', 'Komoditas', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(760, 'root', '2022-10-10 10:39:40', '{\"komoditas_id\":\"5\",\"komoditas_grup\":\"3\",\"komoditas_nama\":\"Lada merah\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 10:39:40\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010103940download (2).jpeg\"}', 'Komoditas', 'Update', '192.168.137.51', 'Android', 'Aplikasi Android'),
(761, 'root', '2022-10-10 10:47:29', '{\"komoditas_id\":null,\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Ayam Potong\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 10:47:29\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010104729images (15).jpeg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(762, 'root', '2022-10-10 10:47:48', '{\"komoditas_id\":null,\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Ayam Kampung\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 10:47:48\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010104748images (15).jpeg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(763, 'root', '2022-10-10 10:48:08', '{\"komoditas_id\":null,\"komoditas_grup\":\"3\",\"komoditas_nama\":\"Jahe\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 10:48:08\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010104808images (14).jpeg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(764, 'root', '2022-10-10 10:48:31', '{\"komoditas_id\":null,\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Ulat melati\",\"komoditas_satuan\":\"ekor\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 10:48:31\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101010483120221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(765, 'root', '2022-10-10 11:11:34', '{\"komoditas_id\":null,\"komoditas_grup\":\"5\",\"komoditas_nama\":\"ulmet\",\"komoditas_satuan\":\"ekor\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:11:34\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011113420221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(766, 'root', '2022-10-10 11:26:31', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"tes\",\"komoditas_satuan\":\"gad\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:26:31\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011263120221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(767, 'root', '2022-10-10 11:28:38', '{\"komoditas_id\":\"14\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 11:28:38\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(768, 'root', '2022-10-10 11:29:16', '{\"komoditas_id\":null,\"komoditas_grup\":\"5\",\"komoditas_nama\":\"ulmet\",\"komoditas_satuan\":\"b\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:29:14\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011291420221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(769, 'root', '2022-10-10 11:29:48', '{\"komoditas_id\":null,\"komoditas_grup\":\"3\",\"komoditas_nama\":\"c\",\"komoditas_satuan\":\" h\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:29:47\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010112947images (11).jpeg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(770, 'root', '2022-10-10 11:31:10', '{\"komoditas_id\":null,\"komoditas_grup\":\"2\",\"komoditas_nama\":\"y\",\"komoditas_satuan\":\"v\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:31:10\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010113110Snapchat-2043807028-removebg-preview.png\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(771, 'root', '2022-10-10 11:32:32', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:32:31\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011323120221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(772, 'root', '2022-10-10 11:35:12', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:35:11\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011351120221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(773, 'root', '2022-10-10 11:37:21', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:37:20\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011372020221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(774, 'root', '2022-10-10 11:38:43', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:38:42\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011384220221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(775, 'root', '2022-10-10 11:39:48', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:39:46\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011394620221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(776, 'root', '2022-10-10 11:40:03', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:40:02\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011400220221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(777, 'root', '2022-10-10 11:41:00', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:40:59\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011405920221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(778, 'root', '2022-10-10 11:41:07', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:41:07\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011410720221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(779, 'root', '2022-10-10 11:42:22', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:42:22\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011422220221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(780, 'root', '2022-10-10 11:43:04', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:43:04\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011430420221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(781, 'root', '2022-10-10 11:44:11', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:44:09\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011440920221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(782, 'root', '2022-10-10 11:44:53', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:44:52\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011445220221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(783, 'root', '2022-10-10 11:45:22', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:45:21\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011452120221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(784, 'root', '2022-10-10 11:46:32', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:46:31\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011463120221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(785, 'root', '2022-10-10 11:47:28', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:47:27\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011472720221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(786, 'root', '2022-10-10 11:47:51', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:47:51\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010114751Snapchat-2043807028-removebg-preview.png\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(787, 'root', '2022-10-10 11:48:25', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:48:23\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011482320220831_105528.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(788, 'root', '2022-10-10 11:48:57', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:48:55\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011485520220831_105528.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(789, 'root', '2022-10-10 11:49:16', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:49:16\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011491620221008_080037.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(790, 'root', '2022-10-10 11:49:50', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"patin\",\"komoditas_satuan\":\"kh\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:49:50\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010114950Screenshot_20221009-173645_Instagram.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(791, 'root', '2022-10-10 11:57:29', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"ulat\",\"komoditas_satuan\":\"tes\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 11:57:29\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101011572920221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(792, 'root', '2022-10-10 12:00:11', '{\"komoditas_id\":null,\"komoditas_grup\":\"5\",\"komoditas_nama\":\"f\",\"komoditas_satuan\":\"g\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 12:00:11\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010120011Screenshot_20220611-135041_Chrome.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(793, 'root', '2022-10-10 12:00:43', '{\"komoditas_id\":\"39\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:00:43\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(794, 'root', '2022-10-10 12:00:46', '{\"komoditas_id\":\"12\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:00:46\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(795, 'root', '2022-10-10 12:00:48', '{\"komoditas_id\":\"38\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:00:48\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(796, 'root', '2022-10-10 12:04:08', '{\"komoditas_id\":null,\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Ulat melati\",\"komoditas_satuan\":\"ekor\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 12:04:07\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101012040720221008_080037.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(797, 'root', '2022-10-10 12:04:34', '{\"komoditas_id\":\"40\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:04:34\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(798, 'root', '2022-10-10 12:04:52', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"sapu\",\"komoditas_satuan\":\"gas\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 12:04:51\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101012045120221008_080037.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(799, 'root', '2022-10-10 12:05:02', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"sapu\",\"komoditas_satuan\":\"gas\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 12:05:02\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010120502Screenshot_20221009-131415_Pasar.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(800, 'root', '2022-10-10 12:05:15', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"sapu\",\"komoditas_satuan\":\"gas\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 12:05:14\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101012051420221004_075419.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(801, 'root', '2022-10-10 12:06:28', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"sapu\",\"komoditas_satuan\":\"gas\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 12:06:27\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101012062720221004_075419.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(802, 'root', '2022-10-10 12:06:39', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"sapu\",\"komoditas_satuan\":\"gas\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 12:06:38\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101012063820221004_075419.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(803, 'root', '2022-10-10 12:12:31', '{\"komoditas_id\":null,\"komoditas_grup\":\"3\",\"komoditas_nama\":\"tes\",\"komoditas_satuan\":\"g\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 12:12:31\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101012123120221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(804, 'root', '2022-10-10 12:12:43', '{\"komoditas_id\":null,\"komoditas_grup\":\"3\",\"komoditas_nama\":\"tes\",\"komoditas_satuan\":\"g\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 12:12:43\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101012124320221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(805, 'root', '2022-10-10 12:13:12', '{\"komoditas_id\":null,\"komoditas_grup\":\"3\",\"komoditas_nama\":\"tes\",\"komoditas_satuan\":\"g\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 12:13:12\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101012131220220907_125915.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(806, 'root', '2022-10-10 12:44:45', '{\"komoditas_id\":null,\"komoditas_grup\":\"3\",\"komoditas_nama\":\"tes\",\"komoditas_satuan\":\"g\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 12:44:45\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221010124445PXL_20220906_112826378.NIGHT.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(807, 'root', '2022-10-10 12:46:44', '{\"komoditas_id\":\"48\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:46:44\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(808, 'root', '2022-10-10 12:46:48', '{\"komoditas_id\":\"44\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:46:48\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(809, 'root', '2022-10-10 12:46:56', '{\"komoditas_id\":\"49\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:46:56\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(810, 'root', '2022-10-10 12:47:01', '{\"komoditas_id\":\"47\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:47:01\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(811, 'root', '2022-10-10 12:47:04', '{\"komoditas_id\":\"45\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:47:04\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(812, 'root', '2022-10-10 12:47:08', '{\"komoditas_id\":\"46\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:47:08\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(813, 'root', '2022-10-10 12:47:12', '{\"komoditas_id\":\"42\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:47:12\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(814, 'root', '2022-10-10 12:47:16', '{\"komoditas_id\":\"43\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:47:16\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(815, 'root', '2022-10-10 12:47:19', '{\"komoditas_id\":\"41\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-10 12:47:19\"}', 'Komoditas', 'Delete', '192.168.137.51', 'Android', 'Aplikasi Android'),
(816, 'root', '2022-10-10 12:49:26', '{\"komoditas_id\":null,\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Ulat Melati\",\"komoditas_satuan\":\"ekor\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-10 12:49:26\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101012492620221008_080051.jpg\"}', 'Komoditas', 'Insert', '192.168.137.51', 'Android', 'Aplikasi Android'),
(817, 'root', '2022-10-10 13:47:14', 'login', 'Login', 'Insert', '192.168.137.40', 'Android', 'Aplikasi Android'),
(818, 'root', '2022-10-10 20:22:43', '{\"pasar_id\":\"14\",\"pasar_nama\":\"Pasar Anka Aseng\",\"pasar_alamat\":\"Jalan Manggis No.51A\",\"pasar_kecamatan\":\"14.04.05\",\"pasar_kelurahan\":\"14.04.05.2007\",\"pasar_update_by\":\"root\",\"pasar_status\":\"1\",\"pasar_update_time\":\"2022-10-10 20:22:43\"}', 'Data Pasar', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(819, 'root', '2022-10-11 12:48:38', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"Standart\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 12:48:38\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(820, 'root', '2022-10-11 12:48:55', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"16000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 12:48:55\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(821, 'root', '2022-10-11 12:49:13', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"60000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 12:49:13\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(822, 'root', '2022-10-11 12:49:33', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"25000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 12:49:33\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(823, 'root', '2022-10-11 12:50:41', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 12:50:41\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(824, 'root', '2022-10-11 12:50:52', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 12:50:52\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(825, 'root', '2022-10-11 12:51:09', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 12:51:09\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(826, 'root', '2022-10-11 12:51:27', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"6000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 12:51:27\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(827, 'root', '2022-10-11 12:51:38', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"110000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 12:51:38\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(828, 'root', '2022-10-11 12:51:50', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"130000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 12:51:50\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(829, 'root', '2022-10-11 12:51:59', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 12:51:59\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(830, 'root', '2022-10-11 12:53:13', '{\"komoditas_id\":\"8\",\"komoditas_grup\":\"2\",\"komoditas_nama\":\"Bayam\",\"komoditas_satuan\":\"ikat\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-11 12:53:13\"}', 'Komoditas', 'Update', '192.168.137.147', 'Android', 'Aplikasi Android'),
(831, 'root', '2022-10-11 12:53:20', '{\"komoditas_id\":\"7\",\"komoditas_grup\":\"2\",\"komoditas_nama\":\"kangkung\",\"komoditas_satuan\":\"ikat\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-11 12:53:20\"}', 'Komoditas', 'Update', '192.168.137.147', 'Android', 'Aplikasi Android'),
(832, 'root', '2022-10-11 12:53:29', '{\"komoditas_id\":\"6\",\"komoditas_grup\":\"7\",\"komoditas_nama\":\"Minyak Goreng \",\"komoditas_satuan\":\"ltr\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-11 12:53:29\"}', 'Komoditas', 'Update', '192.168.137.147', 'Android', 'Aplikasi Android'),
(833, 'root', '2022-10-11 12:53:59', '{\"komoditas_id\":\"1\",\"komoditas_grup\":\"1\",\"komoditas_nama\":\"Beras Bulog\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-11 12:53:59\"}', 'Komoditas', 'Update', '192.168.137.147', 'Android', 'Aplikasi Android'),
(834, 'root', '2022-10-11 12:54:36', '{\"komoditas_id\":\"1\",\"komoditas_grup\":\"1\",\"komoditas_nama\":\"Beras Bulog\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-11 12:54:36\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221011125436images (18).jpeg\"}', 'Komoditas', 'Update', '192.168.137.147', 'Android', 'Aplikasi Android'),
(835, 'root', '2022-10-11 13:41:37', '{\"komoditas_id\":\"3\",\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Daging Sapi Liar\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-11 13:41:37\"}', 'Komoditas', 'Update', '192.168.137.147', 'Android', 'Aplikasi Android'),
(836, 'root', '2022-10-11 14:11:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"2300\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:11:00\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(837, 'root', '2022-10-11 14:11:17', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"16000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:11:17\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(838, 'root', '2022-10-11 14:11:29', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"63000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:11:29\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(839, 'root', '2022-10-11 14:11:43', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"25500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:11:43\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(840, 'root', '2022-10-11 14:11:53', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2100\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:11:53\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(841, 'root', '2022-10-11 14:13:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"2560\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:13:00\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(842, 'root', '2022-10-11 14:13:15', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"20500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:13:15\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(843, 'root', '2022-10-11 14:13:28', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"5900\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:13:28\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(844, 'root', '2022-10-11 14:13:44', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"110500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:13:44\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android');
INSERT INTO `tb_log` (`log_id`, `log_user`, `log_time`, `log_activity`, `log_modul`, `log_type`, `log_ip`, `log_so`, `log_browser`) VALUES
(845, 'root', '2022-10-11 14:13:56', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"130000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:13:56\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(846, 'root', '2022-10-11 14:14:09', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"11500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:14:09\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(847, 'root', '2022-10-11 14:14:29', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"11400\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:14:29\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(848, 'root', '2022-10-11 14:14:42', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"132000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:14:42\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(849, 'root', '2022-10-11 14:15:02', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"110000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:15:02\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(850, 'root', '2022-10-11 14:15:19', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"6200\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:15:19\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(851, 'root', '2022-10-11 14:15:31', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"22000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:15:31\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(852, 'root', '2022-10-11 14:15:47', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"2600\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:15:46\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(853, 'root', '2022-10-11 14:15:57', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:15:57\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(854, 'root', '2022-10-11 14:16:16', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"25500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:16:16\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(855, 'root', '2022-10-11 14:16:35', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"63500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:16:35\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(856, 'root', '2022-10-11 14:16:44', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"16000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:16:44\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(857, 'root', '2022-10-11 14:16:57', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-11\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"2400\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-11 14:16:57\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(858, 'root', '2022-10-12 08:27:43', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"2600\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 08:27:42\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(859, 'root', '2022-10-12 08:28:28', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"16100\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 08:28:28\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(860, 'root', '2022-10-12 08:28:55', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"62000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 08:28:55\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(861, 'root', '2022-10-12 08:29:28', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"25000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 08:29:28\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(862, 'root', '2022-10-12 08:29:40', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 08:29:40\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(863, 'root', '2022-10-12 08:29:57', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 08:29:57\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(864, 'root', '2022-10-12 08:30:10', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"21250\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 08:30:10\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(865, 'root', '2022-10-12 08:30:21', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"6050\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 08:30:21\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(866, 'root', '2022-10-12 08:30:37', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"111000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 08:30:37\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(867, 'root', '2022-10-12 08:30:49', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"130000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 08:30:49\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(868, 'root', '2022-10-12 08:31:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 08:31:00\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(869, 'root', '2022-10-12 09:36:01', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"2300\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 09:36:01\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(870, 'root', '2022-10-12 09:36:14', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"6500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 09:36:13\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(871, 'root', '2022-10-12 09:36:34', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"62000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 09:36:34\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(872, 'root', '2022-10-12 09:36:44', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"23000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 09:36:44\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(873, 'root', '2022-10-12 09:36:53', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2400\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 09:36:53\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(874, 'root', '2022-10-12 09:37:03', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"2100\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 09:37:03\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(875, 'root', '2022-10-12 09:37:14', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 09:37:14\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(876, 'root', '2022-10-12 09:37:23', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"7000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 09:37:23\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(877, 'root', '2022-10-12 09:37:33', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"112000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 09:37:33\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(878, 'root', '2022-10-12 09:37:42', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"132000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 09:37:42\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(879, 'root', '2022-10-12 09:37:50', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 09:37:50\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(880, 'root', '2022-10-12 10:38:47', '{\"pasar_id\":null,\"pasar_nama\":\"Pasar Arengka Jaya\",\"pasar_alamat\":\"JL.Soekarno-Hatta\",\"pasar_kecamatan\":\"14.04.03\",\"pasar_kelurahan\":\"14.04.03.2006\",\"pasar_create_by\":\"root\",\"pasar_status\":\"1\",\"pasar_create_time\":\"2022-10-12 10:38:47\"}', 'Data Pasar', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(881, 'root', '2022-10-12 10:39:25', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"15\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 10:39:25\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(882, 'root', '2022-10-12 10:39:36', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"15\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"132000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 10:39:36\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(883, 'root', '2022-10-12 10:40:02', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"15\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 10:40:02\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(884, 'root', '2022-10-12 10:40:52', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"Ikan Lele Akar\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-12 10:40:52\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221012104052images (19).jpeg\"}', 'Komoditas', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(885, 'root', '2022-10-12 11:24:06', '{\"pasar_id\":null,\"pasar_nama\":\"Pasar Arengka\",\"pasar_alamat\":\"Jalan Soekarno-Hatta\",\"pasar_kecamatan\":\"14.04.10\",\"pasar_kelurahan\":\"14.04.10.2008\",\"pasar_create_by\":\"root\",\"pasar_status\":\"1\",\"pasar_create_time\":\"2022-10-12 11:24:06\"}', 'Data Pasar', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(886, 'root', '2022-10-12 11:24:51', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 11:24:51\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(887, 'root', '2022-10-12 11:26:04', '{\"transaksi_id\":\"63\",\"transaksi_status\":\"0\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-12 11:26:04\"}', 'Transaksi', 'Delete', '192.168.137.147', 'Android', 'Aplikasi Android'),
(888, 'root', '2022-10-12 11:41:43', '{\"pasar_id\":null,\"pasar_nama\":\"Pasar Duplicated\",\"pasar_alamat\":\"Jalan testing\",\"pasar_kecamatan\":\"14.04.04\",\"pasar_kelurahan\":\"14.04.04.1006\",\"pasar_create_by\":\"root\",\"pasar_status\":\"1\",\"pasar_create_time\":\"2022-10-12 11:41:43\"}', 'Data Pasar', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(889, 'root', '2022-10-12 11:42:06', '{\"pasar_id\":null,\"pasar_nama\":\"Pasar Pusat\",\"pasar_alamat\":\"Jalan Sudirman\",\"pasar_kecamatan\":\"14.04.04\",\"pasar_kelurahan\":\"14.04.04.1004\",\"pasar_create_by\":\"root\",\"pasar_status\":\"1\",\"pasar_create_time\":\"2022-10-12 11:42:06\"}', 'Data Pasar', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(890, 'root', '2022-10-12 12:07:10', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"Lele Akar (Lembat)\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-12 12:07:10\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221012120710images (19).jpeg\"}', 'Komoditas', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(891, 'root', '2022-10-12 13:16:36', '{\"komoditas_id\":null,\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Adrian\",\"komoditas_satuan\":\"org\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-12 13:16:36\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-2022101213163620221012_122833.jpg\"}', 'Komoditas', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(892, 'root', '2022-10-12 13:16:54', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"53\",\"transaksi_harga\":\"250000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 13:16:54\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(893, 'root', '2022-10-12 13:40:18', '{\"komoditas_id\":null,\"komoditas_grup\":\"4\",\"komoditas_nama\":\"daging kerbau\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-12 13:40:18\",\"komoditas_foto\":\"\\files\\/komoditas\\/daging kerbau-8320221012134018jpeg\"}', 'Komoditas', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(894, 'root', '2022-10-12 19:15:36', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12600\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 19:15:36\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(895, 'root', '2022-10-12 19:16:05', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"11000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 19:16:05\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(896, 'root', '2022-10-12 19:31:06', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 19:31:06\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(897, 'root', '2022-10-12 19:41:03', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-12\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_harga\":\"105000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-12 19:41:03\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(898, 'root', '2022-10-12 19:55:26', '{\"komoditas_id\":null,\"komoditas_grup\":\"1\",\"komoditas_nama\":\"Beras IR46\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-10-12 19:55:26\",\"komoditas_foto\":\"\\files\\/komoditas\\/Beras IR46-8920221012195526.jpeg\"}', 'Komoditas', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(899, 'root', '2022-10-13 09:35:27', '{\"pasar_id\":\"13\",\"pasar_nama\":\"Pasar Pusat Tembilahan\",\"pasar_alamat\":\"Jalan Sudirman Depan Pelabuhan\",\"pasar_kecamatan\":\"14.04.04\",\"pasar_kelurahan\":\"14.04.07.2002\",\"pasar_update_by\":\"root\",\"pasar_status\":\"1\",\"pasar_update_time\":\"2022-10-13 09:35:27\"}', 'Data Pasar', 'Update', '192.168.137.147', 'Android', 'Aplikasi Android'),
(900, 'root', '2022-10-13 09:35:34', '{\"pasar_id\":\"18\",\"pasar_nama\":\"Pasar Pusat\",\"pasar_alamat\":\"Jalan Sudirman\",\"pasar_kecamatan\":\"14.04.07\",\"pasar_kelurahan\":\"14.04.04.1004\",\"pasar_update_by\":\"root\",\"pasar_status\":\"1\",\"pasar_update_time\":\"2022-10-13 09:35:34\"}', 'Data Pasar', 'Update', '192.168.137.147', 'Android', 'Aplikasi Android'),
(901, 'root', '2022-10-14 08:51:01', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"55\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:51:01\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(902, 'root', '2022-10-14 08:51:12', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"54\",\"transaksi_harga\":\"135000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:51:12\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(903, 'root', '2022-10-14 08:51:26', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"53\",\"transaksi_harga\":\"250100\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:51:26\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(904, 'root', '2022-10-14 08:51:36', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"52\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:51:36\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(905, 'root', '2022-10-14 08:51:50', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"6000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:51:50\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(906, 'root', '2022-10-14 08:52:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"8000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:52:00\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(907, 'root', '2022-10-14 08:52:09', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:52:09\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(908, 'root', '2022-10-14 08:52:21', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"23000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:52:21\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(909, 'root', '2022-10-14 08:52:28', '{\"transaksi_id\":\"75\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_harga\":\"61000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-14 08:52:28\"}', 'Transaksi', 'Update', '192.168.137.147', 'Android', 'Aplikasi Android'),
(910, 'root', '2022-10-14 08:52:38', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:52:38\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(911, 'root', '2022-10-14 08:52:47', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"2200\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:52:47\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(912, 'root', '2022-10-14 08:52:56', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:52:56\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(913, 'root', '2022-10-14 08:53:07', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"6000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:53:07\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(914, 'root', '2022-10-14 08:53:18', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"110000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:53:18\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(915, 'root', '2022-10-14 08:53:45', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"135000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:53:45\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(916, 'root', '2022-10-14 08:53:55', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 08:53:55\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(917, 'root', '2022-10-14 17:00:37', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 17:00:37\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(918, 'root', '2022-10-14 17:01:06', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-14\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"132000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-14 17:01:06\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(919, 'root', '2022-10-15 13:24:15', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"54\",\"transaksi_harga\":\"125000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 13:24:15\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(920, 'root', '2022-10-15 15:27:42', '{\"transaksi_id\":\"86\",\"transaksi_harga\":\"130000\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-15 15:27:42\"}', 'Transaksi', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(921, 'root', '2022-10-15 15:28:06', '{\"transaksi_id\":\"86\",\"transaksi_harga\":\"132000\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-15 15:28:06\"}', 'Transaksi', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(922, 'root', '2022-10-15 15:28:41', '{\"transaksi_id\":\"86\",\"transaksi_harga\":\"130000\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-15 15:28:41\"}', 'Transaksi', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(923, 'root', '2022-10-15 15:29:46', '{\"transaksi_id\":\"86\",\"transaksi_harga\":\"132000\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-15 15:29:46\"}', 'Transaksi', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(924, 'root', '2022-10-15 15:30:07', '{\"transaksi_id\":\"86\",\"transaksi_harga\":\"130000\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-15 15:30:07\"}', 'Transaksi', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(925, 'root', '2022-10-15 15:30:56', '{\"transaksi_id\":\"86\",\"transaksi_harga\":\"132000\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-15 15:30:56\"}', 'Transaksi', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(926, 'root', '2022-10-15 15:39:17', '{\"transaksi_id\":\"86\",\"transaksi_harga\":\"132000\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-15 15:39:17\"}', 'Transaksi', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(927, 'root', '2022-10-15 15:40:33', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:40:33\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(928, 'root', '2022-10-15 15:41:41', '{\"transaksi_id\":\"87\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"gas\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-15 15:41:41\"}', 'Transaksi', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(929, 'root', '2022-10-15 15:45:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_harga\":\"0\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:45:00\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(930, 'root', '2022-10-15 15:45:13', '{\"transaksi_id\":\"88\",\"transaksi_harga\":\"130000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-15 15:45:13\"}', 'Transaksi', 'Update', '192.168.80.208', 'Android', 'Aplikasi Android'),
(931, 'root', '2022-10-15 15:45:30', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"53\",\"transaksi_harga\":\"250000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:45:30\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(932, 'root', '2022-10-15 15:45:36', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"52\",\"transaksi_harga\":\"17000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:45:36\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(933, 'root', '2022-10-15 15:56:14', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"6000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:56:14\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(934, 'root', '2022-10-15 15:57:10', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:57:10\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(935, 'root', '2022-10-15 15:57:18', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"61000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:57:18\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(936, 'root', '2022-10-15 15:57:23', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:57:23\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(937, 'root', '2022-10-15 15:57:28', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:57:28\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(938, 'root', '2022-10-15 15:57:35', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:57:35\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(939, 'root', '2022-10-15 15:57:41', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"19000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:57:41\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(940, 'root', '2022-10-15 15:57:46', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"6000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:57:46\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(941, 'root', '2022-10-15 15:57:53', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"110000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:57:53\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(942, 'root', '2022-10-15 15:57:59', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"130200\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:57:59\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(943, 'root', '2022-10-15 15:58:05', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-15\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"11000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-15 15:58:05\"}', 'Transaksi', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(944, 'root', '2022-10-17 09:22:32', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"55\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:22:32\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(945, 'root', '2022-10-17 09:22:38', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"54\",\"transaksi_harga\":\"125000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:22:38\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(946, 'root', '2022-10-17 09:22:44', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"53\",\"transaksi_harga\":\"250000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:22:44\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(947, 'root', '2022-10-17 09:22:56', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"52\",\"transaksi_harga\":\"27000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:22:56\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(948, 'root', '2022-10-17 09:23:03', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:23:03\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(949, 'root', '2022-10-17 09:23:10', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"8000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:23:10\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(950, 'root', '2022-10-17 09:23:18', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"24000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:23:18\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(951, 'root', '2022-10-17 09:23:26', '{\"transaksi_id\":\"108\",\"transaksi_harga\":\"64000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-17 09:23:26\"}', 'Transaksi', 'Update', '192.168.137.147', 'Android', 'Aplikasi Android'),
(952, 'root', '2022-10-17 09:23:33', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"23000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:23:33\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(953, 'root', '2022-10-17 09:23:41', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2100\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:23:41\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(954, 'root', '2022-10-17 09:23:47', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:23:47\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(955, 'root', '2022-10-17 09:23:53', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:23:53\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(956, 'root', '2022-10-17 09:23:59', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"9000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:23:59\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(957, 'root', '2022-10-17 09:24:05', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"110000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:24:05\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(958, 'root', '2022-10-17 09:24:11', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"130000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:24:11\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(959, 'root', '2022-10-17 09:24:16', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-17\",\"transaksi_pasar\":\"13\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-17 09:24:16\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(960, 'root', '2022-10-17 15:50:51', '{\"transaksi_id\":\"104\",\"transaksi_harga\":\"200000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-17 15:50:51\"}', 'Transaksi', 'Update', '192.168.137.147', 'Android', 'Aplikasi Android'),
(961, 'root', '2022-10-17 15:57:17', '{\"komoditas_id\":\"53\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-10-17 15:57:17\"}', 'Komoditas', 'Delete', '192.168.137.147', 'Android', 'Aplikasi Android'),
(962, 'root', '2022-10-17 16:58:45', '{\"user_id\":\"54C8360B-68FD-4386-A68D-9313E8643983\",\"user_username\":\"pasaranka\",\"user_email\":\"pasaranka@gmail.com\",\"user_name\":\"Zel Apriadi \",\"user_status\":\"1\",\"user_role\":\"3\",\"user_fk\":\"14\",\"user_create_by\":\"root\",\"user_create_time\":\"2022-10-17 16:58:45\",\"user_password\":\"$2y$10$ImDPQgLdkqIZ21ElIS5r2uO9T7.lCwQiHKSR6CLlQLxtmWkvOA3k2\",\"user_image\":\"\\files\\/img\\/user-default.png\"}', 'User Management', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(963, 'root', '2022-10-17 19:24:46', '{\"user_id\":\"2C15CC0F-9017-4A48-9768-3F6701CAB083\",\"user_username\":\"pasarpusat\",\"user_email\":\"pasarpusat@gmail.com\",\"user_name\":\"Paijo Muhin\",\"user_status\":\"1\",\"user_role\":\"3\",\"user_fk\":\"18\",\"user_create_by\":\"root\",\"user_create_time\":\"2022-10-17 19:24:46\",\"user_password\":\"$2y$10$uyVfpfJz.oG94oxrhjKlzu98ugf\\/QVe5tqLmXkTEY8NBgfChv91Jy\",\"user_image\":\"\\files\\/img\\/user-default.png\"}', 'User Management', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(964, 'root', '2022-10-17 19:59:17', 'login', 'Login', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(965, 'root', '2022-10-17 20:01:31', 'login', 'Login', 'Insert', '192.168.80.208', 'Android', 'Aplikasi Android'),
(966, 'pasarpusat', '2022-10-18 08:47:01', 'login', 'Login', 'Insert', '::1', 'Android', 'Aplikasi Android'),
(967, 'pasarpusat', '2022-10-18 08:49:09', 'login', 'Login', 'Insert', '::1', 'Android', 'Aplikasi Android'),
(968, 'root', '2022-10-18 08:49:28', 'login', 'Login', 'Insert', '::1', 'Android', 'Aplikasi Android'),
(969, 'pasarpusat', '2022-10-18 08:49:44', 'login', 'Login', 'Insert', '::1', 'Android', 'Aplikasi Android'),
(970, 'pasarpusat', '2022-10-18 08:52:38', 'login', 'Login', 'Insert', '::1', 'Android', 'Aplikasi Android'),
(971, 'pasarpusat', '2022-10-18 09:09:55', 'login', 'Login', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(972, 'pasarpusat', '2022-10-18 09:33:00', 'login', 'Login', 'Insert', '::1', 'Android', 'Aplikasi Android'),
(973, 'pasarpusat', '2022-10-18 10:06:49', 'login', 'Login', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(974, 'pasarpusat', '2022-10-18 10:07:15', 'login', 'Login', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(975, 'pasarpusat', '2022-10-18 10:25:01', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-18\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"pasarpusat\",\"transaksi_create_time\":\"2022-10-18 10:25:01\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(976, 'pasarpusat', '2022-10-18 10:25:08', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-18\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_harga\":\"130000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"pasarpusat\",\"transaksi_create_time\":\"2022-10-18 10:25:08\"}', 'Transaksi', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(977, 'pasarpusat', '2022-10-18 10:26:07', 'login', 'Login', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(978, 'root', '2022-10-18 20:53:50', 'login', 'Login', 'Insert', '192.168.137.147', 'Android', 'Aplikasi Android'),
(979, 'root', '2022-10-19 08:45:26', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:45:26\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(980, 'root', '2022-10-19 08:45:32', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_harga\":\"125000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:45:32\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(981, 'root', '2022-10-19 08:45:37', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"52\",\"transaksi_harga\":\"23000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:45:37\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(982, 'root', '2022-10-19 08:45:44', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:45:44\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android');
INSERT INTO `tb_log` (`log_id`, `log_user`, `log_time`, `log_activity`, `log_modul`, `log_type`, `log_ip`, `log_so`, `log_browser`) VALUES
(983, 'root', '2022-10-19 08:45:49', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"9000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:45:49\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(984, 'root', '2022-10-19 08:45:55', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"60000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:45:55\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(985, 'root', '2022-10-19 08:46:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:46:00\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(986, 'root', '2022-10-19 08:46:05', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:46:05\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(987, 'root', '2022-10-19 08:46:10', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:46:10\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(988, 'root', '2022-10-19 08:46:15', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:46:15\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(989, 'root', '2022-10-19 08:46:23', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"1200\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:46:23\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(990, 'root', '2022-10-19 08:46:30', '{\"transaksi_id\":\"129\",\"transaksi_harga\":\"6000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-19 08:46:30\"}', 'Transaksi', 'Update', '192.168.137.4', 'Android', 'Aplikasi Android'),
(991, 'root', '2022-10-19 08:46:37', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"110000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:46:37\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(992, 'root', '2022-10-19 08:46:42', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"130000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:46:42\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(993, 'root', '2022-10-19 08:46:50', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"11000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:46:50\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(994, 'root', '2022-10-19 08:51:31', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"55\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:51:31\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(995, 'root', '2022-10-19 08:51:39', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"54\",\"transaksi_harga\":\"126000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:51:39\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(996, 'root', '2022-10-19 08:51:45', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"52\",\"transaksi_harga\":\"22000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:51:45\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(997, 'root', '2022-10-19 08:51:51', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:51:51\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(998, 'root', '2022-10-19 08:51:59', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"10000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:51:59\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(999, 'root', '2022-10-19 08:52:05', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"60000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:52:05\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1000, 'root', '2022-10-19 08:52:13', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"22000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:52:13\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1001, 'root', '2022-10-19 08:52:19', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:52:19\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1002, 'root', '2022-10-19 08:52:24', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:52:24\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1003, 'root', '2022-10-19 08:52:30', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:52:30\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1004, 'root', '2022-10-19 08:52:37', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"6500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:52:37\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1005, 'root', '2022-10-19 08:52:43', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"110000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:52:43\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1006, 'root', '2022-10-19 08:52:48', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"129000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:52:48\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1007, 'root', '2022-10-19 08:52:54', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"17\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:52:54\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1008, 'root', '2022-10-19 08:54:05', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"55\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:54:05\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1009, 'root', '2022-10-19 08:54:20', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"54\",\"transaksi_harga\":\"132000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:54:20\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1010, 'root', '2022-10-19 08:54:46', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"52\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:54:46\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1011, 'root', '2022-10-19 08:54:52', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"2600\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:54:52\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1012, 'root', '2022-10-19 08:55:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"10000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:55:00\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1013, 'root', '2022-10-19 08:55:07', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"22000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:55:07\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1014, 'root', '2022-10-19 08:55:13', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"61000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:55:13\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1015, 'root', '2022-10-19 08:55:17', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:55:17\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1016, 'root', '2022-10-19 08:55:22', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:55:22\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1017, 'root', '2022-10-19 08:55:33', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:55:33\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1018, 'root', '2022-10-19 08:55:43', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"7000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:55:43\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1019, 'root', '2022-10-19 08:55:49', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"110000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:55:49\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1020, 'root', '2022-10-19 08:55:55', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"130000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:55:55\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1021, 'root', '2022-10-19 08:56:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"16\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:56:00\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1022, 'root', '2022-10-19 08:56:32', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:56:32\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1023, 'root', '2022-10-19 08:57:02', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:57:02\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1024, 'root', '2022-10-19 08:57:07', '{\"transaksi_id\":\"162\",\"transaksi_harga\":\"130000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-19 08:57:07\"}', 'Transaksi', 'Update', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1025, 'root', '2022-10-19 08:57:12', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"110000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:57:12\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1026, 'root', '2022-10-19 08:57:17', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"7000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:57:17\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1027, 'root', '2022-10-19 08:57:21', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:57:21\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1028, 'root', '2022-10-19 08:57:29', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"1500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:57:29\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1029, 'root', '2022-10-19 08:57:34', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:57:34\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1030, 'root', '2022-10-19 08:57:39', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"61000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:57:39\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1031, 'root', '2022-10-19 08:57:45', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"61000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:57:45\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1032, 'root', '2022-10-19 08:57:53', '{\"transaksi_id\":\"168\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-10-19 08:57:53\"}', 'Transaksi', 'Update', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1033, 'root', '2022-10-19 08:57:58', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"7000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:57:58\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1034, 'root', '2022-10-19 08:58:03', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"3000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:58:03\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1035, 'root', '2022-10-19 08:58:15', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"52\",\"transaksi_harga\":\"22000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:58:15\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1036, 'root', '2022-10-19 08:58:22', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"54\",\"transaksi_harga\":\"125000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:58:22\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1037, 'root', '2022-10-19 08:58:27', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-10-19\",\"transaksi_pasar\":\"14\",\"transaksi_komoditas\":\"55\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-10-19 08:58:27\"}', 'Transaksi', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1038, 'pasarpusat', '2022-10-19 14:41:00', 'login', 'Login', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1039, 'root', '2022-10-25 13:47:35', 'login', 'Login', 'Insert', '192.168.137.4', 'Android', 'Aplikasi Android'),
(1040, 'root', '2022-11-10 09:10:03', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:10:03\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1041, 'root', '2022-11-10 09:10:24', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_harga\":\"130000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:10:24\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1042, 'root', '2022-11-10 09:10:32', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"52\",\"transaksi_harga\":\"23000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:10:32\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1043, 'root', '2022-11-10 09:10:37', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"50\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:10:37\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1044, 'root', '2022-11-10 09:10:43', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"11\",\"transaksi_harga\":\"11000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:10:43\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1045, 'root', '2022-11-10 09:10:50', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"10\",\"transaksi_harga\":\"65000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:10:50\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1046, 'root', '2022-11-10 09:10:55', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"9\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:10:55\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1047, 'root', '2022-11-10 09:11:07', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"7\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:11:07\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1048, 'root', '2022-11-10 09:11:13', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"8\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:11:13\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1049, 'root', '2022-11-10 09:11:19', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"6\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:11:19\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1050, 'root', '2022-11-10 09:11:26', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:11:25\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1051, 'root', '2022-11-10 09:11:32', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_harga\":\"110000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:11:32\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1052, 'root', '2022-11-10 09:11:37', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_harga\":\"125000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:11:37\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1053, 'root', '2022-11-10 09:11:43', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-10\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-10 09:11:43\"}', 'Transaksi', 'Insert', '192.168.137.52', 'Android', 'Aplikasi Android'),
(1054, 'root', '2022-11-12 21:29:17', '{\"komoditas_id\":null,\"komoditas_grup\":\"7\",\"komoditas_nama\":\"kik\",\"komoditas_satuan\":\"kg\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-11-12 21:29:17\",\"komoditas_foto\":\"\\files\\/komoditas\\/kik-4120221112212917.png\"}', 'Komoditas', 'Insert', '192.168.83.95', 'Android', 'Aplikasi Android'),
(1055, 'root', '2022-11-18 16:22:01', '{\"komoditas_id\":\"56\",\"komoditas_grup\":\"7\",\"komoditas_nama\":\"kik\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-18 16:22:01\"}', 'Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1056, 'root', '2022-11-18 16:22:26', '{\"komoditas_id\":\"54\",\"komoditas_grup\":\"4\",\"komoditas_nama\":\"daging kerbau\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-18 16:22:26\"}', 'Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1057, 'root', '2022-11-18 16:23:39', '{\"komoditas_id\":\"56\",\"komoditas_grup\":\"7\",\"komoditas_nama\":\"kik\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-18 16:23:39\"}', 'Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1058, 'root', '2022-11-18 16:24:22', '{\"komoditas_id\":\"56\",\"komoditas_grup\":\"7\",\"komoditas_nama\":\"kik\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-18 16:24:22\"}', 'Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1059, 'root', '2022-11-18 16:24:52', '{\"komoditas_id\":\"54\",\"komoditas_grup\":\"4\",\"komoditas_nama\":\"daging kerbau\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-18 16:24:52\"}', 'Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1060, 'root', '2022-11-18 16:29:33', '{\"komoditas_id\":\"1\",\"komoditas_grup\":\"1\",\"komoditas_nama\":\"Beras Bulog\",\"komoditas_satuan\":\"1 kg\",\"komoditas_het\":\"12000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-18 16:29:33\"}', 'Komoditas', 'Update', '::1', 'Android', 'Aplikasi Android'),
(1061, 'root', '2022-11-18 16:30:22', '{\"komoditas_id\":\"3\",\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Daging Sapi Liar\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-18 16:30:22\"}', 'Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1062, 'root', '2022-11-18 16:32:02', '{\"komoditas_id\":\"3\",\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Daging Sapi Liar\",\"komoditas_satuan\":\"1 kg\",\"komoditas_het\":\"\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-18 16:32:02\"}', 'Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1063, 'root', '2022-11-18 16:37:01', '{\"komoditas_id\":\"3\",\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Daging Sapi Liar\",\"komoditas_satuan\":\"1 kg\",\"komoditas_het\":\"120000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-18 16:37:01\"}', 'Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1064, 'root', '2022-11-18 16:37:10', '{\"komoditas_id\":\"4\",\"komoditas_grup\":\"4\",\"komoditas_nama\":\"Ikan Selais Sungai Kampar\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"115000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-18 16:37:10\"}', 'Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1065, 'root', '2022-11-18 16:37:23', '{\"komoditas_id\":\"5\",\"komoditas_grup\":\"3\",\"komoditas_nama\":\"Lada merah\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"20000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-18 16:37:23\"}', 'Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1066, 'root', '2022-11-21 10:01:10', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 107.0.0.0'),
(1067, 'root', '2022-11-21 10:17:04', '{\"kategori_id\":\"1\",\"kategori_status\":\"0\",\"kategori_update_time\":\"2022-11-21 10:17:04\",\"kategori_update_by\":\"root\"}', 'Kategori Artikel', 'Delete', '::1', 'Windows 10', 'Chrome - 107.0.0.0'),
(1068, 'root', '2022-11-21 10:17:10', '{\"kategori_id\":null,\"kategori_nama\":\"Ekonomi\",\"kategori_status\":\"1\",\"kategori_create_time\":\"2022-11-21 10:17:10\",\"kategori_create_by\":\"root\"}', 'Kategori Artikel', 'Insert', '::1', 'Windows 10', 'Chrome - 107.0.0.0'),
(1069, 'root', '2022-11-21 10:17:55', '{\"artikel_id\":\"132E86C3-F472-4D56-821F-40E843B29577\",\"artikel_status\":\"0\",\"artikel_update_by\":\"root\",\"artikel_update_time\":\"2022-11-21 10:17:55\"}', 'Kegiatan CSR', 'Delete', '::1', 'Windows 10', 'Chrome - 107.0.0.0'),
(1070, 'root', '2022-11-21 10:18:08', '{\"kategori_id\":null,\"kategori_nama\":\"Kerja sama\",\"kategori_status\":\"1\",\"kategori_create_time\":\"2022-11-21 10:18:08\",\"kategori_create_by\":\"root\"}', 'Kategori Artikel', 'Insert', '::1', 'Windows 10', 'Chrome - 107.0.0.0'),
(1071, 'root', '2022-11-21 13:11:36', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"Besi\",\"grup_komoditas_tipe\":\"Bahan Penting\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-11-21 13:11:36\"}', 'Grup Komoditas', 'Insert', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1072, 'root', '2022-11-21 13:11:54', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"Semen\",\"grup_komoditas_tipe\":\"Bahan Penting\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-11-21 13:11:54\"}', 'Grup Komoditas', 'Insert', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1073, 'root', '2022-11-21 13:12:33', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"Kelapa\",\"grup_komoditas_tipe\":\"Komoditas\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-11-21 13:12:33\"}', 'Grup Komoditas', 'Insert', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1074, 'root', '2022-11-21 13:33:34', '{\"grup_komoditas_id\":\"2\",\"grup_komoditas_nama\":\"Sayur\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_update_by\":\"root\",\"grup_komoditas_update_time\":\"2022-11-21 13:33:34\"}', 'Grup Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1075, 'root', '2022-11-21 13:43:26', '{\"grup_komoditas_id\":\"2\",\"grup_komoditas_nama\":\"Sayur\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_update_by\":\"root\",\"grup_komoditas_update_time\":\"2022-11-21 13:43:26\"}', 'Grup Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1076, 'root', '2022-11-21 13:44:52', '{\"grup_komoditas_id\":\"2\",\"grup_komoditas_nama\":\"Sayur\",\"grup_komoditas_tipe\":\"Bahan Penting\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_update_by\":\"root\",\"grup_komoditas_update_time\":\"2022-11-21 13:44:52\"}', 'Grup Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1077, 'root', '2022-11-21 13:45:11', '{\"grup_komoditas_id\":\"2\",\"grup_komoditas_nama\":\"Sayur\",\"grup_komoditas_tipe\":\"Bahan Pangan\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_update_by\":\"root\",\"grup_komoditas_update_time\":\"2022-11-21 13:45:11\"}', 'Grup Komoditas', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1078, 'root', '2022-11-21 16:15:38', '{\"pedagang_id\":null,\"pedagang_nama\":\"Adriano\",\"pedagang_pasar\":\"18\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-21 16:15:38\",\"pedagang_status\":\"1\"}', 'Pedagang Pangan', 'Insert', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1079, 'root', '2022-11-21 16:16:19', '{\"pedagang_id\":null,\"pedagang_nama\":\"Zul\",\"pedagang_pasar\":\"18\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-21 16:16:19\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1080, 'root', '2022-11-21 20:45:06', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 107.0.0.0'),
(1081, 'root', '2022-11-21 21:05:36', '{\"login_footer\":\"E-CSR Bengkalis\",\"login_footer_link\":\"https:\\/\\/ankabrata.com\\/\",\"login_bg_banner\":\"#3699ff\",\"login_text_color_banner\":\"#ffffff\",\"login_text1_banner\":\"E-CSRa\",\"login_text2_banner\":\"Kabupaten Bengkalis\",\"login_last_update_time\":\"2022-11-21 21:05:36\",\"login_last_update_by\":\"root\"}', 'Page Management', 'Update', '::1', 'Windows 10', 'Chrome - 107.0.0.0'),
(1082, 'root', '2022-11-21 21:06:02', '{\"main_right_footer\":\"Pangan Pasar\",\"main_left_footer\":\"DISPERINDAG INHIL\",\"main_right_footer_link\":\"https:\\/\\/ankabrata.com\",\"main_left_footer_link\":\"https:\\/\\/ankabrata.com\",\"main_last_update_time\":\"2022-11-21 21:06:02\",\"main_last_update_by\":\"root\",\"main_desktop_logo\":\"\\files\\/management-page\\/img-20221121210602disperindag.png\",\"main_mobile_logo\":\"\\files\\/management-page\\/img-20221121210602disperindag.png\"}', 'Page Management', 'Update', '::1', 'Windows 10', 'Chrome - 107.0.0.0'),
(1083, 'root', '2022-11-22 11:08:22', '{\"jualan_id\":null,\"jualan_pedagang\":\"3\",\"jualan_komoditas\":\"1\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-22 11:08:22\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1084, 'root', '2022-11-22 11:08:27', '{\"jualan_id\":null,\"jualan_pedagang\":\"3\",\"jualan_komoditas\":\"3\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-22 11:08:27\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1085, 'root', '2022-11-22 11:11:53', '{\"jualan_id\":null,\"jualan_pedagang\":\"3\",\"jualan_komoditas\":\"5\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-22 11:11:53\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1086, 'root', '2022-11-22 11:18:01', '{\"jualan_id\":\"4\",\"jualan_update_by\":\"root\",\"jualan_update_time\":\"2022-11-22 11:18:01\",\"jualan_status\":\"0\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1087, 'root', '2022-11-22 11:18:06', '{\"jualan_id\":null,\"jualan_pedagang\":\"3\",\"jualan_komoditas\":\"8\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-22 11:18:06\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1088, 'root', '2022-11-22 11:18:11', '{\"jualan_id\":null,\"jualan_pedagang\":\"3\",\"jualan_komoditas\":\"11\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-22 11:18:11\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1089, 'root', '2022-11-22 13:05:13', '{\"jualan_id\":null,\"jualan_pedagang\":\"3\",\"jualan_komoditas\":\"50\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-22 13:05:13\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1090, 'root', '2022-11-22 13:20:40', '{\"jualan_id\":\"8\",\"jualan_update_by\":\"root\",\"jualan_update_time\":\"2022-11-22 13:20:40\",\"jualan_status\":\"0\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1091, 'root', '2022-11-22 13:20:51', '{\"jualan_id\":null,\"jualan_pedagang\":\"3\",\"jualan_komoditas\":\"9\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-22 13:20:51\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1092, 'root', '2022-11-22 13:20:56', '{\"jualan_id\":null,\"jualan_pedagang\":\"3\",\"jualan_komoditas\":\"54\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-22 13:20:56\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1093, 'root', '2022-11-22 13:21:03', '{\"jualan_id\":null,\"jualan_pedagang\":\"3\",\"jualan_komoditas\":\"56\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-22 13:21:03\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1094, 'root', '2022-11-22 13:21:17', '{\"jualan_id\":null,\"jualan_pedagang\":\"3\",\"jualan_komoditas\":\"10\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-22 13:21:17\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.20', 'Android', 'Aplikasi Android'),
(1095, 'root', '2022-11-25 09:18:44', '{\"pedagang_id\":\"2\",\"pedagang_update_by\":\"root\",\"pedagang_update_time\":\"2022-11-25 09:18:44\",\"pedagang_status\":\"0\"}', 'Pedagang Pangan', 'Update', '192.168.1.16', 'Android', 'Aplikasi Android'),
(1096, 'root', '2022-11-25 09:19:23', '{\"komoditas_id\":\"56\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 09:19:23\"}', 'Komoditas', 'Delete', '192.168.1.16', 'Android', 'Aplikasi Android'),
(1097, 'root', '2022-11-25 10:07:51', '{\"komoditas_id\":\"50\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 10:07:51\"}', 'Komoditas', 'Delete', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1098, 'root', '2022-11-25 10:09:01', '{\"komoditas_id\":\"4\",\"komoditas_grup\":\"4\",\"komoditas_nama\":\"Ikan Selais\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"115.000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 10:09:01\"}', 'Komoditas', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1099, 'root', '2022-11-25 10:09:11', '{\"komoditas_id\":\"3\",\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Daging Sapi\",\"komoditas_satuan\":\"1 kg\",\"komoditas_het\":\"120.000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 10:09:11\"}', 'Komoditas', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1100, 'root', '2022-11-25 10:14:12', '{\"pedagang_id\":\"3\",\"pedagang_update_by\":\"root\",\"pedagang_update_time\":\"2022-11-25 10:14:12\",\"pedagang_status\":\"0\"}', 'Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1101, 'root', '2022-11-25 10:14:15', '{\"pedagang_id\":\"2\",\"pedagang_update_by\":\"root\",\"pedagang_update_time\":\"2022-11-25 10:14:15\",\"pedagang_status\":\"0\"}', 'Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1102, 'root', '2022-11-25 10:15:05', '{\"pedagang_id\":null,\"pedagang_nama\":\"Agus\",\"pedagang_pasar\":\"18\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-25 10:15:05\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1103, 'root', '2022-11-25 10:15:10', '{\"pedagang_id\":null,\"pedagang_nama\":\"Leni\",\"pedagang_pasar\":\"18\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-25 10:15:10\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1104, 'root', '2022-11-25 10:15:18', '{\"pedagang_id\":null,\"pedagang_nama\":\"Wati\",\"pedagang_pasar\":\"18\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-25 10:15:18\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1105, 'root', '2022-11-25 10:15:38', '{\"pedagang_id\":null,\"pedagang_nama\":\"gas\",\"pedagang_pasar\":\"16\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-25 10:15:38\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1106, 'root', '2022-11-25 10:16:03', '{\"pedagang_id\":null,\"pedagang_nama\":\"Parjo\",\"pedagang_pasar\":\"18\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-25 10:16:03\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1107, 'root', '2022-11-25 10:16:08', '{\"pedagang_id\":null,\"pedagang_nama\":\"Kipli\",\"pedagang_pasar\":\"18\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-25 10:16:08\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1108, 'root', '2022-11-25 10:16:14', '{\"pedagang_id\":null,\"pedagang_nama\":\"Nagita\",\"pedagang_pasar\":\"18\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-25 10:16:14\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1109, 'root', '2022-11-25 10:16:19', '{\"pedagang_id\":null,\"pedagang_nama\":\"Rayen\",\"pedagang_pasar\":\"18\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-25 10:16:19\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1110, 'root', '2022-11-25 10:16:35', '{\"jualan_id\":null,\"jualan_pedagang\":\"11\",\"jualan_komoditas\":\"54\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:16:35\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1111, 'root', '2022-11-25 10:16:48', '{\"jualan_id\":null,\"jualan_pedagang\":\"11\",\"jualan_komoditas\":\"52\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:16:48\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1112, 'root', '2022-11-25 10:16:58', '{\"jualan_id\":null,\"jualan_pedagang\":\"11\",\"jualan_komoditas\":\"4\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:16:58\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1113, 'root', '2022-11-25 10:17:07', '{\"jualan_id\":null,\"jualan_pedagang\":\"11\",\"jualan_komoditas\":\"3\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:17:07\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1114, 'root', '2022-11-25 10:22:47', '{\"jualan_id\":null,\"jualan_pedagang\":\"10\",\"jualan_komoditas\":\"1\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:22:47\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1115, 'root', '2022-11-25 10:23:00', '{\"jualan_id\":null,\"jualan_pedagang\":\"10\",\"jualan_komoditas\":\"55\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:23:00\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1116, 'root', '2022-11-25 10:23:12', '{\"jualan_id\":null,\"jualan_pedagang\":\"10\",\"jualan_komoditas\":\"6\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:23:12\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1117, 'root', '2022-11-25 10:23:20', '{\"jualan_id\":null,\"jualan_pedagang\":\"10\",\"jualan_komoditas\":\"5\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:23:20\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1118, 'root', '2022-11-25 10:23:39', '{\"jualan_id\":null,\"jualan_pedagang\":\"9\",\"jualan_komoditas\":\"55\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:23:39\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1119, 'root', '2022-11-25 10:23:45', '{\"jualan_id\":null,\"jualan_pedagang\":\"9\",\"jualan_komoditas\":\"1\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:23:44\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1120, 'root', '2022-11-25 10:23:54', '{\"jualan_id\":null,\"jualan_pedagang\":\"9\",\"jualan_komoditas\":\"5\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:23:54\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1121, 'root', '2022-11-25 10:24:04', '{\"jualan_id\":null,\"jualan_pedagang\":\"9\",\"jualan_komoditas\":\"6\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:24:04\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1122, 'root', '2022-11-25 10:24:17', '{\"jualan_id\":null,\"jualan_pedagang\":\"8\",\"jualan_komoditas\":\"52\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:24:17\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1123, 'root', '2022-11-25 10:24:25', '{\"jualan_id\":null,\"jualan_pedagang\":\"8\",\"jualan_komoditas\":\"11\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:24:25\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1124, 'root', '2022-11-25 10:24:35', '{\"jualan_id\":null,\"jualan_pedagang\":\"8\",\"jualan_komoditas\":\"10\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:24:35\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android');
INSERT INTO `tb_log` (`log_id`, `log_user`, `log_time`, `log_activity`, `log_modul`, `log_type`, `log_ip`, `log_so`, `log_browser`) VALUES
(1125, 'root', '2022-11-25 10:24:40', '{\"jualan_id\":null,\"jualan_pedagang\":\"8\",\"jualan_komoditas\":\"9\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:24:40\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1126, 'root', '2022-11-25 10:24:51', '{\"jualan_id\":null,\"jualan_pedagang\":\"8\",\"jualan_komoditas\":\"4\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:24:51\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1127, 'root', '2022-11-25 10:25:06', '{\"jualan_id\":null,\"jualan_pedagang\":\"6\",\"jualan_komoditas\":\"54\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:25:06\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1128, 'root', '2022-11-25 10:25:32', '{\"jualan_id\":null,\"jualan_pedagang\":\"6\",\"jualan_komoditas\":\"10\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:25:32\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1129, 'root', '2022-11-25 10:25:44', '{\"jualan_id\":null,\"jualan_pedagang\":\"6\",\"jualan_komoditas\":\"9\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:25:44\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1130, 'root', '2022-11-25 10:25:53', '{\"jualan_id\":null,\"jualan_pedagang\":\"6\",\"jualan_komoditas\":\"8\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:25:53\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1131, 'root', '2022-11-25 10:25:58', '{\"jualan_id\":null,\"jualan_pedagang\":\"6\",\"jualan_komoditas\":\"7\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:25:58\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1132, 'root', '2022-11-25 10:26:07', '{\"jualan_id\":null,\"jualan_pedagang\":\"6\",\"jualan_komoditas\":\"3\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:26:07\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1133, 'root', '2022-11-25 10:26:20', '{\"jualan_id\":null,\"jualan_pedagang\":\"4\",\"jualan_komoditas\":\"55\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:26:20\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1134, 'root', '2022-11-25 10:26:25', '{\"jualan_id\":null,\"jualan_pedagang\":\"4\",\"jualan_komoditas\":\"1\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:26:25\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1135, 'root', '2022-11-25 10:26:30', '{\"jualan_id\":null,\"jualan_pedagang\":\"4\",\"jualan_komoditas\":\"6\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:26:30\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1136, 'root', '2022-11-25 10:26:36', '{\"jualan_id\":null,\"jualan_pedagang\":\"4\",\"jualan_komoditas\":\"5\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:26:36\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1137, 'root', '2022-11-25 10:26:50', '{\"jualan_id\":null,\"jualan_pedagang\":\"5\",\"jualan_komoditas\":\"54\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:26:50\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1138, 'root', '2022-11-25 10:26:59', '{\"jualan_id\":null,\"jualan_pedagang\":\"5\",\"jualan_komoditas\":\"11\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:26:59\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1139, 'root', '2022-11-25 10:27:17', '{\"jualan_id\":null,\"jualan_pedagang\":\"5\",\"jualan_komoditas\":\"10\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:27:17\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1140, 'root', '2022-11-25 10:27:38', '{\"jualan_id\":null,\"jualan_pedagang\":\"5\",\"jualan_komoditas\":\"9\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:27:38\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1141, 'root', '2022-11-25 10:27:46', '{\"jualan_id\":null,\"jualan_pedagang\":\"5\",\"jualan_komoditas\":\"8\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:27:46\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1142, 'root', '2022-11-25 10:27:52', '{\"jualan_id\":null,\"jualan_pedagang\":\"5\",\"jualan_komoditas\":\"7\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:27:52\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1143, 'root', '2022-11-25 10:28:08', '{\"jualan_id\":null,\"jualan_pedagang\":\"5\",\"jualan_komoditas\":\"4\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:28:08\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1144, 'root', '2022-11-25 10:28:13', '{\"jualan_id\":null,\"jualan_pedagang\":\"5\",\"jualan_komoditas\":\"3\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-25 10:28:13\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1145, 'root', '2022-11-25 14:48:14', '{\"komoditas_id\":\"4\",\"komoditas_grup\":\"4\",\"komoditas_nama\":\"Ikan Selais\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"115000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 14:48:14\"}', 'Komoditas', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1146, 'root', '2022-11-25 14:48:25', '{\"komoditas_id\":\"3\",\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Daging Sapi\",\"komoditas_satuan\":\"1 kg\",\"komoditas_het\":\"120000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 14:48:25\"}', 'Komoditas', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1147, 'root', '2022-11-25 14:48:45', '{\"komoditas_id\":\"6\",\"komoditas_grup\":\"7\",\"komoditas_nama\":\"Minyak Goreng \",\"komoditas_satuan\":\"1 liter\",\"komoditas_het\":\"22000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 14:48:45\"}', 'Komoditas', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1148, 'root', '2022-11-25 14:49:04', '{\"komoditas_id\":\"55\",\"komoditas_grup\":\"1\",\"komoditas_nama\":\"Beras IR46\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"13500\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 14:49:04\"}', 'Komoditas', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1149, 'root', '2022-11-25 14:49:14', '{\"komoditas_id\":\"54\",\"komoditas_grup\":\"5\",\"komoditas_nama\":\"daging kerbau\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"140000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 14:49:14\"}', 'Komoditas', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1150, 'root', '2022-11-25 14:49:34', '{\"komoditas_id\":\"11\",\"komoditas_grup\":\"3\",\"komoditas_nama\":\"Jahe\",\"komoditas_satuan\":\"1 kg\",\"komoditas_het\":\"15000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 14:49:34\"}', 'Komoditas', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1151, 'root', '2022-11-25 14:49:42', '{\"komoditas_id\":\"52\",\"komoditas_grup\":\"4\",\"komoditas_nama\":\"Lele Akar (Lembat)\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"30000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 14:49:42\"}', 'Komoditas', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1152, 'root', '2022-11-25 14:49:52', '{\"komoditas_id\":\"10\",\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Ayam Kampung\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"21000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 14:49:52\"}', 'Komoditas', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1153, 'root', '2022-11-25 14:50:00', '{\"komoditas_id\":\"9\",\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Ayam Potong\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"21000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 14:50:00\"}', 'Komoditas', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1154, 'root', '2022-11-25 14:50:15', '{\"komoditas_id\":\"10\",\"komoditas_grup\":\"5\",\"komoditas_nama\":\"Ayam Kampung\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"61000\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-25 14:50:15\"}', 'Komoditas', 'Update', '192.168.1.12', 'Android', 'Aplikasi Android'),
(1155, 'root', '2022-11-25 16:24:28', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-25\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_het\":\"120000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"118000\",\"transaksi_catatan\":\"cttn\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-25 16:24:28\"}', 'Transaksi', 'Insert', '192.168.1.16', 'Android', 'Aplikasi Android'),
(1156, 'root', '2022-11-25 16:24:48', '{\"transaksi_id\":\"1\",\"transaksi_harga\":\"118500\",\"transaksi_het\":\"120000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-11-25 16:24:48\"}', 'Transaksi', 'Update', '192.168.1.16', 'Android', 'Aplikasi Android'),
(1157, 'root', '2022-11-25 16:25:02', '{\"transaksi_id\":\"1\",\"transaksi_harga\":\"118500\",\"transaksi_het\":\"120000\",\"transaksi_catatan\":\"cttn\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-11-25 16:25:02\"}', 'Transaksi', 'Update', '192.168.1.16', 'Android', 'Aplikasi Android'),
(1158, 'root', '2022-11-25 16:27:32', '{\"transaksi_id\":\"1\",\"transaksi_harga\":\"118500\",\"transaksi_het\":\"120000\",\"transaksi_catatan\":\"gasss\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-11-25 16:27:32\"}', 'Transaksi', 'Update', '192.168.1.16', 'Android', 'Aplikasi Android'),
(1159, 'root', '2022-11-25 16:27:44', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-25\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_het\":\"115000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"115000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-25 16:27:44\"}', 'Transaksi', 'Insert', '192.168.1.16', 'Android', 'Aplikasi Android'),
(1160, 'root', '2022-11-25 16:27:50', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-25\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"52\",\"transaksi_het\":\"30000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"35000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-25 16:27:50\"}', 'Transaksi', 'Insert', '192.168.1.16', 'Android', 'Aplikasi Android'),
(1161, 'root', '2022-11-25 16:27:57', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-25\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_het\":\"140000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"139000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-25 16:27:57\"}', 'Transaksi', 'Insert', '192.168.1.16', 'Android', 'Aplikasi Android'),
(1162, 'root', '2022-11-28 06:34:36', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_het\":\"120000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"121000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:34:36\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1163, 'root', '2022-11-28 06:34:42', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_het\":\"115000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"115000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:34:42\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1164, 'root', '2022-11-28 06:34:47', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"52\",\"transaksi_het\":\"30000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"30000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:34:47\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1165, 'root', '2022-11-28 06:34:52', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_het\":\"140000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"140000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:34:52\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1166, 'root', '2022-11-28 06:35:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_pedagang\":\"10\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:35:00\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1167, 'root', '2022-11-28 06:35:05', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"6\",\"transaksi_het\":\"22000\",\"transaksi_pedagang\":\"10\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:35:05\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1168, 'root', '2022-11-28 06:35:11', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13500\",\"transaksi_pedagang\":\"10\",\"transaksi_harga\":\"13500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:35:11\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1169, 'root', '2022-11-28 06:35:15', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"10\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:35:15\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1170, 'root', '2022-11-28 06:35:23', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"6\",\"transaksi_het\":\"22000\",\"transaksi_pedagang\":\"9\",\"transaksi_harga\":\"22000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:35:23\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1171, 'root', '2022-11-28 06:35:27', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"9\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:35:27\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1172, 'root', '2022-11-28 06:35:32', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_pedagang\":\"9\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:35:32\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1173, 'root', '2022-11-28 06:35:39', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13500\",\"transaksi_pedagang\":\"9\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:35:39\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1174, 'root', '2022-11-28 06:35:47', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"52\",\"transaksi_het\":\"30000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"29000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:35:47\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1175, 'root', '2022-11-28 06:35:51', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"11\",\"transaksi_het\":\"15000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"15000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:35:51\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1176, 'root', '2022-11-28 06:35:56', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"10\",\"transaksi_het\":\"61000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"61000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:35:56\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1177, 'root', '2022-11-28 06:36:01', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"9\",\"transaksi_het\":\"21000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:36:01\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1178, 'root', '2022-11-28 06:36:07', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_het\":\"115000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"115000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:36:07\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1179, 'root', '2022-11-28 06:36:20', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_het\":\"140000\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"140000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:36:20\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1180, 'root', '2022-11-28 06:36:26', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"10\",\"transaksi_het\":\"61000\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"60000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:36:26\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1181, 'root', '2022-11-28 06:36:31', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"9\",\"transaksi_het\":\"21000\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:36:31\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1182, 'root', '2022-11-28 06:36:37', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"8\",\"transaksi_het\":\"0\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:36:37\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1183, 'root', '2022-11-28 06:36:55', '{\"komoditas_id\":\"8\",\"komoditas_grup\":\"2\",\"komoditas_nama\":\"Bayam\",\"komoditas_satuan\":\"ikat\",\"komoditas_het\":\"2500\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-28 06:36:55\"}', 'Komoditas', 'Update', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1184, 'root', '2022-11-28 06:37:05', '{\"komoditas_id\":\"7\",\"komoditas_grup\":\"2\",\"komoditas_nama\":\"kangkung\",\"komoditas_satuan\":\"ikat\",\"komoditas_het\":\"2500\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-28 06:37:05\"}', 'Komoditas', 'Update', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1185, 'root', '2022-11-28 06:37:21', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13500\",\"transaksi_pedagang\":\"4\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:37:21\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1186, 'root', '2022-11-28 06:37:26', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"4\",\"transaksi_harga\":\"11000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:37:26\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1187, 'root', '2022-11-28 06:37:30', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"6\",\"transaksi_het\":\"22000\",\"transaksi_pedagang\":\"4\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:37:30\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1188, 'root', '2022-11-28 06:37:35', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_pedagang\":\"4\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:37:35\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1189, 'root', '2022-11-28 06:37:45', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_het\":\"140000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"140000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:37:44\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1190, 'root', '2022-11-28 06:37:49', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"11\",\"transaksi_het\":\"15000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"15000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:37:49\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1191, 'root', '2022-11-28 06:37:53', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"10\",\"transaksi_het\":\"61000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"61000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:37:53\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1192, 'root', '2022-11-28 06:37:57', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"9\",\"transaksi_het\":\"21000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:37:57\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1193, 'root', '2022-11-28 06:38:03', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"8\",\"transaksi_het\":\"2500\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:38:03\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1194, 'root', '2022-11-28 06:38:08', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"7\",\"transaksi_het\":\"2500\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:38:08\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1195, 'root', '2022-11-28 06:38:12', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_het\":\"115000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"115000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:38:12\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1196, 'root', '2022-11-28 06:38:17', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_het\":\"120000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"120000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:38:17\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1197, 'root', '2022-11-28 06:38:24', '{\"transaksi_id\":\"25\",\"transaksi_harga\":\"2000\",\"transaksi_het\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-11-28 06:38:24\"}', 'Transaksi', 'Update', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1198, 'root', '2022-11-28 06:38:30', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"7\",\"transaksi_het\":\"2500\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:38:30\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1199, 'root', '2022-11-28 06:38:34', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_het\":\"120000\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"120000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 06:38:34\"}', 'Transaksi', 'Insert', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1200, 'root', '2022-11-28 06:40:12', '{\"transaksi_id\":\"5\",\"transaksi_harga\":\"118000\",\"transaksi_het\":\"120000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-11-28 06:40:12\"}', 'Transaksi', 'Update', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1201, 'root', '2022-11-28 06:40:29', '{\"transaksi_id\":\"37\",\"transaksi_harga\":\"118000\",\"transaksi_het\":\"120000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-11-28 06:40:29\"}', 'Transaksi', 'Update', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1202, 'root', '2022-11-28 07:01:54', '{\"transaksi_id\":\"40\",\"transaksi_harga\":\"120000\",\"transaksi_het\":\"120000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-11-28 07:01:54\"}', 'Transaksi', 'Update', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1203, 'root', '2022-11-28 07:02:07', '{\"transaksi_id\":\"42\",\"transaksi_harga\":\"29000\",\"transaksi_het\":\"30000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-11-28 07:02:07\"}', 'Transaksi', 'Update', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1204, 'root', '2022-11-28 07:02:17', '{\"transaksi_id\":\"54\",\"transaksi_harga\":\"60000\",\"transaksi_het\":\"61000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-11-28 07:02:17\"}', 'Transaksi', 'Update', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1205, 'root', '2022-11-28 07:02:34', '{\"transaksi_id\":\"69\",\"transaksi_harga\":\"2000\",\"transaksi_het\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-11-28 07:02:34\"}', 'Transaksi', 'Update', '10.20.22.1', 'Android', 'Aplikasi Android'),
(1206, 'root', '2022-11-28 12:41:23', 'login', 'Login', 'Insert', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1207, 'root', '2022-11-28 13:49:44', '{\"pasar_id\":null,\"pasar_nama\":\"Pasar Selodang Kelapa\",\"pasar_alamat\":\"Tembilahan\",\"pasar_kecamatan\":\"14.04.04\",\"pasar_kelurahan\":\"14.04.04.1001\",\"pasar_create_by\":\"root\",\"pasar_status\":\"1\",\"pasar_create_time\":\"2022-11-28 13:49:44\"}', 'Data Pasar', 'Insert', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1208, 'root', '2022-11-28 13:50:05', '{\"pedagang_id\":null,\"pedagang_nama\":\"Silvi\",\"pedagang_pasar\":\"19\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-28 13:50:05\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1209, 'root', '2022-11-28 13:50:10', '{\"pedagang_id\":null,\"pedagang_nama\":\"Acu\",\"pedagang_pasar\":\"19\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-28 13:50:10\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1210, 'root', '2022-11-28 13:50:16', '{\"pedagang_id\":null,\"pedagang_nama\":\"Badur\",\"pedagang_pasar\":\"19\",\"pedagang_create_by\":\"root\",\"pedagang_create_time\":\"2022-11-28 13:50:16\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1211, 'root', '2022-11-28 13:50:58', '{\"komoditas_id\":\"55\",\"komoditas_grup\":\"1\",\"komoditas_nama\":\"Beras Cap Kayu Manis\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"13500\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-28 13:50:58\"}', 'Komoditas', 'Update', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1212, 'root', '2022-11-28 13:51:06', '{\"komoditas_id\":\"55\",\"komoditas_grup\":\"1\",\"komoditas_nama\":\"Beras Cap Kayu Manis\",\"komoditas_satuan\":\"kg\",\"komoditas_het\":\"13300\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-28 13:51:06\"}', 'Komoditas', 'Update', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1213, 'root', '2022-11-28 13:51:25', '{\"jualan_id\":null,\"jualan_pedagang\":\"14\",\"jualan_komoditas\":\"55\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-28 13:51:25\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1214, 'root', '2022-11-28 13:51:38', '{\"jualan_id\":null,\"jualan_pedagang\":\"13\",\"jualan_komoditas\":\"55\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-28 13:51:38\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1215, 'root', '2022-11-28 13:51:47', '{\"jualan_id\":null,\"jualan_pedagang\":\"12\",\"jualan_komoditas\":\"55\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-28 13:51:47\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1216, 'root', '2022-11-28 13:52:13', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"14\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 13:52:13\"}', 'Transaksi', 'Insert', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1217, 'root', '2022-11-28 13:52:21', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"13\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 13:52:21\"}', 'Transaksi', 'Insert', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1218, 'root', '2022-11-28 13:52:31', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-11-28\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"12\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-11-28 13:52:31\"}', 'Transaksi', 'Insert', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1219, 'root', '2022-11-28 13:54:04', '{\"jualan_id\":null,\"jualan_pedagang\":\"14\",\"jualan_komoditas\":\"1\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-28 13:54:04\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1220, 'root', '2022-11-28 13:54:20', '{\"jualan_id\":null,\"jualan_pedagang\":\"13\",\"jualan_komoditas\":\"1\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-11-28 13:54:20\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1221, 'root', '2022-11-28 13:55:56', '{\"komoditas_id\":\"55\",\"komoditas_grup\":\"1\",\"komoditas_nama\":\"Beras Cap Kayu Manis\",\"komoditas_satuan\":\"1 kg\",\"komoditas_het\":\"13300\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-11-28 13:55:56\"}', 'Komoditas', 'Update', '192.168.180.2', 'Android', 'Aplikasi Android'),
(1222, 'root', '2022-12-13 10:33:51', '{\"grup_komoditas_id\":\"10\",\"grup_komoditas_status\":\"0\",\"grup_komoditas_update_by\":\"root\",\"grup_komoditas_update_time\":\"2022-12-13 10:33:51\"}', 'Grup Komoditas', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1223, 'root', '2022-12-13 10:33:54', '{\"grup_komoditas_id\":\"9\",\"grup_komoditas_status\":\"0\",\"grup_komoditas_update_by\":\"root\",\"grup_komoditas_update_time\":\"2022-12-13 10:33:54\"}', 'Grup Komoditas', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1224, 'root', '2022-12-13 10:34:15', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"Bahan Bangunan\",\"grup_komoditas_tipe\":\"Bahan Penting\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-12-13 10:34:15\"}', 'Grup Komoditas', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1225, 'root', '2022-12-13 10:34:55', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"Bahan Pertanian\",\"grup_komoditas_tipe\":\"Bahan Penting\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-12-13 10:34:55\"}', 'Grup Komoditas', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1226, 'root', '2022-12-13 10:35:05', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"Komoditas Perkebunan\",\"grup_komoditas_tipe\":\"Bahan Penting\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-12-13 10:35:05\"}', 'Grup Komoditas', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1227, 'root', '2022-12-13 11:51:07', '{\"barang_id\":null,\"barang_grup\":false,\"barang_nama\":\"Semen Holcim 30 Kg\",\"barang_satuan\":\"30 kg\",\"barang_het\":\"0\",\"barang_status\":\"1\",\"barang_create_by\":\"root\",\"barang_create_time\":\"2022-12-13 11:51:07\",\"barang_foto\":\"\\files\\/komoditas\\/Semen Holcim 30 Kg-620221213115107.jpg\"}', 'Barang Penting', 'Insert', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1228, 'root', '2022-12-13 11:53:20', '{\"barang_id\":null,\"barang_grup\":\"12\",\"barang_nama\":\"Semen Holcim 30 Kg\",\"barang_satuan\":\"30 kg\",\"barang_het\":\"0\",\"barang_status\":\"1\",\"barang_create_by\":\"root\",\"barang_create_time\":\"2022-12-13 11:53:20\",\"barang_foto\":\"\\files\\/komoditas\\/Semen Holcim 30 Kg-9320221213115320.jpg\"}', 'Barang Penting', 'Insert', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1229, 'root', '2022-12-13 11:56:37', '{\"barang_id\":\"2\",\"barang_grup\":\"12\",\"barang_nama\":\"Semen Holcim 30 Kg\",\"barang_satuan\":\"30 kg\",\"barang_het\":\"0\",\"barang_status\":\"1\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-13 11:56:37\",\"barang_foto\":\"\\files\\/komoditas\\/Semen Holcim 30 Kg-6520221213115637.jpg\"}', 'Barang Penting', 'Update', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1230, 'root', '2022-12-13 11:56:43', '{\"barang_id\":\"2\",\"barang_grup\":\"12\",\"barang_nama\":\"Semen Holcim 30 Kg\",\"barang_satuan\":\"30 kg\",\"barang_het\":\"12\",\"barang_status\":\"1\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-13 11:56:43\",\"barang_foto\":\"\\files\\/komoditas\\/Semen Holcim 30 Kg-7720221213115643.jpg\"}', 'Barang Penting', 'Update', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1231, 'root', '2022-12-13 11:56:51', '{\"barang_id\":\"2\",\"barang_grup\":\"12\",\"barang_nama\":\"Semen Holcim 30 Kg\",\"barang_satuan\":\"30 kg\",\"barang_het\":\"0\",\"barang_status\":\"1\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-13 11:56:51\",\"barang_foto\":\"\\files\\/komoditas\\/Semen Holcim 30 Kg-2520221213115651.jpg\"}', 'Barang Penting', 'Update', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1232, 'root', '2022-12-13 11:58:22', '{\"barang_id\":\"2\",\"barang_status\":\"0\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-13 11:58:22\"}', 'Barang Penting', 'Delete', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1233, 'root', '2022-12-13 12:16:13', '{\"barang_id\":\"2\",\"barang_grup\":\"12\",\"barang_nama\":\"Semen Holcim 30 Kg\",\"barang_satuan\":\"30 kg\",\"barang_het\":\"10\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-13 12:16:13\",\"barang_het_update_time\":\"2022-12-13 12:16:13\",\"barang_foto\":\"\\files\\/komoditas\\/Semen Holcim 30 Kg-5220221213121613.jpg\"}', 'Barang Penting', 'Update', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1234, 'root', '2022-12-13 13:46:23', '{\"distributor_id\":null,\"distributor_nama\":\"CV Sinar Utama\",\"distributor_status\":\"1\",\"distributor_create_by\":\"root\",\"distributor_create_time\":\"2022-12-13 13:46:23\"}', 'Distributor Barang Penting', 'Insert', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1235, 'root', '2022-12-13 14:00:55', '{\"pedagang_id\":\"14\",\"pedagang_nama\":\"Badura\",\"pedagang_pasar\":\"19\",\"pedagang_update_by\":\"root\",\"pedagang_update_time\":\"2022-12-13 14:00:55\"}', 'Pedagang Pangan', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1236, 'root', '2022-12-13 14:36:05', '{\"barang_id\":null,\"barang_grup\":\"12\",\"barang_nama\":\"Semen Tiga Roda 50 Kg\",\"barang_satuan\":\"50 Kg\",\"barang_het\":\"85000\",\"barang_status\":\"1\",\"barang_create_by\":\"root\",\"barang_create_time\":\"2022-12-13 14:36:05\",\"barang_het_update_time\":\"2022-12-13 14:36:05\",\"barang_foto\":\"\\files\\/komoditas\\/Semen Tiga Roda 50 Kg-520221213143605.jpeg\"}', 'Barang Penting', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1237, 'root', '2022-12-13 14:39:47', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"tes\",\"grup_komoditas_tipe\":\"Bahan Pangan\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-12-13 14:39:47\"}', 'Grup Komoditas', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1238, 'root', '2022-12-13 14:42:20', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"he\",\"grup_komoditas_tipe\":\"Bahan Pangan\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-12-13 14:42:20\"}', 'Grup Komoditas', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1239, 'root', '2022-12-13 14:45:52', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"gaddd\",\"grup_komoditas_tipe\":\"Barang Pangan\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-12-13 14:45:52\"}', 'Grup Komoditas', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1240, 'root', '2022-12-13 14:46:10', '{\"grup_komoditas_id\":\"17\",\"grup_komoditas_status\":\"0\",\"grup_komoditas_update_by\":\"root\",\"grup_komoditas_update_time\":\"2022-12-13 14:46:10\"}', 'Grup Komoditas', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1241, 'root', '2022-12-13 14:46:14', '{\"grup_komoditas_id\":\"15\",\"grup_komoditas_status\":\"0\",\"grup_komoditas_update_by\":\"root\",\"grup_komoditas_update_time\":\"2022-12-13 14:46:13\"}', 'Grup Komoditas', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1242, 'root', '2022-12-13 14:53:03', '{\"barang_id\":null,\"barang_grup\":\"13\",\"barang_nama\":\"Pupuk KCL \",\"barang_satuan\":\"1 Kg\",\"barang_het\":\"18000\",\"barang_status\":\"1\",\"barang_create_by\":\"root\",\"barang_create_time\":\"2022-12-13 14:53:03\",\"barang_het_update_time\":\"2022-12-13 14:53:03\",\"barang_foto\":\"\\files\\/komoditas\\/Pupuk KCL -9720221213145303.jpeg\"}', 'Barang Penting', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1243, 'root', '2022-12-13 15:00:59', '{\"barang_id\":\"3\",\"barang_grup\":\"12\",\"barang_nama\":\"Semen44 Tiga Roda 50 Kg\",\"barang_satuan\":\"50 Kg\",\"barang_het\":\"85000\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-13 15:00:59\"}', 'Barang Penting', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1244, 'root', '2022-12-13 15:01:46', '{\"barang_id\":\"3\",\"barang_grup\":\"12\",\"barang_nama\":\"Semen Tiga Roda 50 Kg\",\"barang_satuan\":\"50 Kg\",\"barang_het\":\"85000\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-13 15:01:46\"}', 'Barang Penting', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1245, 'root', '2022-12-13 15:03:17', '{\"barang_id\":\"2\",\"barang_status\":\"0\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-13 15:03:17\"}', 'Barang Penting', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1246, 'root', '2022-12-13 15:03:46', '{\"barang_id\":\"4\",\"barang_status\":\"0\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-13 15:03:46\"}', 'Barang Penting', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1247, 'root', '2022-12-13 16:40:24', '{\"distributor_id\":\"1\",\"distributor_status\":\"0\",\"distributor_update_by\":\"root\",\"distributor_update_time\":\"2022-12-13 16:40:24\"}', 'Distributor Barang Penting', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1248, 'root', '2022-12-13 16:40:59', '{\"distributor_id\":null,\"distributor_nama\":\"Toko ACC\",\"distributor_status\":\"1\",\"distributor_create_by\":\"root\",\"distributor_create_time\":\"2022-12-13 16:40:59\"}', 'Distributor Barang Penting', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1249, 'root', '2022-12-13 16:41:09', '{\"distributor_id\":null,\"distributor_nama\":\"Bangsal Yulius\",\"distributor_status\":\"1\",\"distributor_create_by\":\"root\",\"distributor_create_time\":\"2022-12-13 16:41:09\"}', 'Distributor Barang Penting', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1250, 'root', '2022-12-14 09:43:41', '{\"distributor_id\":\"3\",\"distributor_nama\":\"Bangsal Yuliusu\",\"distributor_update_by\":\"root\",\"distributor_update_time\":\"2022-12-14 09:43:41\"}', 'Distributor Barang Penting', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1251, 'root', '2022-12-14 09:43:48', '{\"distributor_id\":\"3\",\"distributor_nama\":\"Bangsal Yulius\",\"distributor_update_by\":\"root\",\"distributor_update_time\":\"2022-12-14 09:43:48\"}', 'Distributor Barang Penting', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1252, '2022-12-14 10:17:33', '2022-12-14 10:17:33', '{\"relasi_id\":null,\"relasi_distributor\":\"1\",\"relasi_barang\":\"2\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-14 10:17:33\"}', 'Detail Distributor Barang Penting', 'Update', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1253, 'root', '2022-12-14 10:18:53', '{\"jualan_id\":null,\"jualan_pedagang\":\"1\",\"jualan_komoditas\":\"2\",\"jualan_create_by\":\"root\",\"jualan_create_time\":\"2022-12-14 10:18:53\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1254, '2022-12-14 10:24:40', '2022-12-14 10:24:40', '{\"relasi_id\":null,\"relasi_distributor\":\"1\",\"relasi_barang\":\"4\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-14 10:24:40\"}', 'Detail Distributor Barang Penting', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1255, '2022-12-14 10:38:00', '2022-12-14 10:38:00', '{\"relasi_id\":null,\"relasi_distributor\":\"1\",\"relasi_barang\":\"3\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-14 10:38:00\"}', 'Detail Distributor Barang Penting', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1256, '2022-12-14 10:38:28', '2022-12-14 10:38:28', '{\"relasi_id\":\"3\",\"relasi_status\":\"0\",\"relasi_update_by\":\"root\",\"relasi_update_time\":\"2022-12-14 10:38:28\"}', 'Detail Distributor Barang Penting', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1257, '2022-12-14 10:39:56', '2022-12-14 10:39:56', '{\"relasi_id\":\"2\",\"relasi_status\":\"0\",\"relasi_update_by\":\"root\",\"relasi_update_time\":\"2022-12-14 10:39:56\"}', 'Detail Distributor Barang Penting', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1258, 'root', '2022-12-14 10:40:31', '{\"distributor_id\":\"1\",\"distributor_nama\":\"CV Sinar Utama\",\"distributor_update_by\":\"root\",\"distributor_update_time\":\"2022-12-14 10:40:31\"}', 'Distributor Barang Penting', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1259, 'root', '2022-12-14 15:01:45', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-14\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"13\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"gas\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-14 15:01:45\"}', 'Transaksi', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1260, 'root', '2022-12-14 16:16:29', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-14\",\"transaksi_pasar\":false,\"transaksi_komoditas\":\"2\",\"transaksi_het\":\"10\",\"transaksi_pedagang\":false,\"transaksi_harga\":\"12\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-14 16:16:29\"}', 'Transaksi', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android');
INSERT INTO `tb_log` (`log_id`, `log_user`, `log_time`, `log_activity`, `log_modul`, `log_type`, `log_ip`, `log_so`, `log_browser`) VALUES
(1261, 'root', '2022-12-14 16:28:13', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-14\",\"transaksi_barang\":\"2\",\"transaksi_het\":\"85000\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"85000\",\"transaksi_catatan\":\"gas pol bos q\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-14 16:28:12\"}', 'Harga Barang Penting', 'Insert', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1262, 'root', '2022-12-14 16:31:52', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-14\",\"transaksi_barang\":\"2\",\"transaksi_het\":\"85000\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"85000\",\"transaksi_catatan\":\"gas pol bos q\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-14 16:31:52\"}', 'Harga Barang Penting', 'Insert', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1263, 'root', '2022-12-14 16:32:15', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-14\",\"transaksi_barang\":\"2\",\"transaksi_het\":\"85000\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"85000\",\"transaksi_catatan\":\"gas pol bos q\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-14 16:32:15\"}', 'Harga Barang Penting', 'Insert', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1264, 'root', '2022-12-14 16:32:17', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-14\",\"transaksi_barang\":\"2\",\"transaksi_het\":\"85000\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"85000\",\"transaksi_catatan\":\"gas pol bos q\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-14 16:32:17\"}', 'Harga Barang Penting', 'Insert', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1265, 'root', '2022-12-14 16:32:24', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-14\",\"transaksi_barang\":\"2\",\"transaksi_het\":\"85000\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"84000\",\"transaksi_catatan\":\"gas pol bos q\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-14 16:32:24\"}', 'Harga Barang Penting', 'Insert', '192.168.137.1', 'Android', 'Aplikasi Android'),
(1266, 'root', '2022-12-14 16:32:55', '{\"transaksi_id\":\"1\",\"transaksi_harga\":\"85000\",\"transaksi_het\":\"10\",\"transaksi_catatan\":\"gas pol bos q\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-14 16:32:55\"}', 'Harga Barang Penting', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1267, 'root', '2022-12-14 20:48:17', '{\"transaksi_id\":\"1\",\"transaksi_harga\":\"850002\",\"transaksi_het\":\"10\",\"transaksi_catatan\":\"gas pol bos q\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-14 20:48:17\"}', 'Harga Barang Penting', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1268, 'root', '2022-12-14 20:48:39', '{\"transaksi_id\":\"1\",\"transaksi_harga\":\"85000\",\"transaksi_het\":\"10\",\"transaksi_catatan\":\"gas pol bos q\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-14 20:48:39\"}', 'Harga Barang Penting', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1269, 'root', '2022-12-14 20:49:45', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-14\",\"transaksi_barang\":\"3\",\"transaksi_het\":\"85000\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"85000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-14 20:49:45\"}', 'Harga Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1270, 'root', '2022-12-14 21:36:56', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-14\",\"transaksi_barang\":\"3\",\"transaksi_het\":\"85000\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"85000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-14 21:36:56\"}', 'Harga Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1271, 'root', '2022-12-14 21:37:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-14\",\"transaksi_barang\":\"2\",\"transaksi_het\":\"10\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"85000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-14 21:37:00\"}', 'Harga Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1272, 'root', '2022-12-15 09:23:50', '{\"transaksi_id\":\"8\",\"transaksi_harga\":\"85500\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-15 09:23:50\"}', 'Harga Barang Penting', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1273, 'root', '2022-12-15 09:25:07', '{\"transaksi_id\":\"8\",\"transaksi_harga\":\"86500\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-15 09:25:07\"}', 'Harga Barang Penting', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1274, 'root', '2022-12-15 09:29:18', '{\"transaksi_id\":\"6\",\"transaksi_status\":\"0\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-15 09:29:18\"}', 'Transaksi Barang Penting', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1275, 'root', '2022-12-15 10:54:43', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-15\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":false,\"transaksi_het\":\"85000\",\"transaksi_harga\":\"85000\",\"transaksi_catatan\":\"gas\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-15 10:54:43\"}', 'Transaksi Barang Penting', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1276, 'root', '2022-12-15 11:02:32', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-15\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"Semen Holcim 30 Kg\",\"transaksi_het\":\"85000\",\"transaksi_harga\":\"85000\",\"transaksi_catatan\":\"tetap\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-15 11:02:32\"}', 'Transaksi Barang Penting', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1277, 'root', '2022-12-15 11:05:39', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-15\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"Semen Holcim 30 Kg\",\"transaksi_het\":\"85000\",\"transaksi_harga\":\"5000\",\"transaksi_catatan\":\"gad\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-15 11:05:39\"}', 'Transaksi Barang Penting', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1278, 'root', '2022-12-15 11:07:29', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-15\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"Semen Holcim 30 Kg\",\"transaksi_het\":\"85000\",\"transaksi_harga\":\"5555\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-15 11:07:29\"}', 'Transaksi Barang Penting', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1279, 'root', '2022-12-15 11:09:40', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-15\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"2\",\"transaksi_het\":\"85000\",\"transaksi_harga\":\"85000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-15 11:09:40\"}', 'Transaksi Barang Penting', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1280, 'root', '2022-12-15 11:47:33', '{\"transaksi_id\":\"78\",\"transaksi_harga\":\"12500\",\"transaksi_catatan\":\"gas\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-15 11:47:33\"}', 'Transaksi', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1281, 'root', '2022-12-15 11:48:23', '{\"transaksi_id\":\"78\",\"transaksi_harga\":\"12500\",\"transaksi_catatan\":\"gas\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-15 11:48:23\"}', 'Transaksi', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1282, 'root', '2022-12-15 11:50:10', '{\"transaksi_id\":\"78\",\"transaksi_status\":\"0\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-15 11:50:10\"}', 'Transaksi', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1283, 'root', '2022-12-15 14:03:50', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-15\",\"transaksi_pasar\":\"18\",\"transaksi_pedagang\":\"10\",\"transaksi_komoditas\":false,\"transaksi_harga\":\"12000\",\"transaksi_het\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-15 14:03:50\"}', 'Transaksi', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1284, 'root', '2022-12-15 14:06:06', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-15\",\"transaksi_pasar\":\"18\",\"transaksi_pedagang\":\"10\",\"transaksi_komoditas\":\"5\",\"transaksi_harga\":\"20000\",\"transaksi_het\":\"20000\",\"transaksi_catatan\":\"gas\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-15 14:06:06\"}', 'Transaksi', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1285, 'root', '2022-12-15 15:38:49', '{\"barang_id\":null,\"barang_grup\":\"11\",\"barang_nama\":\"Kelapa\",\"barang_satuan\":\"Butir\",\"barang_het\":\"4000\",\"barang_status\":\"1\",\"barang_create_by\":\"root\",\"barang_create_time\":\"2022-12-15 15:38:49\",\"barang_het_update_time\":\"2022-12-15 15:38:49\",\"barang_foto\":\"\\files\\/komoditas\\/Kelapa-6720221215153849.jpeg\"}', 'Barang Lainnya', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1286, 'root', '2022-12-15 15:40:46', '{\"barang_id\":null,\"barang_grup\":\"11\",\"barang_nama\":\"Sawit\",\"barang_satuan\":\"kg\",\"barang_het\":\"2100\",\"barang_status\":\"1\",\"barang_create_by\":\"root\",\"barang_create_time\":\"2022-12-15 15:40:46\",\"barang_het_update_time\":\"2022-12-15 15:40:46\",\"barang_foto\":\"\\files\\/komoditas\\/Sawit-8520221215154046.jpeg\"}', 'Barang Lainnya', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1287, 'root', '2022-12-15 16:08:38', '{\"barang_id\":\"2\",\"barang_grup\":\"11\",\"barang_nama\":\"Sawitan\",\"barang_satuan\":\"kg\",\"barang_het\":\"2100\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-15 16:08:38\",\"barang_het_update_time\":\"2022-12-15 16:08:38\"}', 'Barang Penting', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1288, 'root', '2022-12-15 16:09:45', '{\"barang_id\":\"2\",\"barang_grup\":\"14\",\"barang_nama\":\"Semen Holcim 30 Kg\",\"barang_satuan\":\"kg\",\"barang_het\":\"2100\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-15 16:09:45\"}', 'Barang Penting', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1289, 'root', '2022-12-15 16:10:50', '{\"barang_id\":\"2\",\"barang_grup\":\"11\",\"barang_nama\":\"Sawita\",\"barang_satuan\":\"kg\",\"barang_het\":\"2100\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-15 16:10:50\"}', 'Barang Lainnya', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1290, 'root', '2022-12-15 16:10:59', '{\"barang_id\":\"2\",\"barang_grup\":\"11\",\"barang_nama\":\"Sawit\",\"barang_satuan\":\"1 kg\",\"barang_het\":\"2100\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-15 16:10:59\"}', 'Barang Lainnya', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1291, 'root', '2022-12-15 16:11:07', '{\"barang_id\":\"1\",\"barang_status\":\"0\",\"barang_update_by\":\"root\",\"barang_update_time\":\"2022-12-15 16:11:07\"}', 'Barang Lainnya', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1292, 'root', '2022-12-15 16:24:10', '{\"distributor_id\":null,\"distributor_nama\":\"SPBU KM7\",\"distributor_status\":\"1\",\"distributor_create_by\":\"root\",\"distributor_create_time\":\"2022-12-15 16:24:10\"}', 'Distributor Barang Penting', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1293, 'root', '2022-12-15 16:25:21', '{\"distributor_id\":null,\"distributor_nama\":\"SPBU Tembilahan\",\"distributor_status\":\"1\",\"distributor_create_by\":\"root\",\"distributor_create_time\":\"2022-12-15 16:25:21\"}', 'Distributor Barang Lainnya', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1294, 'root', '2022-12-15 16:28:51', '{\"distributor_id\":\"1\",\"distributor_nama\":\"Mulia Jaya\",\"distributor_update_by\":\"root\",\"distributor_update_time\":\"2022-12-15 16:28:51\"}', 'Distributor Barang Lainnya', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1295, '2022-12-15 16:33:52', '2022-12-15 16:33:52', '{\"relasi_id\":null,\"relasi_distributor\":\"1\",\"relasi_barang\":\"1\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-15 16:33:52\"}', 'Detail Distributor Barang Lainnya', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1296, '2022-12-15 16:34:04', '2022-12-15 16:34:04', '{\"relasi_id\":\"1\",\"relasi_status\":\"0\",\"relasi_update_by\":\"root\",\"relasi_update_time\":\"2022-12-15 16:34:04\"}', 'Detail Distributor Barang Lainnya', 'Delete', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1297, '2022-12-15 16:34:32', '2022-12-15 16:34:32', '{\"relasi_id\":null,\"relasi_distributor\":\"1\",\"relasi_barang\":\"1\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-15 16:34:32\"}', 'Detail Distributor Barang Lainnya', 'Update', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1298, 'root', '2022-12-15 17:05:38', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-15\",\"transaksi_barang\":\"1\",\"transaksi_het\":\"4000\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"4000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-15 17:05:38\"}', 'Harga Barang Lainnya', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1299, 'root', '2022-12-16 11:22:13', '{\"grup_komoditas_id\":null,\"grup_komoditas_nama\":\"Bahan Pokok\",\"grup_komoditas_tipe\":\"Stok\",\"grup_komoditas_status\":\"1\",\"grup_komoditas_create_by\":\"root\",\"grup_komoditas_create_time\":\"2022-12-16 11:22:13\"}', 'Grup Komoditas', 'Insert', '192.168.137.110', 'Android', 'Aplikasi Android'),
(1300, 'root', '2022-12-16 14:15:32', '{\"komoditas_id\":null,\"komoditas_grup\":\"1\",\"komoditas_nama\":\"Beras\",\"komoditas_satuan\":\"ton\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-12-16 14:15:32\"}', 'Komoditas Stok', 'Insert', '::1', 'Android', 'Aplikasi Android'),
(1301, 'root', '2022-12-16 14:17:20', '{\"komoditas_id\":null,\"komoditas_grup\":\"18\",\"komoditas_nama\":\"Beras\",\"komoditas_satuan\":\"Ton\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-12-16 14:17:20\",\"komoditas_foto\":\"\\files\\/komoditas\\/Beras-6420221216141720.jpeg\"}', 'Komoditas Stok', 'Insert', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1302, 'root', '2022-12-16 14:18:21', '{\"komoditas_id\":null,\"komoditas_grup\":\"18\",\"komoditas_nama\":\"Gula Pasir\",\"komoditas_satuan\":\"Ton\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-12-16 14:18:21\",\"komoditas_foto\":\"\\files\\/komoditas\\/Gula Pasir-9820221216141821.jpeg\"}', 'Komoditas Stok', 'Insert', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1303, 'root', '2022-12-16 14:26:25', '{\"komoditas_id\":\"2\",\"komoditas_grup\":\"18\",\"komoditas_nama\":\"Berase mase\",\"komoditas_satuan\":\"Ton\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-12-16 14:26:25\"}', 'Komoditas Stok', 'Update', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1304, 'root', '2022-12-16 14:27:28', '{\"komoditas_id\":\"2\",\"komoditas_status\":\"0\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-12-16 14:27:28\"}', 'Komoditas Stok', 'Delete', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1305, 'root', '2022-12-16 14:54:47', '{\"distributor_id\":null,\"distributor_nama\":\"Hadi\",\"distributor_toko\":\"Toko Hadi\",\"distributor_alamat\":\"Lr. Kampung Melayu\",\"distributor_kontak\":\"081272927000\",\"distributor_status\":\"1\",\"distributor_create_by\":\"root\",\"distributor_create_time\":\"2022-12-16 14:54:47\"}', 'Distributor Stok', 'Insert', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1306, 'root', '2022-12-16 15:08:22', '{\"distributor_id\":\"1\",\"distributor_status\":\"0\",\"distributor_update_by\":\"root\",\"distributor_update_time\":\"2022-12-16 15:08:22\"}', 'Distributor Stok', 'Delete', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1307, 'root', '2022-12-16 15:09:36', '{\"distributor_id\":\"1\",\"distributor_status\":\"0\",\"distributor_update_by\":\"root\",\"distributor_update_time\":\"2022-12-16 15:09:36\"}', 'Distributor Stok', 'Delete', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1308, 'root', '2022-12-16 15:31:30', '{\"distributor_id\":\"1\",\"distributor_nama\":\"Hadi\",\"distributor_toko\":\"Toko Hadi asnal\",\"distributor_alamat\":\"Lr. Kampung Melayu\",\"distributor_kontak\":\"081272927000\",\"distributor_update_by\":\"root\",\"distributor_update_time\":\"2022-12-16 15:31:30\"}', 'Distributor Stok', 'Update', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1309, 'root', '2022-12-16 15:31:35', '{\"distributor_id\":\"1\",\"distributor_nama\":\"Hadi\",\"distributor_toko\":\"Toko Hadi\",\"distributor_alamat\":\"Lr. Kampung Melayu\",\"distributor_kontak\":\"081272927000\",\"distributor_update_by\":\"root\",\"distributor_update_time\":\"2022-12-16 15:31:35\"}', 'Distributor Stok', 'Update', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1310, '2022-12-16 15:33:02', '2022-12-16 15:33:02', '{\"relasi_id\":null,\"relasi_distributor\":\"Umhxc2ZDeHlpc1JpYWNIUVdzNG1sZz09\",\"relasi_barang\":\"UUdXKzNPRzE2THZweGRTOWMvMnVFdz09\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-16 15:33:02\"}', 'Detail Distributor Stok', 'Update', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1311, '2022-12-16 15:33:15', '2022-12-16 15:33:15', '{\"relasi_id\":null,\"relasi_distributor\":\"1\",\"relasi_barang\":\"3\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-16 15:33:15\"}', 'Detail Distributor Stok', 'Update', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1312, '2022-12-16 15:33:18', '2022-12-16 15:33:18', '{\"relasi_id\":null,\"relasi_distributor\":\"1\",\"relasi_barang\":\"2\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-16 15:33:18\"}', 'Detail Distributor Stok', 'Update', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1313, '2022-12-16 15:38:15', '2022-12-16 15:38:15', '{\"relasi_id\":\"3\",\"relasi_status\":\"0\",\"relasi_update_by\":\"root\",\"relasi_update_time\":\"2022-12-16 15:38:15\"}', 'Detail Distributor Stok', 'Delete', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1314, '2022-12-16 15:38:20', '2022-12-16 15:38:20', '{\"relasi_id\":null,\"relasi_distributor\":\"1\",\"relasi_barang\":\"2\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-16 15:38:20\"}', 'Detail Distributor Stok', 'Update', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1315, 'root', '2022-12-16 15:38:32', '{\"distributor_id\":\"1\",\"distributor_nama\":\"-\",\"distributor_toko\":\"Bulog\",\"distributor_alamat\":\"Lr. Kampung Melayu\",\"distributor_kontak\":\"081272927000\",\"distributor_update_by\":\"root\",\"distributor_update_time\":\"2022-12-16 15:38:32\"}', 'Distributor Stok', 'Update', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1316, 'root', '2022-12-16 15:38:45', '{\"distributor_id\":\"1\",\"distributor_nama\":\"Bulog\",\"distributor_toko\":\"\",\"distributor_alamat\":\"Lr. Kampung Melayu\",\"distributor_kontak\":\"081272927000\",\"distributor_update_by\":\"root\",\"distributor_update_time\":\"2022-12-16 15:38:45\"}', 'Distributor Stok', 'Update', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1317, 'root', '2022-12-16 17:18:15', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-16\",\"transaksi_barang\":\"1\",\"transaksi_distributor\":\"1\",\"transaksi_stok\":\"12\",\"transaksi_ketahanan\":\"1 bulan\",\"transaksi_pemasok\":\"dumai\",\"transaksi_catatan\":\"gas\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-16 17:18:15\"}', 'Harga Barang Penting', 'Insert', '::1', 'Android', 'Aplikasi Android'),
(1318, 'root', '2022-12-16 17:19:29', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-16\",\"transaksi_barang\":\"2\",\"transaksi_distributor\":false,\"transaksi_stok\":\"9\",\"transaksi_ketahanan\":\"\",\"transaksi_pemasok\":\"\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-16 17:19:28\"}', 'Harga Barang Penting', 'Insert', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1319, 'root', '2022-12-16 17:20:23', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-16\",\"transaksi_barang\":\"2\",\"transaksi_distributor\":false,\"transaksi_stok\":\"98\",\"transaksi_ketahanan\":\"\",\"transaksi_pemasok\":\"\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-16 17:20:23\"}', 'Harga Barang Penting', 'Insert', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1320, 'root', '2022-12-16 17:21:21', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-16\",\"transaksi_barang\":\"2\",\"transaksi_distributor\":\"1\",\"transaksi_stok\":\"8\",\"transaksi_ketahanan\":\"\",\"transaksi_pemasok\":\"\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-16 17:21:21\"}', 'Harga Barang Penting', 'Insert', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1321, 'root', '2022-12-16 17:22:02', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-16\",\"transaksi_barang\":\"2\",\"transaksi_distributor\":\"1\",\"transaksi_stok\":\"9\",\"transaksi_ketahanan\":\"\",\"transaksi_pemasok\":\"\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-16 17:22:02\"}', 'Harga Barang Penting', 'Insert', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1322, 'root', '2022-12-16 17:22:15', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-16\",\"transaksi_barang\":\"3\",\"transaksi_distributor\":\"1\",\"transaksi_stok\":\"7\",\"transaksi_ketahanan\":\"\",\"transaksi_pemasok\":\"\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-16 17:22:15\"}', 'Harga Barang Penting', 'Insert', '192.168.137.106', 'Android', 'Aplikasi Android'),
(1323, 'root', '2022-12-16 21:42:26', '{\"transaksi_id\":\"5\",\"transaksi_stok\":\"98\",\"transaksi_pemasok\":\"gas\",\"transaksi_ketahanan\":\"ss\",\"transaksi_catatan\":\"hi\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-16 21:42:26\"}', 'Transaksi Stok', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1324, 'root', '2022-12-16 21:43:11', '{\"transaksi_id\":\"6\",\"transaksi_stok\":\"73\",\"transaksi_pemasok\":\"\",\"transaksi_ketahanan\":\"\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-16 21:43:11\"}', 'Transaksi Stok', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1325, 'root', '2022-12-16 21:43:27', '{\"transaksi_id\":\"5\",\"transaksi_status\":\"0\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-16 21:43:27\"}', 'Transaksi Stok', 'Delete', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1326, 'root', '2022-12-16 22:00:37', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-16\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"2\",\"transaksi_stok\":\"4\",\"transaksi_pemasok\":\"gg\",\"transaksi_ketahanan\":\"gd\",\"transaksi_catatan\":\"hh\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-16 22:00:37\"}', 'Transaksi Stok', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1327, 'root', '2022-12-17 07:23:38', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1328, 'root', '2022-12-17 10:01:44', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"14\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:01:44\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1329, 'root', '2022-12-17 10:01:49', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"14\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:01:49\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1330, 'root', '2022-12-17 10:01:56', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"13\",\"transaksi_harga\":\"12500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:01:56\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1331, 'root', '2022-12-17 10:02:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"13\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:02:00\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1332, 'root', '2022-12-17 10:02:07', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"12\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:02:07\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1333, 'root', '2022-12-17 10:02:19', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_het\":\"120000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"121000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:02:19\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1334, 'root', '2022-12-17 10:02:24', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_het\":\"115000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"117000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:02:24\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1335, 'root', '2022-12-17 10:02:29', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"52\",\"transaksi_het\":\"30000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"29000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:02:29\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1336, 'root', '2022-12-17 10:02:34', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_het\":\"140000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"140000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:02:34\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1337, 'root', '2022-12-17 10:02:41', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_pedagang\":\"10\",\"transaksi_harga\":\"18000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:02:41\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1338, 'root', '2022-12-17 10:02:46', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"6\",\"transaksi_het\":\"22000\",\"transaksi_pedagang\":\"10\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:02:46\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1339, 'root', '2022-12-17 10:02:51', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"10\",\"transaksi_harga\":\"13500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:02:51\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1340, 'root', '2022-12-17 10:02:55', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"10\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:02:55\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1341, 'root', '2022-12-17 10:03:02', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"6\",\"transaksi_het\":\"22000\",\"transaksi_pedagang\":\"9\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:03:02\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1342, 'root', '2022-12-17 10:03:06', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_pedagang\":\"9\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:03:06\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1343, 'root', '2022-12-17 10:03:10', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"9\",\"transaksi_harga\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:03:10\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1344, 'root', '2022-12-17 10:03:14', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"9\",\"transaksi_harga\":\"13500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:03:14\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1345, 'root', '2022-12-17 10:03:25', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_pedagang\":\"4\",\"transaksi_harga\":\"18000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:03:25\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1346, 'root', '2022-12-17 10:03:30', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"6\",\"transaksi_het\":\"22000\",\"transaksi_pedagang\":\"4\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:03:30\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1347, 'root', '2022-12-17 10:03:34', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"4\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:03:34\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1348, 'root', '2022-12-17 10:03:38', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"4\",\"transaksi_harga\":\"115000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:03:38\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1349, 'root', '2022-12-17 10:03:43', '{\"transaksi_id\":\"102\",\"transaksi_harga\":\"11500\",\"transaksi_het\":\"12000\",\"transaksi_catatan\":\"\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-17 10:03:43\"}', 'Transaksi', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1350, 'root', '2022-12-17 10:03:52', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_het\":\"140000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"138000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:03:52\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1351, 'root', '2022-12-17 10:03:56', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"11\",\"transaksi_het\":\"15000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:03:56\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1352, 'root', '2022-12-17 10:04:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"10\",\"transaksi_het\":\"61000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"60000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:04:00\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1353, 'root', '2022-12-17 10:04:04', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"9\",\"transaksi_het\":\"21000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:04:04\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1354, 'root', '2022-12-17 10:04:07', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"8\",\"transaksi_het\":\"2500\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:04:07\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1355, 'root', '2022-12-17 10:04:12', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"7\",\"transaksi_het\":\"2500\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:04:12\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1356, 'root', '2022-12-17 10:04:19', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_het\":\"115000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"112000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:04:19\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1357, 'root', '2022-12-17 10:04:24', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_het\":\"120000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"120000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:04:24\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1358, 'root', '2022-12-17 10:04:33', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_het\":\"140000\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"138000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:04:33\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1359, 'root', '2022-12-17 10:04:38', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"10\",\"transaksi_het\":\"61000\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"60000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:04:38\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1360, 'root', '2022-12-17 10:04:43', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"9\",\"transaksi_het\":\"21000\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:04:43\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1361, 'root', '2022-12-17 10:04:48', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"8\",\"transaksi_het\":\"2500\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:04:48\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1362, 'root', '2022-12-17 10:04:52', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"7\",\"transaksi_het\":\"2500\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:04:52\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1363, 'root', '2022-12-17 10:04:58', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_het\":\"120000\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"118000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:04:58\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1364, 'root', '2022-12-17 10:05:10', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"52\",\"transaksi_het\":\"30000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"29000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:05:10\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1365, 'root', '2022-12-17 10:05:15', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"11\",\"transaksi_het\":\"15000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:05:15\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1366, 'root', '2022-12-17 10:05:20', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"10\",\"transaksi_het\":\"61000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"62000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:05:20\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1367, 'root', '2022-12-17 10:05:24', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"9\",\"transaksi_het\":\"21000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:05:24\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1368, 'root', '2022-12-17 10:05:28', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_het\":\"115000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"115000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 10:05:28\"}', 'Transaksi', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1369, '2022-12-17 15:16:14', '2022-12-17 15:16:14', '{\"relasi_id\":null,\"relasi_distributor\":\"2\",\"relasi_barang\":\"4\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-17 15:16:14\"}', 'Detail Distributor Barang Penting', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1370, 'root', '2022-12-17 15:46:34', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"3\",\"transaksi_het\":\"85000\",\"transaksi_harga\":\"84000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:46:34\"}', 'Transaksi Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1371, 'root', '2022-12-17 15:47:04', '{\"transaksi_id\":\"14\",\"transaksi_status\":\"0\",\"transaksi_update_by\":\"root\",\"transaksi_update_time\":\"2022-12-17 15:47:04\"}', 'Transaksi Barang Penting', 'Delete', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1372, 'root', '2022-12-17 15:47:18', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-15\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"3\",\"transaksi_het\":\"85000\",\"transaksi_harga\":\"84000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:47:18\"}', 'Transaksi Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1373, 'root', '2022-12-17 15:48:47', '{\"barang_id\":null,\"barang_grup\":\"12\",\"barang_nama\":\"Paku 2 Inc\",\"barang_satuan\":\"1 kg\",\"barang_het\":\"20000\",\"barang_status\":\"1\",\"barang_create_by\":\"root\",\"barang_create_time\":\"2022-12-17 15:48:47\",\"barang_het_update_time\":\"2022-12-17 15:48:47\",\"barang_foto\":\"\\files\\/komoditas\\/Paku 2 Inc-1120221217154847.jpg\"}', 'Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1374, '2022-12-17 15:49:00', '2022-12-17 15:49:00', '{\"relasi_id\":null,\"relasi_distributor\":\"1\",\"relasi_barang\":\"5\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-17 15:49:00\"}', 'Detail Distributor Barang Penting', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1375, 'root', '2022-12-17 15:49:22', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:49:21\"}', 'Transaksi Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1376, 'root', '2022-12-17 15:49:54', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:49:54\"}', 'Transaksi Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1377, 'root', '2022-12-17 15:50:29', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-14\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:50:29\"}', 'Transaksi Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1378, 'root', '2022-12-17 15:50:54', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_distributor\":\"2\",\"transaksi_barang\":\"4\",\"transaksi_het\":\"18000\",\"transaksi_harga\":\"17000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:50:54\"}', 'Transaksi Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1379, 'root', '2022-12-17 15:51:17', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-14\",\"transaksi_distributor\":\"2\",\"transaksi_barang\":\"4\",\"transaksi_het\":\"18000\",\"transaksi_harga\":\"18000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:51:17\"}', 'Transaksi Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1380, 'root', '2022-12-17 15:51:29', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-15\",\"transaksi_distributor\":\"2\",\"transaksi_barang\":\"4\",\"transaksi_het\":\"18000\",\"transaksi_harga\":\"18500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:51:29\"}', 'Transaksi Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1381, 'root', '2022-12-17 15:53:48', '{\"barang_id\":null,\"barang_grup\":\"11\",\"barang_nama\":\"Pinang Kering\",\"barang_satuan\":\"1 kg\",\"barang_het\":\"8000\",\"barang_status\":\"1\",\"barang_create_by\":\"root\",\"barang_create_time\":\"2022-12-17 15:53:48\",\"barang_het_update_time\":\"2022-12-17 15:53:48\",\"barang_foto\":\"\\files\\/komoditas\\/Pinang Kering-3320221217155348.jpg\"}', 'Barang Lainnya', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1382, '2022-12-17 15:54:17', '2022-12-17 15:54:17', '{\"relasi_id\":null,\"relasi_distributor\":\"1\",\"relasi_barang\":\"2\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-17 15:54:17\"}', 'Detail Distributor Barang Lainnya', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1383, '2022-12-17 15:54:21', '2022-12-17 15:54:21', '{\"relasi_id\":null,\"relasi_distributor\":\"1\",\"relasi_barang\":\"3\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-17 15:54:21\"}', 'Detail Distributor Barang Lainnya', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1384, 'root', '2022-12-17 15:54:52', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-15\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"2\",\"transaksi_het\":\"2100\",\"transaksi_harga\":\"2200\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:54:52\"}', 'Transaksi Barang Lainnya', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android');
INSERT INTO `tb_log` (`log_id`, `log_user`, `log_time`, `log_activity`, `log_modul`, `log_type`, `log_ip`, `log_so`, `log_browser`) VALUES
(1385, 'root', '2022-12-17 15:55:04', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-15\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"3\",\"transaksi_het\":\"8000\",\"transaksi_harga\":\"8000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:55:04\"}', 'Transaksi Barang Lainnya', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1386, 'root', '2022-12-17 15:55:17', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"1\",\"transaksi_het\":\"4000\",\"transaksi_harga\":\"4000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:55:17\"}', 'Transaksi Barang Lainnya', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1387, 'root', '2022-12-17 15:55:26', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"2\",\"transaksi_het\":\"2100\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:55:26\"}', 'Transaksi Barang Lainnya', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1388, 'root', '2022-12-17 15:55:37', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_distributor\":\"1\",\"transaksi_barang\":\"3\",\"transaksi_het\":\"8000\",\"transaksi_harga\":\"8000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 15:55:37\"}', 'Transaksi Barang Lainnya', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1389, 'root', '2022-12-17 16:42:33', '{\"komoditas_id\":\"2\",\"komoditas_grup\":\"18\",\"komoditas_nama\":\"Beras\",\"komoditas_satuan\":\"Ton\",\"komoditas_status\":\"1\",\"komoditas_update_by\":\"root\",\"komoditas_update_time\":\"2022-12-17 16:42:33\",\"komoditas_foto\":\"\\files\\/komoditas\\/img-20221217164233images (8).jpeg\"}', 'Komoditas Stok', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1390, 'root', '2022-12-17 16:42:48', '{\"komoditas_id\":null,\"komoditas_grup\":\"18\",\"komoditas_nama\":\"Tepung\",\"komoditas_satuan\":\"Ton\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-12-17 16:42:48\",\"komoditas_foto\":\"\\files\\/komoditas\\/Tepung-6020221217164248.jpeg\"}', 'Komoditas Stok', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1391, 'root', '2022-12-17 16:43:05', '{\"komoditas_id\":null,\"komoditas_grup\":\"18\",\"komoditas_nama\":\"Minyak Goreng\",\"komoditas_satuan\":\"liter\",\"komoditas_status\":\"1\",\"komoditas_create_by\":\"root\",\"komoditas_create_time\":\"2022-12-17 16:43:05\",\"komoditas_foto\":\"\\files\\/komoditas\\/Minyak Goreng-9120221217164305.jpeg\"}', 'Komoditas Stok', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1392, '2022-12-17 16:43:23', '2022-12-17 16:43:23', '{\"relasi_id\":null,\"relasi_distributor\":\"1\",\"relasi_barang\":\"5\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-17 16:43:23\"}', 'Detail Distributor Stok', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1393, 'root', '2022-12-17 16:44:08', '{\"distributor_id\":null,\"distributor_nama\":\"Hadi\",\"distributor_toko\":\"Toko Hadi\",\"distributor_alamat\":\"Lr  Kampung Melayu\",\"distributor_kontak\":\"081268800838\",\"distributor_status\":\"1\",\"distributor_create_by\":\"root\",\"distributor_create_time\":\"2022-12-17 16:44:08\"}', 'Distributor Stok', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1394, 'root', '2022-12-17 16:44:37', '{\"distributor_id\":null,\"distributor_nama\":\"Liping\",\"distributor_toko\":\"Bintang Utama\",\"distributor_alamat\":\"JL.Kartini\",\"distributor_kontak\":\"085282048585\",\"distributor_status\":\"1\",\"distributor_create_by\":\"root\",\"distributor_create_time\":\"2022-12-17 16:44:37\"}', 'Distributor Stok', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1395, 'root', '2022-12-17 16:44:52', '{\"distributor_id\":\"1\",\"distributor_nama\":\"Bulog\",\"distributor_toko\":\"\",\"distributor_alamat\":\"jl. pendidikan\",\"distributor_kontak\":\"081272927000\",\"distributor_update_by\":\"root\",\"distributor_update_time\":\"2022-12-17 16:44:52\"}', 'Distributor Stok', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1396, '2022-12-17 16:45:01', '2022-12-17 16:45:01', '{\"relasi_id\":null,\"relasi_distributor\":\"2\",\"relasi_barang\":\"2\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-17 16:45:01\"}', 'Detail Distributor Stok', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1397, '2022-12-17 16:45:06', '2022-12-17 16:45:06', '{\"relasi_id\":null,\"relasi_distributor\":\"2\",\"relasi_barang\":\"3\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-17 16:45:06\"}', 'Detail Distributor Stok', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1398, '2022-12-17 16:45:09', '2022-12-17 16:45:09', '{\"relasi_id\":null,\"relasi_distributor\":\"2\",\"relasi_barang\":\"5\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-17 16:45:09\"}', 'Detail Distributor Stok', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1399, '2022-12-17 16:45:21', '2022-12-17 16:45:21', '{\"relasi_id\":null,\"relasi_distributor\":\"3\",\"relasi_barang\":\"3\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-17 16:45:21\"}', 'Detail Distributor Stok', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1400, '2022-12-17 16:45:25', '2022-12-17 16:45:25', '{\"relasi_id\":null,\"relasi_distributor\":\"3\",\"relasi_barang\":\"2\",\"relasi_status\":\"1\",\"relasi_create_by\":\"root\",\"relasi_create_time\":\"2022-12-17 16:45:25\"}', 'Detail Distributor Stok', 'Update', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1401, 'root', '2022-12-17 16:45:52', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_barang\":\"2\",\"transaksi_distributor\":\"3\",\"transaksi_stok\":\"443\",\"transaksi_ketahanan\":\"2 Minggu\",\"transaksi_pemasok\":\"Sumbar\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 16:45:52\"}', 'Harga Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1402, 'root', '2022-12-17 16:46:12', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_barang\":\"3\",\"transaksi_distributor\":\"3\",\"transaksi_stok\":\"327\",\"transaksi_ketahanan\":\"1 bulan\",\"transaksi_pemasok\":\"Jakarta\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 16:46:12\"}', 'Harga Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1403, 'root', '2022-12-17 16:46:35', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_barang\":\"5\",\"transaksi_distributor\":\"1\",\"transaksi_stok\":\"4767\",\"transaksi_ketahanan\":\"3 minggu\",\"transaksi_pemasok\":\"Bandung\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 16:46:35\"}', 'Harga Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1404, 'root', '2022-12-17 16:46:53', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_barang\":\"2\",\"transaksi_distributor\":\"1\",\"transaksi_stok\":\"142\",\"transaksi_ketahanan\":\"1 minggu\",\"transaksi_pemasok\":\"Jambi\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 16:46:53\"}', 'Harga Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1405, 'root', '2022-12-17 16:47:03', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_barang\":\"3\",\"transaksi_distributor\":\"1\",\"transaksi_stok\":\"322\",\"transaksi_ketahanan\":\"1 minggu\",\"transaksi_pemasok\":\"Jakarta\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 16:47:03\"}', 'Harga Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1406, 'root', '2022-12-17 16:47:24', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_barang\":\"2\",\"transaksi_distributor\":\"2\",\"transaksi_stok\":\"130\",\"transaksi_ketahanan\":\"3 minggu\",\"transaksi_pemasok\":\"Palembang\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 16:47:24\"}', 'Harga Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1407, 'root', '2022-12-17 16:47:36', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_barang\":\"3\",\"transaksi_distributor\":\"2\",\"transaksi_stok\":\"80\",\"transaksi_ketahanan\":\"5 hari\",\"transaksi_pemasok\":\"Jakarta\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 16:47:36\"}', 'Harga Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1408, 'root', '2022-12-17 16:47:47', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-17\",\"transaksi_barang\":\"5\",\"transaksi_distributor\":\"2\",\"transaksi_stok\":\"1881\",\"transaksi_ketahanan\":\"3 minggu\",\"transaksi_pemasok\":\"Dumai\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-17 16:47:47\"}', 'Harga Barang Penting', 'Insert', '192.168.185.23', 'Android', 'Aplikasi Android'),
(1409, 'root', '2022-12-17 21:44:41', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1410, 'root', '2022-12-18 01:15:49', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1411, 'root', '2022-12-18 01:21:06', '{\"artikel_id\":\"65A32F84-211B-4AEC-9585-5662F06D030A\",\"artikel_judul\":\"Lorem Ipsum 1914 translation by H. Rackham\",\"artikel_konten\":\"&lt;p&gt;&lt;span style=\\\"color: rgb(0, 0, 0);\\\"&gt;\\\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\\\"&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(0, 0, 0);\\\"&gt;\\\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\\\"&lt;\\/span&gt;&lt;\\/p&gt;\",\"artikel_url\":\"Lorem-Ipsum-1914-translation-by-h-rackham\",\"artikel_akses\":\"Published\",\"artikel_kategori\":\"6\",\"artikel_img_kode\":\"img-39778139\",\"artikel_update_by\":\"root\",\"artikel_update_time\":\"2022-12-18 01:21:06\"}', 'Artikel', 'Update', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1412, 'root', '2022-12-18 01:21:15', '{\"artikel_id\":\"65A32F84-211B-4AEC-9585-5662F06D030A\",\"artikel_judul\":\"Lorem Ipsum 1914 translation by H. Rackham\",\"artikel_konten\":\"&lt;p&gt;&lt;span style=\\\"color: rgb(0, 0, 0);\\\"&gt;\\\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\\\"&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(0, 0, 0);\\\"&gt;\\\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\\\"&lt;\\/span&gt;&lt;\\/p&gt;\",\"artikel_url\":\"Lorem-Ipsum-1914-translation-by-h-rackham\",\"artikel_akses\":\"Published\",\"artikel_kategori\":\"6\",\"artikel_img_kode\":\"img-39778139\",\"artikel_update_by\":\"root\",\"artikel_update_time\":\"2022-12-18 01:21:15\",\"artikel_gambar\":\"\\files\\/artikel\\/65A32F84-211B-4AEC-9585-5662F06D030A-67437691381-inhil.jpg\"}', 'Artikel', 'Update', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1413, 'root', '2022-12-19 01:06:25', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1414, 'root', '2022-12-19 01:31:40', 'System Login', 'Login', 'Insert', '192.168.0.94', 'Windows 10', 'Chrome - 108.0.0.0'),
(1415, 'root', '2022-12-19 01:35:49', '{\"artikel_id\":\"65A32F84-211B-4AEC-9585-5662F06D030A\",\"artikel_judul\":\"Disperindag Inhil Batasi Penjualan Barang di Pasar Murah\",\"artikel_konten\":\"&lt;p&gt;Indragiri Hilir - Kepala Dinas Perindustrian Dan Perdagangan (Diperindag) Kabupaten Indragiri Hilir (Inhil) antisipasi terjadinya menjual belikan harga yang tidak sesuai harga saat operasi pasar (Pasar murah) yang dilaksanakan di jalan KH Hajar Dewantara Tembilahan, Rabu (21\\/9\\/22).&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Kepala Disperindag Inhil, Dhoan Dwi Anggara, S.STP, MH, menyampaikan, Pasar murah ini kami beruntungkan untuk masyarakat yang memang terlimbas dengan kondisi saat ini tentunya jika diperjualbelikan kembali sangat tidak akan terjadi bahkan dengan harga operasi pasar ini bisa membantu semua masyarakat.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Intinya setelah dia beli apakah dia mau jual berbagi dengan tetangganya atau pengepul tidak mungkin terjadi&amp;nbsp;karena kita lakukan pembatasan dalam pembelian minyak goreng hanya boleh 5 kg telur satu papan beras 10 kg,\\\" ujar Kadis Disperindag Inhil Dhoan Dwi Anggara, S.STP, MH,.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Selain itu, pihaknya juga berharap ke depannya kegiatan pasar murah seperti ini akan terus berlanjut dan bisa membantu masyarakat dan pedagang lainnya.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Sehingga kita berharap dengan adanya operasi pasar murah ini, dapat membantu meringankan beban biaya belanja yang harus dikeluarkan oleh masyarakat dengan harga normal seperti hari biasa, dan membantu pendapatan ekonomi penjual,\\\" tutur Kadis Disperindag Inhil Dhoan Dwi Anggara, S.STP, MH,.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Kendati demikian, Wakil Bupati Inhil H Syamsudin Uti yang menyempatkan waktu untuk melihat pasar murah yang dilaksanakan oleh Disperindag yang kerjasama Intansi lainnya mengatakan tujuan operasi pasar ini adalah meringankan beban masyarakat, melihat penekanan harga Karena sekarang ini banyak harga bervariasi.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Dengan dilakukannya kegiatan ini mudah-mudahan kita ini bisa teratasi dan bisa dinikmati oleh masyarakat,\\\" katanya Wabup Inhil.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Terakhir, pasar murah ini kemungkinan kita akan lakukan setiap bulannya, tentunya kita adakan pertemuan dan rapat dari pihak pihak Terkait.&lt;\\/p&gt;&lt;p&gt;&amp;nbsp;&lt;\\/p&gt;&lt;p&gt;\\\"Jika nantinya pasar ini terlaksana kembali, insyaallah kita akan lakukan 2 sampai 3 Bulan sekali, yang penting kita membantu masyarakat supaya prinsipnya itu jadi masyarakat tidak tertekan apalagi banyak isu-isu mengenai BBM naik,\\\" tutupnya.*&lt;\\/p&gt;\",\"artikel_url\":\"disperindag-inhil-batasi-penjualan-barang-di-pasar-murah\",\"artikel_akses\":\"Published\",\"artikel_kategori\":\"6\",\"artikel_img_kode\":\"img-39778139\",\"artikel_update_by\":\"root\",\"artikel_update_time\":\"2022-12-19 01:35:49\",\"artikel_gambar\":\"\\files\\/artikel\\/65A32F84-211B-4AEC-9585-5662F06D030A-1.jpeg\"}', 'Artikel', 'Update', '192.168.0.94', 'Windows 10', 'Chrome - 108.0.0.0'),
(1416, 'root', '2022-12-19 01:36:00', '{\"artikel_id\":\"65A32F84-211B-4AEC-9585-5662F06D030A\",\"artikel_judul\":\"Disperindag Inhil Batasi Penjualan Barang di Pasar Murah\",\"artikel_konten\":\"&lt;p&gt;Indragiri Hilir - Kepala Dinas Perindustrian Dan Perdagangan (Diperindag) Kabupaten Indragiri Hilir (Inhil) antisipasi terjadinya menjual belikan harga yang tidak sesuai harga saat operasi pasar (Pasar murah) yang dilaksanakan di jalan KH Hajar Dewantara Tembilahan, Rabu (21\\/9\\/22).&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Kepala Disperindag Inhil, Dhoan Dwi Anggara, S.STP, MH, menyampaikan, Pasar murah ini kami beruntungkan untuk masyarakat yang memang terlimbas dengan kondisi saat ini tentunya jika diperjualbelikan kembali sangat tidak akan terjadi bahkan dengan harga operasi pasar ini bisa membantu semua masyarakat.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Intinya setelah dia beli apakah dia mau jual berbagi dengan tetangganya atau pengepul tidak mungkin terjadi&amp;nbsp;karena kita lakukan pembatasan dalam pembelian minyak goreng hanya boleh 5 kg telur satu papan beras 10 kg,\\\" ujar Kadis Disperindag Inhil Dhoan Dwi Anggara, S.STP, MH,.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Selain itu, pihaknya juga berharap ke depannya kegiatan pasar murah seperti ini akan terus berlanjut dan bisa membantu masyarakat dan pedagang lainnya.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Sehingga kita berharap dengan adanya operasi pasar murah ini, dapat membantu meringankan beban biaya belanja yang harus dikeluarkan oleh masyarakat dengan harga normal seperti hari biasa, dan membantu pendapatan ekonomi penjual,\\\" tutur Kadis Disperindag Inhil Dhoan Dwi Anggara, S.STP, MH,.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Kendati demikian, Wakil Bupati Inhil H Syamsudin Uti yang menyempatkan waktu untuk melihat pasar murah yang dilaksanakan oleh Disperindag yang kerjasama Intansi lainnya mengatakan tujuan operasi pasar ini adalah meringankan beban masyarakat, melihat penekanan harga Karena sekarang ini banyak harga bervariasi.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Dengan dilakukannya kegiatan ini mudah-mudahan kita ini bisa teratasi dan bisa dinikmati oleh masyarakat,\\\" katanya Wabup Inhil.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Terakhir, pasar murah ini kemungkinan kita akan lakukan setiap bulannya, tentunya kita adakan pertemuan dan rapat dari pihak pihak Terkait.&lt;\\/p&gt;&lt;p&gt;&amp;nbsp;&lt;\\/p&gt;&lt;p&gt;\\\"Jika nantinya pasar ini terlaksana kembali, insyaallah kita akan lakukan 2 sampai 3 Bulan sekali, yang penting kita membantu masyarakat supaya prinsipnya itu jadi masyarakat tidak tertekan apalagi banyak isu-isu mengenai BBM naik,\\\" tutupnya.*&lt;\\/p&gt;\",\"artikel_url\":\"disperindag-inhil-batasi-penjualan-barang-di-pasar-murah\",\"artikel_akses\":\"Published\",\"artikel_kategori\":\"6\",\"artikel_img_kode\":\"img-39778139\",\"artikel_update_by\":\"root\",\"artikel_update_time\":\"2022-12-19 01:36:00\"}', 'Artikel', 'Update', '192.168.0.94', 'Windows 10', 'Chrome - 108.0.0.0'),
(1417, 'root', '2022-12-19 01:42:50', '{\"artikel_id\":\"A5DC2F9D-2A9E-4B53-85AE-120D9BAE1AC0\",\"artikel_judul\":\"Disperindag Inhil Siapkan Klinik Bagi Industri Kecil Menengah\",\"artikel_konten\":\"&lt;p&gt;Indragiri Hilir - Dinas Perindustrian dan Perdagangan (Disperindag) Kabupaten Indragiri Hilir (Inhil) menyiapkan bangunan yang diperuntukkan bagi Klinik Industri Kecil Menengah (IKM).&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Kepala Dinas Perdagangan dan Perindustrian Inhil, Dhoan Dwi Anggara saat diwawancarai wartawan mengatakan, tujuan dibentuknya klinik tersebut untuk memudahkan masyarakat mengurus persyaratan dokumen yang diperlukan bagi pelaku IKM.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Klinik IKM mungkin kita realisasikan di anggaran perubahan ini, kita siapkan bangunan, sifatnya tu pelayanan fasilitas. Jadi kita fasilitasi IKM - IKM tersebut terhadap apa kendalanya, itu tujuan klinik itu di bentuk, bagian dari inovasi kita,\\\" ucapnya, Rabu (12\\/10\\/22).&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Mantan Camat Tembilahan Hulu itu menjelaskan, klinik IKM merupakan wadah bagi para pelaku IKM yang nantinya akan lebih mudah untuk mengurus segala keperluan seperti membuat merek, standarisasi produk, kemasan dan lain sebagainya.\'&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Nanti akan kita fasilitasi, tapi kita berangsur-angsur tidak bisa serta-merta ketika klinik di bentuk, mungkin kita bantu fasilitasi desain kemasan, atau mungkin logonya kita bantu desain,\\\" katanya.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Kadis Perindustrian dan Perdagangan Kabupaten Inhil ini menyebut, untuk mempermudah masyarakat mengurus persyaratan-persyaratan yang diperlukan untuk IKM, pihaknya telah melakukan Memorandum of Understanding (MoU) dengan beberapa instansi -instansi terkait.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Terus juga masalah P-IRT (Pangan Industri Rumah Tangga) kita akan bantu fasilitasi makanya kami beberapa tahun ini dalam penyiapan klinik IKM, kami sudah ber MoU dengan beberapa instansi terkait, terutama Balai Standardisasi dan Pelayanan Jasa Industri (BSPJI) Pekanbaru, yang ke 2 kita juga sudah MoU dengan Kemenkumham untuk fasilitasi pendaftar merek dagang, hak kekayaan intelektual, dan sebagainya,\\\" ungkapnya.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Terakhir, ia berharap dengan adanya klinik IKM ini nanti, bisa memudahkan masyarakat pelaku IKM, dan masyarakat diharapkan memproduksi produk-produknya sesuai dengan kebutuhan pasar.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Kadang kan kendala IKM ini dia mau berurusan tapi tidak tau kemana mengurusnya, kita fasilitasi disini sehingga masyarakat kira-kira nya dia butuh ini apa kita bisa fasilitasi, kalau untuk mendaftarkan mereknya cukup lewat Dinas di klinik IKM, Dinas yang akan membantu fasilitasi pengiriman berkas ke Pekanbaru dan lain sebagainya.&amp;nbsp;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Harapannya juga kepada masyarakat pelaku IKM ini bagaimana mereka menciptakan produk-produk yang memang diinginkan pasar,\\\" pungkasnya.&lt;\\/p&gt;\",\"artikel_url\":\"disperindag-inhil-siapkan-klinik-bagi-industri-kecil-menengah\",\"artikel_akses\":\"Published\",\"artikel_kategori\":\"6\",\"artikel_img_kode\":\"img-90744300\",\"artikel_status\":\"1\",\"artikel_create_by\":\"root\",\"artikel_create_time\":\"2022-12-19 01:42:50\",\"artikel_gambar\":\"\\files\\/artikel\\/A5DC2F9D-2A9E-4B53-85AE-120D9BAE1AC0-2.jpeg\"}', 'Artikel', 'Insert', '192.168.0.94', 'Windows 10', 'Chrome - 108.0.0.0'),
(1418, 'root', '2022-12-19 01:45:29', '{\"artikel_id\":\"65A32F84-211B-4AEC-9585-5662F06D030A\",\"artikel_judul\":\"Disperindag Inhil Batasi Penjualan Barang di Pasar Murah\",\"artikel_konten\":\"&lt;p&gt;Indragiri Hilir - Kepala Dinas Perindustrian Dan Perdagangan (Diperindag) Kabupaten Indragiri Hilir (Inhil) antisipasi terjadinya menjual belikan harga yang tidak sesuai harga saat operasi pasar (Pasar murah) yang dilaksanakan di jalan KH Hajar Dewantara Tembilahan, Rabu (21\\/9\\/22).&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Kepala Disperindag Inhil, Dhoan Dwi Anggara, S.STP, MH, menyampaikan, Pasar murah ini kami beruntungkan untuk masyarakat yang memang terlimbas dengan kondisi saat ini tentunya jika diperjualbelikan kembali sangat tidak akan terjadi bahkan dengan harga operasi pasar ini bisa membantu semua masyarakat.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Intinya setelah dia beli apakah dia mau jual berbagi dengan tetangganya atau pengepul tidak mungkin terjadi&amp;nbsp;karena kita lakukan pembatasan dalam pembelian minyak goreng hanya boleh 5 kg telur satu papan beras 10 kg,\\\" ujar Kadis Disperindag Inhil Dhoan Dwi Anggara, S.STP, MH,.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Selain itu, pihaknya juga berharap ke depannya kegiatan pasar murah seperti ini akan terus berlanjut dan bisa membantu masyarakat dan pedagang lainnya.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Sehingga kita berharap dengan adanya operasi pasar murah ini, dapat membantu meringankan beban biaya belanja yang harus dikeluarkan oleh masyarakat dengan harga normal seperti hari biasa, dan membantu pendapatan ekonomi penjual,\\\" tutur Kadis Disperindag Inhil Dhoan Dwi Anggara, S.STP, MH,.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Kendati demikian, Wakil Bupati Inhil H Syamsudin Uti yang menyempatkan waktu untuk melihat pasar murah yang dilaksanakan oleh Disperindag yang kerjasama Intansi lainnya mengatakan tujuan operasi pasar ini adalah meringankan beban masyarakat, melihat penekanan harga Karena sekarang ini banyak harga bervariasi.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Dengan dilakukannya kegiatan ini mudah-mudahan kita ini bisa teratasi dan bisa dinikmati oleh masyarakat,\\\" katanya Wabup Inhil.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Terakhir, pasar murah ini kemungkinan kita akan lakukan setiap bulannya, tentunya kita adakan pertemuan dan rapat dari pihak pihak Terkait.&lt;\\/p&gt;&lt;p&gt;&amp;nbsp;&lt;\\/p&gt;&lt;p&gt;\\\"Jika nantinya pasar ini terlaksana kembali, insyaallah kita akan lakukan 2 sampai 3 Bulan sekali, yang penting kita membantu masyarakat supaya prinsipnya itu jadi masyarakat tidak tertekan apalagi banyak isu-isu mengenai BBM naik,\\\" tutupnya.*&lt;\\/p&gt;\",\"artikel_url\":\"disperindag-inhil-batasi-penjualan-barang-di-pasar-murah\",\"artikel_akses\":\"Published\",\"artikel_kategori\":\"6\",\"artikel_img_kode\":\"img-39778139\",\"artikel_update_by\":\"root\",\"artikel_update_time\":\"2022-12-19 01:45:29\",\"artikel_gambar\":\"\\files\\/artikel\\/65A32F84-211B-4AEC-9585-5662F06D030A-1.jpeg\"}', 'Artikel', 'Update', '192.168.0.94', 'Windows 10', 'Chrome - 108.0.0.0'),
(1419, 'root', '2022-12-19 01:46:01', '{\"artikel_id\":\"65A32F84-211B-4AEC-9585-5662F06D030A\",\"artikel_judul\":\"Disperindag Inhil Batasi Penjualan Barang di Pasar Murah\",\"artikel_konten\":\"&lt;p&gt;Indragiri Hilir - Kepala Dinas Perindustrian Dan Perdagangan (Diperindag) Kabupaten Indragiri Hilir (Inhil) antisipasi terjadinya menjual belikan harga yang tidak sesuai harga saat operasi pasar (Pasar murah) yang dilaksanakan di jalan KH Hajar Dewantara Tembilahan, Rabu (21\\/9\\/22).&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Kepala Disperindag Inhil, Dhoan Dwi Anggara, S.STP, MH, menyampaikan, Pasar murah ini kami beruntungkan untuk masyarakat yang memang terlimbas dengan kondisi saat ini tentunya jika diperjualbelikan kembali sangat tidak akan terjadi bahkan dengan harga operasi pasar ini bisa membantu semua masyarakat.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Intinya setelah dia beli apakah dia mau jual berbagi dengan tetangganya atau pengepul tidak mungkin terjadi&amp;nbsp;karena kita lakukan pembatasan dalam pembelian minyak goreng hanya boleh 5 kg telur satu papan beras 10 kg,\\\" ujar Kadis Disperindag Inhil Dhoan Dwi Anggara, S.STP, MH,.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Selain itu, pihaknya juga berharap ke depannya kegiatan pasar murah seperti ini akan terus berlanjut dan bisa membantu masyarakat dan pedagang lainnya.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Sehingga kita berharap dengan adanya operasi pasar murah ini, dapat membantu meringankan beban biaya belanja yang harus dikeluarkan oleh masyarakat dengan harga normal seperti hari biasa, dan membantu pendapatan ekonomi penjual,\\\" tutur Kadis Disperindag Inhil Dhoan Dwi Anggara, S.STP, MH,.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Kendati demikian, Wakil Bupati Inhil H Syamsudin Uti yang menyempatkan waktu untuk melihat pasar murah yang dilaksanakan oleh Disperindag yang kerjasama Intansi lainnya mengatakan tujuan operasi pasar ini adalah meringankan beban masyarakat, melihat penekanan harga Karena sekarang ini banyak harga bervariasi.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;\\\"Dengan dilakukannya kegiatan ini mudah-mudahan kita ini bisa teratasi dan bisa dinikmati oleh masyarakat,\\\" katanya Wabup Inhil.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;Terakhir, pasar murah ini kemungkinan kita akan lakukan setiap bulannya, tentunya kita adakan pertemuan dan rapat dari pihak pihak Terkait.&lt;\\/p&gt;&lt;p&gt;&amp;nbsp;&lt;\\/p&gt;&lt;p&gt;\\\"Jika nantinya pasar ini terlaksana kembali, insyaallah kita akan lakukan 2 sampai 3 Bulan sekali, yang penting kita membantu masyarakat supaya prinsipnya itu jadi masyarakat tidak tertekan apalagi banyak isu-isu mengenai BBM naik,\\\" tutupnya.*&lt;\\/p&gt;\",\"artikel_url\":\"disperindag-inhil-batasi-penjualan-barang-di-pasar-murah\",\"artikel_akses\":\"Published\",\"artikel_kategori\":\"6\",\"artikel_img_kode\":\"img-39778139\",\"artikel_update_by\":\"root\",\"artikel_update_time\":\"2022-12-19 01:46:01\",\"artikel_gambar\":\"\\files\\/artikel\\/65A32F84-211B-4AEC-9585-5662F06D030A-1.jpeg\"}', 'Artikel', 'Update', '192.168.0.94', 'Windows 10', 'Chrome - 108.0.0.0'),
(1420, 'root', '2022-12-19 06:32:17', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1421, 'root', '2022-12-19 06:33:19', '{\"login_footer\":\"DISPERINDAG\",\"login_footer_link\":\"https:\\/\\/ankabrata.com\\/\",\"login_bg_banner\":\"#3699ff\",\"login_text_color_banner\":\"#ffffff\",\"login_text1_banner\":\"DISPERINDAG\",\"login_text2_banner\":\"Kabupaten Indragiri Hilir\",\"login_last_update_time\":\"2022-12-19 06:33:19\",\"login_last_update_by\":\"root\",\"login_logo_banner\":\"\\files\\/management-page\\/img-20221219063319logo-inhil.png\"}', 'Page Management', 'Update', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1422, 'root', '2022-12-19 06:36:56', '{\"kategori_id\":null,\"kategori_nama\":\"Kegiatan\",\"kategori_status\":\"1\",\"kategori_create_time\":\"2022-12-19 06:36:56\",\"kategori_create_by\":\"root\"}', 'Kategori Artikel', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1423, 'root', '2022-12-19 06:41:53', '{\"artikel_id\":\"23892370-EA79-4290-938C-9675A69EC8EC\",\"artikel_judul\":\"Tinjau pasar murah, Bupati Inhil harapkan tepat sasaran\",\"artikel_konten\":\"&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Tembilahan (ANTARA) - Bupati Indragiri Hilir, Muhammad Wardan meninjau pelaksanaan pasar murah yang diselenggarakan oleh Pemerintah Daerah melalui Disperindag Inhil. Senin (19\\/9). Ia berharap pelaksanaan pasar tepat sasaran hingga membantu masyarakat memenuhi kebutuhan pokok.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;\",\"artikel_url\":\"tinjau-pasar-murah-bupati-inhil-harapkan-tepat-sasaran\",\"artikel_akses\":\"Published\",\"artikel_kategori\":\"8\",\"artikel_img_kode\":\"img-63304801\",\"artikel_status\":\"1\",\"artikel_create_by\":\"root\",\"artikel_create_time\":\"2022-12-19 06:41:52\",\"artikel_gambar\":\"\\files\\/artikel\\/23892370-EA79-4290-938C-9675A69EC8EC-912044.jpg\"}', 'Artikel', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1424, 'root', '2022-12-19 06:42:38', '{\"artikel_id\":\"23892370-EA79-4290-938C-9675A69EC8EC\",\"artikel_judul\":\"Tinjau pasar murah, Bupati Inhil harapkan tepat sasaran\",\"artikel_konten\":\"&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Tembilahan (ANTARA) - Bupati Indragiri Hilir, Muhammad Wardan meninjau pelaksanaan pasar murah yang diselenggarakan oleh Pemerintah Daerah melalui Disperindag Inhil. Senin (19\\/9). Ia berharap pelaksanaan pasar tepat sasaran hingga membantu masyarakat memenuhi kebutuhan pokok.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;&ldquo;Semoga kegiatan ini dapat dimanfaatkan masyarakat serta meminta kepada pihak penyelenggara agar dapat selektif dalam pelaksanaannya&rdquo;, ucap Bupati di sela kunjungannya.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Pada kesempatan tersebut, tampak Bupati langsung meninjau sekaligus mengecek kualitas barang serta harga yang tentunya di bawah harga pasaran.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;\\\"Alhamdulillah barang yang dijual di sini tentunya berkualitas bagus dan pastinya lebih murah, tujuan pelaksanaan demi membantu masyarakat dalam memenuhi kebutuhan pokok dapur di saat harga di pasaran yang sedang tinggi,\\\" ujar Bupati&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Pasar murah yang diadakan di halaman kantor Disperindag Inhil ini diselenggarakan selama tiga hari dengan tujuan untuk menjaga kestabilan harga sembako sekaligus membantu masyarakat terutama yang terdampak akibat dari kenaikan BBM bersubsidi beberapa waktu yang lalu.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Di sela peninjauan, Bupati juga mempersilahkan kepada masyarakat yang terdampak untuk dapat memanfaatkan kegiatan pasar murah ini dalam memenuhi kebutuhan pokoknya sehari-hari.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;&ldquo;Apa yang dilakukan pada hari ini merupakan wujud kepedulian pemerintah daerah terhadap masyarakat dalam pemenuhan kebutuhan pokoknya terutama yang terdampak akibat dari kenaikan bahan bakar minyak beberapa waktu yang lalu&rdquo; tuturnya.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;\\\"Ayo berbelanja di operasi pasar murah yang telah di sediakan ini, saya tekan kan untuk masyarakat yang betul betul terdampak bukan untuk di jual lagi,\\\" tambahnya lagi.&lt;\\/span&gt;&lt;\\/p&gt;\",\"artikel_url\":\"tinjau-pasar-murah-bupati-inhil-harapkan-tepat-sasaran\",\"artikel_akses\":\"Published\",\"artikel_kategori\":\"8\",\"artikel_img_kode\":\"img-63304801\",\"artikel_update_by\":\"root\",\"artikel_update_time\":\"2022-12-19 06:42:38\"}', 'Artikel', 'Update', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1425, 'root', '2022-12-19 06:44:21', '{\"artikel_id\":\"23892370-EA79-4290-938C-9675A69EC8EC\",\"artikel_judul\":\"Tinjau pasar murah, Bupati Inhil harapkan tepat sasaran\",\"artikel_konten\":\"&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Tembilahan (ANTARA) - Bupati Indragiri Hilir, Muhammad Wardan meninjau pelaksanaan pasar murah yang diselenggarakan oleh Pemerintah Daerah melalui Disperindag Inhil. Senin (19\\/9). Ia berharap pelaksanaan pasar tepat sasaran hingga membantu masyarakat memenuhi kebutuhan pokok.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;&ldquo;Semoga kegiatan ini dapat dimanfaatkan masyarakat serta meminta kepada pihak penyelenggara agar dapat selektif dalam pelaksanaannya&rdquo;, ucap Bupati di sela kunjungannya.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Pada kesempatan tersebut, tampak Bupati langsung meninjau sekaligus mengecek kualitas barang serta harga yang tentunya di bawah harga pasaran.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;\\\"Alhamdulillah barang yang dijual di sini tentunya berkualitas bagus dan pastinya lebih murah, tujuan pelaksanaan demi membantu masyarakat dalam memenuhi kebutuhan pokok dapur di saat harga di pasaran yang sedang tinggi,\\\" ujar Bupati&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Pasar murah yang diadakan di halaman kantor Disperindag Inhil ini diselenggarakan selama tiga hari dengan tujuan untuk menjaga kestabilan harga sembako sekaligus membantu masyarakat terutama yang terdampak akibat dari kenaikan BBM bersubsidi beberapa waktu yang lalu.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Di sela peninjauan, Bupati juga mempersilahkan kepada masyarakat yang terdampak untuk dapat memanfaatkan kegiatan pasar murah ini dalam memenuhi kebutuhan pokoknya sehari-hari.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;&ldquo;Apa yang dilakukan pada hari ini merupakan wujud kepedulian pemerintah daerah terhadap masyarakat dalam pemenuhan kebutuhan pokoknya terutama yang terdampak akibat dari kenaikan bahan bakar minyak beberapa waktu yang lalu&rdquo; tuturnya.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;\\\"Ayo berbelanja di operasi pasar murah yang telah di sediakan ini, saya tekan kan untuk masyarakat yang betul betul terdampak bukan untuk di jual lagi,\\\" tambahnya lagi.&lt;\\/span&gt;&lt;\\/p&gt;\",\"artikel_url\":\"tinjau-pasar-murah-bupati-inhil-harapkan-tepat-sasaran\",\"artikel_akses\":\"Published\",\"artikel_kategori\":\"8\",\"artikel_img_kode\":\"img-63304801\",\"artikel_update_by\":\"root\",\"artikel_update_time\":\"2022-12-19 06:44:21\",\"artikel_gambar\":\"\\files\\/artikel\\/23892370-EA79-4290-938C-9675A69EC8EC-bupati.png\"}', 'Artikel', 'Update', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1426, 'root', '2022-12-19 06:45:21', '{\"artikel_id\":\"32D618E4-3AD1-4F05-BA17-6B66C795EAA1\",\"artikel_judul\":\"Jamin Ketersediaan Bahan Pokok, Disperindag Inhil Sidak 4 Kecamatan\",\"artikel_konten\":\"&lt;p class=\\\"ql-align-justify\\\"&gt;INHIL- Dinas Perdagangan dan Perindustrian (Disperindag) Kabupaten Indragiri Hilir (Inhil) Inspeksi Mendadak (Sidak) harga dan ketersediaan bahan pokok di empat kecamatan, Kamis (2\\/4\\/2020).&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Empat Kecamatan se- Inhil itu diantaranya Tempuling, Enok, Kempas dan Keritang.&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Kepala Disdagtrin saat dikonfirmasi melalui Kabid Perdagangan,&amp;nbsp;Arispuddin mengatakan ketersediaan bahan pokok untuk saat ini masih dalam keadaan aman.&amp;nbsp;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;\\\"Setelah kami melakukan Sidak pasar dan toko di 4 kecamatan tersebut, stok dan distribusi bahan pokok masih dalam kondisi aman, tapi untuk saat ini terjadi kenaikan harga pada gula, dan stok dalam kondisi kurang,\\\" kata Arispuddin didampingi Kasi Stabilisasi dan Harga, Ifdiarman.&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Untuk itu, ia mengimbau masyarakat agar tidak belanja berlebihan di tengah situasi isu Corona ini.&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;\\\"Jadi, warga jangan panic buying (Panik, lalu berbelanja dengan stok tak terbatas_) dalam situasi isu virus corona ini. Normal-normal saja, kami pastikan sembako lancar dan aman,&rdquo; lanjutnya.&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Menurutnya, pergi ke pasar untuk membeli bahan pokok merupakan kebutuhan yang sifatnya wajib. Namun, ia meminta agar warga tetap menjaga jarak dan tetap waspada.&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Berikut laporan pantauan ketersediaan, stabilisasi harga Bahan Pokok dan Barang Penting (Bapokting) per 2 April 2020;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;- Kecamatan Tempuling (Pasar Sungai Salak )&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Beras: 12.000,&amp;nbsp;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Gula: 19.000,&amp;nbsp;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Minyak Goreng: 12.000,&amp;nbsp;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Telur: 42.000 per papan,&amp;nbsp;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Cabe merah: 40.000,&amp;nbsp;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Bawang putih: 50.000,&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Cabe Rawit: 40.000,&amp;nbsp;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Bawang Merah: 35.000,&amp;nbsp;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Tomat: 10.000.&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;- Kecamatan Enok (Desa Bagan jaya)&amp;nbsp;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Beras: 12.000,&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Minyak Goreng: 12.500,&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Gula :19.000,&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Telur 43.000 per papan.&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;- Kecamatan Kempas, (Kel Harapan Tani)&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Beras: 11.500,&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Gula: 19.000,&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Minyak: 12.000.&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;- Kecamatan Keritang (Kotabaru) Beras: 12.000,&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Gula: 18.000,&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Tepung: 9.000,&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Telur: 42.000 per papan,&lt;\\/p&gt;&lt;p class=\\\"ql-align-justify\\\"&gt;Minyak goreng: 13.000.&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;\",\"artikel_url\":\"jamin-ketersediaan-bahan-pokok-disperindag-inhil-sidak-4-kecamatan\",\"artikel_akses\":\"Published\",\"artikel_kategori\":\"8\",\"artikel_img_kode\":\"img-7463937\",\"artikel_status\":\"1\",\"artikel_create_by\":\"root\",\"artikel_create_time\":\"2022-12-19 06:45:20\",\"artikel_gambar\":\"\\files\\/artikel\\/32D618E4-3AD1-4F05-BA17-6B66C795EAA1-gambar2.jpg\"}', 'Artikel', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1427, 'root', '2022-12-19 06:46:48', '{\"artikel_id\":\"EF5024A3-C53A-4975-8E85-A0ECC445A82A\",\"artikel_judul\":\"Disperindag Inhil bangga Riau juara satu pemantauan harga bahan pokok\",\"artikel_konten\":\"&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Indragiri Hilir (ANTARA) - Dinas Perindustrian dan Perdagangan (Disperindag) Inhil ikut andil dalam suksesnya Dinas Dinas Perdagangan Koperasi Usaha Kecil dan Menengah (Disdagkop UKM) Riau dalam meraih juara 1 pemantauan harga bahan pokok terbaik se Indonesia tahun 2019.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;\\\"Keberhasilan tersebut selain Kota Tembilahan, turut serta juga Kota Pekanbaru dan Dumai. Tiga ini menjadi sampel Provinsi Riau untuk pemantauan harga bahan pokok,\\\" sebut Kepala Disperindag Inhil, melalui Kabid Perdagangan, Arispuddindi Tembilahan, Senin.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Keberhasilan Disdagkop UKM Riau tersebut disampaikan langsung oleh Kementerian Perdagangan RI disampaikan oleh Direktur Barang Kebutuhan Pokok dan Barang Penting di Yogyakarta, saat Pelatihan Kontributor Harga dan Stok Pasokan. Jumat (14\\/2).&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;\\\"Kami tentu sangat merasa bangga atas keberhasilan tersebut. Sebab, menjadi yang nomor satu dari 34 Provinsi di Indonesia bukan hal yang mudah,\\\" ujar Arispuddin.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Arispuddin berkomitmen akan terus melakukan pemantauan harga bahan pokok di Inhil untuk dilaporkan nantinya kepada Bupati Inhil, HM Wardan.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;Pemantauan harga pokok tersebut akan dilakukan setiap hari mulai dimulai dari pukul 09.00 WIB.&lt;\\/span&gt;&lt;\\/p&gt;&lt;p&gt;&lt;br&gt;&lt;\\/p&gt;&lt;p&gt;&lt;span style=\\\"color: rgb(85, 85, 85);\\\"&gt;\\\"Pemantauan harga bahan pokok ini nantinya akan kami lakukan setiap hari, terkecuali hari Sabtu dan Minggu,\\\" tukasnya&lt;\\/span&gt;&lt;\\/p&gt;\",\"artikel_url\":\"disperindag-inhil-bangga-riau-juara-satu-pemantauan-harga-bahan-pokok\",\"artikel_akses\":\"Published\",\"artikel_kategori\":\"6\",\"artikel_img_kode\":\"img-22857007\",\"artikel_status\":\"1\",\"artikel_create_by\":\"root\",\"artikel_create_time\":\"2022-12-19 06:46:48\",\"artikel_gambar\":\"\\files\\/artikel\\/EF5024A3-C53A-4975-8E85-A0ECC445A82A-artikel3.png\"}', 'Artikel', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1428, 'root', '2022-12-19 09:30:00', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1429, 'root', '2022-12-19 09:32:22', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"14\",\"transaksi_harga\":\"11500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:32:22\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1430, 'root', '2022-12-19 09:32:28', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"14\",\"transaksi_harga\":\"13500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:32:28\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1431, 'root', '2022-12-19 09:32:37', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"13\",\"transaksi_harga\":\"11000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:32:37\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android');
INSERT INTO `tb_log` (`log_id`, `log_user`, `log_time`, `log_activity`, `log_modul`, `log_type`, `log_ip`, `log_so`, `log_browser`) VALUES
(1432, 'root', '2022-12-19 09:32:41', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"13\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:32:41\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1433, 'root', '2022-12-19 09:32:48', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"19\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"12\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:32:48\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1434, 'root', '2022-12-19 09:33:02', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_het\":\"120000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"120000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:33:02\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1435, 'root', '2022-12-19 09:33:08', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_het\":\"115000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"113000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:33:08\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1436, 'root', '2022-12-19 09:33:12', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"52\",\"transaksi_het\":\"30000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"30000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:33:12\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1437, 'root', '2022-12-19 09:33:17', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_het\":\"140000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"138000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:33:17\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1438, 'root', '2022-12-19 09:33:26', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"10\",\"transaksi_harga\":\"11500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:33:25\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1439, 'root', '2022-12-19 09:33:30', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"10\",\"transaksi_harga\":\"13500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:33:30\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1440, 'root', '2022-12-19 09:33:35', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"6\",\"transaksi_het\":\"22000\",\"transaksi_pedagang\":\"10\",\"transaksi_harga\":\"22000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:33:35\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1441, 'root', '2022-12-19 09:33:40', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_pedagang\":\"10\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:33:40\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1442, 'root', '2022-12-19 09:33:51', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"6\",\"transaksi_het\":\"22000\",\"transaksi_pedagang\":\"9\",\"transaksi_harga\":\"22000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:33:51\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1443, 'root', '2022-12-19 09:33:54', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_pedagang\":\"9\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:33:54\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1444, 'root', '2022-12-19 09:33:59', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"9\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:33:59\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1445, 'root', '2022-12-19 09:34:05', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"9\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:34:05\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1446, 'root', '2022-12-19 09:34:16', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_het\":\"115000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"114000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:34:16\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1447, 'root', '2022-12-19 09:34:21', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"9\",\"transaksi_het\":\"21000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:34:21\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1448, 'root', '2022-12-19 09:34:26', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"10\",\"transaksi_het\":\"61000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"61000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:34:26\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1449, 'root', '2022-12-19 09:34:31', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"11\",\"transaksi_het\":\"15000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"15000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:34:31\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1450, 'root', '2022-12-19 09:34:37', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"52\",\"transaksi_het\":\"30000\",\"transaksi_pedagang\":\"8\",\"transaksi_harga\":\"30000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:34:37\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1451, 'root', '2022-12-19 09:34:46', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_het\":\"120000\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"120000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:34:46\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1452, 'root', '2022-12-19 09:34:54', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"7\",\"transaksi_het\":\"2500\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:34:54\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1453, 'root', '2022-12-19 09:34:58', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"8\",\"transaksi_het\":\"2500\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:34:58\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1454, 'root', '2022-12-19 09:35:03', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"9\",\"transaksi_het\":\"21000\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:35:03\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1455, 'root', '2022-12-19 09:35:08', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"10\",\"transaksi_het\":\"61000\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"61000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:35:08\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1456, 'root', '2022-12-19 09:35:16', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_het\":\"140000\",\"transaksi_pedagang\":\"6\",\"transaksi_harga\":\"139000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:35:16\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1457, 'root', '2022-12-19 09:35:30', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_het\":\"120000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"122000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:35:30\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1458, 'root', '2022-12-19 09:35:34', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_het\":\"115000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"116000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:35:34\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1459, 'root', '2022-12-19 09:35:39', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"8\",\"transaksi_het\":\"2500\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:35:39\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1460, 'root', '2022-12-19 09:35:44', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"7\",\"transaksi_het\":\"2500\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"2500\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:35:44\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1461, 'root', '2022-12-19 09:35:49', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"9\",\"transaksi_het\":\"21000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:35:49\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1462, 'root', '2022-12-19 09:35:53', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"10\",\"transaksi_het\":\"61000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"61000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:35:53\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1463, 'root', '2022-12-19 09:35:58', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"11\",\"transaksi_het\":\"15000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"14000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:35:58\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1464, 'root', '2022-12-19 09:36:03', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_het\":\"140000\",\"transaksi_pedagang\":\"5\",\"transaksi_harga\":\"141000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:36:03\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1465, 'root', '2022-12-19 09:36:11', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"55\",\"transaksi_het\":\"13300\",\"transaksi_pedagang\":\"4\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:36:11\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1466, 'root', '2022-12-19 09:36:16', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"1\",\"transaksi_het\":\"12000\",\"transaksi_pedagang\":\"4\",\"transaksi_harga\":\"13000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:36:16\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1467, 'root', '2022-12-19 09:36:20', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"6\",\"transaksi_het\":\"22000\",\"transaksi_pedagang\":\"4\",\"transaksi_harga\":\"22000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:36:20\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1468, 'root', '2022-12-19 09:36:25', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_pedagang\":\"4\",\"transaksi_harga\":\"20000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 09:36:25\"}', 'Transaksi', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1469, 'root', '2022-12-19 10:00:46', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_barang\":\"5\",\"transaksi_het\":\"20000\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"21000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 10:00:46\"}', 'Harga Barang Penting', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1470, 'root', '2022-12-19 10:00:53', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_barang\":\"3\",\"transaksi_het\":\"85000\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"85000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 10:00:53\"}', 'Harga Barang Penting', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1471, 'root', '2022-12-19 10:01:01', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_barang\":\"2\",\"transaksi_het\":\"2100\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"25000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 10:01:01\"}', 'Harga Barang Penting', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1472, 'root', '2022-12-19 10:01:56', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_barang\":\"3\",\"transaksi_het\":\"8000\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"8000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 10:01:56\"}', 'Harga Barang Lainnya', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1473, 'root', '2022-12-19 10:02:00', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_barang\":\"2\",\"transaksi_het\":\"2100\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"2000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 10:02:00\"}', 'Harga Barang Lainnya', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1474, 'root', '2022-12-19 10:02:04', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_barang\":\"1\",\"transaksi_het\":\"4000\",\"transaksi_distributor\":\"1\",\"transaksi_harga\":\"4000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 10:02:04\"}', 'Harga Barang Lainnya', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1475, 'root', '2022-12-19 10:03:04', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2022-12-19\",\"transaksi_barang\":\"2\",\"transaksi_distributor\":\"3\",\"transaksi_stok\":\"10\",\"transaksi_ketahanan\":\"2 hari\",\"transaksi_pemasok\":\"Dumai\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"root\",\"transaksi_create_time\":\"2022-12-19 10:03:04\"}', 'Harga Barang Penting', 'Insert', '192.168.43.129', 'Android', 'Aplikasi Android'),
(1476, 'root', '2022-12-19 10:03:29', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1477, 'root', '2022-12-29 10:24:41', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1478, 'root', '2022-12-29 10:43:54', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1479, 'root', '2022-12-29 14:34:26', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1480, 'root', '2022-12-29 18:44:37', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1481, 'root', '2022-12-30 10:33:42', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1482, 'root', '2023-01-05 09:39:08', 'System Login', 'Login', 'Insert', '192.168.137.1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1483, 'root', '2023-01-05 09:54:11', 'System Login', 'Login', 'Insert', '192.168.137.252', 'Windows 10', 'Chrome - 108.0.0.0'),
(1484, 'root', '2023-01-05 10:45:39', '{\"user_id\":\"DB2ACD66-B618-47DA-8B47-BCCC8BD4CFA3\",\"user_username\":\"wati\",\"user_email\":\"wati@gmail.coma\",\"user_name\":\"Wati Yani \",\"user_status\":\"1\",\"user_role\":\"2\",\"user_update_by\":\"wati\",\"user_update_time\":\"2023-01-05 10:45:39\"}', 'User Management', 'Update', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1485, 'root', '2023-01-05 14:37:43', '{\"user_id\":\"54C8360B-68FD-4386-A68D-9313E8643983\",\"user_username\":\"pasaranka\",\"user_email\":\"pasaranka@gmail.com\",\"user_name\":\"Zel Apriadi \",\"user_status\":\"1\",\"user_role\":\"3\",\"user_update_by\":\"root\",\"user_update_time\":\"2023-01-05 14:37:43\"}', 'User Management', 'Update', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1486, 'root', '2023-01-05 14:37:56', '{\"user_id\":\"54C8360B-68FD-4386-A68D-9313E8643983\",\"user_username\":\"pasaranka\",\"user_email\":\"pasaranka@gmail.com\",\"user_name\":\"Zel Apriadi \",\"user_status\":\"1\",\"user_role\":\"3\",\"user_update_by\":\"root\",\"user_update_time\":\"2023-01-05 14:37:56\"}', 'User Management', 'Update', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1487, 'root', '2023-01-05 14:39:33', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1488, 'root', '2023-01-05 15:04:27', '{\"user_id\":\"DB2ACD66-B618-47DA-8B47-BCCC8BD4CFA3\",\"user_username\":\"wati\",\"user_email\":\"wati@gmail.coma\",\"user_name\":\"Wati Yani \",\"user_fk\":null,\"user_status\":\"1\",\"user_role\":\"2\",\"user_update_by\":\"root\",\"user_update_time\":\"2023-01-05 15:04:27\"}', 'User Management', 'Update', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1489, 'root', '2023-01-05 15:04:41', '{\"user_id\":\"54C8360B-68FD-4386-A68D-9313E8643983\",\"user_username\":\"pasaranka\",\"user_email\":\"pasaranka@gmail.com\",\"user_name\":\"Zel Apriadi \",\"user_fk\":null,\"user_status\":\"1\",\"user_role\":\"3\",\"user_update_by\":\"root\",\"user_update_time\":\"2023-01-05 15:04:41\"}', 'User Management', 'Update', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1490, 'root', '2023-01-05 15:04:51', '{\"user_id\":\"54C8360B-68FD-4386-A68D-9313E8643983\",\"user_username\":\"pasaranka\",\"user_email\":\"pasaranka@gmail.com\",\"user_name\":\"Zel Apriadi \",\"user_fk\":null,\"user_status\":\"1\",\"user_role\":\"3\",\"user_update_by\":\"root\",\"user_update_time\":\"2023-01-05 15:04:51\"}', 'User Management', 'Update', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1491, 'root', '2023-01-05 15:05:38', '{\"user_id\":\"54C8360B-68FD-4386-A68D-9313E8643983\",\"user_username\":\"pasaranka\",\"user_email\":\"pasaranka@gmail.com\",\"user_name\":\"Zel Apriadi \",\"user_fk\":\"14\",\"user_status\":\"1\",\"user_role\":\"3\",\"user_update_by\":\"root\",\"user_update_time\":\"2023-01-05 15:05:38\"}', 'User Management', 'Update', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1492, 'pasarpusat', '2023-01-05 15:07:30', 'login', 'Login', 'Insert', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1493, 'pasarpusat', '2023-01-05 15:31:46', 'login', 'Login', 'Insert', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1494, 'pasarpusat', '2023-01-05 15:39:33', '{\"pedagang_id\":null,\"pedagang_nama\":\"gaseh\",\"pedagang_pasar\":\"18\",\"pedagang_create_by\":\"pasarpusat\",\"pedagang_create_time\":\"2023-01-05 15:39:33\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1495, 'pasarpusat', '2023-01-05 15:39:36', '{\"pedagang_id\":\"15\",\"pedagang_update_by\":\"pasarpusat\",\"pedagang_update_time\":\"2023-01-05 15:39:36\",\"pedagang_status\":\"0\"}', 'Pedagang Pangan', 'Update', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1496, 'pasarpusat', '2023-01-05 15:43:20', '{\"pedagang_id\":null,\"pedagang_nama\":\"gase\",\"pedagang_pasar\":\"18\",\"pedagang_create_by\":\"pasarpusat\",\"pedagang_create_time\":\"2023-01-05 15:43:20\",\"pedagang_status\":\"1\",\"pedagang_foto\":\"\\files\\/img\\/user-default.png\"}', 'Pedagang Pangan', 'Insert', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1497, 'pasarpusat', '2023-01-05 15:43:26', '{\"pedagang_id\":\"16\",\"pedagang_update_by\":\"pasarpusat\",\"pedagang_update_time\":\"2023-01-05 15:43:26\",\"pedagang_status\":\"0\"}', 'Pedagang Pangan', 'Update', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1498, 'pasarpusat', '2023-01-05 16:24:24', '{\"pedagang_id\":\"11\",\"pedagang_nama\":\"Rayen\",\"pedagang_pasar\":\"18\",\"pedagang_update_by\":\"pasarpusat\",\"pedagang_update_time\":\"2023-01-05 16:24:24\"}', 'Pedagang Pangan', 'Update', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1499, 'pasarpusat', '2023-01-05 16:30:53', '{\"jualan_id\":null,\"jualan_pedagang\":\"11\",\"jualan_komoditas\":\"8\",\"jualan_create_by\":\"pasarpusat\",\"jualan_create_time\":\"2023-01-05 16:30:53\",\"jualan_status\":\"1\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1500, 'pasarpusat', '2023-01-05 16:30:57', '{\"jualan_id\":\"54\",\"jualan_update_by\":\"pasarpusat\",\"jualan_update_time\":\"2023-01-05 16:30:57\",\"jualan_status\":\"0\"}', 'Detail Pedagang Pangan', 'Update', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1501, 'pasarpusat', '2023-01-05 19:41:35', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2023-01-05\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"3\",\"transaksi_het\":\"120000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"121000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"pasarpusat\",\"transaksi_create_time\":\"2023-01-05 19:41:35\"}', 'Transaksi', 'Insert', '192.168.205.24', 'Android', 'Aplikasi Android'),
(1502, 'pasarpusat', '2023-01-05 19:41:46', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2023-01-05\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"4\",\"transaksi_het\":\"115000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"115000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"pasarpusat\",\"transaksi_create_time\":\"2023-01-05 19:41:46\"}', 'Transaksi', 'Insert', '192.168.205.24', 'Android', 'Aplikasi Android'),
(1503, 'pasarpusat', '2023-01-05 19:41:52', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2023-01-05\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"52\",\"transaksi_het\":\"30000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"30000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"pasarpusat\",\"transaksi_create_time\":\"2023-01-05 19:41:52\"}', 'Transaksi', 'Insert', '192.168.205.24', 'Android', 'Aplikasi Android'),
(1504, 'pasarpusat', '2023-01-05 19:41:56', '{\"transaksi_id\":null,\"transaksi_tanggal\":\"2023-01-05\",\"transaksi_pasar\":\"18\",\"transaksi_komoditas\":\"54\",\"transaksi_het\":\"140000\",\"transaksi_pedagang\":\"11\",\"transaksi_harga\":\"140000\",\"transaksi_catatan\":\"\",\"transaksi_status\":\"1\",\"transaksi_create_by\":\"pasarpusat\",\"transaksi_create_time\":\"2023-01-05 19:41:56\"}', 'Transaksi', 'Insert', '192.168.205.24', 'Android', 'Aplikasi Android'),
(1505, 'root', '2023-01-05 19:43:48', 'login', 'Login', 'Insert', '192.168.205.24', 'Android', 'Aplikasi Android'),
(1506, 'pasarpusat', '2023-01-05 19:44:55', 'login', 'Login', 'Insert', '192.168.205.24', 'Android', 'Aplikasi Android'),
(1507, 'root', '2023-01-05 19:58:32', 'login', 'Login', 'Insert', '192.168.205.24', 'Android', 'Aplikasi Android'),
(1508, 'root', '2023-01-05 20:27:47', 'System Login', 'Login', 'Insert', '::1', 'Windows 10', 'Chrome - 108.0.0.0'),
(1509, 'pasarpusat', '2023-01-06 11:39:43', 'login', 'Login', 'Insert', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1510, 'root', '2023-01-06 11:54:29', 'login', 'Login', 'Insert', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1511, 'root', '2023-01-06 11:55:37', 'login', 'Login', 'Insert', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1512, 'root', '2023-01-06 12:00:37', 'login', 'Login', 'Insert', '192.168.137.73', 'Android', 'Aplikasi Android'),
(1513, 'pasarpusat', '2023-01-06 20:52:30', 'login', 'Login', 'Insert', '192.168.205.24', 'Android', 'Aplikasi Android');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_management_page`
--

CREATE TABLE `tb_management_page` (
  `id_management` int(11) NOT NULL,
  `login_footer` varchar(200) NOT NULL,
  `login_footer_link` text NOT NULL,
  `login_bg_banner` varchar(100) NOT NULL,
  `login_logo_banner` varchar(100) NOT NULL,
  `login_text1_banner` varchar(100) NOT NULL,
  `login_text2_banner` varchar(100) NOT NULL,
  `login_text_color_banner` varchar(10) NOT NULL,
  `login_image_banner` varchar(100) NOT NULL,
  `main_desktop_logo` text NOT NULL,
  `main_mobile_logo` text NOT NULL,
  `main_right_footer` varchar(50) NOT NULL,
  `main_right_footer_link` text NOT NULL,
  `main_left_footer` varchar(50) NOT NULL,
  `main_left_footer_link` text NOT NULL,
  `login_last_update_time` datetime DEFAULT NULL,
  `login_last_update_by` varchar(100) NOT NULL,
  `main_last_update_time` datetime DEFAULT NULL,
  `main_last_update_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_management_page`
--

INSERT INTO `tb_management_page` (`id_management`, `login_footer`, `login_footer_link`, `login_bg_banner`, `login_logo_banner`, `login_text1_banner`, `login_text2_banner`, `login_text_color_banner`, `login_image_banner`, `main_desktop_logo`, `main_mobile_logo`, `main_right_footer`, `main_right_footer_link`, `main_left_footer`, `main_left_footer_link`, `login_last_update_time`, `login_last_update_by`, `main_last_update_time`, `main_last_update_by`) VALUES
(1, 'DISPERINDAG', 'https://ankabrata.com/', '#3699ff', 'files/management-page/img-20221219063319logo-inhil.png', 'DISPERINDAG', 'Kabupaten Indragiri Hilir', '#ffffff', 'files/management-page/img-20221026163721banner.png', 'files/management-page/img-20221121210602disperindag.png', 'files/management-page/img-20221121210602disperindag.png', 'Pangan Pasar', 'https://ankabrata.com', 'DISPERINDAG INHIL', 'https://ankabrata.com', '2022-12-19 06:33:19', 'root', '2022-11-21 21:06:02', 'root');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasar`
--

CREATE TABLE `tb_pasar` (
  `pasar_id` int(11) NOT NULL,
  `pasar_nama` varchar(255) NOT NULL,
  `pasar_alamat` varchar(255) NOT NULL,
  `pasar_kecamatan` varchar(20) NOT NULL,
  `pasar_kelurahan` varchar(20) NOT NULL,
  `pasar_longitude` varchar(30) DEFAULT NULL,
  `pasar_latitude` varchar(30) DEFAULT NULL,
  `pasar_status` varchar(5) NOT NULL,
  `pasar_create_by` varchar(100) NOT NULL,
  `pasar_create_time` datetime NOT NULL,
  `pasar_update_by` varchar(100) DEFAULT NULL,
  `pasar_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pasar`
--

INSERT INTO `tb_pasar` (`pasar_id`, `pasar_nama`, `pasar_alamat`, `pasar_kecamatan`, `pasar_kelurahan`, `pasar_longitude`, `pasar_latitude`, `pasar_status`, `pasar_create_by`, `pasar_create_time`, `pasar_update_by`, `pasar_update_time`) VALUES
(13, 'Pasar Pusat Tembilahan', 'Jalan Sudirman Depan Pelabuhan', '14.04.04', '14.04.07.2002', NULL, NULL, '1', 'root', '2022-10-05 10:16:36', 'root', '2022-10-13 09:35:27'),
(14, 'Pasar Anka Aseng', 'Jalan Manggis No.51A', '14.04.05', '14.04.05.2007', NULL, NULL, '1', 'root', '2022-10-05 13:46:16', 'root', '2022-10-10 20:22:43'),
(16, 'Pasar Arengka', 'Jalan Soekarno-Hatta', '14.04.10', '14.04.10.2008', NULL, NULL, '1', 'root', '2022-10-12 11:24:06', NULL, NULL),
(17, 'Pasar Duplicated', 'Jalan testing', '14.04.04', '14.04.04.1006', NULL, NULL, '1', 'root', '2022-10-12 11:41:43', NULL, NULL),
(18, 'Pasar Pusat', 'Jalan Sudirman', '14.04.07', '14.04.04.1004', NULL, NULL, '1', 'root', '2022-10-12 11:42:06', 'root', '2022-10-13 09:35:34'),
(19, 'Pasar Selodang Kelapa', 'Tembilahan', '14.04.04', '14.04.04.1001', NULL, NULL, '1', 'root', '2022-11-28 13:49:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pedagang`
--

CREATE TABLE `tb_pedagang` (
  `pedagang_id` int(11) NOT NULL,
  `pedagang_pasar` varchar(20) NOT NULL,
  `pedagang_nama` varchar(100) NOT NULL,
  `pedagang_create_by` varchar(100) NOT NULL,
  `pedagang_create_time` datetime NOT NULL,
  `pedagang_update_by` varchar(100) DEFAULT NULL,
  `pedagang_update_time` datetime DEFAULT NULL,
  `pedagang_status` varchar(5) NOT NULL,
  `pedagang_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pedagang`
--

INSERT INTO `tb_pedagang` (`pedagang_id`, `pedagang_pasar`, `pedagang_nama`, `pedagang_create_by`, `pedagang_create_time`, `pedagang_update_by`, `pedagang_update_time`, `pedagang_status`, `pedagang_foto`) VALUES
(4, '18', 'Agus', 'root', '2022-11-25 10:15:05', NULL, NULL, '1', 'files/img/user-default.png'),
(5, '18', 'Leni', 'root', '2022-11-25 10:15:10', NULL, NULL, '1', 'files/img/user-default.png'),
(6, '18', 'Wati', 'root', '2022-11-25 10:15:18', NULL, NULL, '1', 'files/img/user-default.png'),
(7, '16', 'gas', 'root', '2022-11-25 10:15:38', NULL, NULL, '1', 'files/img/user-default.png'),
(8, '18', 'Parjo', 'root', '2022-11-25 10:16:03', NULL, NULL, '1', 'files/img/user-default.png'),
(9, '18', 'Kipli', 'root', '2022-11-25 10:16:08', NULL, NULL, '1', 'files/img/user-default.png'),
(10, '18', 'Nagita', 'root', '2022-11-25 10:16:14', NULL, NULL, '1', 'files/img/user-default.png'),
(11, '18', 'Rayen', 'root', '2022-11-25 10:16:19', 'pasarpusat', '2023-01-05 16:24:24', '1', 'files/img/user-default.png'),
(12, '19', 'Silvi', 'root', '2022-11-28 13:50:05', NULL, NULL, '1', 'files/img/user-default.png'),
(13, '19', 'Acu', 'root', '2022-11-28 13:50:10', NULL, NULL, '1', 'files/img/user-default.png'),
(14, '19', 'Badura', 'root', '2022-11-28 13:50:16', 'root', '2022-12-13 14:00:55', '1', 'files/img/user-default.png'),
(15, '18', 'gaseh', 'pasarpusat', '2023-01-05 15:39:33', 'pasarpusat', '2023-01-05 15:39:36', '0', 'files/img/user-default.png'),
(16, '18', 'gase', 'pasarpusat', '2023-01-05 15:43:20', 'pasarpusat', '2023-01-05 15:43:26', '0', 'files/img/user-default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_relasi_barang_lainnya`
--

CREATE TABLE `tb_relasi_barang_lainnya` (
  `relasi_id` int(11) NOT NULL,
  `relasi_distributor` varchar(20) NOT NULL,
  `relasi_barang` varchar(20) NOT NULL,
  `relasi_status` varchar(5) NOT NULL,
  `relasi_create_by` varchar(100) NOT NULL,
  `relasi_create_time` datetime NOT NULL,
  `relasi_update_by` varchar(100) DEFAULT NULL,
  `relasi_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_relasi_barang_lainnya`
--

INSERT INTO `tb_relasi_barang_lainnya` (`relasi_id`, `relasi_distributor`, `relasi_barang`, `relasi_status`, `relasi_create_by`, `relasi_create_time`, `relasi_update_by`, `relasi_update_time`) VALUES
(1, '1', '1', '0', 'root', '2022-12-15 16:33:52', 'root', '2022-12-15 16:34:04'),
(2, '1', '1', '1', 'root', '2022-12-15 16:34:32', NULL, NULL),
(3, '1', '2', '1', 'root', '2022-12-17 15:54:17', NULL, NULL),
(4, '1', '3', '1', 'root', '2022-12-17 15:54:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_relasi_barang_penting`
--

CREATE TABLE `tb_relasi_barang_penting` (
  `relasi_id` int(11) NOT NULL,
  `relasi_distributor` varchar(20) NOT NULL,
  `relasi_barang` varchar(20) NOT NULL,
  `relasi_status` varchar(5) NOT NULL,
  `relasi_create_by` varchar(100) NOT NULL,
  `relasi_create_time` datetime NOT NULL,
  `relasi_update_by` varchar(100) DEFAULT NULL,
  `relasi_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_relasi_barang_penting`
--

INSERT INTO `tb_relasi_barang_penting` (`relasi_id`, `relasi_distributor`, `relasi_barang`, `relasi_status`, `relasi_create_by`, `relasi_create_time`, `relasi_update_by`, `relasi_update_time`) VALUES
(2, '1', '2', '1', 'root', '2022-12-14 10:17:33', 'root', '2022-12-14 10:39:56'),
(3, '1', '4', '0', 'root', '2022-12-14 10:24:40', 'root', '2022-12-14 10:38:28'),
(4, '1', '3', '1', 'root', '2022-12-14 10:38:00', NULL, NULL),
(5, '2', '4', '1', 'root', '2022-12-17 15:16:14', NULL, NULL),
(6, '1', '5', '1', 'root', '2022-12-17 15:49:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_relasi_stok`
--

CREATE TABLE `tb_relasi_stok` (
  `relasi_id` int(11) NOT NULL,
  `relasi_distributor` varchar(20) NOT NULL,
  `relasi_barang` varchar(20) NOT NULL,
  `relasi_status` varchar(5) NOT NULL,
  `relasi_create_by` varchar(100) NOT NULL,
  `relasi_create_time` datetime NOT NULL,
  `relasi_update_by` varchar(100) DEFAULT NULL,
  `relasi_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_relasi_stok`
--

INSERT INTO `tb_relasi_stok` (`relasi_id`, `relasi_distributor`, `relasi_barang`, `relasi_status`, `relasi_create_by`, `relasi_create_time`, `relasi_update_by`, `relasi_update_time`) VALUES
(2, '1', '3', '1', 'root', '2022-12-16 15:33:15', NULL, NULL),
(3, '1', '2', '0', 'root', '2022-12-16 15:33:18', 'root', '2022-12-16 15:38:15'),
(4, '1', '2', '1', 'root', '2022-12-16 15:38:20', NULL, NULL),
(5, '1', '5', '1', 'root', '2022-12-17 16:43:23', NULL, NULL),
(6, '2', '2', '1', 'root', '2022-12-17 16:45:01', NULL, NULL),
(7, '2', '3', '1', 'root', '2022-12-17 16:45:06', NULL, NULL),
(8, '2', '5', '1', 'root', '2022-12-17 16:45:09', NULL, NULL),
(9, '3', '3', '1', 'root', '2022-12-17 16:45:21', NULL, NULL),
(10, '3', '2', '1', 'root', '2022-12-17 16:45:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_tanggal` date NOT NULL,
  `transaksi_pasar` varchar(20) NOT NULL,
  `transaksi_komoditas` varchar(20) NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_pedagang` varchar(100) NOT NULL,
  `transaksi_het` int(11) NOT NULL,
  `transaksi_catatan` varchar(255) NOT NULL,
  `transaksi_status` varchar(5) NOT NULL,
  `transaksi_create_by` varchar(100) NOT NULL,
  `transaksi_create_time` datetime NOT NULL,
  `transaksi_update_by` varchar(100) DEFAULT NULL,
  `transaksi_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`transaksi_id`, `transaksi_tanggal`, `transaksi_pasar`, `transaksi_komoditas`, `transaksi_harga`, `transaksi_pedagang`, `transaksi_het`, `transaksi_catatan`, `transaksi_status`, `transaksi_create_by`, `transaksi_create_time`, `transaksi_update_by`, `transaksi_update_time`) VALUES
(82, '2022-12-16', '19', '1', 14000, '14', 12000, '', '1', 'root', '2022-12-17 10:01:44', NULL, NULL),
(83, '2022-12-16', '19', '55', 14000, '14', 13300, '', '1', 'root', '2022-12-17 10:01:49', NULL, NULL),
(84, '2022-12-16', '19', '1', 12500, '13', 12000, '', '1', 'root', '2022-12-17 10:01:56', NULL, NULL),
(85, '2022-12-16', '19', '55', 14000, '13', 13300, '', '1', 'root', '2022-12-17 10:02:00', NULL, NULL),
(86, '2022-12-16', '19', '55', 13000, '12', 13300, '', '1', 'root', '2022-12-17 10:02:07', NULL, NULL),
(87, '2022-12-16', '18', '3', 121000, '11', 120000, '', '1', 'root', '2022-12-17 10:02:19', NULL, NULL),
(88, '2022-12-16', '18', '4', 117000, '11', 115000, '', '1', 'root', '2022-12-17 10:02:24', NULL, NULL),
(89, '2022-12-16', '18', '52', 29000, '11', 30000, '', '1', 'root', '2022-12-17 10:02:29', NULL, NULL),
(90, '2022-12-16', '18', '54', 140000, '11', 140000, '', '1', 'root', '2022-12-17 10:02:34', NULL, NULL),
(91, '2022-12-16', '18', '5', 18000, '10', 20000, '', '1', 'root', '2022-12-17 10:02:41', NULL, NULL),
(92, '2022-12-16', '18', '6', 21000, '10', 22000, '', '1', 'root', '2022-12-17 10:02:46', NULL, NULL),
(93, '2022-12-16', '18', '55', 13500, '10', 13300, '', '1', 'root', '2022-12-17 10:02:51', NULL, NULL),
(94, '2022-12-16', '18', '1', 12000, '10', 12000, '', '1', 'root', '2022-12-17 10:02:55', NULL, NULL),
(95, '2022-12-16', '18', '6', 21000, '9', 22000, '', '1', 'root', '2022-12-17 10:03:02', NULL, NULL),
(96, '2022-12-16', '18', '5', 20000, '9', 20000, '', '1', 'root', '2022-12-17 10:03:06', NULL, NULL),
(97, '2022-12-16', '18', '1', 12000, '9', 12000, '', '1', 'root', '2022-12-17 10:03:10', NULL, NULL),
(98, '2022-12-16', '18', '55', 13500, '9', 13300, '', '1', 'root', '2022-12-17 10:03:14', NULL, NULL),
(99, '2022-12-16', '18', '5', 18000, '4', 20000, '', '1', 'root', '2022-12-17 10:03:25', NULL, NULL),
(100, '2022-12-16', '18', '6', 21000, '4', 22000, '', '1', 'root', '2022-12-17 10:03:30', NULL, NULL),
(101, '2022-12-16', '18', '55', 13000, '4', 13300, '', '1', 'root', '2022-12-17 10:03:34', NULL, NULL),
(102, '2022-12-16', '18', '1', 11500, '4', 12000, '', '1', 'root', '2022-12-17 10:03:38', 'root', '2022-12-17 10:03:43'),
(103, '2022-12-16', '18', '54', 138000, '5', 140000, '', '1', 'root', '2022-12-17 10:03:52', NULL, NULL),
(104, '2022-12-16', '18', '11', 14000, '5', 15000, '', '1', 'root', '2022-12-17 10:03:56', NULL, NULL),
(105, '2022-12-16', '18', '10', 60000, '5', 61000, '', '1', 'root', '2022-12-17 10:04:00', NULL, NULL),
(106, '2022-12-16', '18', '9', 20000, '5', 21000, '', '1', 'root', '2022-12-17 10:04:04', NULL, NULL),
(107, '2022-12-16', '18', '8', 2500, '5', 2500, '', '1', 'root', '2022-12-17 10:04:07', NULL, NULL),
(108, '2022-12-16', '18', '7', 2500, '5', 2500, '', '1', 'root', '2022-12-17 10:04:12', NULL, NULL),
(109, '2022-12-16', '18', '4', 112000, '5', 115000, '', '1', 'root', '2022-12-17 10:04:19', NULL, NULL),
(110, '2022-12-16', '18', '3', 120000, '5', 120000, '', '1', 'root', '2022-12-17 10:04:24', NULL, NULL),
(111, '2022-12-16', '18', '54', 138000, '6', 140000, '', '1', 'root', '2022-12-17 10:04:33', NULL, NULL),
(112, '2022-12-16', '18', '10', 60000, '6', 61000, '', '1', 'root', '2022-12-17 10:04:38', NULL, NULL),
(113, '2022-12-16', '18', '9', 20000, '6', 21000, '', '1', 'root', '2022-12-17 10:04:43', NULL, NULL),
(114, '2022-12-16', '18', '8', 2000, '6', 2500, '', '1', 'root', '2022-12-17 10:04:48', NULL, NULL),
(115, '2022-12-16', '18', '7', 2000, '6', 2500, '', '1', 'root', '2022-12-17 10:04:52', NULL, NULL),
(116, '2022-12-16', '18', '3', 118000, '6', 120000, '', '1', 'root', '2022-12-17 10:04:58', NULL, NULL),
(117, '2022-12-16', '18', '52', 29000, '8', 30000, '', '1', 'root', '2022-12-17 10:05:10', NULL, NULL),
(118, '2022-12-16', '18', '11', 14000, '8', 15000, '', '1', 'root', '2022-12-17 10:05:15', NULL, NULL),
(119, '2022-12-16', '18', '10', 62000, '8', 61000, '', '1', 'root', '2022-12-17 10:05:20', NULL, NULL),
(120, '2022-12-16', '18', '9', 20000, '8', 21000, '', '1', 'root', '2022-12-17 10:05:24', NULL, NULL),
(121, '2022-12-16', '18', '4', 115000, '8', 115000, '', '1', 'root', '2022-12-17 10:05:28', NULL, NULL),
(122, '2022-12-17', '19', '1', 13900, '14', 12000, '', '1', 'root', '2022-12-17 10:01:44', NULL, NULL),
(123, '2022-12-17', '19', '55', 13000, '14', 13300, '', '1', 'root', '2022-12-17 10:01:49', NULL, NULL),
(124, '2022-12-17', '19', '1', 12700, '13', 12000, '', '1', 'root', '2022-12-17 10:01:56', NULL, NULL),
(125, '2022-12-17', '19', '55', 15000, '13', 13300, '', '1', 'root', '2022-12-17 10:02:00', NULL, NULL),
(126, '2022-12-17', '19', '55', 14000, '12', 13300, '', '1', 'root', '2022-12-17 10:02:07', NULL, NULL),
(127, '2022-12-17', '18', '3', 123000, '11', 120000, '', '1', 'root', '2022-12-17 10:02:19', NULL, NULL),
(128, '2022-12-17', '18', '4', 116000, '11', 115000, '', '1', 'root', '2022-12-17 10:02:24', NULL, NULL),
(129, '2022-12-17', '18', '52', 28000, '11', 30000, '', '1', 'root', '2022-12-17 10:02:29', NULL, NULL),
(130, '2022-12-17', '18', '54', 130000, '11', 140000, '', '1', 'root', '2022-12-17 10:02:34', NULL, NULL),
(131, '2022-12-17', '18', '5', 17500, '10', 20000, '', '1', 'root', '2022-12-17 10:02:41', NULL, NULL),
(132, '2022-12-17', '18', '6', 20000, '10', 22000, '', '1', 'root', '2022-12-17 10:02:46', NULL, NULL),
(133, '2022-12-17', '18', '55', 13400, '10', 13300, '', '1', 'root', '2022-12-17 10:02:51', NULL, NULL),
(134, '2022-12-17', '18', '1', 12000, '10', 12000, '', '1', 'root', '2022-12-17 10:02:55', NULL, NULL),
(135, '2022-12-17', '18', '6', 21000, '9', 22000, '', '1', 'root', '2022-12-17 10:03:02', NULL, NULL),
(136, '2022-12-17', '18', '5', 21000, '9', 20000, '', '1', 'root', '2022-12-17 10:03:06', NULL, NULL),
(137, '2022-12-17', '18', '1', 12000, '9', 12000, '', '1', 'root', '2022-12-17 10:03:10', NULL, NULL),
(138, '2022-12-17', '18', '55', 13500, '9', 13300, '', '1', 'root', '2022-12-17 10:03:14', NULL, NULL),
(139, '2022-12-17', '18', '5', 18000, '4', 20000, '', '1', 'root', '2022-12-17 10:03:25', NULL, NULL),
(140, '2022-12-17', '18', '6', 23000, '4', 22000, '', '1', 'root', '2022-12-17 10:03:30', NULL, NULL),
(141, '2022-12-17', '18', '55', 10000, '4', 13300, '', '1', 'root', '2022-12-17 10:03:34', NULL, NULL),
(142, '2022-12-17', '18', '1', 11000, '4', 12000, '', '1', 'root', '2022-12-17 10:03:38', 'root', '2022-12-17 10:03:43'),
(143, '2022-12-17', '18', '54', 131000, '5', 140000, '', '1', 'root', '2022-12-17 10:03:52', NULL, NULL),
(144, '2022-12-17', '18', '11', 15000, '5', 15000, '', '1', 'root', '2022-12-17 10:03:56', NULL, NULL),
(145, '2022-12-17', '18', '10', 60000, '5', 61000, '', '1', 'root', '2022-12-17 10:04:00', NULL, NULL),
(146, '2022-12-17', '18', '9', 20000, '5', 21000, '', '1', 'root', '2022-12-17 10:04:04', NULL, NULL),
(147, '2022-12-17', '18', '8', 2000, '5', 2500, '', '1', 'root', '2022-12-17 10:04:07', NULL, NULL),
(148, '2022-12-17', '18', '7', 2500, '5', 2500, '', '1', 'root', '2022-12-17 10:04:12', NULL, NULL),
(149, '2022-12-17', '18', '4', 111000, '5', 115000, '', '1', 'root', '2022-12-17 10:04:19', NULL, NULL),
(150, '2022-12-17', '18', '3', 121000, '5', 120000, '', '1', 'root', '2022-12-17 10:04:24', NULL, NULL),
(151, '2022-12-17', '18', '54', 134000, '6', 140000, '', '1', 'root', '2022-12-17 10:04:33', NULL, NULL),
(152, '2022-12-17', '18', '10', 61000, '6', 61000, '', '1', 'root', '2022-12-17 10:04:38', NULL, NULL),
(153, '2022-12-17', '18', '9', 22000, '6', 21000, '', '1', 'root', '2022-12-17 10:04:43', NULL, NULL),
(154, '2022-12-17', '18', '8', 2000, '6', 2500, '', '1', 'root', '2022-12-17 10:04:48', NULL, NULL),
(155, '2022-12-17', '18', '7', 2000, '6', 2500, '', '1', 'root', '2022-12-17 10:04:52', NULL, NULL),
(156, '2022-12-17', '18', '3', 119000, '6', 120000, '', '1', 'root', '2022-12-17 10:04:58', NULL, NULL),
(157, '2022-12-17', '18', '52', 29000, '8', 30000, '', '1', 'root', '2022-12-17 10:05:10', NULL, NULL),
(158, '2022-12-17', '18', '11', 14000, '8', 15000, '', '1', 'root', '2022-12-17 10:05:15', NULL, NULL),
(159, '2022-12-17', '18', '10', 62000, '8', 61000, '', '1', 'root', '2022-12-17 10:05:20', NULL, NULL),
(160, '2022-12-17', '18', '9', 20000, '8', 21000, '', '1', 'root', '2022-12-17 10:05:24', NULL, NULL),
(161, '2022-12-17', '18', '4', 114000, '8', 115000, '', '1', 'root', '2022-12-17 10:05:28', NULL, NULL),
(162, '2022-12-19', '19', '1', 11500, '14', 12000, '', '1', 'root', '2022-12-19 09:32:22', NULL, NULL),
(163, '2022-12-19', '19', '55', 13500, '14', 13300, '', '1', 'root', '2022-12-19 09:32:28', NULL, NULL),
(164, '2022-12-19', '19', '1', 11000, '13', 12000, '', '1', 'root', '2022-12-19 09:32:37', NULL, NULL),
(165, '2022-12-19', '19', '55', 14000, '13', 13300, '', '1', 'root', '2022-12-19 09:32:41', NULL, NULL),
(166, '2022-12-19', '19', '55', 13000, '12', 13300, '', '1', 'root', '2022-12-19 09:32:48', NULL, NULL),
(167, '2022-12-19', '18', '3', 120000, '11', 120000, '', '1', 'root', '2022-12-19 09:33:02', NULL, NULL),
(168, '2022-12-19', '18', '4', 113000, '11', 115000, '', '1', 'root', '2022-12-19 09:33:08', NULL, NULL),
(169, '2022-12-19', '18', '52', 30000, '11', 30000, '', '1', 'root', '2022-12-19 09:33:12', NULL, NULL),
(170, '2022-12-19', '18', '54', 138000, '11', 140000, '', '1', 'root', '2022-12-19 09:33:17', NULL, NULL),
(171, '2022-12-19', '18', '1', 11500, '10', 12000, '', '1', 'root', '2022-12-19 09:33:25', NULL, NULL),
(172, '2022-12-19', '18', '55', 13500, '10', 13300, '', '1', 'root', '2022-12-19 09:33:30', NULL, NULL),
(173, '2022-12-19', '18', '6', 22000, '10', 22000, '', '1', 'root', '2022-12-19 09:33:35', NULL, NULL),
(174, '2022-12-19', '18', '5', 20000, '10', 20000, '', '1', 'root', '2022-12-19 09:33:40', NULL, NULL),
(175, '2022-12-19', '18', '6', 22000, '9', 22000, '', '1', 'root', '2022-12-19 09:33:51', NULL, NULL),
(176, '2022-12-19', '18', '5', 21000, '9', 20000, '', '1', 'root', '2022-12-19 09:33:54', NULL, NULL),
(177, '2022-12-19', '18', '1', 13000, '9', 12000, '', '1', 'root', '2022-12-19 09:33:59', NULL, NULL),
(178, '2022-12-19', '18', '55', 13000, '9', 13300, '', '1', 'root', '2022-12-19 09:34:05', NULL, NULL),
(179, '2022-12-19', '18', '4', 114000, '8', 115000, '', '1', 'root', '2022-12-19 09:34:16', NULL, NULL),
(180, '2022-12-19', '18', '9', 21000, '8', 21000, '', '1', 'root', '2022-12-19 09:34:21', NULL, NULL),
(181, '2022-12-19', '18', '10', 61000, '8', 61000, '', '1', 'root', '2022-12-19 09:34:26', NULL, NULL),
(182, '2022-12-19', '18', '11', 15000, '8', 15000, '', '1', 'root', '2022-12-19 09:34:31', NULL, NULL),
(183, '2022-12-19', '18', '52', 30000, '8', 30000, '', '1', 'root', '2022-12-19 09:34:37', NULL, NULL),
(184, '2022-12-19', '18', '3', 120000, '6', 120000, '', '1', 'root', '2022-12-19 09:34:46', NULL, NULL),
(185, '2022-12-19', '18', '7', 2500, '6', 2500, '', '1', 'root', '2022-12-19 09:34:54', NULL, NULL),
(186, '2022-12-19', '18', '8', 2500, '6', 2500, '', '1', 'root', '2022-12-19 09:34:58', NULL, NULL),
(187, '2022-12-19', '18', '9', 21000, '6', 21000, '', '1', 'root', '2022-12-19 09:35:03', NULL, NULL),
(188, '2022-12-19', '18', '10', 61000, '6', 61000, '', '1', 'root', '2022-12-19 09:35:08', NULL, NULL),
(189, '2022-12-19', '18', '54', 139000, '6', 140000, '', '1', 'root', '2022-12-19 09:35:16', NULL, NULL),
(190, '2022-12-19', '18', '3', 122000, '5', 120000, '', '1', 'root', '2022-12-19 09:35:30', NULL, NULL),
(191, '2022-12-19', '18', '4', 116000, '5', 115000, '', '1', 'root', '2022-12-19 09:35:34', NULL, NULL),
(192, '2022-12-19', '18', '8', 2500, '5', 2500, '', '1', 'root', '2022-12-19 09:35:39', NULL, NULL),
(193, '2022-12-19', '18', '7', 2500, '5', 2500, '', '1', 'root', '2022-12-19 09:35:44', NULL, NULL),
(194, '2022-12-19', '18', '9', 21000, '5', 21000, '', '1', 'root', '2022-12-19 09:35:49', NULL, NULL),
(195, '2022-12-19', '18', '10', 61000, '5', 61000, '', '1', 'root', '2022-12-19 09:35:53', NULL, NULL),
(196, '2022-12-19', '18', '11', 14000, '5', 15000, '', '1', 'root', '2022-12-19 09:35:58', NULL, NULL),
(197, '2022-12-19', '18', '54', 141000, '5', 140000, '', '1', 'root', '2022-12-19 09:36:03', NULL, NULL),
(198, '2022-12-19', '18', '55', 13000, '4', 13300, '', '1', 'root', '2022-12-19 09:36:11', NULL, NULL),
(199, '2022-12-19', '18', '1', 13000, '4', 12000, '', '1', 'root', '2022-12-19 09:36:16', NULL, NULL),
(200, '2022-12-19', '18', '6', 22000, '4', 22000, '', '1', 'root', '2022-12-19 09:36:20', NULL, NULL),
(201, '2022-12-19', '18', '5', 20000, '4', 20000, '', '1', 'root', '2022-12-19 09:36:25', NULL, NULL),
(202, '2023-01-05', '18', '3', 121000, '11', 120000, '', '1', 'pasarpusat', '2023-01-05 19:41:35', NULL, NULL),
(203, '2023-01-05', '18', '4', 115000, '11', 115000, '', '1', 'pasarpusat', '2023-01-05 19:41:46', NULL, NULL),
(204, '2023-01-05', '18', '52', 30000, '11', 30000, '', '1', 'pasarpusat', '2023-01-05 19:41:52', NULL, NULL),
(205, '2023-01-05', '18', '54', 140000, '11', 140000, '', '1', 'pasarpusat', '2023-01-05 19:41:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi_lainnya`
--

CREATE TABLE `tb_transaksi_lainnya` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_tanggal` date NOT NULL,
  `transaksi_barang` varchar(20) NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_distributor` varchar(100) NOT NULL,
  `transaksi_het` int(11) NOT NULL,
  `transaksi_catatan` varchar(255) NOT NULL,
  `transaksi_status` varchar(5) NOT NULL,
  `transaksi_create_by` varchar(100) NOT NULL,
  `transaksi_create_time` datetime NOT NULL,
  `transaksi_update_by` varchar(100) DEFAULT NULL,
  `transaksi_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi_lainnya`
--

INSERT INTO `tb_transaksi_lainnya` (`transaksi_id`, `transaksi_tanggal`, `transaksi_barang`, `transaksi_harga`, `transaksi_distributor`, `transaksi_het`, `transaksi_catatan`, `transaksi_status`, `transaksi_create_by`, `transaksi_create_time`, `transaksi_update_by`, `transaksi_update_time`) VALUES
(1, '2022-12-15', '1', 4000, '1', 4000, '', '1', 'root', '2022-12-15 17:05:38', NULL, NULL),
(2, '2022-12-15', '2', 2200, '1', 2100, '', '1', 'root', '2022-12-17 15:54:52', NULL, NULL),
(3, '2022-12-15', '3', 8000, '1', 8000, '', '1', 'root', '2022-12-17 15:55:04', NULL, NULL),
(4, '2022-12-17', '1', 4000, '1', 4000, '', '1', 'root', '2022-12-17 15:55:17', NULL, NULL),
(5, '2022-12-17', '2', 2500, '1', 2100, '', '1', 'root', '2022-12-17 15:55:26', NULL, NULL),
(6, '2022-12-17', '3', 8000, '1', 8000, '', '1', 'root', '2022-12-17 15:55:37', NULL, NULL),
(7, '2022-12-19', '3', 8000, '1', 8000, '', '1', 'root', '2022-12-19 10:01:56', NULL, NULL),
(8, '2022-12-19', '2', 2000, '1', 2100, '', '1', 'root', '2022-12-19 10:02:00', NULL, NULL),
(9, '2022-12-19', '1', 4000, '1', 4000, '', '1', 'root', '2022-12-19 10:02:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi_penting`
--

CREATE TABLE `tb_transaksi_penting` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_tanggal` date NOT NULL,
  `transaksi_barang` varchar(20) NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_distributor` varchar(100) NOT NULL,
  `transaksi_het` int(11) NOT NULL,
  `transaksi_catatan` varchar(255) NOT NULL,
  `transaksi_status` varchar(5) NOT NULL,
  `transaksi_create_by` varchar(100) NOT NULL,
  `transaksi_create_time` datetime NOT NULL,
  `transaksi_update_by` varchar(100) DEFAULT NULL,
  `transaksi_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi_penting`
--

INSERT INTO `tb_transaksi_penting` (`transaksi_id`, `transaksi_tanggal`, `transaksi_barang`, `transaksi_harga`, `transaksi_distributor`, `transaksi_het`, `transaksi_catatan`, `transaksi_status`, `transaksi_create_by`, `transaksi_create_time`, `transaksi_update_by`, `transaksi_update_time`) VALUES
(1, '2022-12-13', '2', 85000, '1', 10, 'gas pol bos q', '1', 'root', '2022-12-14 16:28:12', 'root', '2022-12-14 20:48:39'),
(6, '2022-12-13', '3', 85000, '1', 85000, '', '1', 'root', '2022-12-14 20:49:45', 'root', '2022-12-15 09:29:18'),
(7, '2022-12-14', '3', 85000, '1', 85000, '', '1', 'root', '2022-12-14 21:36:56', NULL, NULL),
(8, '2022-12-14', '2', 86500, '1', 10, '', '1', 'root', '2022-12-14 21:37:00', 'root', '2022-12-15 09:25:07'),
(13, '2022-12-15', '2', 85000, '1', 85000, '', '1', 'root', '2022-12-15 11:09:40', NULL, NULL),
(14, '2022-12-17', '3', 84000, '1', 85000, '', '0', 'root', '2022-12-17 15:46:34', 'root', '2022-12-17 15:47:04'),
(15, '2022-12-15', '3', 84000, '1', 85000, '', '1', 'root', '2022-12-17 15:47:18', NULL, NULL),
(16, '2022-12-13', '5', 20000, '1', 20000, '', '1', 'root', '2022-12-17 15:49:21', NULL, NULL),
(17, '2022-12-15', '5', 20000, '1', 20000, '', '1', 'root', '2022-12-17 15:49:54', NULL, NULL),
(18, '2022-12-14', '5', 20000, '1', 20000, '', '1', 'root', '2022-12-17 15:50:29', NULL, NULL),
(19, '2022-12-13', '4', 17000, '2', 18000, '', '1', 'root', '2022-12-17 15:50:54', NULL, NULL),
(20, '2022-12-14', '4', 18000, '2', 18000, '', '1', 'root', '2022-12-17 15:51:17', NULL, NULL),
(21, '2022-12-15', '4', 18500, '2', 18000, '', '1', 'root', '2022-12-17 15:51:29', NULL, NULL),
(22, '2022-12-19', '5', 21000, '1', 20000, '', '1', 'root', '2022-12-19 10:00:46', NULL, NULL),
(23, '2022-12-19', '3', 85000, '1', 85000, '', '1', 'root', '2022-12-19 10:00:53', NULL, NULL),
(24, '2022-12-19', '2', 25000, '1', 2100, '', '1', 'root', '2022-12-19 10:01:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi_stok`
--

CREATE TABLE `tb_transaksi_stok` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_tanggal` date NOT NULL,
  `transaksi_barang` varchar(20) NOT NULL,
  `transaksi_distributor` varchar(100) NOT NULL,
  `transaksi_stok` float NOT NULL,
  `transaksi_ketahanan` varchar(255) NOT NULL,
  `transaksi_pemasok` varchar(255) NOT NULL,
  `transaksi_catatan` varchar(255) NOT NULL,
  `transaksi_status` varchar(5) NOT NULL,
  `transaksi_create_by` varchar(100) NOT NULL,
  `transaksi_create_time` datetime NOT NULL,
  `transaksi_update_by` varchar(100) DEFAULT NULL,
  `transaksi_update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_transaksi_stok`
--

INSERT INTO `tb_transaksi_stok` (`transaksi_id`, `transaksi_tanggal`, `transaksi_barang`, `transaksi_distributor`, `transaksi_stok`, `transaksi_ketahanan`, `transaksi_pemasok`, `transaksi_catatan`, `transaksi_status`, `transaksi_create_by`, `transaksi_create_time`, `transaksi_update_by`, `transaksi_update_time`) VALUES
(5, '2022-12-16', '2', '1', 98, '1 Abad', 'Malang', 'hi', '1', 'root', '2022-12-16 17:22:02', 'root', '2022-12-16 21:43:27'),
(6, '2022-12-16', '3', '1', 73, '1 jam', 'Jambi', '', '1', 'root', '2022-12-16 17:22:15', 'root', '2022-12-16 21:43:11'),
(8, '2022-12-17', '2', '3', 443, '2 Minggu', 'Sumbar', '', '1', 'root', '2022-12-17 16:45:52', NULL, NULL),
(9, '2022-12-17', '3', '3', 327, '1 bulan', 'Jakarta', '', '1', 'root', '2022-12-17 16:46:12', NULL, NULL),
(10, '2022-12-17', '5', '1', 4767, '3 minggu', 'Bandung', '', '1', 'root', '2022-12-17 16:46:35', NULL, NULL),
(11, '2022-12-17', '2', '1', 142, '1 minggu', 'Jambi', '', '1', 'root', '2022-12-17 16:46:53', NULL, NULL),
(12, '2022-12-17', '3', '1', 322, '1 minggu', 'Jakarta', '', '1', 'root', '2022-12-17 16:47:03', NULL, NULL),
(13, '2022-12-17', '2', '2', 130, '3 minggu', 'Palembang', '', '1', 'root', '2022-12-17 16:47:24', NULL, NULL),
(14, '2022-12-17', '3', '2', 80, '5 hari', 'Jakarta', '', '1', 'root', '2022-12-17 16:47:36', NULL, NULL),
(15, '2022-12-17', '5', '2', 1881, '3 minggu', 'Dumai', '', '1', 'root', '2022-12-17 16:47:47', NULL, NULL),
(16, '2022-12-19', '2', '3', 10, '2 hari', 'Dumai', '', '1', 'root', '2022-12-19 10:03:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` varchar(70) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_role` varchar(15) NOT NULL,
  `user_fk` varchar(10) DEFAULT NULL,
  `user_image` text NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_create_time` datetime NOT NULL,
  `user_create_by` varchar(200) NOT NULL,
  `user_last_login` datetime DEFAULT NULL,
  `user_update_by` varchar(200) DEFAULT NULL,
  `user_update_time` datetime DEFAULT NULL,
  `user_login_status` varchar(10) DEFAULT NULL,
  `user_login_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_username`, `user_email`, `user_name`, `user_password`, `user_role`, `user_fk`, `user_image`, `user_status`, `user_create_time`, `user_create_by`, `user_last_login`, `user_update_by`, `user_update_time`, `user_login_status`, `user_login_token`) VALUES
('2C15CC0F-9017-4A48-9768-3F6701CAB083', 'pasarpusat', 'pasarpusat@gmail.com', 'Paijo Muhin', '$2y$10$J.Y0UGwqG1dlnCyiVnEW8.NEVhKfd/WKHLfzF8MaqHR1UkohIR95a', '3', '18', 'files/img/user-default.png', 1, '2022-10-17 19:24:46', 'root', '2023-01-06 20:52:30', NULL, NULL, NULL, NULL),
('54C8360B-68FD-4386-A68D-9313E8643983', 'pasaranka', 'pasaranka@gmail.com', 'Zel Apriadi ', '$2y$10$ImDPQgLdkqIZ21ElIS5r2uO9T7.lCwQiHKSR6CLlQLxtmWkvOA3k2', '3', '14', 'files/img/user-default.png', 1, '2022-10-17 16:58:45', 'root', NULL, 'root', '2023-01-05 15:05:38', NULL, NULL),
('91BF012A-73D5-4796-9957-9AC18783B6E2', 'suparmin', 'sup@gmail.com', 'Suparmin Sulisto', '$2y$10$Moqb/9Z5/wk7VzlEf/Onp.r94ComPd1UuzJA8rUtdleNQfGhxyskG', '2', NULL, 'files/img/user-default.png', 1, '2022-10-07 15:09:27', 'root', NULL, NULL, NULL, NULL, NULL),
('B6D50186-5717-4499-89E4-9EDD3DEE3233', 'root', '19eriksetiawan@gmail.com', 'Erik Setiawan', '$2y$10$J.Y0UGwqG1dlnCyiVnEW8.NEVhKfd/WKHLfzF8MaqHR1UkohIR95a', '1', NULL, 'files/img/erik.jpg', 1, '2022-06-03 08:42:18', 'root', '2023-01-06 12:00:37', 'root', '2022-06-03 08:42:18', '', 'mtgimhFBpbAxRYTKDCMTDFpVEMLZXWwOEGQDSHJMQMMLKPPQSY'),
('DB2ACD66-B618-47DA-8B47-BCCC8BD4CFA3', 'wati', 'wati@gmail.coma', 'Wati Yani ', '$2y$10$3IhJS/UuxHiPiE.tGmecruFf0bhrABPq7MrwA4O07WvMFYqQtgC3W', '2', NULL, 'files/img/user-default.png', 1, '2022-10-07 15:12:58', 'root', NULL, 'root', '2023-01-05 15:04:27', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_level`
--

CREATE TABLE `tb_user_level` (
  `user_level_id` int(11) NOT NULL,
  `user_level_name` varchar(50) NOT NULL,
  `user_level_status` varchar(1) NOT NULL,
  `ul_create_by` varchar(100) NOT NULL,
  `ul_create_time` datetime DEFAULT NULL,
  `ul_modify_by` varchar(100) DEFAULT NULL,
  `ul_modify_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user_level`
--

INSERT INTO `tb_user_level` (`user_level_id`, `user_level_name`, `user_level_status`, `ul_create_by`, `ul_create_time`, `ul_modify_by`, `ul_modify_time`) VALUES
(1, 'Root', '1', 'root', NULL, '', NULL),
(2, 'Admin', '1', 'root', '2022-09-20 05:44:18', '', '2022-09-20 05:44:18'),
(3, 'Admin Pasar', '1', 'root', '2022-10-17 11:19:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `_area`
--

CREATE TABLE `_area` (
  `code` varchar(13) NOT NULL DEFAULT '',
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `_area`
--

INSERT INTO `_area` (`code`, `name`) VALUES
('14.04.01', 'Reteh'),
('14.04.01.1001', 'Pulaukijang'),
('14.04.01.1017', 'Metro'),
('14.04.01.1018', 'Madani'),
('14.04.01.2002', 'Sanglar'),
('14.04.01.2003', 'Pulaukecil'),
('14.04.01.2004', 'Sungaiterap'),
('14.04.01.2009', 'Sungaiundan'),
('14.04.01.2010', 'Seberang Sanglar'),
('14.04.01.2011', 'Mekar Sari'),
('14.04.01.2012', 'Seberang Pulau Kijang'),
('14.04.01.2013', 'Sungaiasam'),
('14.04.01.2014', 'Pulauruku'),
('14.04.01.2019', 'Tanjunglabuh'),
('14.04.01.2020', 'Sungaimahang'),
('14.04.02', 'Enok'),
('14.04.02.1001', 'Enok'),
('14.04.02.1002', 'Pusaran'),
('14.04.02.1003', 'Telukmedan'),
('14.04.02.1013', 'Pantaiseberang Makmur'),
('14.04.02.2004', 'Pengalihan'),
('14.04.02.2005', 'Sungaiambat'),
('14.04.02.2006', 'Simpang Tiga'),
('14.04.02.2007', 'Rantau Panjang'),
('14.04.02.2008', 'Sungairukam'),
('14.04.02.2009', 'Bagan Jaya'),
('14.04.02.2010', 'Suhada'),
('14.04.02.2011', 'Jaya Bhakti'),
('14.04.02.2012', 'Sungailokan'),
('14.04.02.2014', 'Simpang Tiga Daratan'),
('14.04.03', 'Kuala Indragiri'),
('14.04.03.1007', 'Sapat'),
('14.04.03.2001', 'Sungaibuluh'),
('14.04.03.2002', 'Tanjunglajau'),
('14.04.03.2003', 'Sungaibela'),
('14.04.03.2006', 'Telukdalam'),
('14.04.03.2008', 'Sungaipiyai'),
('14.04.03.2009', 'Perigi Raja'),
('14.04.03.2010', 'Tanjungmelayu'),
('14.04.04', 'Tembilahan'),
('14.04.04.1001', 'Tembilahan Kota'),
('14.04.04.1002', 'Tembilahan Hilir'),
('14.04.04.1003', 'Seberang Tembilahan'),
('14.04.04.1004', 'Sungaiperak'),
('14.04.04.1005', 'Sungaiberingin'),
('14.04.04.1006', 'Pekan Arba'),
('14.04.04.1007', 'Seberang Tembilahan Barat'),
('14.04.04.1008', 'Seberang Tembilahan Selatan'),
('14.04.05', 'Tempuling'),
('14.04.05.1004', 'Sungaisalak'),
('14.04.05.1005', 'Tempuling Jaya'),
('14.04.05.1016', 'Tanjungpidada'),
('14.04.05.1017', 'Pangkalan Tujuh'),
('14.04.05.2002', 'Telukkiambang'),
('14.04.05.2003', 'Mumpa'),
('14.04.05.2007', 'Telukjira'),
('14.04.05.2009', 'Karya Tunas Jaya'),
('14.04.05.2011', 'Harapan Jaya'),
('14.04.06', 'Gaung Anak Serka'),
('14.04.06.1004', 'Sungaiempat'),
('14.04.06.1005', 'Telukpinang'),
('14.04.06.1009', 'Tanjungharapan'),
('14.04.06.2001', 'Kuala Gaung'),
('14.04.06.2002', 'Telukpantaian'),
('14.04.06.2003', 'Teluksungka'),
('14.04.06.2006', 'Sungaiiliran'),
('14.04.06.2007', 'Teluktuasan'),
('14.04.06.2008', 'Rambaian'),
('14.04.06.2010', 'Harapan Makmur'),
('14.04.06.2011', 'Kelumpang'),
('14.04.06.2012', 'Idaman'),
('14.04.07', 'Mandah'),
('14.04.07.1004', 'Khairiah Mandah'),
('14.04.07.2001', 'Pulaucawan'),
('14.04.07.2002', 'Belaras'),
('14.04.07.2003', 'Bente'),
('14.04.07.2005', 'Igal'),
('14.04.07.2006', 'Pelanduk'),
('14.04.07.2007', 'Bakau Aceh'),
('14.04.07.2008', 'Batang Tumu'),
('14.04.07.2009', 'Bekawan'),
('14.04.07.2010', 'Bantayan'),
('14.04.07.2011', 'Batang Sari'),
('14.04.07.2012', 'Bolak Raya'),
('14.04.07.2013', 'Cahaya Baru'),
('14.04.07.2014', 'Belaras Barat'),
('14.04.07.2015', 'Sepakat Jaya'),
('14.04.07.2016', 'Suraya Mandiri'),
('14.04.07.2017', 'Bidari Tanjung Datuk'),
('14.04.08', 'Kateman'),
('14.04.08.1001', 'Tegaraja'),
('14.04.08.1009', 'Amal Bakti'),
('14.04.08.1010', 'Bandar Sri Gemilang'),
('14.04.08.2002', 'Kuala Selat'),
('14.04.08.2003', 'Sungaisimbar'),
('14.04.08.2004', 'Penjuru'),
('14.04.08.2005', 'Sari Mulia'),
('14.04.08.2006', 'Air Tawar'),
('14.04.08.2007', 'Tanjungraja'),
('14.04.08.2008', 'Sungaiteritip'),
('14.04.08.2011', 'Makmur Jaya'),
('14.04.09', 'Keritang'),
('14.04.09.1003', 'Kota Baru Reteh'),
('14.04.09.2001', 'Pebenaan'),
('14.04.09.2002', 'Seberang Pebenaan'),
('14.04.09.2004', 'Nusantara Jaya'),
('14.04.09.2005', 'Kota Baru Seberida'),
('14.04.09.2006', 'Kembang Mekarsari'),
('14.04.09.2007', 'Pasar Kembang'),
('14.04.09.2008', 'Kuala Keritang'),
('14.04.09.2009', 'Kuala Lemang'),
('14.04.09.2010', 'Telukkelasa'),
('14.04.09.2011', 'Pengalihan'),
('14.04.09.2012', 'Pancur'),
('14.04.09.2013', 'Sencalang'),
('14.04.09.2014', 'Petalongan'),
('14.04.09.2015', 'Nyiur Permai'),
('14.04.09.2016', 'Lintas Utara'),
('14.04.09.2017', 'Kayu Raja'),
('14.04.10', 'Tanah Merah'),
('14.04.10.1001', 'Kuala Enok'),
('14.04.10.2002', 'Selatnama'),
('14.04.10.2003', 'Sungainyiur'),
('14.04.10.2004', 'Tanjungbaru'),
('14.04.10.2005', 'Tekulai Hilir'),
('14.04.10.2006', 'Tekulai Hulu'),
('14.04.10.2007', 'Tekulai Bugis'),
('14.04.10.2008', 'Tanjungpasir'),
('14.04.10.2009', 'Tanah Merah'),
('14.04.10.2010', 'Sungailaut'),
('14.04.11', 'Batang Tuaka'),
('14.04.11.1001', 'Sungaipiring'),
('14.04.11.2002', 'Sungailuar'),
('14.04.11.2003', 'Sungaidusun'),
('14.04.11.2004', 'Sungaijunjangan'),
('14.04.11.2005', 'Sungairaya'),
('14.04.11.2006', 'Kuala Sebatu'),
('14.04.11.2007', 'Tanjungsiantar'),
('14.04.11.2008', 'Sungairawa'),
('14.04.11.2009', 'Sialang Jaya'),
('14.04.11.2010', 'Gemilang Jaya'),
('14.04.11.2011', 'Tasik Raya'),
('14.04.11.2012', 'Pasir Emas'),
('14.04.11.2013', 'Simpang Jaya'),
('14.04.12', 'Gaung'),
('14.04.12.1006', 'Kuala Lahang'),
('14.04.12.2001', 'Terusan Kempas'),
('14.04.12.2002', 'Lahang Baru'),
('14.04.12.2003', 'Simpang Gaung'),
('14.04.12.2004', 'Belantaraya'),
('14.04.12.2005', 'Sungaibaru'),
('14.04.12.2007', 'Lahang Tengah'),
('14.04.12.2008', 'Lahang Hulu'),
('14.04.12.2009', 'Pungkat'),
('14.04.12.2010', 'Jerambang'),
('14.04.12.2011', 'Telukkabung'),
('14.04.12.2012', 'Gembira'),
('14.04.12.2013', 'Semambu Kuning'),
('14.04.12.2014', 'Telukmerbau'),
('14.04.12.2015', 'Soren'),
('14.04.12.2016', 'Pintasan'),
('14.04.13', 'Tembilahan Hulu'),
('14.04.13.1001', 'Tembilahan Hulu'),
('14.04.13.1005', 'Tembilahan Barat'),
('14.04.13.2002', 'Pekan Kamis'),
('14.04.13.2003', 'Pulaupalas'),
('14.04.13.2004', 'Sialang Panjang'),
('14.04.13.2006', 'Sungaiintan'),
('14.04.14', 'Kemuning'),
('14.04.14.1001', 'Selensen'),
('14.04.14.2002', 'Batu Ampar'),
('14.04.14.2003', 'Keritang'),
('14.04.14.2004', 'Air Balui'),
('14.04.14.2005', 'Tuk Jimun'),
('14.04.14.2006', 'Kemuning Tua'),
('14.04.14.2007', 'Kemuning Muda'),
('14.04.14.2008', 'Limau Manis'),
('14.04.14.2009', 'Lubuk Besar'),
('14.04.14.2010', 'Sekara'),
('14.04.14.2011', 'Talang Jangkang'),
('14.04.14.2012', 'Sekayan'),
('14.04.15', 'Pelangiran'),
('14.04.15.1002', 'Pelangiran'),
('14.04.15.2001', 'Rotan Semelur'),
('14.04.15.2003', 'Simpang Kateman'),
('14.04.15.2004', 'Tanjungsimpang'),
('14.04.15.2005', 'Baung Rejo Jaya'),
('14.04.15.2006', 'Tagagiri Tama Jaya'),
('14.04.15.2007', 'Pinang Jaya'),
('14.04.15.2008', 'Wonosari'),
('14.04.15.2009', 'Tegal Rejo'),
('14.04.15.2010', 'Intan Mulia Jaya'),
('14.04.15.2011', 'Saka Palas Jaya'),
('14.04.15.2012', 'Catur Karya'),
('14.04.15.2013', 'Bagan Jaya'),
('14.04.15.2014', 'Telukbunian'),
('14.04.15.2015', 'Terusan Beringin Jaya'),
('14.04.15.2016', 'Hidayah'),
('14.04.16', 'Teluk Belengkong'),
('14.04.16.2001', 'Hibrida Mulia'),
('14.04.16.2002', 'Indra Sari Jaya'),
('14.04.16.2003', 'Tunggal Rahayu Jaya'),
('14.04.16.2004', 'Griya Mukti Jaya'),
('14.04.16.2005', 'Beringin Mulia'),
('14.04.16.2006', 'Hibrida Jaya'),
('14.04.16.2007', 'Sumber Jaya'),
('14.04.16.2008', 'Sumber Makmur Jaya'),
('14.04.16.2009', 'Sumber Sari Jaya'),
('14.04.16.2010', 'Kelapa Patih Jaya'),
('14.04.16.2011', 'Sapta Mulia Jaya'),
('14.04.16.2012', 'Saka Rotan'),
('14.04.16.2013', 'Gembaran'),
('14.04.17', 'Pulau Burung'),
('14.04.17.2001', 'Pulauburung'),
('14.04.17.2002', 'Teluknibung'),
('14.04.17.2003', 'Sungaidanai'),
('14.04.17.2004', 'Mayang Sari Jaya'),
('14.04.17.2005', 'Bukit Sari Intan Jaya'),
('14.04.17.2006', 'Manunggal Jaya'),
('14.04.17.2007', 'Bangun Harjo Jaya'),
('14.04.17.2008', 'Ringin Jaya'),
('14.04.17.2009', 'Sri Damai'),
('14.04.17.2010', 'Sapta Jaya'),
('14.04.17.2011', 'Keramat Jaya'),
('14.04.17.2012', 'Binagun Jaya'),
('14.04.17.2013', 'Suka Jaya'),
('14.04.17.2014', 'Sukaharjo Jaya'),
('14.04.18', 'Concong'),
('14.04.18.1001', 'Concong Luar'),
('14.04.18.2002', 'Concong Dalam'),
('14.04.18.2003', 'Concong Tengah'),
('14.04.18.2004', 'Kampung Baru'),
('14.04.18.2005', 'Panglima Raja'),
('14.04.18.2006', 'Sungaiberapit'),
('14.04.19', 'Kempas'),
('14.04.19.1002', 'Kempas Jaya'),
('14.04.19.1007', 'Harapan Tani'),
('14.04.19.2001', 'Pekan Tua'),
('14.04.19.2003', 'Rumbai Jaya'),
('14.04.19.2004', 'Bayas Jaya'),
('14.04.19.2005', 'Sungaiara'),
('14.04.19.2006', 'Sungaigantang'),
('14.04.19.2008', 'Karya Tani'),
('14.04.19.2009', 'Kerta Jaya'),
('14.04.19.2010', 'Kulim Jaya'),
('14.04.19.2011', 'Danaupulai Indah'),
('14.04.19.2012', 'Sungairabit'),
('14.04.20', 'Sungai Batang'),
('14.04.20.1001', 'Benteng'),
('14.04.20.2002', 'Benteng Utara'),
('14.04.20.2003', 'Pasenggerahan'),
('14.04.20.2004', 'Kuala Sungai Batang'),
('14.04.20.2005', 'Kuala Patah Parang'),
('14.04.20.2006', 'Benteng Barat'),
('14.04.20.2007', 'Pandan Sari'),
('14.04.20.2008', 'Mugo Mulyo');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_area`
--
ALTER TABLE `tb_area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indeks untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indeks untuk tabel `tb_barang_lainnya`
--
ALTER TABLE `tb_barang_lainnya`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indeks untuk tabel `tb_barang_penting`
--
ALTER TABLE `tb_barang_penting`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indeks untuk tabel `tb_distributor_barang_lainnya`
--
ALTER TABLE `tb_distributor_barang_lainnya`
  ADD PRIMARY KEY (`distributor_id`);

--
-- Indeks untuk tabel `tb_distributor_barang_penting`
--
ALTER TABLE `tb_distributor_barang_penting`
  ADD PRIMARY KEY (`distributor_id`);

--
-- Indeks untuk tabel `tb_distributor_stok`
--
ALTER TABLE `tb_distributor_stok`
  ADD PRIMARY KEY (`distributor_id`);

--
-- Indeks untuk tabel `tb_grup_komoditas`
--
ALTER TABLE `tb_grup_komoditas`
  ADD PRIMARY KEY (`grup_komoditas_id`);

--
-- Indeks untuk tabel `tb_img_artikel`
--
ALTER TABLE `tb_img_artikel`
  ADD PRIMARY KEY (`img_id`);

--
-- Indeks untuk tabel `tb_jualan`
--
ALTER TABLE `tb_jualan`
  ADD PRIMARY KEY (`jualan_id`);

--
-- Indeks untuk tabel `tb_kategori_artikel`
--
ALTER TABLE `tb_kategori_artikel`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `tb_komoditas`
--
ALTER TABLE `tb_komoditas`
  ADD PRIMARY KEY (`komoditas_id`);

--
-- Indeks untuk tabel `tb_komoditas_stok`
--
ALTER TABLE `tb_komoditas_stok`
  ADD PRIMARY KEY (`komoditas_id`);

--
-- Indeks untuk tabel `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indeks untuk tabel `tb_management_page`
--
ALTER TABLE `tb_management_page`
  ADD PRIMARY KEY (`id_management`);

--
-- Indeks untuk tabel `tb_pasar`
--
ALTER TABLE `tb_pasar`
  ADD PRIMARY KEY (`pasar_id`);

--
-- Indeks untuk tabel `tb_pedagang`
--
ALTER TABLE `tb_pedagang`
  ADD PRIMARY KEY (`pedagang_id`);

--
-- Indeks untuk tabel `tb_relasi_barang_lainnya`
--
ALTER TABLE `tb_relasi_barang_lainnya`
  ADD PRIMARY KEY (`relasi_id`);

--
-- Indeks untuk tabel `tb_relasi_barang_penting`
--
ALTER TABLE `tb_relasi_barang_penting`
  ADD PRIMARY KEY (`relasi_id`);

--
-- Indeks untuk tabel `tb_relasi_stok`
--
ALTER TABLE `tb_relasi_stok`
  ADD PRIMARY KEY (`relasi_id`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indeks untuk tabel `tb_transaksi_lainnya`
--
ALTER TABLE `tb_transaksi_lainnya`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indeks untuk tabel `tb_transaksi_penting`
--
ALTER TABLE `tb_transaksi_penting`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indeks untuk tabel `tb_transaksi_stok`
--
ALTER TABLE `tb_transaksi_stok`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `tb_user_level`
--
ALTER TABLE `tb_user_level`
  ADD PRIMARY KEY (`user_level_id`);

--
-- Indeks untuk tabel `_area`
--
ALTER TABLE `_area`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_area`
--
ALTER TABLE `tb_area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_barang_lainnya`
--
ALTER TABLE `tb_barang_lainnya`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_barang_penting`
--
ALTER TABLE `tb_barang_penting`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_distributor_barang_lainnya`
--
ALTER TABLE `tb_distributor_barang_lainnya`
  MODIFY `distributor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_distributor_barang_penting`
--
ALTER TABLE `tb_distributor_barang_penting`
  MODIFY `distributor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_distributor_stok`
--
ALTER TABLE `tb_distributor_stok`
  MODIFY `distributor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_grup_komoditas`
--
ALTER TABLE `tb_grup_komoditas`
  MODIFY `grup_komoditas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_img_artikel`
--
ALTER TABLE `tb_img_artikel`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_jualan`
--
ALTER TABLE `tb_jualan`
  MODIFY `jualan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori_artikel`
--
ALTER TABLE `tb_kategori_artikel`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_komoditas`
--
ALTER TABLE `tb_komoditas`
  MODIFY `komoditas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `tb_komoditas_stok`
--
ALTER TABLE `tb_komoditas_stok`
  MODIFY `komoditas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1514;

--
-- AUTO_INCREMENT untuk tabel `tb_management_page`
--
ALTER TABLE `tb_management_page`
  MODIFY `id_management` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pasar`
--
ALTER TABLE `tb_pasar`
  MODIFY `pasar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_pedagang`
--
ALTER TABLE `tb_pedagang`
  MODIFY `pedagang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_relasi_barang_lainnya`
--
ALTER TABLE `tb_relasi_barang_lainnya`
  MODIFY `relasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_relasi_barang_penting`
--
ALTER TABLE `tb_relasi_barang_penting`
  MODIFY `relasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_relasi_stok`
--
ALTER TABLE `tb_relasi_stok`
  MODIFY `relasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi_lainnya`
--
ALTER TABLE `tb_transaksi_lainnya`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi_penting`
--
ALTER TABLE `tb_transaksi_penting`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi_stok`
--
ALTER TABLE `tb_transaksi_stok`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_user_level`
--
ALTER TABLE `tb_user_level`
  MODIFY `user_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
