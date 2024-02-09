<div class="form-group">
    <div class="d-flex justify-content-between align-content-center">
        <label class="form-label">Lokasi [LAT, LNG]</label>
        <a href="javascript:void(0)" class="btn btn-xs btn-outline-primary mb-2 btn-get-location">
            Cari Lokasi <span class="ti ti-map-pin ms-1"></span>
        </a>
    </div>

    <div id="map"></div>

    <div class="row mx-md-0 mt-2">
        <div class="col-md-5 ps-md-0 pe-md-2">
            <input type="text" name="latlng[lat]" id="latlng-lat" class="form-control">
        </div>
        <div class="col-md-5 ps-md-1 pe-md-2">
            <input type="text" name="latlng[lng]" id="latlng-lng" class="form-control">
        </div>
        <div class="col-md-2 ps-ms-1 pe-md-0">
            <div class="d-grid">
                <button type="button" class="btn btn-primary btn-set-location">LOKASI</button>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    #map {
        width: 100%;
        height: 350px;
    }
</style>
@endpush

@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHDgTgLQShXW2W32kojOEbehp2Vo8w1XY&callback=initMap" async defer></script>
<script type="text/javascript">
    var map, marker, locations = null;
    var $latlng = @if(isset($latlng)) @json($latlng) @else {lat: -6.200000, lng: 106.816666} @endif;
    $(function() {
        if ($latlng != null) {
            if ($latlng.lat != null && $latlng.lng != null) {
                locations = {
                    lat: parseFloat($latlng['lat']),
                    lng: parseFloat($latlng['lng'])
                };
                initMap();
                setMarker();

                $('#latlng-lat').val($latlng.lat);
                $('#latlng-lng').val($latlng.lng);
            } else {
                getLatlng();
            }
        } else {
            getLatlng();
        }

        $('.btn-get-location').on('click', function() {
            getLatlng();
        });

        $('.btn-set-location').on('click', function() {
            locations = {
                lat: parseFloat($('#latlng-lat').val()),
                lng: parseFloat($('#latlng-lng').val())
            };
            initMap();
            setMarker();
        });
    });

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: locations,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        });
        eventSetMarkerOnClick();
    }

    function setMarker() {
        marker = new google.maps.Marker({
            position: locations,
            map: map
        });
    }

    function eventSetMarkerOnClick() {
        map.addListener('click', function(event) {
            locations = event.latLng;
            $('#latlng-lat').val(locations.lat());
            $('#latlng-lng').val(locations.lng());

            marker.setPosition(locations);
        });
    }

    function getLatlng() {
        infoWindow = new google.maps.InfoWindow();
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    locations = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    $('#latlng-lat').val(position.coords.latitude)
                    $('#latlng-lng').val(position.coords.longitude)

                    initMap();
                    setMarker();
                },
                () => {
                    handleLocationError(false, infoWindow, map.getCenter());
                });
        } else {
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }
</script>
@endpush
