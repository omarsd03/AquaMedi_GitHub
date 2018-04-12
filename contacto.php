<?php session_start();
	
	if (isset($_SESSION['usuario'])) {
		require 'view/contacto.view.php';
	} else {
		header('Location: login.php');
	}
	
?>