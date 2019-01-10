<?php
	require_once '../Modeles/bd.php';
			if(!$co){
				echo'probleme de connexion avec la base de donnee';
			}
			else{

				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$email = $_POST['email'];
				$login = $_POST['login'];
				$mdp = $_POST['motdepasse'];
				$mdp2 = $_POST['motdepasse2'];
				
				if (empty($nom)||empty($prenom)||empty($email)||empty($login)||empty($mdp)||empty($mdp2)) {
					echo 'Certains champs ne sont pas remplies';
				}
				else{
					header('Location: ../Vues/formulaire_connexion.php');
				}
			}
?>
