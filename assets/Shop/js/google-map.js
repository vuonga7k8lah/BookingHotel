function initMap() {
    let name = document.getElementById('TenPhong').value;
    let lat = document.getElementById('LatLng0').value;
    let lng = document.getElementById('LatLng1').value;

    var map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 16,
        center: new google.maps.LatLng(lat, lng),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    let MarkerArray = [
        {
            position: {
                lat: lat,
                lng: lng
            },
            content: `<h2>`+name+`</h2>`
        }
    ];
    for (let i = 0; i < MarkerArray.length; i++) {
        addMarker(MarkerArray[i]);
    }

    function addMarker(oMarker) {
        var myMarker = new google.maps.Marker({
            position: new google.maps.LatLng(oMarker.position.lat, oMarker.position.lng),
            draggable: true,
        });
        google.maps.event.addListener(myMarker, 'dragend', function (evt) {
            document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
        });

        google.maps.event.addListener(myMarker, 'dragstart', function (evt) {
            document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
        });
        map.setCenter(myMarker.position);
        myMarker.setMap(map);

        var infowindow = new google.maps.InfoWindow({
            content: oMarker.content
        });

        google.maps.event.addListener(myMarker, 'click', function () {
            infowindow.open(map, myMarker);
        });
    }
}
