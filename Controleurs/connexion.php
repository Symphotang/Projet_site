<?php
	include('../Modeles/bd.php');
	
	$login = $_POST["login"];
	$mdp = $_POST["mdp"];
	
	mysqli_select_db('app_cadeau',$co);
	
	$request = "SELECT loginMembre, mdpMembre FROM membre WHERE loginMembre = $login AND mdpMembre = $mdp"; 
	
	if(mysqli_query($request!=NULL)){
		//initMembre($co,$pseudo,$mdp);
		connexion();
		header('Location: ../Vues/page_acceuil.php');
	}
	
	else{
		echo "pas de compte";
		//header('Location: ../Vues/formulaire_inscription.php');
	}
?>
