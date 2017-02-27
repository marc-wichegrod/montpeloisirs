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
	
		<fieldset> <!--Permet de faire l'encadré-->
			<input type=hidden name="id" value="<?php echo $id ?>">
			<legend>Qui êtes-vous ?</legend>
			<label for="sexe">Sexe : </label>
			<input type="radio" value="femme" name="sexe"/> Femme
			<input type="radio" value="homme" name="sexe"/> Homme
			<br/><br/>
			<label for="prenom">Prénom :</label>
			<input name="prenom" placeholder="Votre prénom">
			<br/><br/>	
			<label for="date_naissance">Date de naissance :</label>
			<select name="date_naissance" size="1">
				<?php
					for ($i=1; $i < 10; $i++) { 
						echo "<option>0".$i."\n";
					}
					for ($i=10; $i < 32; $i++) { 
						echo "<option>".$i."\n";
					}
				?>
			</select>
			<select name="date_naissance" size="1">
				<option>Janvier
				<option>Février
				<option>Mars
				<option>Avril
				<option>Mai
				<option>Juin
				<option>Juillet
				<option>Août
				<option>Septembre
				<option>Octobre
				<option>Novembre
				<option>Décembre
			</select>
			<select name="date_naissance" size="1">
				<?php
					for ($i=1940; $i < getdate()[year]; $i++) { 
						echo "<option>".$i."\n";
					}
				?>
			</select>
		</fieldset>
		
		<fieldset>
			<legend>Informations de compte</legend>

			<label for="email">E-mail : </label>
			<input type="text" name="email" /> <br/><br/>
			<label for="pseudo">Pseudo : </label>
			<input type="text" name="pseudo" /> <br/><br/>
			<label for="motdepasse">Mt de passe : </label>
			<input type="text" name="motdepasse" /> <br/><br/>
			<label for="confirmation_mdp">Confirmation du mot de passe : </label>
			<input type="text" name="confirmation_mdp" />
		</fieldset>

		<fieldset> <!--probleme de jointure avec la base-->
			<legend>Vos sorties ?</legend>
			<label for="frequence">A quelle fréquence sortez-vous ?</label>
			<input type="radio" value="toutletps" name="frequence"/> Tout le temps
			<input type="radio" value="regulierement" name="frequence"/> Régulièrement
			<input type="radio" value="rarement" name="frequence"/> Rarement
			<br/><br/>
			<label>Avec qui aimez-vous sortir ?</label>
			<input type="checkbox" name="famille"/> En famille
			<input type="checkbox" name="amis" /> Entre amis
			<input type="checkbox" name="amoureux" /> Entre amoureux
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
		</fieldset>
		<p>
			<input type="submit" value="Confirmation de votre inscription">
		</p>
		
		
		<?php
			include("include/footer.php");
		?>
	
	</body>
	
</html>