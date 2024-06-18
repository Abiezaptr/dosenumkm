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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

<!-- <script>
    var form = $(".tab-wizard").show();

    $(".tab-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit",
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            return (
                currentIndex > newIndex ||
                (!(3 === newIndex && Number($("#age-2").val()) < 18) &&
                    (currentIndex < newIndex &&
                        (form.find(".body:eq(" + newIndex + ") label.error").remove(),
                            form.find(".body:eq(" + newIndex + ") .error").removeClass("error")),
                        (form.validate().settings.ignore = ":disabled,:hidden"),
                        form.valid()))
            );
        },
        onFinishing: function(event, currentIndex) {
            return (form.validate().settings.ignore = ":disabled"), form.valid();
        },
        onFinished: function(event, currentIndex) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Pastikan semua data sudah benar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, submit sekarang!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $("form.tab-wizard").submit();
                }
            });
        },
    });

    $(".tab-wizard").validate({
        ignore: "input[type=hidden]",
        errorClass: "text-danger",
        successClass: "text-success",
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        rules: {
            email: {
                email: true,
            },
            name: {
                required: true,
                minlength: 3
            },
            type: {
                required: true
            },
            desc: {
                required: true,
                minlength: 20
            },
            nama_depan: {
                required: true
            },
            nama_belakang: {
                required: true
            },
            no_ktp: {
                required: true,
                digits: true,
                minlength: 16,
                maxlength: 16
            },
            domisili: {
                required: true
            },
            alamat: {
                required: true
            },
            ktp_file: {
                required: true
            },
            selfie_file: {
                required: true
            }
        },
    });
</script> -->

<script>
    var form = $(".tab-wizard").show();

    $(".tab-wizard").steps({
        headerTag: "h6",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit",
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            return (
                currentIndex > newIndex ||
                (!(3 === newIndex && Number($("#age-2").val()) < 18) &&
                    (currentIndex < newIndex &&
                        (form.find(".body:eq(" + newIndex + ") label.error").remove(),
                            form.find(".body:eq(" + newIndex + ") .error").removeClass("error"))),
                    (form.validate().settings.ignore = ":disabled,:hidden"),
                    form.valid())
            );
        },
        onFinishing: function(event, currentIndex) {
            return (form.validate().settings.ignore = ":disabled"), form.valid();
        },
        onFinished: function(event, currentIndex) {
            // Check if the file inputs are empty
            if ($('#selfieWithKTPInput').get(0).files.length === 0 || $('#ktpInput').get(0).files.length === 0) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Anda harus mengunggah file KTP dan selfie dengan KTP sebelum melanjutkan!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            } else {
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Pastikan semua data sudah benar!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, submit sekarang!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $("form.tab-wizard").submit();
                    }
                });
            }
        },
    });

    $(".tab-wizard").validate({
        ignore: [], // Ensure hidden elements are validated
        errorClass: "text-danger",
        successClass: "text-success",
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        rules: {
            email: {
                email: true,
            },
            name: {
                required: true,
                minlength: 3
            },
            type: {
                required: true
            },
            nama_depan: {
                required: true
            },
            nama_belakang: {
                required: true
            },
            no_ktp: {
                required: true,
                digits: true,
                minlength: 16,
                maxlength: 16
            },
            domisili: {
                required: true
            },
            alamat: {
                required: true
            },
            ktp_file: {
                required: true
            },
            selfie_file: {
                required: true
            }
        },
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