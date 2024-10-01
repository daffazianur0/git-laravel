<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>SMK PERTIWI KUNINGAN</title>

    <!-- Stylesheets -->
    <link href="{{ asset('adminLTE/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminLTE/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminLTE/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('adminLTE/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <link href="{{ asset('adminLTE/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminLTE/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('adminLTE/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('adminLTE/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('layout.sidebar')
            @include('layout.navbar')
            <div class="right_col" role="main">
                @yield('content')
            </div>
            @include('layout.footer')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('adminLTE/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('adminLTE/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminLTE/vendors/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('adminLTE/build/js/custom.min.js') }}"></script>

    <!-- Include SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click', '#delete', function(e){
            e.preventDefault();
            var link = $(this).attr("href");

            Swal.fire({
                title: "yakin mau dihapus!!",
                text: "",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    
                    // Redirect to the link if confirmed
                    window.location.href = link;
                }
            });
        });
    });
</script>

</body>
</html>
