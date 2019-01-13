<?php
	require_once '../Modeles/bd.php';
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$mdp = $_POST['motdepasse'];
	$mdp2 = $_POST['motdepasse2'];
				
	if ($mdp != $mdp2){
		echo 'Les mots de passe ne correspondent pas';
	}
	else{
		if (empty($nom)||empty($prenom)||empty($email)||empty($login)||empty($mdp)||empty($mdp2)) {
			echo 'Certains champs ne sont pas remplies';
		}
		else {
			if(!$co){
			echo 'Probleme de connexion avec la base de données';
			}
			else{

				$query = "INSERT INTO membre VALUES (NULL, '$nom', '$prenom', '$email', '$login', '$mdp')";
				
				mysqli_query ($co, $query);
				if(!$co) die (mysqli_error());
					
				mysqli_close($co);
				echo 'Le membre a été ajouté';
				
				header('Location: ../Vues/formulaire_connexion.php');
				
			}
		}	
	}	
?>	
