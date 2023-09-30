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
                            <form class="form" id="form_add" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-8 col-xl-8 col-lg-8">
                                        <div class="card card-custom">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <span class="card-icon">
                                                        <i class="flaticon2-fast-next text-primary"></i>
                                                    </span>
                                                    <h3 class="card-label">Artikel Baru</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Judul</label>
                                                    <input type="text" name="juduladd" id="juduladd" class="form-control" required placeholder="Input judul artikel" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <label>Konten</label>
                                                    <div id="kontenadd" class="quill1" style="height: 500px; width:100%"></div>
                                                    <input type="hidden" name="kontenhiden" id="kontenhiden">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Gallery</label>
                                                    <div class="card card-body">
                                                        <div class="dropzone dropzone-multi" id="kt_dropzone_2">
                                                            <div class="dropzone-panel mb-lg-0 mb-2 text-center">
                                                                <h5 class="text-muted m-0 ">Drop multiple files here</h5>
                                                                <h5 class="m-1 text-muted ">or</h5>
                                                                <a class="dropzone-select btn btn-light-danger font-weight-bold btn-sm">Attach files</a>
                                                            </div>
                                                            <div class="dropzone-items">
                                                                <div class="dropzone-item" style="display:none">
                                                                    <div class="dropzone-file">
                                                                        <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                                            <span data-dz-name="">some_image_file_name.jpg</span>
                                                                            <strong>(
                                                                                <span data-dz-size="">340kb</span>)</strong>
                                                                        </div>
                                                                        <div class="dropzone-error" data-dz-errormessage=""></div>
                                                                    </div>
                                                                    <div class="dropzone-progress">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropzone-toolbar">
                                                                        <span class="dropzone-delete" data-dz-remove="">
                                                                            <i class="flaticon2-cross"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="form-text text-muted">Max file size is 2 MB and max number of files is 5.</span>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                                <button type="submit" id='submitadd' class="btn btn-success font-weight-bold">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xl-4 col-lg-4">
                                        <div class="card card-custom">
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <span class="card-icon">
                                                        <i class="flaticon2-fast-next text-primary"></i>
                                                    </span>
                                                    <h3 class="card-label">Pengaturan</h3>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Penulis</label>
                                                    <div class="input-group input-group-solid">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control form-control-solid" value="<?= $_SESSION['user_name'] ?>" readonly />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>URL Artikel</label>
                                                    <input type="text" id="urladd" name="urladd" class="form-control form-control-solid" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal</label>
                                                    <div class="input-group input-group-solid">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control form-control-solid" value="<?= tgl_indo(date('Y-m-d')) ?>" readonly />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kategori Artikel</label>
                                                    <select class="form-control selectpicker" data-size="7" data-live-search="true" name="kategoriadd" id="kategoriadd" required>
                                                        <option value="">Pilih kategori</option>
                                                        <?php
                                                        foreach ($kategori as $row) {
                                                        ?>
                                                            <option value="<?= encrypt_url($row->kategori_id) ?>"><?= $row->kategori_nama ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Status Akses</label>
                                                    <select class="form-control selectpicker" data-size="7" data-live-search="true" name="aksesadd" id="aksesadd" required>
                                                        <option value="">Pilih status akses</option>
                                                        <option value="Draft">Draft</option>
                                                        <option value="Published">Published</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Foto Utama</label>
                                                    <div class="custom-file mt-2">
                                                        <input type="file" class="custom-file-input" id='fotoadd' name='fotoadd' accept=""  required/>
                                                        <label class="custom-file-label" for="customFile">Pilih foto</label>
                                                        <span class="text-muted" style="font-size:12px;">Accept image (Max 5 Mb) </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
    <?= view('root/_footer_js') ?>
    <script>
        var quill1 = new Quill('#kontenadd', {
            modules: {
                toolbar: [
                    [{
                        header: [3, 4, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    ['link'],
                    [{
                        'script': 'sub'
                    }, {
                        'script': 'super'
                    }],
                    [{
                        'color': []
                    }, {
                        'background': []
                    }],
                    [{
                        'align': []
                    }],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                ]
            },
            placeholder: 'Ketik isi artikel disini',
            theme: 'snow'
        });
        $("#juduladd").keyup(function() {
            var text = $("#juduladd").val().toLowerCase().replace(/[^\w ]+/g, '').replace(/ +/g, '-');
            $("#urladd").val(text);
            checkSlug();
        });
        // $("#post_slug").keyup(function() {
        //     checkSlug();
        // });

        function checkSlug() {
            var text = $("#urladd").val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url() ?>/crud/chekc-url-artikel/' + text,
                dataType: 'json',
                success: function(data) {
                    if (data.status == '0') {
                        $("#urladd").attr('class', 'form-control form-control-solid is-invalid');
                        // var randomString = "<?= encrypt_url(rand(11, 99)) ?>";
                        // $("#post_slug").val(text + "-" + randomString);
                    } else {
                        $("#urladd").attr('class', 'form-control form-control-solid is-valid');
                    }
                    checkAllInput();
                }
            });
        }

        $("#form_add").submit(function(e) {
            KTApp.blockPage({
                overlayColor: '#000000',
                state: 'danger',
                message: 'Please wait...'
            });

            var post_content = quill1.root.innerHTML;
            $("#kontenhiden").val(post_content);

            var kategori = $("#kategoriadd").val();
            var judul = $("#juduladd").val();
            var konten = $("#kontenhiden").val();
            var url = $("#urladd").val();
            var akses = $("#aksesadd").val();
            var foto = document.getElementById('fotoadd').files[0];

            var fdata = new FormData();
            fdata.append('id', '<?= encrypt_url($artikel_id) ?>');
            fdata.append('kategori', kategori);
            fdata.append('judul', judul);
            fdata.append('konten', konten);
            fdata.append('url', url);
            fdata.append('akses', akses);
            fdata.append('rand', '<?= $rand ?>');
            fdata.append('foto', foto);

            $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                type: "POST",
                url: "<?= base_url('/crud/add-artikel') ?>",
                dataType: 'json',
                data: fdata,
                success: function(result) {
                    setTimeout(function() {
                        KTApp.unblockPage();
                    }, 900);
                    if (result.status == "1") {
                        swal.fire({
                            icon: "success",
                            title: "Berhasil menambahkan artikel",
                            showConfirmButton: false,
                            timer: 1000
                        });
                        window.location.href = "<?= base_url('/root/artikel/') ?>"
                    } else if (result.status == "2") {
                        swal.fire("Failed!", "Gagal menambahkan data!!", "error");
                        $("#submiteditlogin").prop('enabled', true);
                    } else {
                        swal.fire('Error', result.status, 'error');
                        $("#submiteditlogin").prop('enabled', true);
                    }
                }
            });
            e.preventDefault();
        });
    </script>
    <script>
        var KTDropzoneDemo = function() {
            var demo3 = function() {
                var id = '#kt_dropzone_2';

                var previewNode = $(id + " .dropzone-item");
                previewNode.id = "";
                var previewTemplate = previewNode.parent('.dropzone-items').html();
                previewNode.remove();

                var myDropzone5 = new Dropzone(id, {
                    url: "<?= base_url("/crud/add-image-artikel") ?>",
                    paramName: "photo",
                    parallelUploads: 1,
                    maxFiles: 5,
                    acceptedFiles: ".jpeg,.jpg,.png",
                    maxFilesize: 2,
                    previewTemplate: previewTemplate,
                    previewsContainer: id + " .dropzone-items",
                    clickable: id + " .dropzone-select"
                });

                myDropzone5.on("addedfile", function(file) {
                    $(document).find(id + ' .dropzone-item').css('display', '');
                });

                myDropzone5.on("totaluploadprogress", function(progress) {
                    $(id + " .progress-bar").css('width', progress + "%");
                });

                myDropzone5.on("sending", function(file, xhr, formData) {
                    formData.append("artikel_id", "<?= encrypt_url($artikel_id) ?>");
                    formData.append("rand", "<?= $rand ?>");
                    formData.append("action", "add");
                    formData.append("token", "");
                    $(id + " .progress-bar").css('opacity', "1");
                });

                myDropzone5.on("removedfile", function(file) {
                    var fileName = file.name;

                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url("/crud/delete-image-artikel") ?>',
                        data: {
                            name: fileName,
                            rand: '<?= $rand ?>',
                            id: '<?= encrypt_url($artikel_id) ?>'
                        },
                        sucess: function(data) {
                            console.log('success: ' + data);
                        }
                    });

                    var _ref;
                    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                });

                myDropzone5.on("complete", function(progress) {
                    var thisProgressBar = id + " .dz-complete";
                    setTimeout(function() {
                        $(thisProgressBar + " .progress-bar, " + thisProgressBar + " .progress").css('opacity', '0');
                    }, 300)
                });

            }

            return {
                init: function() {
                    demo3();
                }
            };
        }();

        KTUtil.ready(function() {
            KTDropzoneDemo.init();
        });
    </script>
</body>

</html>