<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Lumia Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    {{--  <link href="{{ asset('Lumia') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('Lumia') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">  --}}

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Lumia') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('Lumia') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('Lumia') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('Lumia') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('Lumia') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>




    <!-- Template Main CSS File -->
    <link href="{{ asset('Lumia') }}/assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        body {
            height: 100%;
            margin: 0;
        }

        .leaflet-container {
            height: 570px;
            width: 9000px;
            max-width: 100%;
            max-height: 100%;
        }
    </style>

    <!-- =======================================================
  * Template Name: Lumia
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <x-sidebar-user />
    </header><!-- End Header -->
    <div>
        {{ $slot }}
    </div>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
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

    <script src="{{ asset('Lumia') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('Lumia') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Lumia') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('Lumia') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('Lumia') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('Lumia') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('Lumia') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Lumia') }}/assets/js/main.js"></script>

</body>

</html>
