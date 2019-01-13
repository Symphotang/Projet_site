<?php
	require_once '../Modeles/bd.php';

	$nom_groupe = ($_POST['nom_groupe']);

	if (empty($nom_groupe)) {
		echo 'Certains champs ne sont pas remplies';
	}
	else {
		if(!$co){
			echo 'Probleme de connexion avec la base de données';
		}	
		else {
			$query = "INSERT INTO groupe VALUES (NULL, '$nom_groupe', idMembre)";		
			mysqli_query ($co, $query);
			if(!$co) die (mysqli_error());		
			mysqli_close($co);
			echo 'Le groupe a été créer';		
			header('Location: ../Vues/affichage_groupe.php');
		}
	}
?>
