// initialize the google Maps
function initializeGoogleMap() {
    // set latitude and longitude to center the map around
    var latlng = new google.maps.LatLng(43.944368, -78.896792);

    // set up the default options
    var myOptions = {
        zoom: 16,
        center: latlng,
        navigationControl: true,
        navigationControlOptions: {
            style: google.maps.NavigationControlStyle.DEFAULT,
            position: google.maps.ControlPosition.RIGHT
        },
        mapTypeControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DEFAULT,
            position: google.maps.ControlPosition.TOP_LEFT
        },

        scaleControl: true,
        scaleControlOptions: {
            position: google.maps.ControlPosition.BOTTOM_RIGHT
        },
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        draggable: true,
        disableDoubleClickZoom: false,
        keyboardShortcuts: true
    };
    var map = new google.maps.Map(document.getElementById("mapCanvas"), myOptions);
    if (true) {
        addMarker(map, 43.944368, -78.896792, "Vialab at UOIT");
    }
}

window.onload = initializeGoogleMap();

 // Add a marker to the map at specified latitude and longitude with tooltip

function addMarker(map, lat, long, titleText) {
    var markerLatlng = new google.maps.LatLng(lat, long);
    var marker = new google.maps.Marker({
        position: markerLatlng,
        map: map,
        title: "vialab at UOIT",
        icon: ""
    });
}
        