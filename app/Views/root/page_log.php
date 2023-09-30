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
                                <div class="card-header">
                                    <div class="card-title">
                                        <span class="card-icon">
                                            <i class="flaticon2-fast-next text-primary"></i>
                                        </span>
                                        <h3 class="card-label">Top 100 System Log</h3>
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
                                    <table class="datatable " id="kt_log">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Waktu</th>
                                                <th>User</th>
                                                <th>Menu</th>
                                                <th>Tipe</th>
                                                <th>Perangkat</th>
                                                <th>Aktivitas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($log_100 as $row) {
                                                if ($row->log_type == 'Insert') {
                                                    $style = "label-light-success";
                                                } elseif ($row->log_type == 'Update') {
                                                    $style = "label-light-warning";
                                                } elseif ($row->log_type == 'Delete') {
                                                    $style = "label-light-danger";
                                                }
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= tgl_indo(date('Y-m-d', strtotime($row->log_time))) . ", Pukul " . date('H:i', strtotime($row->log_time)) . " WIB" ?></td>
                                                    <td><?= $row->log_user ?></td>
                                                    <td><?= $row->log_modul ?></td>
                                                    <td>
                                                        <span style="width: 110px;">
                                                            <span class="label font-weight-bold label-lg <?= $style ?> label-inline"><?= $row->log_type ?></span>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted"><?= $row->log_ip ?></span>
                                                        <span><?= $row->log_so ?></span>
                                                        <span><?= $row->log_browser ?></span>
                                                    </td>
                                                    <td><?= $row->log_activity ?></td>
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
    <?= view('root/_footer_js') ?>
    <script>
        // $('#kt_datatable_search_type').on('change', function() {
        //     datatable.search($(this).val().toLowerCase(), 'Type');
        // });

        $('#kt_datatable_search_type').selectpicker();
        var datatable = $('#kt_log').KTDatatable({
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
                field: 'Waktu',
                width: 120,
            }, {
                field: 'User',
                width: 120,
            }, {
                field: 'Menu',
                width: 200,
            }, {
                field: 'Tipe',
                width: 100,
            }, {
                field: 'Perangkat',
                width: 150,
            }, {
                field: 'Aktivitas',
                width: 700,
                autoHide: true,
            }, ],
        });
    </script>
</body>

</html>