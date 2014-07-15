<div class="row">
	<div id="mapa" style="height:500px;"></div>
</div>
<script type="text/javascript">
var accion = <?php echo json_encode($this->action->Id) ?>;
var myLatlng;
var prueba = '<?php echo json_encode($inmuebles) ?>';

function initialize() {
	var s = JSON.parse(prueba);
	var mapOptions = {
		center: new google.maps.LatLng(-34.895418, -56.155598),
		zoom: 13,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
		}
	};

	map = new google.maps.Map(document.getElementById('mapa'),
	  mapOptions);

	var content;

	for (var i = 0; i < s.length; i++) {
		prueba = s[i].latlong.replace(/[()]/g,'');
		coord = prueba.split(',');
		myLatlng = new google.maps.LatLng(coord[0],coord[1]);
		var marker = new google.maps.Marker({
	      position: myLatlng,
	      map: map,
	      title: 'Hello World!',
		});

		if(s[i].tipo == 'Casa'){
			marker.setIcon('<?php echo Yii::app()->request->baseUrl; ?>/images/casa.png'); 
		} else {
			marker.setIcon('<?php echo Yii::app()->request->baseUrl; ?>/images/apartamento.png')
		}
		
		content ='<div id="content" style="margin-top:2px;"> ' +
	                '<div id="textContent">' +
	                  "<strong> Nombre: </strong>" + "<a href='view/"+ s[i].id_inmueble +"'>" + s[i].nombre +"</a>'";
	                    + '<br>' +
	                '</div>' +
	             '</div>';

		var infowindow = new google.maps.InfoWindow({
		  content: content
		});

		bindInfoWindow(marker, map, infowindow, content);
	};

	iWindow = new google.maps.InfoWindow();
	function bindInfoWindow(marker, map, infowindow,content) {
	    google.maps.event.addListener(marker, 'click', function() {
	        infowindow.setContent(content);
	        if (iWindow != null) iWindow.close();	
	        infowindow.open(map, marker);
	        	iWindow = infowindow;
	    });
	}
}


google.maps.event.addDomListener(window, 'load', initialize);

</script>