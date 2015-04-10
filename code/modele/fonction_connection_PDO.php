<?php
	function open_recherche_PDO(){
	$dsn = 'mysql:dbname=AAA;host=127.0.0.1';
		$user = 'recherche';
		$password = 'bXnCHNnZdxzzKtPA';

		try {
			$dbh = new PDO($dsn, $user, $password);
			$dbh->exec("SET CHARACTER SET utf8");
		} catch (PDOException $e) {
			$dbh = 'Connexion échouée : ' . $e->getMessage();
			echo $dbh;
		}
	return $dbh;
	}


function open_login_PDO(){
		$dsn = 'mysql:dbname=AAA;host=127.0.0.1';
		$user = 'connection';
		$password = 'bXnCHNnZdxzzKtPA';

		try {
			$dbh = new PDO($dsn, $user, $password);
		} catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
		}
		return $dbh;
}
	

function open_inscription_PDO(){	  
/* Connexion à une base ODBC avec l'invocation de pilote */
	$dsn = 'mysql:dbname=AAA;host=127.0.0.1';
	$user = 'inscription';
	$password = 'bXnCHNnZdxzzKtPA';

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