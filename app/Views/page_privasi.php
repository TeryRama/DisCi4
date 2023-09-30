<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?= view('_head') ?>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <?= view('_header') ?>
        <section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?= base_url() ?>/files/web-assets/paralax.png'); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
            <div class="container clearfix">
                <h1 class="mt-3 mb-0">Kebijakan Privasi</h1>
                <span class="mt-0">e-Sibapokting Inhil</span>
                <ol class="breadcrumb">
                    <!-- <li class=""><img src="<?= base_url() ?>/files/web-assets/logo-anka.png" width="80px" alt=""></li> -->
                    <li class="ms-2"><img src="<?= base_url() ?>/files/web-assets/logo-inhil.png" width="60px" alt=""></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">Jobs</li> -->
                </ol>
            </div>

        </section>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="fancy-title title-bottom-border mb-0">
                        <h3>Kebijakan Privasi e-Sibapokting Inhil</h3>
                    </div>
                    <div class="">
                        <p>Kebijakan Privasi ini mengungkapkan kebijakan penanganan data-data pribadi pengguna pada situs kami. Perlu diperhatikan bahwa di dalam situs ini terdapat berbagai link ke banyak situs lain yang disediakan untuk menambah informasi pelengkap yang berguna bagi anda, dan juga untuk kenyamanan Anda. Namun bagaimanapun kami tidak bertanggung jawab terhadap kebijakan penanganan informasi yang ada di situs-situs tersebut.</p>
                        <p class="mb-0"><b>Informasi Pengguna</b></p>
                        <p class="mt-0">Informasi dari pengguna yang diambil oleh sistem adalah nama, email, username, password, role, dan data-data lainnya yang berguna untuk kebutuhan akun</p>
                        <p class="mb-0"><b>Keamanan Data</b></p>
                        <p class="mt-0">Untuk mencegah akses data oleh pihak yang tidak memiliki wewenang, menjaga keakuratan data dan memastikan penggunaan informasi yang semestinya, kami menggunakan prosedur fisik, elektronik dan manajerial untuk melindungi informasi yang kami kumpulkan secara online. Kami juga menggunakan enkripsi untuk autentikasi login</p>
                        <p class="mb-0"><b>Patuh pada hukum atau proses pengadilan</b></p>
                        <p class="mt-0">Melindungi terhadap penyalahgunaan atau penggunaan tanpa ijin dari blog kami yang dapat merugikan orang lain; atau Melindungi keamanan pribadi atau properti atas pengguna kami atau publik.</p>
                        <p class="mb-0"><b>Tujuan Pengumpulan Informasi</b></p>
                        <ol class="ml-3 p-0">
                            <li>Memeriksa identitas pengguna</li>
                            <li>Sebagai pemisah akses antar role pengguna</li>
                            <li>Mencegah adanya orang yang tidak berkepentingan masuk kedalam sistem</li>
                        </ol>
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