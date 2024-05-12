<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--  <title>{{ $title ? $title : config('app.name') }}</title>  --}}
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="{{ asset('admin/srtdash') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <style>
        body {
            height: 100%;
            margin: 0;
        }

        .leaflet-container {
            height: 400px;
            width: 1000px;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body>
    <!-- preloader area start -->
    {{--  <div id="preloader">
        <div class="loader"></div>
    </div>  --}}
    <!-- preloader area end -->

    <!-- page container area start -->
    <div class="page-container">

        <x-sidebar-admin />

        <!-- main content area start -->
        <div class="main-content">

            <x-header-admin />


            <x-title-admin />

            {{ $slot }}

        </div>
        <!-- main content area end -->
        <x-footer-admin />
    </div>
    <!-- page container area end -->
    <x-offset-admin />
    <!-- jquery latest version -->
    <script src="{{ asset('admin/srtdash') }}/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('admin/srtdash') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('admin/srtdash') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('admin/srtdash') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('admin/srtdash') }}/assets/js/metisMenu.min.js"></script>
    <script src="{{ asset('admin/srtdash') }}/assets/js/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('admin/srtdash') }}/assets/js/jquery.slicknav.min.js"></script>

    <!-- maps Resources -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
    <script>
        $(document).ready(function() {
            $.getJSON('titik/json', function(data) {
                $.each(data, function(index) {
                    L.circle([data[index].longitude, data[index].latitude], {
                        color: 'red',
                        fillColor: '#f03',
                        fillOpacity: 0.5,
                        radius: 1000
                    }).addTo(map);
                });
            });
        });
        $.getJSON('aset/geojeson/map.geojson', function(data) {
            geoLayer = L.geoJSON(json, {
                style: function(feature) {
                    return {
                        fillOpacity: 0.5,
                        weight: 5,
                        opacity: 1,
                        color: 'red'
                    };
                },
                onEachFeature: function(feature, layer) {
                    layer.addTo(map);
                }
            });
        });
    </script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
        zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
        ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- start amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/pie.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/animate/animate.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="{{ asset('admin/srtdash') }}/assets/js/line-chart.js"></script>
    <!-- all bar chart activation -->
    <script src="{{ asset('admin/srtdash') }}/assets/js/bar-chart.js"></script>
    <!-- all pie chart -->
    <script src="{{ asset('admin/srtdash') }}/assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="{{ asset('admin/srtdash') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('admin/srtdash') }}/assets/js/scripts.js"></script>
</body>

</html>
