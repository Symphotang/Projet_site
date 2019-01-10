<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Création d'un groupe</title>
		<link rel="stylesheet" href="index.css">
	</head>
	
	<body>
		<h1>Spécifier le nom du groupe</h1>
		<form method="POST" action="affichage_groupe.php">
			<section>
			<p><input type="text" name="nom_groupe" style='width:300px; text-align:center'></p>
			<p><input type="submit" value="Valider" style='width:200px; height:70px' class="valider"></p>
		</form>

		<a href="page_accueil.php" target="_self"> <input type="button" value="Annuler" style='width:200px; height:70px' class="annuler"></a>
		<br><br>
		</section>
	</body>
	
</html>
