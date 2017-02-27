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
			<legend> Mot de passe oublié? </legend>
			<br>
			<label for="pseudo">Pseudo :</label>
			<input type="text" name="pseudo" rows="1"  cols="30" placeholder="Pseudo"></input>
			</br>
			<br>
			<label for="email"> Email </label>
			<input type="text" name="mail" value=""></input>
			</br>
			<br>
			<form action="passConfirme.php"><input type="submit" value="Ok"></form>
			</br>
			
		</fieldset>	
	
		<?php
			include("include/footer.php");
		?>
	</body>
	
</html>