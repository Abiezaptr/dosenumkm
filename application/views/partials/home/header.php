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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
</style>


<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
        </div>
    </div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="<?= base_url('assets') ?>/img/logo.png" width="120" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-lg-block">
                        Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header>
        <div id="header-sticky" class="header-4">
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
                                        </ul>
                                    </nav>
                                </div>
                            </div>&nbsp;&nbsp;&nbsp;

                            <div class="header-button">
                                <?php if ($this->session->userdata('email')) : ?>
                                    <a>
                                        <img src="<?= base_url('assets/indo.png') ?>" alt="Bendera Indonesia" style="width: 30px; height: 30px;">
                                    </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!-- Jika pengguna sudah login, tampilkan email -->
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
                                            <a class="dropdown-item" href="<?= site_url('selling') ?>">
                                                <i class="fa-solid fa-user-shield"></i>&nbsp;&nbsp; Daftar sebagai Konsultan
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="<?= site_url('login/logout') ?>">
                                                <i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp; Keluar
                                            </a>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <a href="">
                                        <img src="<?= base_url('assets/indo.png') ?>" alt="Bendera Indonesia" style="width: 30px; height: 30px;">
                                    </a>
                                <?php endif; ?>
                            </div>


                            <div class="header__hamburger d-lg-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdownToggle = document.getElementById('profileDropdown');
            var dropdownMenu = document.getElementById('dropdownMenu');

            dropdownToggle.addEventListener('click', function(event) {
                event.preventDefault();
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });

            window.addEventListener('click', function(event) {
                if (!event.target.matches('#profileDropdown') && !event.target.closest('.dropdown')) {
                    dropdownMenu.style.display = 'none';
                }
            });
        });
    </script>