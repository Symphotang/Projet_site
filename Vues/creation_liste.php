<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Consulter les cadeaux</title>
		<link rel="stylesheet" href="index.css">
	</head>

	<body>
		<h1>Veuillez entrer le nom de la liste à créer.</h1>
		<section>
		<form method="POST" action="consultation_des_cadeaux.php">
			<p><input type="text" name="nom_liste"></p>
			<p><INPUT TYPE="submit" VALUE="Valider"></p>
		</form>

		<form method="POST" action="consultation_des_cadeaux.php">
			<p><INPUT TYPE="submit" VALUE="Annuler"></p>
		</form>
		</section>
	</body>

</html>
