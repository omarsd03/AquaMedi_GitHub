<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href='img/AquaMediHorizontal.png' rel='shortcut icon' type='image/png'>
	<title>Estado Del Agua</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos_paginas.css">
	<link rel="stylesheet" href="css/estilos_menu.css">
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="icomoon/style.css">
</head>
<body>
	
	<?php include 'extras/header.php'; ?>

	<div class="container" align="center">
		<h1>Estado del Agua</h1>
	</div>

	<div class="container">
		<div class="form-group col-sm-6">
	         <label for="sel1">Selecciona un Municipio:</label>
	         <select class="form-control" id="sel1">
	         	<option value="0">--- Seleccionar ---</option>
	             <option value="1">Amacuzac</option>
	             <option value="2">Atlatlahucan</option>
	             <option value="3">Axochiapan</option>
	             <option value="4">Ayala</option>
	             <option value="5">Coatlán del Río</option>
	             <option value="6">Cuautla</option>
	             <option value="7">Cuernavaca</option>
	             <option value="8">Emiliano Zapata</option>
	             <option value="9">Huitzilac</option>
	             <option value="10">Jantetelco</option>
	             <option value="11">Jiutepec</option>
	             <option value="12">Jojutla</option>
	             <option value="13">Jonacatepec</option>
	             <option value="14">Mazatepec</option>
	             <option value="15">Miacatlán</option>
	             <option value="16">Ocuituco</option>
	             <option value="17">Puente de Ixtla</option>
	             <option value="18">Temixco</option>
	             <option value="19">Temoac</option>
	             <option value="20">Tepalcingo</option>
	             <option value="21">Tepoztlán</option>
	             <option value="22">Tetecala</option>
	             <option value="23">Tetela del Volcán</option>
	             <option value="24">Tlalnepantla</option>
	             <option value="25">Tlaltizapán</option>
	             <option value="26">Tlaquiltenango</option>
	             <option value="27">Tlayacapan</option>
	             <option value="28">Totolapan</option>
	             <option value="29">Xochitepec</option>
	             <option value="30">Yautepec</option>
	             <option value="31">Yecapixtla</option>
	             <option value="32">Zacatepec</option>
	             <option value="33">Zacualpan</option>
	         </select>
	    </div>

	    <div class="container col-sm-6">
	    	Suministros:
	    </div>
	</div>

	<?php include 'extras/footer.php'; ?>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/main.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
</body>
</html>