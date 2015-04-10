
<?php include("./modele/fonction_connection_PDO.php")?>
<?php include("./modele/fonction_requete_bd.php")?>
<?php

$dbh=open_recherche_PDO();
recherche_avancee_bd($dbh);
close_PDO($dbh);
	
	
?>

<?php include("/vue/html/n102.html")?>