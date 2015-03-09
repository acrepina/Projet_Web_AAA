
 
	 <!-- <link href="vue/css/n102.css" rel="stylesheet" type="text/css"/>  -->
  
 
	<div id="upper_page">
		<i class="not_connected" id="n102_i">Si vous souhaitez accéder à la fonctionnalité de recherche de symptômes,<br/> Veuillez vous identifier </i>
		<h1>Recherche de pathologies:</h1>
		<nav id="n102_part1">
			<form id="combobox1">
				<select class="combobox" name="box_meridien">
					<option id="all">Méridien</option>
					<!-- add options with PHP  -->
				</select>
			
				<select class="combobox" name="box_pathologie">
					<option id="all">Pathologie</option>
					<!-- add options with PHP  -->
				</select>
			
				<select class="combobox" name="box_carater">
					<option id="all">Caractéristique</option>
					<!-- add options with PHP  -->
				</select>
			</form>
		</nav>
		<nav id="n102_part2">
			<div class="connected">
					<h3 id="n102_h3">Symptômes:</h3>
					<form id="input_sympt">
						<input type="text" value="entrer vos symtômes"></input>
						<input class="rouge" type="submit" value="go"></input>
						<i>Pour sélectionner la liste de vos symptômes, veuillez les séparer par ";"</i>
					</form>
			</div>
		</nav>
	</div>
	<hr/>
	<div id="lower_page">
		<div id="mes_result">
			<article id="n102_article">
				<!-- resutat requet -->
				<h4 id="n102_h4"> Mon Résultat</h4>
				<p>mon résultat bla bla chinoi bla bla</p>
				<em class="bottom_article">
					<ol class="critere_symptome" >
					<!-- add sympthome selected -->
						<li class="connected">Symptôme sélectionné</li>
					</ol>
					<ol class="mes_criteres">
					<!-- add criteria selected  -->
						<li>méridien/</li>
						<li>pathologie/</li>
						<li>caracteristique</li>
					<ol>
				</em>
			</article>
		</div>
	</div>
  
