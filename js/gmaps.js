var map;
var marker;
var myLatLong;
var geocoder;
var infowindow;

function initialize() {
    geocoder = new google.maps.Geocoder();
    var mapOptions = {
        center: new google.maps.LatLng(-34.904375, -56.166414),
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
        }
    };

    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    if (accion != 'create'){
      myLatLong = new google.maps.LatLng(latlong[0], latlong[1]);
      var content = '<div id="content" style="margin-top:2px;"> ' +
                      '<div id="imageContent" style="text-align:-webkit-center; float:left; margin-right:10px;">' +
                        '<img src="' + portadaFileName + '" height="130" width="170" />' +
                      '</div>' +
                      '<div id="textContent">' +
                        "<strong> Direccion: </strong>" + direccion + '<br>' +
                        "<strong> Barrio: </strong>" + barrio +
                      '</div>' +
                    '</div>';
      
      infowindow = new google.maps.InfoWindow({ content: content,  });

      marker = new google.maps.Marker({
        position: myLatLong,
        map: map,
        title: 'Hello World!',
      });

      google.maps.event.addListenerOnce(map, 'idle', function(){
         infowindow.open(map, marker);
      });

      map.setCenter(marker.getPosition());
      
    }
    
}

function codeAddress() {
    var address = document.getElementById('Direccion_direccion').value;
    var bounds = new google.maps.LatLngBounds();

    geocoder.geocode({
        'address': address
    }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var latLng = results[0].geometry.location;
            var marker = new google.maps.Marker({
                map: map,
                animation: google.maps.Animation.DROP,
                draggable: true,
                position: results[0].geometry.location,
            });

            bounds.extend(latLng);
            map.fitBounds(bounds);
            var zoom = map.getZoom();
            map.setZoom(zoom > 15 ? 15 : zoom);

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });

            if (marker.getDraggable() === true) {
                google.maps.event.addListener(
                    marker,
                    'drag',
                    function() {
                        document.getElementById('Direccion_latlong').value = marker.getPosition();
                    }
                );
            }
            document.getElementById('Direccion_latlong').value = marker.getPosition();


        } else {
            alert('Geocode was not successful for the following reason: ' + status);
        }
    });
}

google.maps.event.addDomListener(window, 'load', initialize);