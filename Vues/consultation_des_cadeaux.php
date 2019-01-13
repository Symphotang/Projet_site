<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Consulter les cadeaux</title>
		<link rel="stylesheet" href="index.css">
	</head>

	<body>
		<h1>Liste des cadeaux...</h1>
		<section>
		<?php require_once('../Modeles/bd.php');
		if (!$co)
		echo "Attention : pas de base de données";
		else {
	
		$query = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 1"; 
		$resultat = mysqli_query ($co, $query);
		$row = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
		$query2 = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 2"; 
		$resultat2 = mysqli_query ($co, $query2);
		$row2 = mysqli_fetch_array($resultat2, MYSQLI_ASSOC);
		$query3 = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 3"; 
		$resultat3 = mysqli_query ($co, $query3);
		$row3 = mysqli_fetch_array($resultat3, MYSQLI_ASSOC);
		$query4 = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 4"; 
		$resultat4 = mysqli_query ($co, $query4);
		$row4 = mysqli_fetch_array($resultat4, MYSQLI_ASSOC);
		$query5 = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 5"; 
		$resultat5 = mysqli_query ($co, $query5);
		$row5 = mysqli_fetch_array($resultat5, MYSQLI_ASSOC);
		$query6 = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 6"; 
		$resultat6 = mysqli_query ($co, $query6);
		$row6 = mysqli_fetch_array($resultat6, MYSQLI_ASSOC);
		$query7 = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 7"; 
		$resultat7 = mysqli_query ($co, $query7);
		$row7 = mysqli_fetch_array($resultat7, MYSQLI_ASSOC);
		$query8 = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 8"; 
		$resultat8 = mysqli_query ($co, $query8);
		$row8 = mysqli_fetch_array($resultat8, MYSQLI_ASSOC);
		$query9 = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 9"; 
		$resultat9 = mysqli_query ($co, $query9);
		$row9 = mysqli_fetch_array($resultat9, MYSQLI_ASSOC);
		$query10 = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 10"; 
		$resultat10 = mysqli_query ($co, $query10);
		$row10 = mysqli_fetch_array($resultat10, MYSQLI_ASSOC);
		$query11 = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 11"; 
		$resultat11 = mysqli_query ($co, $query11);
		$row11 = mysqli_fetch_array($resultat11, MYSQLI_ASSOC);
		$query12 = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 12"; 
		$resultat12 = mysqli_query ($co, $query12);
		$row12 = mysqli_fetch_array($resultat12, MYSQLI_ASSOC);
		$query13 = "SELECT nomCadeau FROM cadeau WHERE idCadeau = 13"; 
		$resultat13 = mysqli_query ($co, $query13);
		$row13 = mysqli_fetch_array($resultat13, MYSQLI_ASSOC);
		}
		?>
		<p><?php echo $row['nomCadeau']; ?></p>
		<p><?php echo $row2['nomCadeau']; ?></p>
		<p><?php echo $row3['nomCadeau']; ?></p>
		<p><?php echo $row4['nomCadeau']; ?></p>
		<p><?php echo $row5['nomCadeau']; ?></p>
		<p><?php echo $row6['nomCadeau']; ?></p>
		<p><?php echo $row7['nomCadeau']; ?></p>
		<p><?php echo $row8['nomCadeau']; ?></p>
		<p><?php echo $row9['nomCadeau']; ?></p>
		<p><?php echo $row10['nomCadeau']; ?></p>
		<p><?php echo $row11['nomCadeau']; ?></p>
		<p><?php echo $row12['nomCadeau']; ?></p>
		<p><?php echo $row13['nomCadeau']; mysqli_close($co); ?></p>
		
		</section>
		<br>
		<section>
		<form method="POST" action="page_accueil.php">
			<p><INPUT TYPE="submit" VALUE="Retour à l'accueil" style='width:170px; height:30px'></p>
		</form>

		<form method="POST" action="creation_cadeau.php">
			<p><INPUT TYPE="submit" VALUE="Créer un cadeau" style='width:150px; height:30px'></p>
		</form>

		<form method="POST" action="creation_liste.php">
			<p><INPUT TYPE="submit" VALUE="Créer une liste" style='width:150px; height:30px'></p>
		</form>

		<form method="POST" action="???.php">
			<p><INPUT TYPE="submit" VALUE="Supprimer une liste/cadeau" style='width:200px; height:30px'></p>
		</form>

		<form method="POST" action="partage_liste.php">
			<p><INPUT TYPE="submit" VALUE="Partager une liste" style='width:150px; height:30px'></p>
		</form>
		</section>
	</body>

</html>
