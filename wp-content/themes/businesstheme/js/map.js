var dgkhan= new google.maps.LatLng(30.051841, 70.615900);
var kothabbat= new google.maps.LatLng(30.101041, 70.613122);
function initialize()
{
    var mapProp = {
        center:dgkhan,
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

    var marker = new google.maps.Marker({
        position: dgkhan,
        animation:google.maps.Animation.BOUNCE

    });
    /*var markerr = new google.maps.Marker({
        position: kothabbat,
        animation:google.maps.Animation.BOUNCE

    });
    markerr.setMap(map);*/
    marker.setMap(map);
    /*
    var myTrip=[dgkhan,kothabbat];
    var flightPath=new google.maps.Polyline({
        path:myTrip,
        strokeColor:"#0000FF",
        strokeOpacity:0.8,
        strokeWeight:2
    });
    flightPath.setMap(map);*/
    
  var contentString ="<div class='informationwd'>"+
  "<strong>Welcome to Our Studio</strong>"+
  "</div>"+
  "<div class='text'>"+
  "<hr>"+
  "<p>At our core, Innovative is the enabler for every business leader, information worker and small business of the new world. </p>"; 

    var infowindow = new google.maps.InfoWindow({
        content:contentString
    });
    infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', initialize);