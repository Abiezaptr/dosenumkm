<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="gramentheme">
    <meta name="description" content="Infotek - IT Solution & Technology HTML Template">
    <!-- ======== Page title ============ -->
    <title>Dosenumkm.id - Situs Konsultan Online</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="<?= base_url('assets') ?>/img/favicon.png">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/bootstrap.min.css">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/all.min.css">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/animate.css">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/magnific-popup.css">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/meanmenu.css">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/swiper-bundle.min.css">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/nice-select.css">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/main.css">
</head>

<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-toggle {
        cursor: pointer;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-menu .dropdown-item {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #f1f1f1;
    }

    .dropdown-divider {
        height: 1px;
        margin: 0.5rem 0;
        overflow: hidden;
        background-color: #e9ecef;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .btn-sm {
        font-size: 14px;
        padding: 8px 16px;
    }

    .btn-light {
        background-color: white;
        color: black;
        border: 2px solid black;
    }

    .btn-light:hover {
        background-color: #f1f1f1;
    }

    .btn-primary {
        background-color: #6f42c1;
        /* Adjust this color to match the one in the image */
        color: white;
        border: none;
    }

    .btn-primary:hover {
        background-color: #5936a7;
        /* Darker shade for hover */
    }

    .lowercase {
        text-transform: lowercase;
    }

    .course-card {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .course-card:hover {
        transform: translateY(-5px);
    }

    .course-image img {
        width: 100%;
        height: auto;
    }

    .course-content {
        padding: 15px;
    }

    .course-content h3 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .course-category {
        display: inline-block;
        background-color: #f0f0f0;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .course-meta {
        font-size: 14px;
        color: #757575;
        margin-bottom: 10px;
    }

    .course-meta span {
        display: inline-block;
        margin-right: 15px;
    }

    .course-progress {
        position: relative;
        height: 8px;
        background-color: #e0e0e0;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .course-progress .progress-bar {
        height: 100%;
        background-color: #6f42c1;
        border-radius: 4px;
    }

    .course-progress .progress-text-left {
        position: absolute;
        left: 0;
        top: 100%;
        font-size: 15px;
        color: #757575;
        margin-top: 5px;
    }

    .course-progress .progress-text-right {
        position: absolute;
        right: 0;
        top: 100%;
        font-size: 15px;
        color: #757575;
        margin-top: 5px;
    }

    .rounded-btn {
        border-radius: 20px;
        /* Adjust the value as needed */
    }

    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .modal-content {
        position: relative;
        margin: 10% auto;
        padding: 0;
        width: 80%;
        max-width: 700px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .close {
        position: absolute;
        top: 10px;
        right: 25px;
        color: #aaa;
        font-size: 30px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }
</style>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
        </div>
    </div>

    <!--<< Mouse Cursor Start >>-->


    <!-- Header Section Start -->
    <header>
        <div id="header-sticky" class="header-3">
            <div class="plane-shape">
                <img src="<?= base_url('assets') ?>/img/plane.png" alt="shape-img">
            </div>
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="<?= site_url('home') ?>" class="header-logo">
                                    <img src="<?= base_url('assets') ?>/img/logo.png" width="120" alt="logo-img">
                                </a>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="<?= site_url('konsultasi') ?>">Konsultasi</a>
                                            </li>
                                            <li>
                                                <a href="<?= site_url('agency') ?>">Promosi</a>
                                            </li>
                                            <li>
                                                <a href="<?= site_url('selling') ?>">Daftar Sebagai Konsultan</a>
                                            </li>
                                            <?php if ($this->session->userdata('email')) : ?>

                                            <?php else : ?>
                                                <li>
                                                    <a href="<?= site_url('login') ?>">Masuk</a>
                                                </li>
                                            <?php endif; ?>
                                            <li>
                                                <a>
                                                    <img src="<?= base_url('assets/indo.png') ?>" alt="Bendera Indonesia" style="width: 30px; height: 30px;">
                                                </a>
                                            </li>
                                            <?php if ($this->session->userdata('email')) : ?>
                                                <div class="dropdown">
                                                    <a href="#" class="ml-4 dropdown-toggle" id="profileDropdown">
                                                        <img src="<?= base_url('assets/logo.jpg') ?>" alt="Profile Image" style="width: 30px; height: 30px; border-radius: 50%; vertical-align: middle; margin-right: 5px;">
                                                        <span>
                                                            <?= $this->session->userdata('name') ?>
                                                        </span>
                                                    </a>
                                                    <div class="dropdown-menu" id="dropdownMenu">
                                                        <a class="dropdown-item" href="<?= site_url('settings') ?>">
                                                            <i class="fa-solid fa-user-gear"></i>&nbsp;&nbsp; Pengaturan
                                                        </a>
                                                        <a class="dropdown-item" href="<?= site_url('konsultasi/chat') ?>">
                                                            <i class="fa-solid fa-comment"></i>&nbsp;&nbsp; Pesan dan Order
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="<?= site_url('edukasi') ?>">
                                                            <i class="fa-solid fa-book-open-reader"></i>&nbsp;&nbsp; Layanan Edukasi
                                                        </a>
                                                        <a class="dropdown-item" href="<?= site_url('konsultasi') ?>">
                                                            <i class="fa-solid fa-bullhorn"></i>&nbsp;&nbsp; Layanan Konsultasi
                                                        </a>
                                                        <a class="dropdown-item" href="<?= site_url('freelancer/register') ?>">
                                                            <i class="fa-solid fa-user-shield"></i>&nbsp;&nbsp; Daftar sebagai Konsultan
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="<?= site_url('login/logout') ?>">
                                                            <i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp; Keluar
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php else : ?>

                                            <?php endif; ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>