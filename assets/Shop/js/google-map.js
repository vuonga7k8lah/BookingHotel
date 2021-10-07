function initMap() {
    // Map option
//     let options = {
//     center: {lat:  21.025644168422545 , lng:105.84169038135032 },
//     zoom: 14
// }
//
//     //New Map
//     let map = new google.maps.Map(document.getElementById("map"),options)
//     //listen for click on map location
//     let MarkerArray = [ {location:{lat:  21.028056088291898, lng: 105.82475287415544},
//     imageIcon: "https://img.icons8.com/nolan/2x/marker.png",
//     content: `<h2>abc</h2>`},
//     ]
//
//     // loop through marker
//     for (let i = 0; i < MarkerArray.length; i++){
//     addMarker(MarkerArray[i]);
//
// }
//
//     // Add Marker
//
//     function addMarker(property){
//
//     const marker = new google.maps.Marker({
//     position:property.location,
//     map:map,
//     //icon: property.imageIcon
// });
//
//     // Check for custom Icon
//
//     if(property.imageIcon){
//     // set image icon
//     marker.setIcon(property.imageIcon)
// }
//
//     if(property.content){
//
//     const detailWindow = new google.maps.InfoWindow({
//     content: property.content
// });
//
//     marker.addListener("mouseover", () =>{
//     detailWindow.open(map, marker);
// })
// }
// }

    var map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 16,
        center: new google.maps.LatLng(21.025644168422545, 105.84169038135032),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    let MarkerArray = [
        {
            position: {
                lat: 21.028056088291898,
                lng: 105.82475287415544
            },
            content: `<h2>Hanoi Hotel</h2>`
        }, {
            position: {
                lat: 21.025473173484272,
                lng: 105.85648092032352
            },
            content: `<h2>Sofitel Legend Metropole Hanoi</h2>`
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