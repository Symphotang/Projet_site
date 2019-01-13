<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Groupe</title>
		<link rel="stylesheet" href="index.css">
	</head>

	<body>
		<h1>Envoyer un e-mail à la personne que vous souhaitez inviter !</h1>
		<section>
		<form method="POST" action="../controleurs/invitation_membre.php">
			<p><input type="text" name="email" placeholder="Email" style='width:250px'></p>
			<p><INPUT TYPE="submit" VALUE="Envoyer l'invitation"></p>
		</form>

		<form method="POST" action="affichage_groupe.php">
		<p><INPUT TYPE="submit" VALUE="Annuler"></p>
		</form>
		</section>
	</body>

</html>
