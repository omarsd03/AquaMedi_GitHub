<?php session_start();

	if (isset($_SESSION['usuario'])) {
		require 'view/estadisticas.view.php';
	} else {
		header('Location: login.php');
	}

	
	
?>