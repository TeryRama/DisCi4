<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('root/_head') ?>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <?= view('root/_header_mobile'); ?>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <?= view('root/_sidebar'); ?>
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <?= view('root/_header_desktop'); ?>
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="d-flex flex-column-fluid">
                        <div class="container">
                            <div class="card card-custom">
                                <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                                    <div class="card-toolbar">
                                        <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                                            <li class="nav-item mr-3">
                                                <a class="nav-link active" data-toggle="tab" href="#login_page">
                                                    <span class="nav-text font-size-lg">Login Page</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mr-3">
                                                <a class="nav-link" data-toggle="tab" href="#main_page">
                                                    <span class="nav-text font-size-lg">Main Page</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane show active px-7" id="login_page" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table gs-7 gy-7 gx-7">
                                                    <thead>
                                                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                                            <th>Title</th>
                                                            <th>Subtitle</th>
                                                            <th>Background Banner</th>
                                                            <th>Logo Banner</th>
                                                            <th>Image Banner</th>
                                                            <th>Footer</th>
                                                            <th>Footer Link</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($page_management as $row) {
                                                        ?>
                                                            <tr>
                                                                <td><?= $row->login_text1_banner ?></td>
                                                                <td><?= $row->login_text2_banner ?></td>
                                                                <td>
                                                                    <div style="background-color: <?= $row->login_bg_banner ?>;">.</div>
                                                                </td>
                                                                <td width="10%"><img src="<?= base_url($row->login_logo_banner) ?>" width="100%" alt=""></td>
                                                                <td width="10%"><img src="<?= base_url($row->login_image_banner) ?>" width="100%" alt=""></td>
                                                                <td><?= $row->login_footer ?></td>
                                                                <td>
                                                                    <a target="_BLANK" href="<?= $row->login_footer_link ?>"><?= $row->login_footer_link ?></a>
                                                                </td>
                                                                <td>
                                                                    <button class="btn btn-success" data-toggle="modal" data-target="#modal_edit_Login"><i class="fas fa-pen"></i></button>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane show px-7" id="main_page" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table" id="kt_contact">
                                                    <thead>
                                                        <tr>
                                                            <th>Desktop Icon</th>
                                                            <th>Mobile Icon</th>
                                                            <th>Right Footer</th>
                                                            <th>Left Footer</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 1;
                                                        foreach ($page_management as $row) {
                                                        ?>
                                                            <tr>
                                                                <td>
                                                                    <a href="<?= base_url() . $row->main_desktop_logo ?>" target="_blank"><img src="<?= base_url() . $row->main_desktop_logo ?>" alt="" width="100%"></a>
                                                                </td>
                                                                <td>
                                                                    <a href="<?= base_url() . $row->main_mobile_logo ?>" target="_blank"><img src="<?= base_url() . $row->main_mobile_logo ?>" alt="" width="100%"></a>
                                                                </td>
                                                                <td>
                                                                    <?= $row->main_right_footer ?>
                                                                    <br><a href="<?= $row->main_right_footer_link ?>" target="_blank"><?= $row->main_right_footer_link ?></a>
                                                                </td>
                                                                <td>
                                                                    <?= $row->main_left_footer ?>
                                                                    <br><a href="<?= $row->main_left_footer_link ?>" target="_blank"><?= $row->main_left_footer_link ?></a>
                                                                </td>
                                                                <td>
                                                                    <button class="btn btn-success" data-toggle="modal" data-target="#modal_edit_main"><i class="fas fa-pen"></i></button>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                            $no++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= view('root/_footer'); ?>
            </div>
        </div>
    </div>
    <?= view('root/_user_panel'); ?>
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                    <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
        </span>
    </div>

    <!-- modal login page -->
    <div class="modal fade" id="modal_edit_Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Form Management Login Page</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>
                <form class="form" id="form_edit_login" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="idmanagement" id="idmanagement">
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Login Page Footer</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="text" name="footer" id="footer" class="form-control" required placeholder="Type Login Page Footer" autocomplete="off" value="<?= $page_management[0]->login_footer ?>">
                                <input type="text" name="footer_link" id="footer_link" class="form-control mt-2" required placeholder="Type Login Page Footer Link" autocomplete="off" value="<?= $page_management[0]->login_footer_link ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Title Banner</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="text" name="title_banner" id="title_banner" class="form-control" required placeholder="Type Title in Banner" autocomplete="off" value="<?= $page_management[0]->login_text1_banner ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Subtitle Banner</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="text" name="subtitle_banner" id="subtitle_banner" class="form-control" required placeholder="Type Subtitle in Banner" autocomplete="off" value="<?= $page_management[0]->login_text2_banner ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Background Banner</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="color" name="background_banner" id="background_banner" class="form-control" required value="<?= $page_management[0]->login_bg_banner ?>" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Color Text Banner</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="color" name="color_banner" id="color_banner" class="form-control" required autocomplete="off" value="<?= $page_management[0]->login_text_color_banner ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Logo Banner</label>
                            <div class="col-lg-9 col-xl-9">
                                <div class="custom-file mt-2">
                                    <input type="file" class="custom-file-input" id='logo_banner' name='logo_banner' accept="image/png, image/jpeg" />
                                    <label class="custom-file-label" for="customFile">Choose image</label>
                                    <span class="text-muted" style="font-size:12px;">Accept image (Max 5 Mb) </span>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Image Banner</label>
                            <div class="col-lg-9 col-xl-9">
                                <div class="custom-file mt-2">
                                    <input type="file" class="custom-file-input" id='image_banner' name='image_banner' accept="image/png, image/jpeg" />
                                    <label class="custom-file-label" for="customFile">Choose image</label>
                                    <span class="text-muted" style="font-size:12px;">Accept image (Max 5 Mb) </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id='submitedit' class="btn btn-success font-weight-bold">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- modal main page -->
    <div class="modal fade" id="modal_edit_main" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Form Management Main Page</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>
                <form class="form" id="form_edit_main" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="idmanagement" id="idmanagement">
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Right Footer</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="text" name="right_footer" id="right_footer" class="form-control" required placeholder="Type Main Page Right Footer" autocomplete="off" value="<?= $page_management[0]->main_right_footer ?>">
                                <input type="text" name="right_footer_link" id="right_footer_link" class="form-control mt-1" required placeholder="Type Main Page Right Footer Link" autocomplete="off" value="<?= $page_management[0]->main_right_footer_link ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Main Left Footer</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="text" name="left_footer" id="left_footer" class="form-control" required placeholder="Type Main Page Right Footer" autocomplete="off" value="<?= $page_management[0]->main_left_footer ?>">
                                <input type="text" name="left_footer_link" id="left_footer_link" class="form-control mt-1" required placeholder="Type Main Page Left Footer Link" autocomplete="off" value="<?= $page_management[0]->main_left_footer_link ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Desktop Icon</label>
                            <div class="col-lg-9 col-xl-9">
                                <div class="custom-file mt-2">
                                    <input type="file" class="custom-file-input" id='desktop_icon' name='desktop_icon' accept="image/png, image/jpeg" />
                                    <label class="custom-file-label" for="customFile">Choose image</label>
                                    <span class="text-muted" style="font-size:12px;">Accept image (Max 5 Mb) </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Mobile Icon</label>
                            <div class="col-lg-9 col-xl-9">
                                <div class="custom-file mt-2">
                                    <input type="file" class="custom-file-input" id='mobile_icon' name='mobile_icon' accept="image/png, image/jpeg" />
                                    <label class="custom-file-label" for="customFile">Choose image</label>
                                    <span class="text-muted" style="font-size:12px;">Accept image (Max 5 Mb) </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id='submitedit' class="btn btn-success font-weight-bold">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?= view('root/_footer_js') ?>
    <script>
        $("#form_edit_login").submit(function(e) {
            KTApp.blockPage({
                overlayColor: '#000000',
                state: 'danger',
                message: 'Please wait...'
            });

            var footer = $("#footer").val();
            var title_banner = $("#title_banner").val();
            var footer_link = $("#footer_link").val();
            var subtitle_banner = $("#subtitle_banner").val();
            var id = $("#idmanagement").val();
            var background_banner = $("#background_banner").val();
            var color_banner = $("#color_banner").val();
            var logo_banner = document.getElementById('logo_banner').files[0];
            var image_banner = document.getElementById('image_banner').files[0];



            var fdata = new FormData();
            fdata.append('footer', footer);
            fdata.append('footer_link', footer_link);
            fdata.append('title_banner', title_banner);
            fdata.append('subtitle_banner', subtitle_banner);
            fdata.append('id', id);
            fdata.append('background_banner', background_banner);
            fdata.append('color_banner', color_banner);
            fdata.append('logo_banner', logo_banner);
            fdata.append('image_banner', image_banner);

            $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                type: "POST",
                url: "<?= base_url('/crud/edit-login-page') ?>",
                dataType: 'json',
                data: fdata,
                success: function(result) {
                    setTimeout(function() {
                        KTApp.unblockPage();
                    }, 900);
                    if (result.status == "1") {
                        swal.fire({
                            icon: "success",
                            title: "Success",
                            showConfirmButton: false,
                            timer: 1000
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else if (result.status == "2") {
                        swal.fire("Failed!", "Check your data!", "error");
                        $("#submiteditlogin").prop('enabled', true);
                    } else if (result.status == "3") {
                        swal.fire("Failed!", "Failed to upload image!", "error");
                        $("#submiteditlogin").prop('enabled', true);
                    } else {
                        swal.fire('Error', result.status, 'error');
                        $("#submiteditlogin").prop('enabled', true);
                    }
                }
            });
            e.preventDefault();
        });

        $("#form_edit_main").submit(function(e) {
            KTApp.blockPage({
                overlayColor: '#000000',
                state: 'danger',
                message: 'Please wait...'
            });

            var right_footer = $("#right_footer").val();
            var left_footer = $("#left_footer").val();
            var right_footer_link = $("#right_footer_link").val();
            var left_footer_link = $("#left_footer_link").val();
            var id = $("#idmanagementmain").val();
            var desktop_icon = document.getElementById('desktop_icon').files[0];
            var mobile_icon = document.getElementById('mobile_icon').files[0];


            var fdata = new FormData();
            fdata.append('right_footer', right_footer);
            fdata.append('left_footer', left_footer);
            fdata.append('right_footer_link', right_footer_link);
            fdata.append('left_footer_link', left_footer_link);
            fdata.append('id', id);
            fdata.append('desktop_icon', desktop_icon);
            fdata.append('mobile_icon', mobile_icon);

            $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                type: "POST",
                url: "<?= base_url('/crud/edit-main-page') ?>",
                dataType: 'json',
                data: fdata,
                success: function(result) {
                    setTimeout(function() {
                        KTApp.unblockPage();
                    }, 900);
                    if (result.status == "1") {
                        swal.fire({
                            icon: "success",
                            title: "Success",
                            showConfirmButton: false,
                            timer: 1000
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else if (result.status == "2") {
                        swal.fire("Failed!", "Check your data!", "error");
                        $("#submiteditmain").prop('enabled', true);
                    } else if (result.status == "3") {
                        swal.fire("Failed!", "Failed to upload image!", "error");
                        $("#submiteditlogin").prop('enabled', true);
                    } else {
                        swal.fire('Error', result.status, 'error');
                        $("#submiteditmain").prop('enabled', true);
                    }
                }
            });
            e.preventDefault();
        });
    </script>
</body>

</html>