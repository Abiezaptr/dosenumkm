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
<!--<< Ajax Mail Js >>-->
<script src="<?= base_url('assets') ?>/js/ajax-mail.js"></script>
<!--<< Main.js >>-->
<script src="<?= base_url('assets') ?>/js/main.js"></script>

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

<script>
    function openModal() {
        var modal = document.getElementById("videoModal");
        var videoFrame = document.getElementById("videoFrame");
        videoFrame.src = "https://www.youtube.com/embed/JGLfyTDgfDc?si=6e4x-_EWocbU7wVw"; // Replace VIDEO_ID with the actual video ID
        modal.style.display = "block";
    }

    function closeModal() {
        var modal = document.getElementById("videoModal");
        var videoFrame = document.getElementById("videoFrame");
        videoFrame.src = "";
        modal.style.display = "none";
    }
</script>
</body>

</html>