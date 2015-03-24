<?php
	session_start();
	
	$_SESSION['prenom'] = 'Bruno';
	$_SESSION['nom'] = 'Mascret';
	$_SESSION['mail'] = $_POST['mail'];
	........
	
	
	if(isset[$_POST('exit')]{
		session_destroy();
	}
?>