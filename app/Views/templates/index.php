<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>
    <link href="<?= base_url('css/sb-admin-2.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/custom-sidebar.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
</head>

<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('templates/sidebar'); ?>
        <!-- End Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div id="main-content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-gray-300 topbar mb-4 static-top shadow">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Topbar -->

                    <!-- Main Content -->
                    <div class="container-fluid">
                        <?= $this->renderSection('page-content'); ?>
                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </div>
        <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
        <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('js/sb-admin-2.min.js') ?>"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.load-content').click(function(e) {
                    e.preventDefault();
                    let url = $(this).data('url');

                    // Load konten dari URL ke div #main-content
                    $('#main-content').load(url, function(response, status, xhr) {
                        if (status === "error") {
                            console.log("Error loading page: ", xhr.status, xhr.statusText);
                        }
                    });

                    // ganti url tnpa refresh
                    history.pushState(null, null, url);
                });

                $(window).on('popstate', function() {
                    // Ambil URL saat ini > new load
                    let currentUrl = location.pathname;
                    $('#main-content').load(currentUrl);
                });
            });
        </script>

</body>

</html>