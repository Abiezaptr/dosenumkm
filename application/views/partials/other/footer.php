<script src="<?= base_url('dist') ?>/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('dist') ?>/libs/simplebar/dist/simplebar.min.js"></script>
<script src="<?= base_url('dist') ?>/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- ---------------------------------------------- -->
<!-- core files -->
<!-- ---------------------------------------------- -->
<script src="<?= base_url('dist') ?>/js/app.min.js"></script>
<script src="<?= base_url('dist') ?>/js/app.horizontal.init.js"></script>
<script src="<?= base_url('dist') ?>/js/app-style-switcher.js"></script>
<script src="<?= base_url('dist') ?>/js/sidebarmenu.js"></script>

<script src="<?= base_url('dist') ?>/js/custom.js"></script>
<script src="<?= base_url('dist') ?>/libs/prismjs/prism.js"></script>
<script src="<?= base_url('dist') ?>/libs/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="<?= base_url('dist') ?>/js/productDetail.js"></script>

<!-- ---------------------------------------------- -->
<!-- current page js files -->
<!-- ---------------------------------------------- -->
<script src="<?= base_url('dist') ?>/js/apps/chat.js"></script>
<!-- ---------------------------------------------- -->
<script src="<?= base_url('dist') ?>/libs/jquery-steps/build/jquery.steps.min.js"></script>
<script src="<?= base_url('dist') ?>/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="<?= base_url('dist') ?>/js/forms/form-wizard.js"></script>
<script src="<?= base_url('dist') ?>/js/apps/jquery.PrintArea.js"></script>
<script src="<?= base_url('dist') ?>/js/apps/invoice.js"></script>
<script>
    function updateImage(inputId, imageId) {
        var input = document.getElementById(inputId);
        var image = document.getElementById(imageId);
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                image.src = e.target.result;
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    $(".tab-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit",
        },
        onFinished: function(event, currentIndex) {
            alert("Form Submitted!");
            $("form.tab-wizard").submit(); // Menambahkan ini untuk submit form
        },
    });
</script>

</body>

</html>