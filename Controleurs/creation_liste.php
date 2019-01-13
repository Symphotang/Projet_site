<?php
	require_once '../Modeles/bd.php';

	$nom_liste = ($_POST['nom_liste']);

	if (empty($nom_liste)) {
		echo 'Certains champs ne sont pas remplies';
	}
	else {
		if(!$co){
			echo 'Probleme de connexion avec la base de données';
		}	
		else {
			$query = "INSERT INTO listecadeaux VALUES (IdListe, '$nom_liste', idMembre, idGroupe)";		
			mysqli_query ($co, $query);
			if(!$co) die (mysqli_error());		
			mysqli_close($co);
			echo 'La liste a été créer';		
			header('Location: ../Vues/consultation_des_cadeaux.php');
		}
	}
?>
