<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href='img/AquaMediHorizontal.png' rel='shortcut icon' type='image/png'>
	<title>Contacto</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos_paginas.css">
	<link rel="stylesheet" href="css/estilos_menu.css">
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="icomoon/style.css">
</head>
<body>
	
	<?php include 'extras/header.php'; ?>

	<div class="container" align="center">
		<h1>Contacto</h1>
		<h4>Puedes encontrarnos en la siguiente direccion para mas informacion.</h4>
	</div>

	<div class="row">
		<style>
	       #map {
	        height: 400px;
	        width: 100%;
	       }
	    </style>
		<div id="map"></div>
	    <script>
	      function initMap() {
	        var uluru = {lat: 18.9243772, lng: -99.2211288};
	        var map = new google.maps.Map(document.getElementById('map'), {
	          zoom: 17,
	          center: uluru
	        });
	        var marker = new google.maps.Marker({
	          position: uluru,
	          map: map
	        });
	      }
	    </script>
	    <script async defer
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAHUEZq8ZPUjQvX-QJBL8H5dyY3Q_ZyZA&callback=initMap">
	    </script>
	</div>

	<?php include 'extras/footer.php'; ?>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/main.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
</body>
</html>