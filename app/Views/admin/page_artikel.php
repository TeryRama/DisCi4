<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('admin/_head') ?>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <?= view('admin/_header_mobile'); ?>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <?= view('admin/_sidebar'); ?>
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <?= view('admin/_header_desktop'); ?>
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="d-flex flex-column-fluid">
                        <div class="container">
                            <div class="card card-custom">
                                <div class="card-header">
                                    <div class="card-title">
                                        <span class="card-icon">
                                            <i class="flaticon2-fast-next text-primary"></i>
                                        </span>
                                        <h3 class="card-label">Seluruh Data Artikel</h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <a href="<?= base_url('/admin/artikel/tambah') ?>" class="btn btn-fh btn btn-light-primary btn-hover-primary font-weight-bold px-2 px-lg-5 mr-2">
                                            <span class="svg-icon svg-icon-success svg-icon-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                                                    </g>
                                                </svg>
                                            </span>Tambah Artikel
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="mb-7">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12">
                                                <div class="row align-items-center">
                                                    <div class="col-md-4 my-2 my-md-0">
                                                        <div class="input-icon">
                                                            <input type="text" class="form-control" placeholder="Type to Search..." id="kt_datatable_search_query" />
                                                            <span>
                                                                <i class="flaticon2-search-1 text-muted"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Judul</th>
                                                <th>Waktu</th>
                                                <th>Autor</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($artikel as $row) {
                                                if ($row->artikel_akses == 'Published') {
                                                    $style = "label-light-success";
                                                } elseif ($row->artikel_akses == 'Draft') {
                                                    $style = "label-light-danger";
                                                }
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $row->artikel_judul ?></td>
                                                    <td><?= tgl_indo(date('Y-m-d', strtotime($row->artikel_create_time))) . ", Pukul " . date('H:i', strtotime($row->artikel_create_time)) ?></td>
                                                    <td><?= $row->autor ?></td>
                                                    <td>
                                                        <span style="width: 110px;">
                                                            <span class="label font-weight-bold label-lg <?= $style ?> label-inline"><?= $row->artikel_akses ?></span>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown dropdown-inline mr-4">
                                                            <button type="button" class="btn btn-clean btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class='ki ki-bold-more-hor'></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="<?= base_url('/admin/artikel/edit/' . encrypt_url($row->artikel_id)) ?>">Edit Details</a>
                                                                <a onclick="deleteData('<?= encrypt_url($row->artikel_id) ?>')" class='dropdown-item text-danger' href='javascript:;'>Hapus Data</a>
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
                <?= view('admin/_footer'); ?>
            </div>
        </div>
    </div>
    <?= view('admin/_user_panel'); ?>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>
                <form class="form" id="form_add" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Kategori</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="text" name="kategoriadd" id="kategoriadd" class="form-control" required placeholder="Input kategori" autocomplete="off">
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Tahun</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>
                <form class="form" id="form_edit" enctype="multipart/form-data">
                    <input type="hidden" name="idedit" id="idedit">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">Tahun</label>
                            <div class="col-lg-9 col-xl-9">
                                <input type="text" name="tahunedit" id="tahunedit" class="form-control" required placeholder="Input tahun" autocomplete="off">
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

    <?= view('admin/_footer_js') ?>
    <script>
        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_datatable_search_type').selectpicker();
        var datatable = $('#kt_datatable').KTDatatable({
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
                class: 'datatable-bordered',
            },
            columns: [{
                field: '#',
                width: 30,
                textAlign: 'left',
                sortable: 'asc',
                type: 'number'
            }, {
                field: 'Tahun',
                width: 200,
                type: 'number'
            }, {
                field: 'Aksi',
                width: 100,
                autoHide: false
            }, ],
        });






        function deleteData(id) {
            swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini. Semua aktivitas dicatat di sistem.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: 'Delete!',
                cancelButtonText: 'Cancel',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-question',
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url() ?>/crud/delete-artikel",
                        dataType: 'json',
                        data: {
                            id: id
                        },
                        success: function(result) {
                            if (result.status == "1") {
                                swal.fire('Success!', 'Berhasil menghapus data .', 'success');
                                setTimeout(function() {
                                    location.reload();
                                }, 1000);
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