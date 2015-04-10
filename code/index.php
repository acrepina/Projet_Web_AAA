<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr"> <!-- attribut xmlns utilisé pour définir le 
																namespace par défaut d'un xhtml -->

<head>
		<!-- header -->
		<?php include("vue/html/head.html")?>
</head>


<body>
	<div class="header">
		<?php session_start ( ) ; ?>
		<div>
				<!-- barre de navigation -->
				<?php include("controleur/c_barre.php")?>
		</div>
	</div>
	
	<div class="section">
	
		<!-- determine si connecté -->
		<?php 
			if ( isset($_SESSION['email_addr'] )) {
				$loged = true;
			}
			else{ $loged =false;	} 
		?> 
		
		<!-- Corp page  -->
		<div class="corp" id="contenu_page">
		 <?php 
		 
			
			if (isset($_GET['page'])){
				$page= htmlspecialchars($_GET['page']);
			}
			else{
				$page = 'acceuil' ;
				
			}
			if (file_exists ("controleur/c_".$page.".php")){
				include("controleur/c_".$page.".php");
			}
			else{
				include("vue/html/error/404.html");
			}
			
		 ?>
		</div>
		
		<div class="corp">		<!-- flux RSS sur le cote -->
		<div class="aside">
			<?php include("controleur/c_flux.php"); ?>
		</div>	
		</div>

	</div>
		
	<div class="orange_bas_page">	<!-- footer -->
	<div class="footer">
		<?php include("controleur/c_footer.php")?>
	</div>
	</div>
	
</body>


		
</html>