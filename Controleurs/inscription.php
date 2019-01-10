<?php
	include('../modeles/bd.php');

	$pseudo = $_POST['pseudo'];
	$mdp = $_POST['mdp'];
	$email = $_POST['email'];

	$connect = new bd();

	$membre = new membre();

	$membre.initNewMembre($co,$pseudo,$mdp,$email);

	header('Location: ../vues/formulaire_connexion.php');
?>
