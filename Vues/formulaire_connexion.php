<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Connexion</title>
		<link rel="stylesheet" href="index.css">
	</head>

	<body>

		<h1>Connectez-vous !</h1>
		
		<div class="centrer">
			<img class="image" src="images/cadeau.png" alt="Cadeau" height="477" width="999"/>
		</div>

		<form method="POST" action="../Controleurs/connexion.php">
			<section>
			<p>Pseudo : <input type="text" name="login"/></p>
			<p>Mot de passe : <input type="password" name="mdp"/></p>
			<p><INPUT type="submit" name="connecter" value="Se connecter"></p>
			</section>
		</form>
		<br>
		<section>
		<p>Pas encore inscrit ? <a href="inscription.php"><input type="button" value="Créer un compte"></a></p>
		</section>
		
	</body>

</html>
