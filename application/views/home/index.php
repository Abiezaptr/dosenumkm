<!-- Hero Section Start -->
<section class="hero-section hero-4 bg-cover" style="background-image: url('assets/img/section-bg.jpg');">
    <div class="container">
        <div class="row g-4 align-items-center">
            <center>
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Tingkatkan usahamu dengan jasa <span id="text-container" class="text-primary"></span></h2>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            Wujudkan bisnismu lancar dan berkembang dengan tenaga professional
                        </p>
                        <br>
                        <form action="search.html" method="get" style="margin-bottom: 30px; position: relative; display: flex; align-items: center;">
                            <div style="position: relative; width: 100%;">
                                <input type="text" name="search" placeholder="Cari Konsultasi..." style="color: #000; padding: 8px 40px 8px 20px; border-radius: 50px; border: none; width: 100%;" id="search-input">
                                <button type="button" id="clear-input" style="position: absolute; right: 50px; top: 50%; transform: translateY(-50%); background: none; border: none; cursor: pointer; display: none;">
                                    <i class="fa fa-times-circle" style="color: #888;"></i>
                                </button>
                                <button type="submit" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); background: none; border: none; cursor: pointer;">
                                    <i class="fa fa-search" style="color: #007bff;"></i>
                                </button>
                            </div>
                            <div id="search-suggestions" style="display: none; position: absolute; top: 100%; left: 0; right: 0; background: #fff; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); z-index: 1000;">
                                <div style="padding: 10px; border-bottom: 1px solid #ddd;">Kata pencarian populer</div>
                                <div style="padding: 10px; display: flex; flex-wrap: wrap; gap: 10px;">
                                    <span style="background: #f1f1f1; padding: 5px 10px; border-radius: 20px; cursor: pointer;">Marketing</span>
                                    <span style="background: #f1f1f1; padding: 5px 10px; border-radius: 20px; cursor: pointer;">Finansial</span>
                                    <span style="background: #f1f1f1; padding: 5px 10px; border-radius: 20px; cursor: pointer;">Business Development</span>
                                </div>
                            </div>
                            <div id="dynamic-suggestions" style="display: none; position: absolute; top: 100%; left: 0; right: 0; background: #fff; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); z-index: 1000;">
                                <!-- Dynamic suggestions will be inserted here -->
                            </div>
                        </form>
                    </div>
                </div>
            </center>

            <div class="col-xl-8 col-lg-2 col-md-6 center">
                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-radius: 5px;">
                    <div class="content" style="display: flex; padding: 16px;">
                        <div style="flex: 1; text-align: center;">
                            <a href="<?= site_url('edukasi') ?>" style="text-decoration: none; color: #333;">
                                <img src="assets/img/school.png" alt="" width="40" class="mb-3">
                                <h4 style="margin-top: 8px;">
                                    Edukasi
                                </h4>
                            </a>
                        </div>
                        <div style="flex: 1; text-align: center;">
                            <a href="<?= site_url('konsultasi') ?>" style="text-decoration: none; color: #333;">
                                <img src="assets/img/brainstorming.png" alt="" width="40" class="mb-3">
                                <h4 style="margin-top: 8px;">
                                    Konsultasi
                                </h4>
                            </a>
                        </div>
                        <div style="flex: 1; text-align: center;">
                            <a href="<?= site_url('agency') ?>" style="text-decoration: none; color: #333;">
                                <img src="assets/img/marketing.png" alt="" width="40" class="mb-3">
                                <h4 style="margin-top: 8px;">
                                    Agency
                                </h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<br><br><br>

<!-- Service Section Start -->
<section class="service-section-3 section-padding pt-0">
    <div class="line-shape-2">
        <img src="<?= base_url('assets') ?>/img/service/line-shape-2.png" alt="shape-img">
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp text-dark">Keunggulan Kami</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">Memberikan kulaitas terbaik</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp center" data-wow-delay=".3s">
                <div class="service-box-items style-3">
                    <div class="icon">
                        <img src="assets/img/service/icon/s-icon-6.svg" alt="icon-img">
                    </div>
                    <div class="content">
                        <h5>
                            <a href="service-details.html">
                                Layanan <span class="lowercase">tinggi dengan harga murah</span>
                            </a>
                        </h5>
                        <p>
                            Paket layanan dengan harga terjangkau
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp center" data-wow-delay=".5s">
                <div class="service-box-items style-3 mt-70">
                    <div class="icon">
                        <img src="assets/img/service/icon/s-icon-7.svg" alt="icon-img">
                    </div>
                    <div class="content">
                        <h5>
                            <a href="service-details.html">
                                Tingkatkan <span class="lowercase">layanan dengan nilai anda</span>
                            </a>
                        </h5>
                        <p>
                            Algoritma di buat sesuai preferensi anda
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp center" data-wow-delay=".7s">
                <div class="service-box-items style-3">
                    <div class="icon">
                        <img src="assets/img/service/icon/s-icon-8.svg" alt="icon-img">
                    </div>
                    <div class="content">
                        <h5>
                            <a href="service-details.html">
                                Satu <span class="lowercase">website bisa untuk ratusan layanan</span>
                            </a>
                        </h5>
                        <p>
                            Layanan konsultasi, agency, edukasi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section Start -->
<section class="about-section section-padding fix bg-cover pt-0 mb-2">
    <div class="container">
        <div class="about-wrapper-2 style-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-image-2 wow fadeInUp" data-wow-delay=".4s">
                        <img src="assets/img/about/06.png" alt="about-img">
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="wow fadeInUp text-dark">TENTANG DOSEN UMKM</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Siapa Dosen UMKM?
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            “Dosen UMKM” merupakan sebuah platform berupa website yang berisikan berbagai macam solusi dari permasalahan UMKM. Solusi yang dihadirkan berupa fasilitas konsultasi, agensi, kelas video gratis dan program lomba bisnis. Dengan adanya layanan-layanan tersebut, diharapkan “Dosen UMKM” bisa meningkatkan ekosistem UMKM di Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Section Start -->
<section class="pricing-section fix section-padding">
    <div class="container">
        <div class="pricing-wrapper">
            <div class="section-title text-center">
                <span class="wow fadeInUp text-dark">Layanan Populer dan Promo</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Harga Terbaik untuk Anda
                </h2>
            </div>
            <div class="tab-content">
                <div id="monthly" class="tab-pane fade show active" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="pricing-items">
                                <div class="tag">
                                    <h6>Basic Plan</h6>
                                </div>
                                <div class="pricing-header">
                                    <h2><small>Rp 55,000</small></h2>
                                    <span>Per month</span>
                                    <p>
                                        Ideal untuk startup dan bisnis kecil yang ingin memulai.
                                    </p>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Konsultasi awal gratis
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Pembuatan website dasar
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        SEO dasar dan analitik
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Dukungan teknis via email
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <p>Untuk hingga 3 proyek per bulan</p>
                                    <a href="contact.html" class="pricing-btn mt-4">
                                        Pilih Paket
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="pricing-items">
                                <div class="tag">
                                    <h6>Standard Plan</h6>
                                </div>
                                <div class="pricing-header">
                                    <h2><small>Rp 150,000</small></h2>
                                    <span>Per month</span>
                                    <p>
                                        Untuk bisnis yang sedang berkembang dan membutuhkan lebih banyak fitur.
                                    </p>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Konsultasi strategi bulanan
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Desain website responsif
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        SEO lanjutan dan analitik
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Dukungan teknis via telepon dan email
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <p>Untuk hingga 7 proyek per bulan</p>
                                    <a href="contact.html" class="pricing-btn mt-4">
                                        Pilih Paket
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                            <div class="pricing-items">
                                <div class="tag">
                                    <h6>Premium Plan</h6>
                                </div>
                                <div class="pricing-header">
                                    <h2><small>Rp 300,000</small></h2>
                                    <span>Per month</span>
                                    <p>
                                        Untuk bisnis besar yang memerlukan solusi komprehensif dan dukungan penuh.
                                    </p>
                                </div>
                                <ul class="pricing-list">
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Konsultasi dan analisis bisnis mendalam
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Pengembangan website custom
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Integrasi sistem dan otomatisasi
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-check"></i>
                                        Dukungan teknis 24/7
                                    </li>
                                </ul>
                                <div class="pricing-button">
                                    <p>Untuk proyek tanpa batas per bulan</p>
                                    <a href="contact.html" class="pricing-btn mt-4">
                                        Pilih Paket
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<< Faq Section Start >>-->
<section class="faq-section-2 fix section-padding pt-0">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp text-dark">Lihat Koleksi Portofolio Kami</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Temukan Inspirasi dari Karya-karya Terbaik Kami
            </h2>
        </div>
        <div class="swiper project-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="project-items style-2">
                        <div class="project-image">
                            <img src="assets/img/porto/8.jpg" alt="project-img">
                            <div class="project-content">
                                <p>Technology</p>
                                <h4>
                                    <a href="project-details.html">Cloud Computing</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-items style-2">
                        <div class="project-image">
                            <img src="assets/img/porto/2.jpg" alt="project-img">
                            <div class="project-content">
                                <p>Technology</p>
                                <h4>
                                    <a href="project-details.html">Cloud Computing</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-items style-2">
                        <div class="project-image">
                            <img src="assets/img/porto/4.png" alt="project-img">
                            <div class="project-content">
                                <p>Technology</p>
                                <h4>
                                    <a href="project-details.html">Cloud Computing</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-items style-2">
                        <div class="project-image">
                            <img src="assets/img/porto/5.png" alt="project-img">
                            <div class="project-content">
                                <p>Technology</p>
                                <h4>
                                    <a href="project-details.html">Cloud Computing</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="project-items style-2">
                        <div class="project-image">
                            <img src="assets/img/porto/1.jpg" alt="project-img">
                            <div class="project-content">
                                <p>Technology</p>
                                <h4>
                                    <a href="project-details.html">Cloud Computing</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<< Testimonial Section Start >>-->
<section class="tesimonial-section-3 section-padding section-bg-2 bg-cover">
    <div class="line-shape">
        <img src="assets/img/team/line-shape.png" alt="shape-img">
    </div>
    <div class="mask-shape">
        <img src="assets/img/team/mask-shape.png" alt="shape-img">
    </div>
    <div class="array-button">
        <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
        <button class="array-next"><i class="fal fa-arrow-right"></i></button>
    </div>
    <div class="container">
        <div class="section-title text-center">
            <span class="text-white">Ulasan dari pelanggan</span>
        </div>
        <div class="swiper testimonial-slider-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-box-items">
                        <div class="icon">
                            <img src="assets/img/testimonial/icon.png" alt="icon-img">
                        </div>
                        <div class="client-items">
                            <div class="client-image style-2 bg-cover" style="background-image: url('assets/img/testimonial/02.jpg');"></div>
                            <div class="client-content">
                                <h4>Kathryn Murphy</h4>
                                <p>Web Designer</p>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <p>
                            Consectetur adipiscing elit. Integer nunc viverra laoreet est the is porta pretium metus aliquam eget maecenas porta is nunc viverra Aenean pulvinar maximus leo ”
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-box-items">
                        <div class="icon">
                            <img src="assets/img/testimonial/icon.png" alt="icon-img">
                        </div>
                        <div class="client-items">
                            <div class="client-image style-2 bg-cover" style="background-image: url('assets/img/testimonial/03.jpg');"></div>
                            <div class="client-content">
                                <h4>Albert Flores</h4>
                                <p>Medical Assistant</p>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star color-text"></i>
                                </div>
                            </div>
                        </div>
                        <p>
                            Consectetur adipiscing elit. Integer nunc viverra laoreet est the is porta pretium metus aliquam eget maecenas porta is nunc viverra Aenean pulvinar maximus leo ”
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>