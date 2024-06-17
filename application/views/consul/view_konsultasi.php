<div class="body-wrapper">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li><a href="#"><b>Semua Kategori</b></a></li>
            <li><a href="#"><b>Web dan Pemrograman</b></a></li>
            <li><a href="#"><b>Web Development</b></a></li>
        </ul>
        <br>
        <?php foreach ($service_details as $detail) : ?>
            <div class="shop-detail">
                <div class="card shadow-none border">
                    <div class="card-body p-4">
                        <div class="row">

                            <div class="col-lg-6">
                                <div id="sync1" class="owl-carousel owl-theme">
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s3.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s4.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s5.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s6.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s7.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s8.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s9.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s10.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s11.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s12.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>

                                <div id="sync2" class="owl-carousel owl-theme">
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('dist') ?>/images/products/s3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card w-100 bg-light-info overflow-hidden shadow-none">
                                    <div class="card-body py-3">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-sm-6">
                                                <h5 class="fw-semibold mb-9 fs-5"><i class="ti ti-shield-check"></i>&nbsp; <b>Guarantee</b></h5>
                                                <p class="mb-9">
                                                    Layanan konsultasi dengan aman melalui <b>Dosen UMKM</b>. Tim support siap membantu untuk menindaklanjuti pekerjaan dan memberikan jaminan uang kembali
                                                </p>
                                                <p><a href="">Baca syarat dan ketentuan</a></p>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="position-relative mb-n7 text-end">
                                                    <img src="<?= base_url('dist') ?>/images/backgrounds/welcome-bg2.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="shop-content">
                                        <div class="card">
                                            <div class="card-body">
                                                <!-- Tab panes -->
                                                <div class="tab-content border mt-2">
                                                    <div class="tab-pane active p-3" id="navpill-111" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p>
                                                                    <i class="ti ti-info-octagon"></i>&nbsp; <b>Paket : <?= $detail['title'] ?></b>
                                                                </p>
                                                                <p>Mulai dari Rp <?= number_format($detail['detail_price']) ?> - <?= $detail['detail_title'] ?></p>
                                                                <p><b>Rp <?= number_format($detail['detail_price']) ?></b></p>
                                                                <hr style="border-top: 1px dashed blue;">

                                                                <a href="<?= site_url('konsultasi/chat') ?>" class="btn btn-primary text-white w-100 mt-3"><i class="ti ti-brand-hipchat fs-4"></i>&nbsp; Chat and Nego </a>
                                                                <p class="text-center text-muted mt-2"><small>Anda belum akan dikenakan biaya</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card shadow-none border">
                        <div class="card-body p-4">
                            <ul class="nav nav-pills user-profile-tab border-bottom" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">
                                        Ringkasan
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-paket-tab" data-bs-toggle="pill" data-bs-target="#pills-paket" type="button" role="tab" aria-controls="pills-paket" aria-selected="false">
                                        Paket
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-portofolio-tab" data-bs-toggle="pill" data-bs-target="#pills-portofolio" type="button" role="tab" aria-controls="pills-portofolio" aria-selected="false">
                                        Portofolio
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content pt-4" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 d-flex align-items-stretch">
                                            <div class="card shadow-none border w-100 mb-7 mb-lg-0">
                                                <div class="card-body text-center p-4 d-flex flex-column justify-content-center">
                                                    <h6 class="mb-3">Ulasan dari pembeli (1)</h6>
                                                    <h2 class="text-primary mb-3 fw-semibold fs-9">4/5</h2>
                                                    <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
                                                        <li class="fs-6">
                                                            <?php
                                                            $rating = $detail['rating'];
                                                            for ($i = 0; $i < $rating; $i++) {
                                                                echo '<i class="ti ti-star text-warning"></i>&nbsp;';
                                                            }
                                                            ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 d-flex align-items-stretch">
                                            <div class="card shadow-none border w-100 mb-7 mb-lg-0">
                                                <div class="card-body p-4 d-flex flex-column justify-content-center">
                                                    <h5 class="mb-3 text-primary"><b><?= $detail['title'] ?> - <?= $detail['detail_title'] ?></b></h5>
                                                    <p class="mt-3"> <?= $detail['description'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-paket" role="tabpanel" aria-labelledby="pills-paket-tab" tabindex="0">
                                    <div class="row">
                                        <h5 class="fs-5 mt-4 mb-7 text-primary">
                                            <b>Harga paket untuk Jasa Pembuatan Aplikasi Web - Sistem Informasi Sederhana dan Advanced</b>
                                        </h5>

                                        <div class="tab-content border mt-2">
                                            <div class="tab-pane active p-3" id="navpill-111" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>
                                                            <b class="text-primary text-uppercase">Maintenance dan Penambahan Fitur</b> <span class="text-primary fw-semibold" style="float: right;">Rp 200.000</span>
                                                            <br><i class="ti ti-calendar-time"></i>&nbsp; <span class="fs-3"><small>Durasi pengerjaan 2 hari</small></span>
                                                        </p>
                                                        <p>Mulai dari Rp. 200.000 - Menerima perbaikan error atau bug pada sistem</p>
                                                        <hr>
                                                        <a href="<?= site_url('message') ?>" class="btn btn-primary text-white mt-3" style="float: right;"><i class="ti ti-brand-hipchat fs-4"></i>&nbsp; Chat and Nego </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-content border mt-4">
                                            <div class="tab-pane active p-3" id="navpill-111" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>
                                                            <b class="text-primary text-uppercase">Pembuatan web sederhana</b> <span class="text-primary fw-semibold" style="float: right;">Rp 200.000</span>
                                                            <br><i class="ti ti-calendar-time"></i>&nbsp; <span class="fs-3"><small>Durasi pengerjaan 7 hari</small></span>
                                                        </p>
                                                        <p>Mulai dari Rp. 200.000 - Menerima perbaikan error atau bug pada sistem</p>
                                                        <hr>
                                                        <a href="<?= site_url('message') ?>" class="btn btn-primary text-white mt-3" style="float: right;"><i class="ti ti-brand-hipchat fs-4"></i>&nbsp; Chat and Nego </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-portofolio" role="tabpanel" aria-labelledby="pills-portofolio-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="card hover-img overflow-hidden rounded-2 h-100 d-flex flex-column" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                                                        <div class="position-relative" style="flex-grow: 1; height: 200px;">
                                                            <a href="javascript:void(0)"><img src="<?= base_url('assets') ?>/porto.png" class="card-img-top rounded-0" alt="..." style="width: 100%; height: 100%; object-fit: cover;"></a>
                                                        </div>
                                                        <div class="card-body pt-3 p-4 d-flex flex-column" style="display: flex; flex-direction: column; justify-content: space-between; flex-grow: 1; padding-top: 10px; padding-bottom: 10px;">
                                                            <h6 class="fw-semibold fs-4" style="margin-bottom: 10px;"><b>Portofolio Merdeka Belajar</b></h6>
                                                            <div class="d-flex align-items-center justify-content-between mt-auto" style="margin-top: auto;">
                                                                <h6 class="fw-semibold fs-3 mb-0">Profesional</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="card hover-img overflow-hidden rounded-2 h-100 d-flex flex-column" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                                                        <div class="position-relative" style="flex-grow: 1; height: 200px;">
                                                            <a href="javascript:void(0)"><img src="<?= base_url('assets') ?>/porto2.jpg" class="card-img-top rounded-0" alt="..." style="width: 100%; height: 100%; object-fit: cover;"></a>
                                                        </div>
                                                        <div class="card-body pt-3 p-4 d-flex flex-column" style="display: flex; flex-direction: column; justify-content: space-between; flex-grow: 1; padding-top: 10px; padding-bottom: 10px;">
                                                            <h6 class="fw-semibold fs-4" style="margin-bottom: 10px;"><b>Portofolio Desain Grafis</b></h6>
                                                            <div class="d-flex align-items-center justify-content-between mt-auto" style="margin-top: auto;">
                                                                <h6 class="fw-semibold fs-3 mb-0">Profesional</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="card hover-img overflow-hidden rounded-2 h-100 d-flex flex-column" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                                                        <div class="position-relative" style="flex-grow: 1; height: 200px;">
                                                            <a href="javascript:void(0)"><img src="<?= base_url('assets') ?>/porto3.jpg" class="card-img-top rounded-0" alt="..." style="width: 100%; height: 100%; object-fit: cover;"></a>
                                                        </div>
                                                        <div class="card-body pt-3 p-4 d-flex flex-column" style="display: flex; flex-direction: column; justify-content: space-between; flex-grow: 1; padding-top: 10px; padding-bottom: 10px;">
                                                            <h6 class="fw-semibold fs-4" style="margin-bottom: 10px;"><b>Tips Membuat Portofolio</b></h6>
                                                            <div class="d-flex align-items-center justify-content-between mt-auto" style="margin-top: auto;">
                                                                <h6 class="fw-semibold fs-3 mb-0">Online Terbaik</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-3">
                                                    <div class="card hover-img overflow-hidden rounded-2 h-100 d-flex flex-column" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                                                        <div class="position-relative" style="flex-grow: 1; height: 200px;">
                                                            <a href="javascript:void(0)"><img src="<?= base_url('assets') ?>/porto3.jpg" class="card-img-top rounded-0" alt="..." style="width: 100%; height: 100%; object-fit: cover;"></a>
                                                        </div>
                                                        <div class="card-body pt-3 p-4 d-flex flex-column" style="display: flex; flex-direction: column; justify-content: space-between; flex-grow: 1; padding-top: 10px; padding-bottom: 10px;">
                                                            <h6 class="fw-semibold fs-4" style="margin-bottom: 10px;"><b>Tips Membuat Portofolio</b></h6>
                                                            <div class="d-flex align-items-center justify-content-between mt-auto" style="margin-top: auto;">
                                                                <h6 class="fw-semibold fs-3 mb-0">Profesional</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
</div>