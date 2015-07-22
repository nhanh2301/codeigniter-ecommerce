// Google Map Customization
(function(){

	var map;

	map = new GMaps({
		el: '#gmap',
		lat: 43.1580159,
		lng: -77.6030777,
		scrollwheel:false,
		zoom: 14,
		zoomControl : false,
		panControl : false,
		streetViewControl : false,
		mapTypeControl: false,
		overviewMapControl: false,
		clickable: false
	});

	var image = 'images/map-icon.png';
	map.addMarker({
		lat: 43.1580159,
		lng: -77.6030777,
		// icon: image,
		animation: google.maps.Animation.DROP,
		verticalAlign: 'bottom',
		horizontalAlign: 'center',
		backgroundColor: '#ffffff'
	});


	map.addStyle({
		styledMapName:"Styled Map",
		styles: [{"stylers":[{"visibility":"simplified"},{"saturation":20},{"weight":1.2},{"lightness":25}]}],
		mapTypeId: "map_style"  
	});

	map.setStyle("map_style");
}());