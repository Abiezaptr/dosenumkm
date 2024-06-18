<!--<< Footer Section Start >>-->
<footer class="footer-section footer-bg">
    <div class="shape-1">
        <img src="<?= base_url('assets') ?>/img/footer-shape-1.png" alt="shape-img">
    </div>
    <div class="shape-2">
        <img src="<?= base_url('assets') ?>/img/footer-shape-3.png" alt="shape-img">
    </div>
    <div class="container">
        <div class="footer-widgets-wrapper pb-0 pt-0">
            <div class="footer-style-2">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h6 class="text-white">Kategori</h6>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="">
                                        Finansial
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        Marketing
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        Business Development
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        Web Development
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h6 class="text-white">Penggunaan</h6>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="">
                                        Daftar sebagai Konsultan
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        Tawarkan Pekerjaan
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        Blog Informasi
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        FAQ
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h6 class="text-white">Tentang Dosenumkm</h6>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="">
                                        Bekerja dengan Dosenumkm
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        Syarat dan Ketentuan
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        Kebijakan Privasi
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 ps-lg-5 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h6 class="text-white">Hubungi Kami</h6>
                            </div>
                            <ul class="list-area">
                                <li>
                                    <a href="">
                                        <i class="fa-solid fa-envelope"></i>&nbsp; support@dosenumkm.id
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fab fa-whatsapp"></i>&nbsp; +62 812-5671-1985
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom style-2 style-4">

    </div>
</footer>

<!--<< All JS Plugins >>-->
<script src="<?= base_url('assets') ?>/js/jquery-3.7.1.min.js"></script>
<!--<< Viewport Js >>-->
<script src="<?= base_url('assets') ?>/js/viewport.jquery.js"></script>
<!--<< Bootstrap Js >>-->
<script src="<?= base_url('assets') ?>/js/bootstrap.bundle.min.js"></script>
<!--<< Nice Select Js >>-->
<script src="<?= base_url('assets') ?>/js/jquery.nice-select.min.js"></script>
<!--<< Waypoints Js >>-->
<script src="<?= base_url('assets') ?>/js/jquery.waypoints.js"></script>
<!--<< Counterup Js >>-->
<script src="<?= base_url('assets') ?>/js/jquery.counterup.min.js"></script>
<!--<< Swiper Slider Js >>-->
<script src="<?= base_url('assets') ?>/js/swiper-bundle.min.js"></script>
<!--<< MeanMenu Js >>-->
<script src="<?= base_url('assets') ?>/js/jquery.meanmenu.min.js"></script>
<!--<< Magnific Popup Js >>-->
<script src="<?= base_url('assets') ?>/js/jquery.magnific-popup.min.js"></script>
<!--<< Wow Animation Js >>-->
<script src="<?= base_url('assets') ?>/js/wow.min.js"></script>
<!--<< Main.js >>-->
<script src="<?= base_url('assets') ?>/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const textContainer = document.getElementById('text-container');
        const textToType = 'profesional Konsultan';
        const primaryText = 'profesional';
        const darkText = ' Konsultan';
        let currentIndex = 0;

        function type() {
            if (currentIndex < primaryText.length) {
                // Append the next character for primary text
                textContainer.innerHTML += primaryText[currentIndex];
            } else if (currentIndex < textToType.length) {
                // Append the next character for dark text
                if (currentIndex === primaryText.length) {
                    textContainer.innerHTML += '<span class="text-dark">';
                }
                textContainer.innerHTML += darkText[currentIndex - primaryText.length];
                if (currentIndex === textToType.length - 1) {
                    textContainer.innerHTML += '</span>';
                }
            }
            currentIndex++;

            if (currentIndex < textToType.length) {
                setTimeout(type, 100); // Adjust typing speed here (in milliseconds)
            } else {
                // Restart the typing effect
                setTimeout(() => {
                    textContainer.innerHTML = '';
                    currentIndex = 0;
                    type();
                }, 1000); // Adjust the delay before restarting (in milliseconds)
            }
        }

        type();
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('search-input');
        const searchSuggestions = document.getElementById('search-suggestions');
        const dynamicSuggestions = document.getElementById('dynamic-suggestions');
        const clearInput = document.getElementById('clear-input');

        searchInput.addEventListener('focus', function() {
            searchSuggestions.style.display = 'block';
        });

        document.addEventListener('click', function(event) {
            if (!searchInput.contains(event.target) && !searchSuggestions.contains(event.target) && !dynamicSuggestions.contains(event.target)) {
                searchSuggestions.style.display = 'none';
                dynamicSuggestions.style.display = 'none';
            }
        });

        const suggestionItems = searchSuggestions.querySelectorAll('span');
        suggestionItems.forEach(function(item) {
            item.addEventListener('click', function() {
                searchInput.value = item.textContent;
                searchSuggestions.style.display = 'none';
                dynamicSuggestions.style.display = 'none';
            });
        });

        searchInput.addEventListener('input', function() {
            const query = searchInput.value.toLowerCase();
            if (query.length > 0) {
                clearInput.style.display = 'block';
                // Simulate fetching data from a server
                const suggestions = ['web design', 'web developer', 'web scraping', 'web development', 'website'].filter(item => item.toLowerCase().includes(query));
                dynamicSuggestions.innerHTML = suggestions.map(item => `
                    <div style="padding: 10px; cursor: pointer; display: flex; align-items: center;">
                        <i class="fa fa-search" style="margin-right: 10px; color: #888;"></i>
                        ${item}
                    </div>
                `).join('');
                dynamicSuggestions.style.display = 'block';
            } else {
                clearInput.style.display = 'none';
                dynamicSuggestions.style.display = 'none';
                searchSuggestions.style.display = 'block'; // Keep popular suggestions visible
            }
        });

        clearInput.addEventListener('click', function() {
            searchInput.value = '';
            clearInput.style.display = 'none';
            dynamicSuggestions.style.display = 'none';
            searchSuggestions.style.display = 'block'; // Keep popular suggestions visible
        });

        dynamicSuggestions.addEventListener('click', function(event) {
            if (event.target.tagName === 'DIV' || event.target.tagName === 'I') {
                searchInput.value = event.target.textContent.trim();
                dynamicSuggestions.style.display = 'none';
            }
        });
    });
</script>

<?php if ($this->session->flashdata('error')) : ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '<?= $this->session->flashdata('error'); ?>',
            confirmButtonText: 'OK'
        });
    </script>
<?php endif; ?>

<?php if ($this->session->flashdata('success')) : ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil...',
            text: '<?= $this->session->flashdata('success'); ?>',
            confirmButtonText: 'OK'
        });
    </script>
<?php endif; ?>

</body>

</html>