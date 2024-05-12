<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin/srtdash') }}/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{ asset('admin/srtdash') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin/srtdash') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('admin/srtdash') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('admin/srtdash') }}/assets/css/metisMenu.css">
    <link rel="stylesheet" href="{{ asset('admin/srtdash') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('admin/srtdash') }}/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('admin/srtdash') }}/assets/css/typography.css">
    <link rel="stylesheet" href="{{ asset('admin/srtdash') }}/assets/css/default-css.css">
    <link rel="stylesheet" href="{{ asset('admin/srtdash') }}/assets/css/styles.css">
    <link rel="stylesheet" href="{{ asset('admin/srtdash') }}/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{ asset('admin/srtdash') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <--- Login --->
        <style>
            .login-form-head {
                background-color: #1900ff;
            }

            login-area {
                background-image: url('path/to/your/image.jpg');
                /* Ganti 'path/to/your/image.jpg' dengan path menuju gambar latar belakang Anda */
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>

</head>

<body>
    <div>
        {{ $slot }}
    </div>

    <!-- jquery latest version -->
    <script src="{{ asset('admin/srtdash') }}/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('admin/srtdash') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('admin/srtdash') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('admin/srtdash') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('admin/srtdash') }}/assets/js/metisMenu.min.js"></script>
    <script src="{{ asset('admin/srtdash') }}/assets/js/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('admin/srtdash') }}/assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="{{ asset('admin/srtdash') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('admin/srtdash') }}/assets/js/scripts.js"></script>
</body>

</html>
