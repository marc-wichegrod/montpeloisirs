<html>
	<head>
	<meta charset="utf-8" />
	<title>Montpeloisirs</title>
	<link rel ="stylesheet" href="style/style.css"  type="text/css" media="screen"/>    
	</head>

	<body>
		<p id="connexion">
			<a href=""> Identification</a> | 
			<a href="">Connexion</a> 
		</p>
		<?php
			include("include/header.php");
			include("include/nav.php");
			// $id=htmlspecialchars($_GET['id']);
			// $bdd= new PDO('mysql:host=localhost:8889;dbname=montpeloisirs;charset=utf8', 'root', 'root'); 
		?>
		<form method="GET" action="">

		<fieldset> <!--probleme de jointure avec la base-->
			<legend>Quels sont vos goûts ?</legend>
			<label for="frequence">A soirées souhaitez-vous participer ?</label>
			<input type="checkbox" name="anniversaire"/> Anniversaire
			<input type="checkbox" name="integration"/> Intégration
			<input type="checkbox" name="EVJF"/> EVJF <br/><br/>
			<input type="checkbox" name="rencontre" /> Rencontre
			<input type="checkbox" name="amoureux" /> En amoureux<br/><br/>
			<input type="checkbox" name="autre" /> Autre :
			<input type="text" name="precision" />
			<br/><br/>
			<label>Quel(s) type(s) de lieu préférez-vous ?</label>
			<input type="checkbox" name="bar"/> Bar
			<input type="checkbox" name="restaurant" /> Restaurant
			<input type="checkbox" name="fastfood" /> Fast-food <br/><br/>
			<input type="checkbox" name="cinema" /> Cinéma
			<input type="checkbox" name="discotheque" /> Discothèque
			<br/><br/>
			<label>Quel type d'ambiance préférez-vous ?</label>
			<input type="checkbox" name="eclectro"/> Electro
			<input type="checkbox" name="chic" /> Chic
			<input type="checkbox" name="dansante" /> Dansante <br/><br/>
			<input type="checkbox" name="multiculturelle" /> Multiculturelle
			<input type="checkbox" name="retro" /> Rétro
			<br/><br/>
			<label>Nombre de participants : </label>
			<input type="number">
		</fieldset>
		<p>
			<input type="submit" value="Enregistrer">
		</p>
		
		
		<?php
			include("include/footer.php");
		?>
	
	</body>
	
</html>