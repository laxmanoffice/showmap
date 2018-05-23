<html>
  <head>
  <!--style xmlns="http://www.w3.org/2000/svg">
    /*#regions_div path:hover { fill: cornflowerblue; }*/
    /*#regions_div rect:hover {fill:transparent;}*/
</style-->
  <style>
  /*#regions_div .unit:hover{
    fill:red;
}*/
#regions_div path:hover { fill: #877e9f; stroke: black; stroke-width: 0.5; }
#regions_div rect:hover { fill: transparent;}
  </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      var map;
	function initMap() {
		google.charts.load('current', {
        'packages':['geochart'],	//geomap
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyDgS2pbNfDwDRy1nM3VNIiMBGmcLa-H0EY',
		'callback': drawRegionsMap
      });
      //google.charts.setOnLoadCallback(drawRegionsMap);
	  //google.charts.setOnLoadCallback(drawChart1);
	  //google.charts.setOnLoadCallback(drawChart2);
	  // OR
	  /*google.charts.setOnLoadCallback(
		function() { // Anonymous function that calls drawChart1 and drawChart2
			 drawChart1();
			 drawChart2();
		  });*/

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
		['Region Code', 'Continent'],
		['142', 'Middle East and India'],
		['150', 'Europe'],
		['019', 'Americas'],
		['060', 'North America'],
		['009', 'Asia Pacific'],
		['002', 'Africa'],
		/*['142', 'Middle East and India'],
		['150', 'Europe'],
		['019', 'Americas'],
		['005', 'South America'],
		['013', 'Central America'],
		['021', 'North America'],
		['002', 'Africa'],
		['017', 'Central Africa'],
		['015', 'Northern Africa'],
		['018', 'Southern Africa'],
		['030', 'Eastern Asia'],
		['034', 'Southern Asia'],
		['035', 'Asia/Pacific region'],
		['009', 'Oceania'],
		['145', 'Middle East'],
		['143', 'Central Asia'],
		['151', 'Northern Asia'],
		['154', 'Northern Europe'],
		['155', 'Western Europe'],
		['039', 'Southern Europe']*/

        ]);

        //var options = {};
		var options = {
					//region: 'world', // e.g. IN , AU, RU
					//displayMode: 'text',
					//'dataMode' : 'regions',	//'markers', 'text';
					//'colors' : '#f5f5f5',
					//'showLegend' : 'true',
					//backgroundColor: '#FFFFFF', //'#d9e8f5',
					defaultColor: '#37295f',
					//'dataMode': 'marker',
					//backgroundColor: {fill:'#FFFFFF',stroke:'#FFFFFF' ,strokeWidth:25 },
					//backgroundColor: '#FFFFFF', //'#d9e8f5',
					//datalessRegionColor: '#d9e8f5',	//'#f8bbd0',
					//colorAxis: {colors: ['#6E90CF', '#3B729F']},
					//colorAxis: {colors: ['404040', '8f2424']},
					 //colorAxis:  {minValue: 0, maxValue: 4,  colors: ['red','yellow','green','purple','brown',]},
					 //legend: 'none',	
					 //enableRegionInteractivity: 'true', 
					 //sizeAxis: {minValue: 1, maxValue:1,minSize:10,  maxSize: 10},
					 //keepAspectRatio: true,
					 //tooltip: {textStyle: {color: '#444444'}, trigger:'focus'},
					resolution: 'continents'
					};

		var container = document.getElementById('regions_div');
		var geomap = new google.visualization.GeoChart(container);
		console.log(data);
        geomap.draw(data, options);
		
		/*google.visualization.events.addListener( 
		geomap, 'regionClick', regionClickHandler); 

      function regionClickHandler(e) { 
		//console.log('Columns: ' + data.getNumberOfColumns());	// To get number of columns in data
		//console.log('Rows: ' +data.getNumberOfRows());	// To get number of rows in data
		//console.log(data.getValue(1,1));	// To get particular data's column and row value
		var selection = geomap.getSelection();
		if (selection.length) {
			var country_data = data.getValue(selection[0].row, 1);
			//alert(country_data);
			console.log(country_data);
			location.href = "?region=" + country_data;
		}
        //location.href = "?region=" + country_data; 

        geomap.setSelection(); 
      }*/
	  
	  // We add a DOM event here to show an alert if the DIV containing the
        // map is clicked.
        google.maps.event.addDomListener(container, 'click', function() {
		  var selection = geomap.getSelection();
		if (selection.length) {
			var country_data = data.getValue(selection[0].row, 1);
			//alert(country_data);
			console.log(country_data);
			location.href = "http://localhost/boks-international/locations/?region=" + country_data;
		}
		
        });	// click event
		
		google.maps.event.addDomListener(container, 'mouseover', function() {
			/*var selection = geomap.getSelection();
			if (selection.length) {
				var country_data = data.getValue(selection[0].row, 1);
				alert(country_data);
				console.log(country_data);
				
			}*/
			alert('aaa');
			  
		});	// mouseover event
		
		

		

		

      }
	}
    </script>
  </head>
  <body>
  <?php

if(isset($_GET['region']))
{
	echo 'You Searched for: ' . $_GET['region'];	
	/*$url = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=".$_GET['region']."&sensor=false&region=".$_GET['region']);
	$response = json_decode($url);

	$lat = $response->results[0]->geometry->location->lat;
	$long = $response->results[0]->geometry->location->lng;
	
	$get_address = 'http://maps.google.com/maps/api/geocode/json?region=' . $_GET['region'];
	$geocode=file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?latlng=' . $lat . ',' .$long . '&sensor=false');
    $output= json_decode($geocode);
	echo $output->results[0]->formatted_address;*/

	//include_once 'load-marker.php';
}
else{
	?>
	<!--div id="regions_div" style="width: 900px; height: 500px;"></div-->
	<div id="regions_div" style="width: 900px; height: 500px;"></div>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key
=AIzaSyDgS2pbNfDwDRy1nM3VNIiMBGmcLa-H0EY&libraries=visualization&callback=initMap">
</script>
	<?php
}
?>
    

  </body>
</html>