<?php
function inscription_client($dbh){
	
	$_POST['emailaddr'] = htmlspecialchars($_POST['emailaddr']);
	$_POST['password_user'] = htmlspecialchars($_POST['password_user']);
	$count = $dbh->exec("INSERT INTO liste_clients VALUES (\"".$_POST['emailaddr']."\",\"".$_POST['password_user']."\")");
}

function identifiction($dbh){
$_POST['email_addr'] = htmlspecialchars($_POST['email_addr']);
	$request = "SELECT email_addr FROM liste_clients WHERE email_addr=\"".$_POST['email_addr']."\"";
	$unmail = $dbh->query($request);
	
	
	
	$echec_adresse = 1;
	foreach  ($unmail as $row) {
	
		$echec_adresse = 0 ;
		
		affiche_pseudo($dbh);// affiche pseudo
		
		if($row['email_addr']==$_POST['email_addr']){
		// l'adresse existe
		
			$request2 = "SELECT email_addr FROM liste_clients WHERE (email_addr=\"".$_POST['email_addr']."\" AND password_user=\"".$_POST['pass']."\")  ";
			$unmdp = $dbh->query($request2);
			$echec_motdepasse = 1;
			foreach  ($unmdp as $row2) {
				$echec_motdepasse = 0 ;
				//print $row2['email_addr'] . "\t";
				if($row2['email_addr']==$_POST['email_addr']){
					//echo "<div id=\"zone_corps\">adresse et mot de passe OK</div>"; // 
					ouverture_session();
				}
				else{
					//echec
				}
			}
			if($echec_motdepasse == 1) echo "Mauvais mot de passe";  // message echec
		}
		else{
			//echec
		}
	}
	
	if($echec_adresse == 1) echo "Pas d'adresse";  // message echec
	// on ferme la connexion à la base
}
	
function ouverture_session(){
	$_SESSION['email_addr'] = $_POST['email_addr'] ;
		
	if ( isset($_SESSION['email_addr'] )) {
		echo"<html><META HTTP-EQUIV=\"REFRESH\" CONTENT=\"3;URL=index.php\"></html>";
		echo "<p style=\"font-size:35px;\" > Session ouverte : </p>" .$_REQUEST[ 'email_addr' ] ;
			
	}
	else{
		echo "Erreur lors de l'ouverture de la session";
	}
		
}


function recherche_bd($dbh){

	
	$_POST['recherche_symp'] = htmlspecialchars($_POST['recherche_symp']);
	$request = "SELECT idK FROM keywords WHERE name=\"".$_POST['recherche_symp']."\"";
	$unidk = $dbh->query($request);
	
	
	//------------------------------
	
		foreach  ($unidk as $row) {
		
			//print $row['idK'] . "\t";
			if($row['idK']>0){
			// l'adresse existe
		
			$request2 = "SELECT idS FROM keysympt WHERE idK=\"".$row['idK']."\"";
			$unids = $dbh->query($request2);
			
			foreach  ($unids as $row2) {
				//print $row2['idS'] . "\t";
				if($row2['idS']>0){
				
										$request3 = "SELECT * FROM symptome WHERE idS=\"".$row2['idS']."\"";
										$sth = $dbh->query($request3);
										$sth2=$dbh->query($request3); // pour le foreach
										//*
										$sth->setFetchMode(PDO::FETCH_OBJ);
										//echo "<div id=\"zone_corps\">";
										while($enregistrement = $sth->fetch()){
											//echo "in while";
											echo '<p>', $enregistrement->desc, '</p>';  // Affichage d'un des champs

											
										}
										//echo "</div>";
										//*/
										
										foreach  ($sth2 as $row3) {
											recherche_patho($row3['idS'],$dbh);
											echo "<br/>";
										}
										
									}
				else{
					echo "le keySympt nexiste pas";
					}
			}
		}
			else{
			echo "le keyword n existe pas";
				}
	}

}

function recherche_patho($idS,$dbh){
$request = "SELECT idP FROM symptpatho WHERE idS=\"".$idS."\"";
$unidP = $dbh->query($request);
	
	foreach  ($unidP as $row) {
	
		if($row['idP']>0){
		
			$request2 = "SELECT * FROM patho WHERE idP=\"".$row['idP']."\"";
			$sth=$dbh->query($request2);
			
				//echo "<div id=\"zone_corps\">";
				foreach($sth as $enregistrement){
					//echo "in while";
					echo '<p>', $enregistrement['desc'], '</p>';  // Affichage d'un des champs
				}
				//echo "</div>";
			
		}
		else{
			echo "le idP existe pas";
		}
	}
}

function recherche_avancee_bd($dbh){


	if($_POST['meridien']=='')
			{$_POST['meridien']='%';}
	if($_POST['type_sy']=='')
			{$_POST['type_sy']='%';}
	if($_POST['description']=='')
			{$_POST['description']='%';}

	
	$_POST['meridien'] = htmlspecialchars($_POST['meridien']);
	$_POST['type_sy'] = htmlspecialchars($_POST['type_sy']);
	$_POST['description'] = htmlspecialchars($_POST['description']);
	
	// Affiche le contenu du POST
	//echo $_POST['meridien'], $_POST['type_sy'], $_POST['description'], "<br/>";

	// Première demande SQL
	


		// Seconde demande SQL
		$request2 = "SELECT * FROM patho WHERE (`mer` LIKE \"".$_POST['meridien']."\" AND `type` LIKE \"".$_POST['type_sy']."\" AND `desc` LIKE \"%".$_POST['description']."%\")  ";
		$resultat2 = $dbh->query($request2);
		
		foreach($resultat2 as $row2){
			echo $row2['desc'];
			echo "<br/>";
		}
	
	
	// on ferme la connexion à la base


}

function pathologie_bd($dbh){
$request = "SELECT * FROM patho";
	$unpatho = $dbh->query($request);
		

	
		foreach  ($unpatho as $row) {
		
			print $row['desc'] . "\t";
			echo "<br/>";
		}


}
?>
