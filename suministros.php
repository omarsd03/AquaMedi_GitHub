<?php session_start();

	if (isset($_SESSION['usuario'])) {
		require 'view/suministros.view.php';
	} else {
		header('Location: login.php');
	}
	
?>