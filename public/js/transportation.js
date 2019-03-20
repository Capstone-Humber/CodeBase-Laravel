


function myMap()
{

    var myCenter = new google.maps.LatLng(43.728998100, -79.608217100);
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: myCenter,
        zoom : 15
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);

    var marker = new google.maps.Marker({position:myCenter, animation:google.maps.Animation.BOUNCE});
    marker.setMap(map);

}