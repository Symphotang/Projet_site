<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Consulter les groupes</title>
		<link rel="stylesheet" href="index.css">
	</head>

	<body>
		<h1>Liste des groupes</h1>
		
		<section>
		<?php require_once('../Modeles/bd.php');
		if (!$co)
		echo "Attention : pas de base de données";
		else {
	
		$query = "SELECT nomGroupe FROM groupe"; 
	
		$resultat = mysqli_query ($co, $query);
		$row = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
		}
		?>
		<p><?php echo $row['nomGroupe']; ?></p>

		<form method="POST" action="page_accueil.php">
			<p><INPUT TYPE="submit" VALUE="Retour à l'accueil"></p>
		</form>
		</section>
	</body>

</html>
