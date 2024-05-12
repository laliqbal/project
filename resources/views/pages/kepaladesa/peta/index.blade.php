<x-dashboard-admin>
    {{--  <x-slot name="title">{{ $title }}</x-slot>  --}}
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Google Map</h4>
                        <div id="map">
                            <script>
                                var map = L.map('map').setView([-6.5658757, 107.8229818], 13);
                                L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}', {
                                    maxZoom: 20,
                                    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                                }).addTo(map);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-admin>
