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
                                        <img src="<?= base_url('assets') ?>/samplecover.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('assets') ?>/sample1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('assets') ?>/sample2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('assets') ?>/sample3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>

                                <div id="sync2" class="owl-carousel owl-theme">
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('assets') ?>/samplecover.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('assets') ?>/sample1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('assets') ?>/sample2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="item rounded overflow-hidden">
                                        <img src="<?= base_url('assets') ?>/sample3.jpg" alt="" class="img-fluid">
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
                                                <p><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Lihat Jaminan Pekerjaan</a></p>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="position-relative mb-n7 text-end">
                                                    <img src="<?= base_url('dist') ?>/images/backgrounds/welcome-bg2.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12">
                                    <div class="shop-content">
                                        <div class="card">
                                            <div class="card-body">
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
                                </div> -->

                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header d-flex align-items-center bg-primary text-white">
                                                <h4 class="modal-title text-white" id="staticBackdropLabel">
                                                    Jaminan Dosenumkm
                                                </h4>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <br><br>
                                                <div class="text-center mb-4">
                                                    <h4 class="fw-bold">Mendapatkan perlindungan di setiap langkah</h4>
                                                    <p class="text-muted">
                                                        Mempekerjakan freelancer melalui platform Fastwork akan mendapatkan perlindungan di setiap langkah seluruh proses dari awal hingga akhir untuk menjamin kualitas kerja yang berkualitas.
                                                    </p>
                                                </div>
                                                <br><br>
                                                <div class="row text-center">
                                                    <div class="col-md-4 mb-4">
                                                        <div class="icon-box bg-light p-4 rounded-circle mx-auto mb-3">
                                                            <i class="fas fa-user-check fa-2x text-primary"></i>
                                                        </div>
                                                        <h5 class="fw-bold">Konsultan terverifikasi</h5>
                                                        <p class="text-muted">KTP, informasi kontak dan portfolio yang terverifikasi</p>
                                                    </div>
                                                    <div class="col-md-4 mb-4">
                                                        <div class="icon-box bg-light p-4 rounded-circle mx-auto mb-3">
                                                            <i class="fas fa-money-bill-wave fa-2x text-primary"></i>
                                                        </div>
                                                        <h5 class="fw-bold">Jaminan uang kembali</h5>
                                                        <p class="text-muted">Jaminan uang kembali bila tidak mendapatkan hasil kerja.</p>
                                                    </div>
                                                    <div class="col-md-4 mb-4">
                                                        <div class="icon-box bg-light p-4 rounded-circle mx-auto mb-3">
                                                            <i class="fas fa-headset fa-2x text-primary"></i>
                                                        </div>
                                                        <h5 class="fw-bold">Tim support siap melayani</h5>
                                                        <p class="text-muted">Tim support kami siap melayani customer dan konsultan.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <style>
                                    .icon-box {
                                        width: 80px;
                                        height: 80px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                    }
                                </style>

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <!-- Nav tabs -->
                                            <ul class="nav nav-pills nav-fill" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#navpill-111" role="tab">
                                                        <span><b>Rp499,0 rb</b></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#navpill-222" role="tab">
                                                        <span><b>Rp799,0 rb</b></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#navpill-333" role="tab">
                                                        <span><b>Rp999,0 rb</b></span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content border mt-2">
                                                <div class="tab-pane active p-3" id="navpill-111" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p><b>Paket : LP Basic</b></p>
                                                            <ol>
                                                                <li>Desain Landingpage Premium (Disediakan/Desain Standar)</li>
                                                                <li>SEO On Page</li>
                                                                <li>Security SSL (https)</li>
                                                                <li>Integrasi FB Pixel (optional)</li>
                                                                <li>Gratis konsultasi after sales via WhatsApp</li>
                                                                <li>Gratis optimasi speed website</li>
                                                                <li>Bisa revisi konten</li>
                                                            </ol>
                                                            <hr style="border-top: 1px dashed blue;">
                                                            <a href="<?= site_url('konsultasi/chat') ?>" class="btn btn-primary text-white w-100 mt-3"><i class="ti ti-brand-hipchat fs-4"></i>&nbsp; Chat and Nego </a>
                                                            <p class="text-center text-muted mt-2"><small>Anda belum akan dikenakan biaya</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane p-3" id="navpill-222" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p><b>Paket : LP Standar</b></p>
                                                            <ol>
                                                                <li>Desain Landingpage Premium (Disediakan/Desain Standar)</li>
                                                                <li>SEO On Page</li>
                                                                <li>Security SSL (https)</li>
                                                                <li>Integrasi FB Pixel (optional)</li>
                                                                <li>Gratis konsultasi after sales via WhatsApp</li>
                                                                <li>Gratis optimasi speed website</li>
                                                                <li>Bisa revisi konten</li>
                                                                <li>Free domain 1 tahun</li>
                                                            </ol>
                                                            <hr style="border-top: 1px dashed blue;">
                                                            <a href="<?= site_url('konsultasi/chat') ?>" class="btn btn-primary text-white w-100 mt-3"><i class="ti ti-brand-hipchat fs-4"></i>&nbsp; Chat and Nego </a>
                                                            <p class="text-center text-muted mt-2"><small>Anda belum akan dikenakan biaya</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane p-3" id="navpill-333" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p><b>Paket : LP Premium</b></p>
                                                            <ol>
                                                                <li>Desain Landingpage Premium (Disediakan/Desain Standar)</li>
                                                                <li>SEO On Page</li>
                                                                <li>Security SSL (https)</li>
                                                                <li>Integrasi FB Pixel (optional)</li>
                                                                <li>Gratis konsultasi after sales via WhatsApp</li>
                                                                <li>Gratis optimasi speed website</li>
                                                                <li>Bisa revisi konten</li>
                                                                <li>Free domain 1 tahun</li>
                                                                <li>Dibantu desain gambar</li>
                                                            </ol>
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



                        <ul class="nav nav-pills user-profile-tab border-bottom" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="true">
                                    <b>Ringkasan</b>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-ulasan-tab" data-bs-toggle="pill" data-bs-target="#pills-ulasan" type="button" role="tab" aria-controls="pills-ulasan" aria-selected="false">
                                    <b>Ulasan</b>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content pt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab" tabindex="0">
                                <div class="row">
                                    <!-- <div class="col-lg-4 d-flex align-items-stretch">
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
                                    </div> -->
                                    <div class="col-lg-12 d-flex align-items-stretch">
                                        <div class="card shadow-none border w-100 mb-7 mb-lg-0">
                                            <div class="card-body p-4 d-flex flex-column justify-content-center">
                                                <h5 class="mb-3 text-primary"><b><?= $detail['title'] ?> - <?= $detail['detail_title'] ?></b></h5>
                                                <p class="mt-3"> <?= $detail['description'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-ulasan" role="tabpanel" aria-labelledby="pills-ulasan-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div style="border: 1px solid #e0e0e0; padding: 20px; border-radius: 10px; margin-bottom: 20px;">
                                            <p class="ml-3 text-dark"><b>Detail Profile Konsultan</b></p>
                                            <hr>
                                            <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                                                <img src="<?= base_url('assets') ?>/cta.png" alt="Profile Image" style="width: 80px; height: 80px; border-radius: 50%; margin-right: 20px;">
                                                <div style="flex-grow: 1; min-width: 0;">
                                                    <h5 style="margin: 0;" class="mb-2"><b>John Doe</b></h5>
                                                    <p style="word-wrap: break-word; white-space: normal;">
                                                        Halo nama saya John Doe. Saya seorang web development / web designer, yang ditawarkan untuk tujuan pemasaran. Saya telah membuat beberapa jenis website maupun toko online. saya dapat menyelesaikan pekerjaan terpanjang dalam satu minggu. website yang sering saya desain kebanyakan CMS Wordpress.
                                                    </p>
                                                </div>
                                                <div style="flex-shrink: 0; margin-left: 20px;">
                                                    <button class="btn btn-sm" style="padding: 10px 20px; border: 1px solid #007bff; background-color: #fff; color: #007bff; border-radius: 5px;">Lihat profil</button>
                                                </div>
                                            </div>
                                            <hr>
                                            <br>
                                            <div style="display: flex; justify-content: space-around; margin-bottom: 20px;">
                                                <div style="text-align: center;">
                                                    <i class="fas fa-handshake"></i>
                                                    <p style="margin: 0; word-wrap: break-word;">Penyelesaian</p>
                                                    <p style="margin: 0; font-weight: bold; word-wrap: break-word;"><span style="color: blue;">100%</span></p>
                                                </div>
                                                <div style="text-align: center;">
                                                    <i class="fas fa-comment-dots"></i>
                                                    <p style="margin: 0; word-wrap: break-word;">Dihubungi</p>
                                                    <p style="margin: 0; font-weight: bold; word-wrap: break-word;"><span style="color: blue;">98 kali</span></p>
                                                </div>
                                                <div style="text-align: center;">
                                                    <i class="fas fa-redo"></i>
                                                    <p style="margin: 0; word-wrap: break-word;">Dipekerjakan ulang</p>
                                                    <p style="margin: 0; font-weight: bold; word-wrap: break-word;"><span style="color: blue;">20 kali</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="card shadow-none border w-100 mb-7 mb-lg-0">
                                            <div class="card-body p-4 d-flex flex-column justify-content-center">
                                                <div class="row">
                                                    <div class="col-lg-4 text-center mt-4">
                                                        <div class="circle-rating" style="background-color: #e0f0ff; border-radius: 50%; width: 120px; height: 120px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                                            <div>
                                                                <h2 class="text-primary mb-0 fw-semibold fs-9">4.9</h2>
                                                                <p class="mb-0">Dari 5</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Kecepatan membalas</p>
                                                                <ul class="list-unstyled d-flex align-items-center">
                                                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                                                        <li class="fs-6"><i class="fas fa-star text-warning"></i>&nbsp;</li>
                                                                    <?php endfor; ?>
                                                                </ul>
                                                                <p>Ketrampilan dan keahlian</p>
                                                                <ul class="list-unstyled d-flex align-items-center">
                                                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                                                        <li class="fs-6"><i class="fas fa-star text-warning"></i>&nbsp;</li>
                                                                    <?php endfor; ?>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Pelayanan</p>
                                                                <ul class="list-unstyled d-flex align-items-center">
                                                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                                                        <li class="fs-6"><i class="fas fa-star text-warning"></i>&nbsp;</li>
                                                                    <?php endfor; ?>
                                                                </ul>
                                                                <p>Value for money</p>
                                                                <ul class="list-unstyled d-flex align-items-center">
                                                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                                                        <li class="fs-6"><i class="fas fa-star text-warning"></i>&nbsp;</li>
                                                                    <?php endfor; ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="alert alert-primary" role="alert">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="<?= base_url('assets') ?>/user.png" alt="User Image" class="img-fluid rounded-circle" style="width: 50px; height: 50px;">
                                                </div>
                                                <div class="col-md-11">
                                                    <h6 class="mb-1">navatian <span style="float: right;">5.0 <i class="fas fa-star text-warning"></i></span></h6>
                                                    <p class="text-muted mb-1">20/05/2024</p>
                                                    <p class="mb-0">Projek kedua dan memuaskan seperti sebelumnya, highly recommended</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="alert alert-primary" role="alert">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <img src="<?= base_url('assets') ?>/user.png" alt="User Image" class="img-fluid rounded-circle" style="width: 50px; height: 50px;">
                                                </div>
                                                <div class="col-md-11">
                                                    <h6 class="mb-1">lxegout <span style="float: right;">5.0 <i class="fas fa-star text-warning"></i></span></h6>
                                                    <p class="text-muted mb-1">21/04/2024</p>
                                                    <p class="mb-0">helpfull, komunikasi bagus fast respon hasil memuaskan dan akan berlangggan untuk proyek selanjutnya,</p>

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