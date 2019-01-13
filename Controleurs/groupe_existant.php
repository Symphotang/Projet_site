<?php
	require_once '../Modeles/bd.php';
			if(!$co){
				echo'probleme de connexion avec la base de donnee';
			}
			else{

				$query = "SELECT * FROM groupe";
	
				$resultat = mysqli_query ($co, $query);
				$row = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
	
				if (mysqli_num_rows($resultat) != 0){
				//Groupe présent
				header('Location: ../Vues/affichage_groupe.php');
				}
				else{
					header('Location: ../Vues/creation_groupe.php');
				}
			}
?>
