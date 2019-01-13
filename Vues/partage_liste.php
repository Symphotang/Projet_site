<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Consulter les cadeaux</title>
		<link rel="stylesheet" href="index.css">
		</head>

	<body>
		<h1>Veuillez sélectionner le groupe où la liste va être partagé.</h1>
		<section>
		<p>Liste des groupes</p>
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

		<form method="POST" action="consultation_des_cadeaux.php">
			<p><INPUT TYPE="submit" VALUE="Annuler"></p>
		</form>

		<form method="POST" action="consultation_des_cadeaux.php">
			<p><INPUT TYPE="submit" VALUE="Confirmer"></p>
		</form>
		</section>
	</body>

</html>
