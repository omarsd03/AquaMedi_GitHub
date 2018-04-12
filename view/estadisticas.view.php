<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href='img/AquaMediHorizontal.png' rel='shortcut icon' type='image/png'>
	<title>Estadisticas</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos_paginas.css">
	<link rel="stylesheet" href="css/estilos_menu.css">
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="icomoon/style.css">
</head>
<body>
	
	<?php include 'extras/header.php'; ?>

	<div class="container" align="center">
		<h1>Estadisticas</h1>
	</div>

	<script type="text/javascript">
            window.onload = function () {
                var dataLength = 0;
                var data = [];
                $.getJSON("js/data.php", function (result) {
                    dataLength = result.length;
                    for (var i = 0; i < dataLength; i++) {
                        data.push({
                            x: parseInt(result[i].valorx),
                            y: parseInt(result[i].valory)
                        });
                    }
                    ;
                    chart.render();
                });
                var chart = new CanvasJS.Chart("chart", {
                    title: {
                        text: "Graficacion de Monitoreo de Suministro"
                    },
                    axisX: {
                        title: "Valores X",
                    },
                    axisY: {
                        title: "Valores Y",
                    },
                    data: [{type: "line", dataPoints: data}],
                });
            }
    </script>

    <div id="chart">
    </div>

	<?php include 'extras/footer.php'; ?>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/main.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/canvasjs.min.js"></script>
</body>
</html>