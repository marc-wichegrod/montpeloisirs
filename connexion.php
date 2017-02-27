<html>
	<head>
	<meta charset="utf-8" />
	<title>Montpeloisirs</title>
	<link rel ="stylesheet" href="style/style.css"  type="text/css" media="screen"/>    
	</head>

	<body>
		
		<?php
			include("include/header.php"); 
			include("include/nav.php");
			//$id=htmlspecialchars($_GET['id']);
			//$bdd= new PDO('mysql:host=localhost:8889;dbname=montpeloisirs;charset=utf8', 'root', 'root'); 
		?>
		<form method="GET" action="">
	
		<fieldset>
			<legend> Connexion </legend>
		
			<label for="pseudo">Pseudo :</label>
			<input type="text" name="pseudo" rows="1"  cols="30" placeholder="Pseudo"></input>
			<br>
			<label for="mot de passe">Mot de passe :</label>
			<input type="password" name="mot de passe" value="" ></input>
			<br/>
			<br>
			<input type="submit" value="Validation"/> Validation
			</br>
			<br> <a href="changerPass.php"> Mot de passe oublié? </a>
		</fieldset>
		<?php
			include("include/footer.php");
		?>
	</body>
	
</html>