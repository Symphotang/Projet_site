<?php
	require_once('../Modeles/bd.php');
	
	$login = $_POST["login"];
	$mdp = $_POST["mdp"];
	
	if (!$co)
	echo "Attention : pas de compte";
	else {
	
	$query = "SELECT loginMembre, mdpMembre FROM membre WHERE loginMembre = '$login' AND mdpMembre = '$mdp'"; 
	
	$resultat = mysqli_query ($co, $query);
	$row = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
	
	if (mysqli_num_rows($resultat) != 0){
		mysqli_close($co);
		header('Location: ../Vues/page_accueil.php');
	}
	else header('Location: ../Vues/formulaire_connexion.php');
}
	
?>
