<?php
	include('bd.php');
	
	class membre{
		private $id;
		private $pseudo;
		private $mdp;
		private $email;
	
		function initNewMembre($co,$pseudo,$mdp,$email){
			$this->pseudo = $pseudo;
			$this->mdp = $mdp;
			$this->email = $email;
			mysql_select_db('espace_membres',$co);
			$request = "INSERT INTO membres(pseudo,mdpasse,email) VALUES('$pseudo', '$mdp', '$email')";
			return mysql_query($request);
		}
		
		function initMembre($co,$pseudo,$mdp){
			$this->pseudo = $pseudo;
			$this->mdp = $mdp;
		}
		
		function modif_mdepasse(String $newMdp){
			return $this->mdp = $newMdp;
		}
	}
?>
