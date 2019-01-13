<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Créer un cadeau</title>
		<link rel="stylesheet" href="index.css">
	</head>

	<body>
		<h1>Veuillez entrer les informations du cadeau à créer.</h1>
		<section>
		<form method="POST" action="../controleurs/creation_cadeau.php">
			<p><input type="text" name="nom" placeholder="Nom"></p>
			<p><input type="text" name="descriptif" placeholder="Descriptif" style='width:300px'></p>

			<p><input type="file" name="image"></p>

			<p><input type="text" name="lien" placeholder="Lien" style='width:180px'></p>
			<p><INPUT TYPE="submit" VALUE="Valider" style='width:120px; height:30px'></p>
		</form>
		</section>
		
		<form method="POST" action="consultation_des_cadeaux.php">
			<p><INPUT TYPE="submit" VALUE="Annuler" style='width:110px; height:30px'></p>
		</form>
		
	</body>

</html>
