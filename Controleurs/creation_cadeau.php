<?php
	require_once '../Modeles/bd.php';
	$nom = $_POST['nom'];
	$descriptif = $_POST['descriptif'];
	$image = $_POST['image'];
	$lien = $_POST['lien'];
				
		if (empty($nom)||empty($descriptif)) {
			echo 'Nom ou descriptif non renseigné.';
		}
		else {
			if(!$co){
			echo 'Probleme de connexion avec la base de données';
			}
			else{

				$query = "INSERT INTO cadeau VALUES (NULL, '$nom', '$descriptif', '$image', '$lien', 1, 0, idMembre, idMembre_achete)";
				
				mysqli_query ($co, $query);
				if(!$co) die (mysqli_error());
					
				mysqli_close($co);
				echo 'Le cadeau a été créer';
				
				header('Location: ../Vues/consultation_des_cadeaux.php');
				
			}
		}		
?>	
