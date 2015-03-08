<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
	<!-- entete + header -->
	<?php include("controleur/c_barre.php")?>
	<body>
	
		<?php session_start ( ) ; ?>
		<!-- flux RSS sur le cote -->
		<aside>
			<?php include("controleur/c_flux.php"); ?>
		</aside>
		
		<!-- determine si conncter -->
		<?php 
			if ( isset($_SESSION['email_addr'] )) {
				$loged = true;
			}
			else{ $loged =false;	} 
		?> 
		
		<!-- Corp page  -->
		<div>
		<?php 
			if (isset($_GET['page'])){
				$page=$_GET['page'];
			}
			else{
				$page = 'acceuil' ;
				
			}
			include("controleur/c_".$page.".php");
		?>
		</div>
		
		<!-- footer -->
		<?php include("controleur/c_footer.php")?>
	</body>
</html>