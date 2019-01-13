<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Créer une liste</title>
		<link rel="stylesheet" href="index.css">
	</head>

	<body>
		<h1>Veuillez entrer le nom de la liste à créer.</h1>
		<section>
		<form method="POST" action="../controleurs/creation_liste.php">
			<p><input type="text" name="nom_liste" placeholder="Nom de la liste"></p>
			<p><INPUT TYPE="submit" VALUE="Valider"></p>
		</form>

		<form method="POST" action="consultation_des_cadeaux.php">
			<p><INPUT TYPE="submit" VALUE="Annuler"></p>
		</form>
		</section>
	</body>

</html>
