<!DOCTYPE html>
<html>

  <head>
    
    
  </head>

  <body>
    <script type='text/javascript' src='http://www.google.com/jsapi'></script>
<script type='text/javascript'>google.load('visualization', '1', {'packages': ['geochart']});
google.setOnLoadCallback(drawVisualization);

  function drawVisualization() {var data = new google.visualization.DataTable();

 data.addColumn('string', 'Country');
 data.addColumn('number', 'Value'); 
 data.addColumn({type:'string', role:'tooltip'});var ivalue = new Array();

 data.addRows([[{v:'002',f:'Africa'},0,'800']]);
 ivalue['002'] = 'http://en.wikipedia.org/wiki/Africa';

 data.addRows([[{v:'150',f:'Europe'},1,'3,000']]);
 ivalue['150'] = 'http://en.wikipedia.org/wiki/Europe';

 data.addRows([[{v:'019',f:'Americas'},2,'2,000']]);
 ivalue['019'] = 'http://en.wikipedia.org/wiki/Americas';

 data.addRows([[{v:'142',f:'Asia'},3,'1,000']]);
 ivalue['142'] = 'http://en.wikipedia.org/wiki/Asia';

 data.addRows([[{v:'009',f:'Oceania'},4,'100']]);
 ivalue['009'] = 'http://en.wikipedia.org/wiki/Oceania';

 var options = {
 backgroundColor: {fill:'#FFFFFF',stroke:'#FFFFFF' ,strokeWidth:0 },
 colorAxis:  {minValue: 0, maxValue: 4,  colors: ['red','yellow','green','purple','brown',]},
 legend: 'none',	
 backgroundColor: {fill:'#FFFFFF',stroke:'#FFFFFF' ,strokeWidth:0 },	
 datalessRegionColor: '#f5f5f5',
 displayMode: 'regions', 
 enableRegionInteractivity: 'true', 
 resolution: 'continents',
 sizeAxis: {minValue: 1, maxValue:1,minSize:10,  maxSize: 10},
 region:'world',
 keepAspectRatio: true,
 width:600,
 height:400,
 tooltip: {textStyle: {color: '#444444'}, trigger:'focus'}	
 };
  var chart = new google.visualization.GeoChart(document.getElementById('visualization')); 
 chart.draw(data, options);
 }
 </script>
 <div id='visualization'></div>

  </body>

</html>