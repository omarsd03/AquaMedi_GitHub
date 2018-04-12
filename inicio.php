<?php session_start();

	if (isset($_SESSION['usuario'])) {
		require 'view/inicio.view.php';
	} else {
		header('Location: login.php');
	}
	
?>