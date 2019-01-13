<?php
	require_once '../Modeles/bd.php';
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
				
		if (empty($nom)||empty($prenom)) {
			echo 'Certains champs ne sont pas remplies';
		}
		else {
			if(!$co){
			echo 'Probleme de connexion avec la base de données';
			}
			else{

				$query = "INSERT INTO membre VALUES (NULL, '$nom', '$prenom', '', '', '')";
				
				mysqli_query ($co, $query);
				if(!$co) die (mysqli_error());
					
				mysqli_close($co);
				echo 'Le membre a été ajouté';
				
				header('Location: ../Vues/affichage_groupe.php');
				
			}
		}		
?>	
