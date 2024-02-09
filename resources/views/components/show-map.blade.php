<div id="map"></div>

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
        locations = {
            lat: parseFloat($latlng['lat']),
            lng: parseFloat($latlng['lng'])
        };
        initMap();

        @if(isset($latlng))
            setMarker();
        @endif
    });

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: locations,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        });
    }

    function setMarker() {
        marker = new google.maps.Marker({
            position: locations,
            map: map
        });
    }
</script>
@endpush
