@extends('layouts.default')
@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Map view</h3>
      </div>
      <div class="panel-body">
        <div class="row">
        	<div class="col-md-12">
    	      <div id="map"></div>
    	      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAh6tOD_QMihDKpQi6tt7mfo_kRbly2ZEU&libraries=visualization"></script>
    	      <script>
    	      var map;
    	        function initialize(){
    	          map = new google.maps.Map(document.getElementById('map'), {
    	                    zoom: 6,
    	                    center: new google.maps.LatLng(27.0406891,78.8222871),
    	                    mapTypeId: google.maps.MapTypeId.ROADMAP
    	                  });

    	          var script = document.createElement('script');
    	          script.src = "<?php echo url('/'); ?>/api/get/map/json";
    	          document.getElementsByTagName('head')[0].appendChild(script);
    	        }
    	        window.eqfeed_callback = function(results) {
    	                for (var i = 0; i < results.features.length; i++) {
                            var coords = results.features[i].geometry.coordinates;
                            var latLng = new google.maps.LatLng(coords[0],coords[1]);
                            var marker = new google.maps.Marker({
                            position: latLng,
                            map: map,
                            url: results.features[i].properties.url,
                            title: results.features[i].properties.title,
                            });

                            var infoWindow = new google.maps.InfoWindow({
                                content: '<a target="_blank" class="popup" href="' + results.features[i].properties.url + '">'+results.features[i].properties.title+'</a>',
                            });

                            google.maps.event.addListener(marker, 'click', (function(mm, tt) {
                            return function() {
                                var cont = '<a target="_blank" class="popup" href="' + this.url + '">'+this.title+'</a>';
                                infoWindow.setContent(cont);
                                infoWindow.open(map, mm);
                            }
                            })(marker, coords[0]));

    	                }
    	              }
    	              google.maps.event.addDomListener(window, 'load', initialize);
    	      </script>
        	</div>
        </div>
      </div>
    </div>
    <style type="text/css">
        #map {
          	height: 600px;
          	color: #279616;
          	border-radius: 5px;
        }
    </style>
@stop