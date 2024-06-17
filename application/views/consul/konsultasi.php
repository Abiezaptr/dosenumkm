<div class="breadcrumb-wrapper">

    <div class="container">
        <div class="page-heading">
            <h2 class="wow fadeInUp text-white" data-wow-delay=".3s">Konsultasi <span class="lowercase">bisnis</span></h2>
            <h4 class="wow fadeInUp text-white mt-1" data-wow-delay=".3s">Membantu <span class="lowercase"> menyelesaikan permasalahan bisnis Anda dengan rekomendasi terbaik dari ahlinya</span></h4>
        </div>
    </div>
</div>

<section class="service-section-3 fix section-padding">
    <div class="container">
        <h3 class="ml-4 mb-1">Pilihan <span class="lowercase">layanan</span> konsultasi</h3>
        <p class="text-muted mb-4">Anda dapat memilih layanan untuk kebutuhan bisnis Anda.</p>
        <div class="service-grid">
            <?php foreach ($konsultasi as $item) : ?>
                <div class="service-card">
                    <div class="service-card-items mt-0" style="display: flex; flex-direction: column; height: 100%; min-height: 320px;">
                        <div class="service-image" style="flex: 1 0 auto; height: 180px; overflow: hidden;">
                            <a href="<?= site_url('konsultasi/detail/' . $item['id_service']) ?>">
                                <img src="<?= $item['images'] ?>" alt="service-img" style="width: 100%; height: 100%; object-fit: cover;">
                            </a>
                        </div>
                        <div class="service-content" style="flex: 1 0 auto; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <h4>
                                    <a href="<?= site_url('konsultasi/detail/' . $item['id_service']) ?>"><?= $item['title'] ?></a>
                                </h4>
                                <p style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                    <?= $item['description'] ?>
                                </p>
                            </div>
                            <a href="<?= site_url('konsultasi/detail/' . $item['id_service']) ?>" class="theme-btn-2 mt-4" style="align-self: flex-start;">
                                Lihat selengkapnya
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .service-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .service-card {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
</style>