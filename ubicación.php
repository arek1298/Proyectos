<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--link rel="stylesheet" href="css/estilos.css"-->
	
    <title>Document</title>
</head>
<body>
<style> 
  	#map {
        height: 100%;
        }
     
        html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        }
	</style> 
</head>  
	<body>
		<div id ="map"> </div> 
        <script async defer src="https://maps.googleapis.com/maps/api/js?key
AIzaSyDTld6OvodJPg-obEyLzfXrn774Q3KiYC4=&callback=initMap"></script>




</body>
<script type="text/javascript">
    var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 25.4232100, lng: -101.0053000},
          zoom: 15
        });
      }
</script>
</html>