<?php
	function open_recherche_PDO(){
	
	$dsn = 'mysql:dbname=ma_base_v2;host=127.0.0.1';
		$user = 'recherche';
		$password = 'xZDyPbEHMCK2WVSu';

		try {
			$dbh = new PDO($dsn, $user, $password);
			$dbh->exec("SET CHARACTER SET utf8");
		} catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
		}
	return $dbh;
	}


	function open_login_PDO(){

			$dsn = 'mysql:dbname=ma_base_v2;host=127.0.0.1';
		$user = 'connection';
		$password = 'enHyudn4spKNDjbS';

		try {
			$dbh = new PDO($dsn, $user, $password);
		} catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
		}
return $dbh;
}
	

	function open_inscription_PDO(){
	
	  
/* Connexion à une base ODBC avec l'invocation de pilote */
	$dsn = 'mysql:dbname=ma_base_v2;host=127.0.0.1';
	$user = 'inscription';
	$password = 'uBnQcbh6ZnX7asDz';

	try {
		$dbh = new PDO($dsn, $user, $password);
	} catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}
	return $dbh;
}


	function close_PDO($dbh){
	$dbh = null;
	}
	
?>