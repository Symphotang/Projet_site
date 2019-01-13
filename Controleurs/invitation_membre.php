<?php
	require_once '../Modeles/bd.php';

	$email = ($_POST['email']);

	if (empty($email)) {
		echo 'Certains champs ne sont pas remplies';
	}
	else {
		if(!$co){
			echo 'Probleme de connexion avec la base de données';
		}	
		else {
			$query = "INSERT INTO invitation VALUES (NULL, idMembre, idGroupe)";		
			mysqli_query ($co, $query);
			if(!$co) die (mysqli_error());		
			mysqli_close($co);
			echo 'Invitation envoyé';		
			header('Location: ../Vues/affichage_groupe.php');
		}
	}	
?>	
