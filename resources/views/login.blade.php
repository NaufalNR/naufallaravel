<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Portofolio - Naufal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/home/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/home/css/style.css" rel="stylesheet">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.css" rel=" stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
</head>

<body class="h-100">
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0" style="margin-top: 150px">
                            <div class="card-body pt-5">
                                <a class="text-center" href="#">
                                    <h4>Administrator</h4>
                                </a>
                                <form class="mt-2 mb-5 login-input" method="post" action="{{ url('logincek') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <div class="input-group">
                                            <input class="form-control password" id="password"
                                                class="block mt-1 w-full" type="password" name="password" value=""
                                                autocomplete="off" required />
                                            <span class="input-group-text togglePassword">
                                                <i data-feather="eye" class="fa fa-eye"
                                                    style="cursor: pointer;padding-top:5px"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <center>
                                        <br>
                                        <button type="submit" name="simpan" value="simpan"
                                            class="btn btn-primary">Login</button>
                                        <br>
                                        <br>
                                        <p>Email : admin@gmail.com | Password : admin</p>
                                        <br>
                                        <a href="{{ '/' }}" class="btn btn-secondary">Home</a>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--**********************************
        Scripts
    ***********************************-->
    <script src="/admin/plugins/common/common.min.js"></script>
    <script src="/admin/js/custom.min.js"></script>
    <script src="/admin/js/settings.js"></script>
    <script src="/admin/js/gleek.js"></script>
    <script src="/admin/js/styleSwitcher.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
        $(function() {
            @if ($message = session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '<?= session('success') ?>'
                })
            @endif
        });
        $(function() {
            @if ($message = session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '<?= session('error') ?>'
                })
            @endif
        });
        const flashData = $('.flash-data').data('flashdata');
        // console.log(flashData);
        if (flashData) {
            Swal.fire({
                title: 'Berhasil !',
                text: '' + flashData,
                icon: 'success',
                showConfirmButton: false,
                timer: 3500
            });
        }
    </script>
    <script>
        const flashDataError = $('.flash-data-error').data('flashdata');
        // console.log(flashData);
        if (flashDataError) {
            Swal.fire({
                title: 'Gagal !',
                text: '' + flashDataError,
                icon: 'error',
                showConfirmButton: false,
                timer: 3500
            });
        }
    </script>
    <script>
        $('.bdel').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success m-1',
                    cancelButton: 'btn btn-danger m-1'
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: 'Yakin data ini akan dihapus?',
                text: "Data tidak akan bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Dibatalkan',
                        '',
                        'error'
                    )
                }
            });
        });
    </script>
    <script>
        $('.bconfir').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: 'INFO',
                text: "Dengan mengklik tombol 'Ya', notifikasi tagihan SPP akan masuk ke ruang orang tua/wali.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya !',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Dibatalkan',
                        '',
                        'error'
                    )
                }
            });
        });
    </script>
    <script>
        feather.replace({
            'aria-hidden': 'true'
        });
        $(".togglePassword").click(function(e) {
            e.preventDefault();
            var type = $(this).parent().parent().find(".password").attr("type");
            console.log(type);
            if (type == "password") {
                $("svg.feather.feather-eye").replaceWith(feather.icons["eye-off"].toSvg());
                $(this).parent().parent().find(".password").attr("type", "text");
            } else if (type == "text") {
                $("svg.feather.feather-eye-off").replaceWith(feather.icons["eye"].toSvg());
                $(this).parent().parent().find(".password").attr("type", "password");
            }
        });
    </script>
</body>

</html>
