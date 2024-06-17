<!DOCTYPE html>
<html lang="en">

<head>
    <!-- --------------------------------------------------- -->
    <!-- Title -->
    <!-- --------------------------------------------------- -->
    <title>Detail Konsultasi - Consultant & Agency Platform</title>

    <!-- --------------------------------------------------- -->
    <!-- Required Meta Tag -->
    <!-- --------------------------------------------------- -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- --------------------------------------------------- -->
    <!-- Favicon -->
    <!-- --------------------------------------------------- -->
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets') ?>/img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- --------------------------------------------------- -->
    <!-- Owl Carousel -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="<?= base_url('dist') ?>/libs/owl.carousel/dist/assets/owl.carousel.min.css">

    <!-- --------------------------------------------------- -->
    <!-- Prism Js -->
    <!-- --------------------------------------------------- -->
    <link rel="stylesheet" href="<?= base_url('dist') ?>/libs/prismjs/themes/prism-okaidia.min.css">

    <!-- --------------------------------------------------- -->
    <!-- Core Css -->
    <!-- --------------------------------------------------- -->

    <link id="themeColors" rel="stylesheet" href="<?= base_url('dist') ?>/css/style.min.css" />
</head>

<style>
    .breadcrumb {
        display: flex;
        align-items: center;
        list-style: none;
        padding: 0;
    }

    .breadcrumb li {
        margin-right: 5px;
    }

    .breadcrumb li a {
        text-decoration: none;
        color: blue;
    }

    .breadcrumb li::after {
        content: '>';
        margin-left: 5px;
        font-size: 1.2em;
        /* Sesuaikan ukuran sesuai keinginan Anda */
        color: gray;
        /* Warna abu-abu */
    }

    .breadcrumb li:last-child::after {
        content: '';
    }
</style>

<body>
    <!-- --------------------------------------------------- -->
    <!-- Body Wrapper -->
    <!-- --------------------------------------------------- -->
    <div class="page-wrapper" id="main-wrapper" data-layout="horizontal" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Header Start -->

        <header class="app-header">
            <nav class="navbar navbar-expand-xl navbar-light container-fluid px-0">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler ms-n3" id="sidebarCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-xl-block">
                        <a href="<?= site_url('home') ?>" class="text-nowrap nav-link">
                            <img src="<?= base_url('assets') ?>/img/logo.png" class="dark-logo" width="110" alt="" />
                            <img src="" class="light-logo" width="180" alt="" />
                        </a>
                    </li>
                </ul>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                        <a href="javascript:void(0)" class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                            <i class="ti ti-align-justified fs-7"></i>
                        </a>

                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url('assets') ?>/indo.png" alt="" class="rounded-circle object-fit-cover round-20">
                                </a>
                            </li>
                            <?php if ($this->session->userdata('email')) : ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <div class="user-profile-img">
                                                <img src="<?= base_url('assets/logo.jpg') ?>" class="rounded-circle" width="35" height="35" alt="" />
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                        <div class="profile-dropdown position-relative" data-simplebar>
                                            <div class="py-3 px-7 pb-0">
                                                <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                            </div>
                                            <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                                <img src="<?= base_url('assets/logo.jpg') ?>" class="rounded-circle" width="80" height="80" alt="" />
                                                <div class="ms-3">
                                                    <h5 class="mb-1 fs-3"> <?= $this->session->userdata('name') ?></h5>
                                                    <p class="mb-0 d-flex text-dark align-items-center gap-2">
                                                        <i class="ti ti-mail fs-4"></i> <?= $this->session->userdata('email') ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="message-body">
                                                <a href="<?= site_url('settings') ?>" class="py-8 px-7 mt-8 d-flex align-items-center">
                                                    <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                                                        <i class="fas fa-cog"></i>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle ps-3">
                                                        <h6 class="mb-1 bg-hover-primary fw-semibold"> Pengaturan </h6>
                                                    </div>
                                                </a>
                                                <a href="<?= site_url('konsultasi/chat') ?>" class="py-8 px-7 d-flex align-items-center">
                                                    <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                                                        <i class="fas fa-comment"></i>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle ps-3">
                                                        <h6 class="mb-1 bg-hover-primary fw-semibold">Pesan dan Order</h6>
                                                    </div>
                                                </a>
                                                <a href="<?= site_url('favorites') ?>" class="py-8 px-7 d-flex align-items-center">
                                                    <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                                                        <i class="fas fa-heart"></i>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle ps-3">
                                                        <h6 class="mb-1 bg-hover-primary fw-semibold">Favorite</h6>
                                                    </div>
                                                </a>
                                                <a href="<?= site_url('konsultasi') ?>" class="py-8 px-7 d-flex align-items-center">
                                                    <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                                                        <i class="fas fa-bullhorn"></i>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle ps-3">
                                                        <h6 class="mb-1 bg-hover-primary fw-semibold">Layanan Konsultasi</h6>
                                                    </div>
                                                </a>
                                                <a href="<?= site_url('selling') ?>" class="py-8 px-7 d-flex align-items-center">
                                                    <span class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                    <div class="w-75 d-inline-block v-middle ps-3">
                                                        <h6 class="mb-1 bg-hover-primary fw-semibold">Daftar sebagai Konsultan</h6>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="d-grid py-4 px-7 pt-8">
                                                <a href="<?= site_url('login/logout') ?>" class="btn btn-outline-primary">Keluar</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php else : ?>
                                <li class="nav-item dropdown">
                                    <a href="<?= site_url('login') ?>" class="btn btn-outline-primary">Masuk</a href="<?= site_url('login') ?>">
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Header End -->

        <!-- Sidebar Start -->

        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar container-fluid">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="<?= site_url('home') ?>" aria-expanded="false">
                                <span class="hide-menu">Beranda</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="<?= site_url('konsultasi') ?>" aria-expanded="false">
                                <span class="hide-menu">Konsultasi</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="<?= site_url('agency') ?>" aria-expanded="false">
                                <span class="hide-menu">Agency </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="<?= site_url('edukasi') ?>" aria-expanded="false">
                                <span class="hide-menu">Edukasi</span>
                            </a>
                        </li>

                        <!-- ============================= -->
                        <!-- Icons -->
                        <!-- ============================= -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Icons</span>
                        </li>
                        <!-- =================== -->
                        <!-- Tabler Icon -->
                        <!-- =================== -->

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3 mx-9 d-block d-lg-none">
                <div class="hstack gap-3 justify-content-between">
                    <div class="john-img">
                        <img src="<?= base_url('dist') ?>/images/profile/user-1.jpg" class="rounded-circle" width="42" height="42" alt="">
                    </div>
                    <div class="john-title">
                        <h6 class="mb-0 fs-4">John Doe</h6>
                        <span class="fs-2">Designer</span>
                    </div>
                    <button class="border-0 bg-transparent text-primary ms-2" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                        <i class="ti ti-power fs-6"></i>
                    </button>
                </div>
            </div>
        </aside>

        <!-- Sidebar End -->