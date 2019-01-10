<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Groupe</title>
		<link rel="stylesheet" href="index.css">
	</head>

	<body>
		<h1>Indiquez les informations du membre inactif.</h1>
		<section>
		<form method="POST" action="affichage_groupe.php">
			<p><input type="text" name="nom"></p>
			<p><input type="text" name="prenom"></p>
			<p><INPUT TYPE="submit" VALUE="Ajouter au groupe"></p>
		</form>

		<form method="POST" action="affichage_groupe.php">
			<p><INPUT TYPE="submit" VALUE="Annuler"></p>
		</form>
		</section>
	</body>

</html>
