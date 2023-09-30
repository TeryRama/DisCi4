<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8" />
    <title>Reset Password | e-Sembako Plus Rohul</title>
    <meta name="description" content="Reset password e-Sembako Plus Rohul " />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="<?= base_url() ?>/assets/admin/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/admin/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/admin/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/admin/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/admin/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/admin/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?= base_url() ?>/files/web-assets/logo_esembako.png" />
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <div class="d-flex flex-column flex-root">
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
            <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: <?= $page_style[0]->login_bg_banner ?>;">
                <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                    <a class="text-center mb-10">
                        <img src="<?= base_url($page_style[0]->login_logo_banner) ?>" class="max-h-100px" alt="" />
                    </a>
                    <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: <?= $page_style[0]->login_text_color_banner ?>;"><?= $page_style[0]->login_text1_banner ?></h3>
                    <h4 class="font-weight-bolder text-center" style="color: <?= $page_style[0]->login_text_color_banner ?>;"><?= $page_style[0]->login_text2_banner ?></h4>
                </div>
                <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(<?= base_url($page_style[0]->login_image_banner) ?>);"></div>
            </div>
            <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                <div class="d-flex flex-column-fluid flex-center">
                    <div class="login-form login-signin">
                        <form class="form" id="form_reset">
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Reset Password</h3>
                                <!-- <span class="text-muted font-weight-bold font-size-h4">New here?
										<a href="javascript:;" id="kt_login_signup" class="text-primary font-weight-bolder">Create an account.</a></span> -->
                            </div>
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Password Baru</label>
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" placeholder="Input pasword" type="password" id="password" autofocus name="password" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Verifikasi Password</label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" placeholder="verifikasi password" type="password" name="passwordverif" id="passwordverif" autocomplete="off" />
                            </div>
                            <div class="pb-lg-0 pb-5">
                                <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                    <div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
                        <span class="mr-1"><?= date('Y'); ?> ©</span>
                        <a href="<?= $page_style[0]->login_footer_link ?>" target="_blank" class="text-dark-75 text-hover-primary"><?= $page_style[0]->login_footer ?></a>
                    </div>
                    <!-- <a href="https://ankabrata.com" class="text-primary ml-5 font-weight-bolder font-size-lg">Contact Us</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="<?= base_url() ?>/assets/admin/plugins/global/plugins.bundle.js"></script>
		<script src="<?= base_url() ?>/assets/admin/js/scripts.bundle.js"></script> -->

    <script src="<?= base_url() ?>/assets/admin/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url() ?>/assets/admin/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="<?= base_url() ?>/assets/admin/js/scripts.bundle.js"></script>
    <script src="<?= base_url() ?>/assets/admin/js/pages/custom/login/login-general.js"></script>
    <script>
        $("#form_reset").submit(function(e) {
            KTApp.blockPage({
                overlayColor: '#000000',
                state: 'danger',
                message: 'Please wait...'
            });
            var password_verif = $("#passwordverif").val();
            var password = $("#password").val();

            if (password_verif != password) {
                swal.fire("Failed!", "Password harus sama!", "error");
                setTimeout(function() {
                    location.reload();
                }, 900);
            } else {
                var fdata = new FormData();
                fdata.append('id', '<?= $_GET['req'] ?>');
                fdata.append('password', password);
                $.ajax({
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: "POST",
                    url: "<?= base_url('/reset-password-action') ?>",
                    dataType: 'json',
                    data: fdata,
                    success: function(result) {
                        KTApp.unblockPage();
                        if (result.status == "1") {
                            swal.fire({
                                icon: "success",
                                title: "Berhasil reset password, silahkan login !",
                                showConfirmButton: false,
                                timer: 1000
                            });
                            setTimeout(function() {
                                window.location.href = "<?= base_url('/login') ?>"
                            }, 1000);
                        } else if (result.status == "0") {
                            swal.fire("Failed!", "gagal reset password, coba lagi!", "error");
                            setTimeout(function() {
                                location.reload();
                            }, 900);
                        } else {
                            swal.fire('Error', result.status, 'error');
                            $("#submiteditmain").prop('disabled', false);
                        }

                    }
                });
            }
            e.preventDefault();
        });
    </script>
    <?php
    if (isset($_SESSION['msg_error']) && ($_SESSION['msg_error'] != "")) {
    ?>
        <script>
            Swal.fire("Error", "<?= $_SESSION['msg_error'] ?>", "error");
        </script>
    <?php
        session_destroy();
    }
    ?>
</body>

</html>