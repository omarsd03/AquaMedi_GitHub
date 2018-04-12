<?php session_start();
	
	if (isset($_SESSION['usuario'])) {
		require 'view/estado_del_agua.view.php';
	} else {
		header('Location: login.php');
	}
	
?>