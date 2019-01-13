<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Groupe</title>
		<link rel="stylesheet" href="index.css">
	</head>

	<body>
		<a href="page_accueil.php" class="bouton"><input type="button" value="Retour à l'accueil" style='width:140px; height:30px'></a>
		<?php require_once('../Modeles/bd.php');
		if (!$co)
		echo "Attention : pas de base de données";
		else {
	
		$query = "SELECT nomGroupe FROM groupe"; 
	
		$resultat = mysqli_query ($co, $query);
		$row = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
		}
		?>
		<h1><?php echo $row['nomGroupe']; ?></h1>
		
		<section>
		<br>
		<a href="invitation_membre.php" class="bouton"><input type="button" value="Inviter un membre" style='width:140px; height:30px'></a>
		<br><br>
		<a href="invitation_membre_inactif.php" class="bouton"><input type="button" value="Inviter un membre inactif" style='width:170px; height:30px'></a>
		<br>
		<form method="POST" action="???.php" class="bouton">
			<p><INPUT TYPE="submit" VALUE="Supprimer un membre" style='width:150px; height:30px'></p>
		</form>
		<a href="creation_groupe.php" class="bouton"><input type="button" value="Créer un autre groupe" style='width:160px; height:30px'></a>
		</section>
		<br>
		<section>
		<p>Liste des membres et cadeaux</p>
		<?php
	
		if (!$co)
		echo "Attention : pas de base de données";
		else {
	
		$query2 = "SELECT loginMembre FROM membre"; 
	
		$resultat2 = mysqli_query ($co, $query2);
		$row2 = mysqli_fetch_array($resultat2, MYSQLI_ASSOC);
		mysqli_close ($co);
		}
		?>
		<p><?php echo $row2['loginMembre']; ?> (vous)</p>
		</section>
	</body>

</html>
