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
                            <div class="card card-custom mt-4">
                                <div class="card-header">
                                    <div class="card-title">
                                        <span class="card-icon">
                                            <i class="flaticon2-fast-next text-primary"></i>
                                        </span>
                                        <h3 class="card-label">Data Pengguna</h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <a data-toggle="modal" data-target="#modal_add" href="javascript:;" class="btn btn-fh btn btn-light-primary btn-hover-primary font-weight-bold px-2 px-lg-5 mr-2">
                                            <span class="svg-icon svg-icon-success svg-icon-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                                                    </g>
                                                </svg>
                                            </span>Tambah Pengguna
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-7">

                                        <div class="row align-items-center">
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Type to Search..." id="kt_datatable_search_query" />
                                                    <span>
                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">Role: </label>
                                                    <select class="form-control selectpicker" data-size="7" data-live-search="true" id="kt_datatable_search_role">
                                                        <option value="">Seluruh</option>
                                                        <?php foreach ($role as $row) { ?>
                                                            <option value="<?= $row->user_level_name ?>"><?= $row->user_level_name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <table class="datatable " id="kt_datatable_pengguna">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Pengguna</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Terdaftar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($user as $row) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="<?= base_url($row->user_image) ?>" target="_BLANK">
                                                                <div class="symbol symbol-50 symbol-light mr-1">
                                                                    <span class="symbol-label" style="background-image: url('<?= base_url($row->user_image) ?>');">
                                                                    </span>
                                                                </div>
                                                            </a>
                                                            <div class="ml-1">
                                                                <span class="text-muted font-weight-bold"><?= $row->user_username ?></span><br>
                                                                <span><?= $row->user_name ?></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><?= $row->user_email ?></td>
                                                    <td>
                                                        <?= $row->user_level_name ?>
                                                        <?= ($row->user_role == '3' ? "<br><span class='text-muted'>" . $row->pasar . "</span>" : "") ?>
                                                    </td>
                                                    <td><?= tgl_indo(date('Y-m-d', strtotime($row->user_create_time))) ?></td>
                                                    <td>
                                                        <div class="dropdown dropdown-inline mr-4">
                                                            <button type="button" class="btn btn-clean btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class='ki ki-bold-more-hor'></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:;" onclick="editData('<?= encrypt_url($row->user_id) ?>')">Edit Details</a>
                                                                <a class="dropdown-item" href="javascript:;" onclick="resetPassword('<?= encrypt_url($row->user_id) ?>')">Reset Password</a>
                                                                <a onclick="deleteData('<?= encrypt_url($row->user_id) ?>')" class='dropdown-item text-danger' href='javascript:;'>Hapus Data</a>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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

    <!-- Modal add-->
    <div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>
                <form class="form" id="form_add" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-xl-4 col-lg-4 col-form-label">Username</label>
                            <div class="col-lg-8 col-xl-8">
                                <input type="text" name="usernameadd" id="usernameadd" class="form-control" required placeholder="ketik username" autocomplete="off">
                                <span class="form-text text-muted">Bersifat unik, tanpa spasi, hanya huruf dan angka, minimal 4 karakter</span>
                                <span id='user_name_info'></span>
                                <input type='hidden' id='user_name_status'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-4 col-lg-4 col-form-label">Nama Lengkap</label>
                            <div class="col-lg-8 col-xl-8">
                                <input type="text" name="namaadd" id="namaadd" class="form-control" required placeholder="ketik nama lengkap" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-xl-4 col-lg-4 col-form-label">Email</label>
                            <div class="col-lg-8 col-xl-8">
                                <input type="email" name="emailadd" id="emailadd" class="form-control" required placeholder="ketik alamat email" autocomplete="off">
                                <span class="form-text text-muted">Email harus unik</span>
                                <span id='user_email_info'></span>
                                <input type='hidden' id='user_email_status'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-4 col-lg-4 col-form-label">Role</label>
                            <div class="col-lg-8 col-xl-8">
                                <select name="roleadd" required id="roleadd" class="form-control select2" data-size="10" data-live-search="true" onchange="cekRole()">
                                    <option value=""></option>
                                    <?php foreach ($role as $row) { ?>
                                        <option value="<?= encrypt_url($row->user_level_id) ?>"><?= $row->user_level_name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" id="ly-pasar-add">
                            <label class="col-xl-4 col-lg-4 col-form-label">Pasar</label>
                            <div class="col-lg-8 col-xl-8">
                                <select class="form-control select2" data-size="10" data-live-search="true" name="pasaradd" id="pasaradd">
                                    <option value=""></option>
                                    <?php foreach ($pasar as $row) { ?>
                                        <option value="<?= encrypt_url($row->pasar_id) ?>"><?= $row->pasar_nama ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-4 col-lg-4">Password</label>
                            <div class="col-lg-8 col-xl-8 ">
                                <div class="radio-inline">
                                    <label class="radio">
                                        <input type="radio" name="radioaddpass" id="inputpassadd" value="input" required="required">
                                        <span></span>Input Password</label>
                                    <label class="radio">
                                        <input type="radio" name="radioaddpass" id="generatepassadd" value="generate" required="required">
                                        <span></span>Generate Otomatis</label>
                                </div>
                                <div id="form-password" class="mt-1">
                                    <input type="text" name="passadd" id="passadd" class="form-control" placeholder="Type password" autocomplete="off">
                                </div>
                                <div id="form-generate" class="mt-1">
                                    <span class="form-text text-muted">Password akan digenerate secara otomatis oleh sistem dan akan dikirim melalui email yang diinput</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id='submitadd' class="btn btn-success font-weight-bold">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Modal add-->

    <!-- Modal edit-->
    <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>
                <form class="form" id="form_edit" enctype="multipart/form-data">
                    <input type="hidden" name="idedit" id="idedit">
                    <div class="modal-body">
                        <div class="alert alert-custom alert-light-warning fade show mb-5" role="alert">
                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
                            <div class="alert-text"><strong>Harap periksa data </strong>. Memperbarui data akan mempengaruhi data terkait</div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-4 col-lg-4 col-form-label">Username</label>
                            <div class="col-lg-8 col-xl-8">
                                <input type="text" name="usernameedit" id="usernameedit" class="form-control" required placeholder="ketik username" readonly autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-4 col-lg-4 col-form-label">Nama Lengkap</label>
                            <div class="col-lg-8 col-xl-8">
                                <input type="text" name="namaedit" id="namaedit" class="form-control" required placeholder="ketik nama lengkap" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-xl-4 col-lg-4 col-form-label">Email</label>
                            <div class="col-lg-8 col-xl-8">
                                <input type="email" name="emailedit" id="emailedit" class="form-control" required placeholder="ketik alamat email" autocomplete="off">
                                <span class="form-text text-muted">Email harus unik</span>
                                <span id='user_email_info'></span>
                                <input type='hidden' id='user_email_status'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-4 col-lg-4 col-form-label">Role</label>
                            <div class="col-lg-8 col-xl-8">
                                <select name="roleedit" required id="roleedit" class="form-control select2" data-size="10" data-live-search="true" onchange="cekRole2()">
                                    <option value=""></option>
                                    <?php foreach ($role as $row) { ?>
                                        <option value="<?= encrypt_url($row->user_level_id) ?>"><?= $row->user_level_name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row" id="ly-pasar-edit">
                            <label class="col-xl-4 col-lg-4 col-form-label">Pasar</label>
                            <div class="col-lg-8 col-xl-8">
                                <select class="form-control select2" data-size="10" data-live-search="true" name="pasaredit" id="pasaredit">
                                    <option value=""></option>
                                    <?php foreach ($pasar as $row) { ?>
                                        <option value="<?= encrypt_url($row->pasar_id) ?>"><?= $row->pasar_nama ?></option>
                                    <?php } ?>
                                </select>
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
    <!--End Modal edit-->

    <!-- Modal reset-->
    <div class="modal fade" id="modal_reset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Reset Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>
                <form class="form" id="form_reset" enctype="multipart/form-data">
                    <input type="hidden" name="idreset" id="idreset">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Username</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="text" name="usernamereset" id="usernamereset" class="form-control" disabled placeholder="Type Username" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="email" name="emailreset" id="emailreset" class="form-control" disabled placeholder="Type Email" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Nama Lengkap</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="text" name="namereset" id="namereset" class="form-control" disabled placeholder="Type Name" autocomplete="off">
                            </div>
                        </div>
                        <div class="mt-0 form-group row">
                            <label class="col-xl-3 col-lg-3">Password</label>
                            <div class="col-lg-9 col-xl-9 ">
                                <div class="radio-inline">
                                    <label class="radio">
                                        <input type="radio" name="radioresetpass" id="inputpassreset" value="input" required="required">
                                        <span></span>Input Password</label>
                                    <label class="radio">
                                        <input type="radio" name="radioresetpass" id="generatepassreset" value="generate" required="required">
                                        <span></span>Generate Otomatis</label>
                                </div>
                                <div id="form-password-reset" class="mt-1">
                                    <input type="text" name="passreset" id="passreset" class="form-control" placeholder="Type password" autocomplete="off">
                                </div>
                                <div id="form-generate-reset" class="mt-1">
                                    <span class="text-muted">Password akan digenerate secara otomatis oleh sistem dan akan dikirim melalui email yang diinput</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id='submitadd' class="btn btn-success font-weight-bold">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Modal reset-->
    <?= view('root/_footer_js') ?>
    <script>
        $('#pasaradd').select2({
            placeholder: 'Pilih Pasar',
            width: "100%"
        });

        $('#roleadd').select2({
            placeholder: 'Pilih Role',
            width: "100%"
        });

        $('#pasaredit').select2({
            placeholder: 'Pilih Pasar',
            width: "100%"
        });

        $('#roleedit').select2({
            placeholder: 'Pilih Role',
            width: "100%"
        });

        $("#form-password").hide();
        $("#form-generate").hide();
        $("passadd").prop('required', false);
        $('input[type=radio][name=radioaddpass]').change(function() {
            if (this.value == 'input') {
                $("#form-password").show();
                $("#form-generate").hide();
                $("passadd").prop('required', true);
            } else if (this.value == 'generate') {
                $("#form-password").hide();
                $("#form-generate").show();
                $("passadd").prop('required', false);
            }
        });

        $("#form-password-reset").hide();
        $("#form-generate-reset").hide();
        $("passreset").prop('required', false);
        $('input[type=radio][name=radioresetpass]').change(function() {
            if (this.value == 'input') {
                $("#form-password-reset").show();
                $("#form-generate-reset").hide();
                $("passreset").prop('required', true);
            } else if (this.value == 'generate') {
                $("#form-password-reset").hide();
                $("#form-generate-reset").show();
                $("passreset").prop('required', false);
            }
        });



        function resetPassword(id) {
            $.ajax({
                type: "GET",
                url: "<?= base_url() ?>/crud/get-user-detail",
                dataType: 'json',
                data: {
                    id: id
                },
                success: function(result) {
                    if (result.status == "1") {
                        $("#idreset").val(id);
                        $("#usernamereset").val(result[0].user_username);
                        $("#emailreset").val(result[0].user_email);
                        $("#namereset").val(result[0].user_name);


                        $('#modal_reset').modal({
                            backdrop: 'static',
                            keyboard: true,
                            show: true
                        });
                    } else {
                        Swal.fire("Oops!", "Try Again!", "error");
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    swal.fire(
                        'Error',
                        'SQL Error Inserting Data',
                        'error'
                    )
                    KTApp.unblockPage();
                }
            });
        }


        $("#ly-pasar-add").hide();

        function cekRole() {
            var role = $("#roleadd").val();
            if (role == "<?= encrypt_url('3') ?>") {
                $("#ly-pasar-add").show();
                $("#pasaradd").attr("required", true);
            } else {
                $("#ly-pasar-add").hide();
                $("#pasaradd").attr("required", false);
            }
        }

        function cekRole2() {
            var role = $("#roleedit").val();
            if (role == "<?= encrypt_url('3') ?>") {
                $("#ly-pasar-edit").show();
                $("#pasaredit").attr("required", true);
            } else {
                $("#ly-pasar-edit").hide();
                $("#pasaredit").attr("required", false);
            }
        }

        $('#kt_datatable_search_role').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Role');
        });

        $('#kt_datatable_search_kecamatan').selectpicker();
        var datatable = $('#kt_datatable_pengguna').KTDatatable({
            data: {
                saveState: {
                    cookie: false
                },
            },
            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch',
            },
            layout: {
                class: 'datatable-bordered datatable-head-custom',
            },
            columns: [{
                field: '#',
                width: 30,
                textAlign: 'left',
                sortable: 'asc',
                type: 'number'
            }, {
                field: 'Pengguna',
            }, {
                field: 'Email',
            }, {
                field: 'Role',
            }, {
                field: 'Terdaftar',
            }, {
                field: 'Aksi',
                width: 140,
                autoHide: false
            }, ],
        });

        $("#usernameadd").keyup(function() {
            var user_name = $("#usernameadd").val();
            if (user_name.length > 3) {
                checkUserName(user_name);
            } else {
                $('#user_name_info').attr('class', 'form-text text-danger');
                $('#user_name_info').html('minimal <b>4 karakter</b>.');
                $("#usernameadd").attr('class', 'form-control is-invalid');
                $("#user_name_status").val('0');
            }
            checkAllInput();
        });


        $("#emailadd").keyup(function() {
            var email = $("#emailadd").val();
            var status = ValidateEmail(email);
            if (status == true) {
                checkUserEmail($("#emailadd").val());
            } else {
                $('#user_email_info').attr('class', 'help block text-danger');
                $('#user_email_info').html('email tidak valid.');
                $("#emailadd").attr('class', 'form-control is-invalid');
                $("#user_email_status").val('0');
            }
            checkAllInput();
        });



        function ValidateEmail(mail) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(mail)
        }


        $("#usernameadd").keypress(function(e) {
            var e = window.event || e;
            var keyCode = e.keyCode;
            if (keyCode == '32') {
                return false;
            }
        });

        function checkUserName(text) {
            $('#user_name_info').attr('class', 'form-text text-primary');
            $('#user_name_info').html('Checking availability....');
            $.ajax({
                type: 'GET',
                url: '<?= base_url() ?>/crud/user-check/user_name/' + text,
                dataType: 'json',
                success: function(data) {
                    if (data.status == '1') {
                        $("#user_name_status").val('0');
                        $('#user_name_info').attr('class', 'form-text text-danger');
                        $('#user_name_info').html('username <b>sudah digunakan</b>.');
                        $("#usernameadd").attr('class', 'form-control is-invalid');
                    } else {
                        $("#user_name_status").val('1');
                        $('#user_name_info').attr('class', 'form-text text-success');
                        $('#user_name_info').html('Username is <b>tersedia</b>.');
                        $("#usernameadd").attr('class', 'form-control is-valid');
                    }
                    checkAllInput();
                }
            });
        }

        function checkUserEmail(text) {
            $('#user_email_info').attr('class', 'form-text text-primary');
            $('#user_email_info').html('Checking availability....');
            $.ajax({
                type: 'GET',
                url: '<?= base_url() ?>/crud/user-check/email/' + text,
                dataType: 'json',
                success: function(data) {
                    if (data.status == '1') {
                        $("#user_email_status").val('0');
                        $('#user_email_info').attr('class', 'form-text text-danger');
                        $('#user_email_info').html('Email <b>sudah digunakan</b>.');
                        $("#emailadd").attr('class', 'form-control is-invalid');
                    } else {
                        $("#user_email_status").val('1');
                        $('#user_email_info').attr('class', 'form-text text-success');
                        $('#user_email_info').html('Email is <b>tersedia</b>.');
                        $("#emailadd").attr('class', 'form-control is-valid');
                    }
                    checkAllInput();
                }
            });
        }

        function checkAllInput() {
            var user_name = $("#user_name_status").val();
            var user_email = $("#user_email_status").val();

            if (user_name == '1' && user_email == '1') {
                $("#submitadd").prop('disabled', false);
            } else {
                $("#submitadd").prop('disabled', true);
            }
        }



        $("#form_add").submit(function(e) {
            KTApp.blockPage({
                overlayColor: '#000000',
                state: 'danger',
                message: 'Please wait...'
            });

            var username = $("#usernameadd").val();
            var nama = $("#namaadd").val();
            var email = $("#emailadd").val();
            var role = $("#roleadd").val();
            var fk = "";
            if (role == '<?= encrypt_url('3') ?>') {
                fk = $("#pasaradd").val();
            } else {
                fk = "";
            }
            var r_pass = $('input[type=radio][name=radioaddpass]').val();
            var pass = "";
            if (r_pass == "input") {
                pass = $("#passadd").val();
            } else {
                pass = "generate_sistem0";
            }

            var fdata = new FormData();
            fdata.append('username', username);
            fdata.append('nama', nama);
            fdata.append('email', email);
            fdata.append('role', role);
            fdata.append('fk', fk);
            fdata.append('pass', pass);

            $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                type: "POST",
                url: "<?= base_url('/crud/add-pengguna') ?>",
                dataType: 'json',
                data: fdata,
                success: function(result) {
                    setTimeout(function() {
                        KTApp.unblockPage();
                    }, 900);
                    if (result.status == "1") {
                        swal.fire({
                            icon: "success",
                            title: result.msg,
                            showConfirmButton: false,
                            timer: 1000
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else if (result.status == "0") {
                        swal.fire("Failed!", result.msg, "error");
                    } else {
                        swal.fire('Error', result.status, 'error');
                    }
                }
            });
            e.preventDefault();
        });

        $("#form_reset").submit(function(e) {
            KTApp.blockPage({
                overlayColor: '#000000',
                state: 'danger',
                message: 'Please wait...'
            });
            var id = $("#idreset").val();
            var r_pass = $('input[type=radio][name=radioaddpass]').val();
            var pass = "";
            if (r_pass == "input") {
                pass = $("#passreset").val();
            } else {
                pass = "generate_sistem0";
            }

            var fdata = new FormData();
            fdata.append('id', id);
            fdata.append('pass', pass);
            $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                type: "POST",
                url: "<?= base_url('/crud/reset-password-user') ?>",
                dataType: 'json',
                data: fdata,
                success: function(result) {
                    setTimeout(function() {
                        KTApp.unblockPage();
                    }, 900);
                    if (result.status == "1") {
                        swal.fire({
                            icon: "success",
                            title: "Berhasil reset password user",
                            showConfirmButton: false,
                            timer: 1000
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 900);
                    } else if (result.status == "2") {
                        swal.fire("Failed!", "Coba lagi!", "error");
                        $("#submitadd").prop('enabled', true);
                    } else {
                        swal.fire('Error', result.status, 'error');
                        $("#submitadd").prop('enabled', true);
                    }
                }
            });
            e.preventDefault();
        });

        function editData(id) {
            $.ajax({
                type: "GET",
                url: "<?= base_url() ?>/crud/get-user-detail",
                dataType: 'json',
                data: {
                    id: id,
                },
                success: function(result) {
                    if (result.status == "1") {
                        $("#idedit").val(id);
                        $("#usernameedit").val(result[0].user_username);
                        $("#namaedit").val(result[0].user_name);
                        $("#emailedit").val(result[0].user_email);
                        $("#roleedit").val(result.role).change();
                        if (result.role == '<?= encrypt_url('3') ?>') {
                            $("#ly-pasar-edit").show();
                            $("#pasaredit").val(result[0].user_fk).change();
                        } else {
                            $("#ly-pasar-edit").hide();
                        }

                        $('#modal_edit').modal({
                            backdrop: 'static',
                            keyboard: true,
                            show: true
                        });
                    } else {
                        Swal.fire("Oops!", "Try Again!", "error");
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    swal.fire(
                        'Error',
                        'SQL Error Inserting Data',
                        'error'
                    )
                    KTApp.unblockPage();
                }
            });
        }

        $("#form_edit").submit(function(e) {
            KTApp.blockPage({
                overlayColor: '#000000',
                state: 'danger',
                message: 'Please wait...'
            });

            var id = $("#idedit").val();
            var username = $("#usernameedit").val();
            var nama = $("#namaedit").val();
            var email = $("#emailedit").val();
            var role = $("#roleedit").val();
            var fk = "";
            if (role == '<?= encrypt_url('3') ?>') {
                fk = $("#pasaredit").val();
            } else {
                fk = "";
            }


            var fdata = new FormData();
            fdata.append('id', id);
            fdata.append('username', username);
            fdata.append('nama', nama);
            fdata.append('email', email);
            fdata.append('role', role);
            fdata.append('fk', fk);

            $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                type: "POST",
                url: "<?= base_url('/crud/edit-pengguna') ?>",
                dataType: 'json',
                data: fdata,
                success: function(result) {
                    setTimeout(function() {
                        KTApp.unblockPage();
                    }, 900);
                    if (result.status == "1") {
                        swal.fire({
                            icon: "success",
                            title: result.msg,
                            showConfirmButton: false,
                            timer: 1000
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else if (result.status == "0") {
                        swal.fire("Failed!", result.msg, "error");
                    } else {
                        swal.fire('Error', result.status, 'error');
                    }
                }
            });
            e.preventDefault();
        });

        function deleteData(id) {
            swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini. Semua aktivitas dicatat di sistem.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: 'Delete!',
                cancelButtonText: 'Cancel',
                confirmButtonClass: 'btn btn-danger',
                cancelButtonClass: 'btn btn-question',
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url() ?>/crud/delete-user",
                        dataType: 'json',
                        data: {
                            id: id
                        },
                        success: function(result) {
                            if (result.status == "1") {
                                swal.fire('Success!', 'Berhasil menghapus data .', 'success');
                                setTimeout(function() {
                                    location.reload();
                                }, 1500);
                            } else {
                                swal.fire("Error!", "Try Again!", "error");
                            }
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            swal.fire('Error', 'SQL Error Inserting Data', 'error')
                        }
                    });
                } else if (result.dismiss === swal.DismissReason.cancel) {
                    swal.fire(
                        'Cancelled',
                        'Aksi dibatalkan',
                        'error'
                    );
                }
            });
        }
    </script>
</body>

</html>