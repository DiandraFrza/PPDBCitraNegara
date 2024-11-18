<ul class="navbar-nav bg-gray-300 sidebar accordion" id="accordionSidebar">
    <div class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">App Web</div>
    </div>

    <hr class="sidebar-divider my-0">

    <div class="mt-2 sidebar-heading">
        CORE
    </div>

    <li class="mt-2 nav-item <?= ($currentPage == 'dashboard') ? 'active' : '' ?>">
        <a class="nav-link load-content" href="<?= base_url('admin/dashboard') ?>" data-url="<?= base_url('admin/dashboard') ?>">
            <i class="fa-solid fa-user-graduate"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <div class="mt-2 sidebar-heading">
        User Management
    </div>

    <hr class="mb-2 sidebar-divider">

    <li class="mt-2 nav-item <?= ($currentPage == 'data_pndftaran') ? 'active' : '' ?>">
        <a class="nav-link load-content" href="<?= base_url('admin/data_pndftaran') ?>" data-url="<?= base_url('admin/data_pndftaran') ?>">
            <i class="fa-solid fa-user-graduate"></i>
            <span>Data Pendaftaran</span>
        </a>
    </li>

    <li class="nav-item <?= ($currentPage == 'list_admin') ? 'active' : '' ?>">
        <a class="nav-link load-content" href="<?= base_url('admin/list_admin') ?>" data-url="<?= base_url('admin/list_admin') ?>">
            <i class="fas fa-fw fa-users-gear"></i>
            <span>List Admin</span>
        </a>

    </li>
    <?php
    echo "<script>console.log('Sidebar loaded');</script>";
    ?>

</ul>