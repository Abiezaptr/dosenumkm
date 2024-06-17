<div class="body-wrapper">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li><a href="#"><b>Semua Kategori</b></a></li>
                    <li><a href="#"><b>Web dan Pemrograman</b></a></li>
                    <li><a href="#"><b>Web Development</b></a></li>
                </ul>
                <br>
                <?php foreach ($service_details as $detail): ?>
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
                                            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab" aria-controls="pills-reviews" aria-selected="false">
                                                Ulasan
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
                                            <h5 class="fs-5 mb-7 text-primary">
                                                <b><?= $detail['title'] ?> - <?= $detail['detail_title'] ?></b>
                                                <br>
                                                <span class="text-muted fs-3">
                                                    <?php
                                                    $rating = $detail['rating'];
                                                    for ($i = 0; $i < $rating; $i++) {
                                                        echo '<i class="ti ti-star text-warning"></i>&nbsp;';
                                                    }
                                                    ?>&nbsp;<?= $detail['rating'] ?>
                                                </span>
                                            </h5>
                                            <p class="mb-7">
                                            <?= $detail['description'] ?>
                                            </p>
                                            <p class="mb-0">
                                                Semua pengerjaan dilakukan dari awal dapat di konsultasikan terlebih dahulu hingga deal. Sistem atau aplikasi yang ingin dibuat seperti apa sehingga harga dapat menyesuaikan sistem yang ingin dibangun semakin Cepat dan sederhana maka tentunya harga semakin Terjangkau, semua pengerjaan Bergaransi jika ada error/bug dapat dilakukan Revisi perbaikan, Bonus untuk anda mendapatkan bantuan/Support seperti upload hosting/setup VPS semua belum termasuk dalam tiap pesanan.
                                            </p>
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
                                        <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab" tabindex="0">
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
                                                            <div class="d-flex align-items-center gap-9 mb-3">
                                                                <span class="flex-shrink-0 fs-2">Kecepatan membalas</span>
                                                                <div class="progress bg-light-primary w-100" style="height: 4px;">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                                                </div>
                                                                <h6 class="mb-0">(485)</h6>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-9 mb-3">
                                                                <span class="flex-shrink-0 fs-2">Pelayanan</span>
                                                                <div class="progress bg-light-primary w-100" style="height: 4px;">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                                                </div>
                                                                <h6 class="mb-0">(215)</h6>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-9 mb-3">
                                                                <span class="flex-shrink-0 fs-2">Keterampilan dan keahlian</span>
                                                                <div class="progress bg-light-primary w-100" style="height: 4px;">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                                                </div>
                                                                <h6 class="mb-0">(110)</h6>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-9 mb-3">
                                                                <span class="flex-shrink-0 fs-2">Value for money</span>
                                                                <div class="progress bg-light-primary w-100" style="height: 4px;">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                                </div>
                                                                <h6 class="mb-0">(620)</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-portofolio" role="tabpanel" aria-labelledby="pills-portofolio-tab" tabindex="0">
                                            <div class="row">
                                                <div class="col-lg-12 d-flex align-items-stretch">
                                                    <div class="text-center w-100">
                                                        <img src="<?= base_url('assets') ?>/nodata.avif" width="250" alt="No Data" class="img-fluid mb-3">
                                                        <p class="text-muted">Tidak ada portofolio pada konsultasi ini.</p>
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