<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

<head>
		<!-- header -->
		<?php include("vue/html/head.html")?>
</head>


<body>
	<header>
		<?php session_start ( ) ; ?>
		<nav>
				<!-- barre de navigation -->
				<?php include("controleur/c_barre.php")?>
		</nav>
	</header>
	
	<section>
	
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
				$page=$_GET['page'];
			}
			else{
				$page = 'acceuil' ;
				
			}
			include("controleur/c_".$page.".php");
		 ?>
		</div>
		
		<aside class="corp" >		<!-- flux RSS sur le cote -->
			<?php include("controleur/c_flux.php"); ?>
		</aside>


	</section>
		
	<footer class="orange_bas_page">	<!-- footer -->
		<?php include("controleur/c_footer.php")?>
	</footer>
	
</body>		
</html>