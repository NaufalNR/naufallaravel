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
    <link href="/admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/home/css/style.css" rel="stylesheet">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.css" rel=" stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
</head>

<div class="container-fluid fixed-atas px-0 wow fadeIn" data-wow-delay="0.1s">
    <nav class="navbar navbar-expand-lg navbar-light py-lg-3 px-lg-5 py-5 wow fadeIn bg-white" data-wow-delay="0.1s"
        style="background-color: #a01626 !important">

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav p-4 p-lg-0" style="background-color: #5216a0 !important;margin:auto">
                <a href="{{ url('panel/logout') }}" class="nav-item nav-link float-end">Logout</a>
            </div>
        </div>
    </nav>

    @yield('content')
    <div class="footer">
        <div class="copyright" style="background-color: #7c0a21 !important">
            <p style="color: #FFFFFF">
            </p>
        </div>
    </div>

</div>
<script src="/admin/plugins/common/common.min.js"></script>
<script src="/admin/js/custom.min.js"></script>
<script src="/admin/js/settings.js"></script>
<script src="/admin/js/gleek.js"></script>
<script src="/admin/js/styleSwitcher.js"></script>

<!-- Chartjs -->
<script src="/admin/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Circle progress -->
<script src="/admin/plugins/circle-progress/circle-progress.min.js"></script>
<!-- Datamap -->
<script src="/admin/plugins/d3v3/index.js"></script>
<script src="/admin/plugins/topojson/topojson.min.js"></script>
<script src="/admin/plugins/datamaps/datamaps.world.min.js"></script>
<!-- Morrisjs -->
<script src="/admin/plugins/raphael/raphael.min.js"></script>
<script src="/admin/plugins/morris/morris.min.js"></script>
<!-- Pignose Calender -->
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
<!-- ChartistJS -->
<script src="/admin/plugins/chartist/js/chartist.min.js"></script>
<script src="/admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
<script src="/admin/plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
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
    $('.blogout').on('click', function(e) {
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
            title: 'Apakah Anda yakin ingin logout',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, Logout!',
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
    $('.bconfir').on('click', function(e) {
        s
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
</body>

</html>
