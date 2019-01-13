<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Création d'un groupe</title>
		<link rel="stylesheet" href="index.css">
	</head>
	
	<body>
		<h1>Spécifier le nom du groupe</h1>
		<form method="POST" action="../Controleurs/creation_groupe.php">
			<section>
			<p><input type="text" name="nom_groupe" placeholder="Nom du groupe" style='width:300px; text-align:center'></p>
			<p><input type="submit" value="Valider" style='width:200px; height:70px' class="valider"></p>
		</form>
	<?php require_once '../Modeles/bd.php';

		if(!$co){
			echo 'Probleme de connexion avec la base de données';
		}	
		else {
			$query = "SELECT * FROM groupe"; 		
			$resultat = mysqli_query ($co, $query);
			$row = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
			if(!$co) die (mysqli_error());		
			if (mysqli_num_rows($resultat) != 0){
			mysqli_close($co);
		?>
		<a href="affichage_groupe.php" target="_self"> <input type="button" value="Annuler" style='width:200px; height:70px' class="annuler"></a>
			<?php }
			else { ?>
			<a href="page_accueil.php" target="_self"> <input type="button" value="Annuler" style='width:200px; height:70px' class="annuler"></a>
			<?php }
		}			
		?>
		<br><br>
		</section>
	</body>
	
</html>
