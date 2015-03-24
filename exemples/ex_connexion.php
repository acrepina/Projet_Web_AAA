<?php

	class Connexion{
		//TODO test available values for $dbName
		public function getDB($dbName='acu'){
			$db = null;
			try{
				$db = new PDO('mysql:host=localhost;dbname='.$dbName, 'root', 'pass',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			}
			catch (Exception $e){
				try{
				$db = new PDO('mysql:host=localhost;dbname='.$dbName, 'acu', 'pass',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				}
				catch (Exception $e){
					die('Erreur : ' . $e->getMessage());
				}
			}
			return $db;
		}
	}
	
	
	
	


?>