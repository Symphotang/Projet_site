<?php
	class bd {
		private $host;
		private $user;
		private $bdd;
		private $passwd;
		private $co;
		
		public function _construct($bdd){
			$this -> host = "localhost"; // ou 127.0.0.1
			$this -> user = "";
			$this -> bdd = "app_cadeau";// le nom de votre base de données
			$this -> passwd = "";
		}
		
		
		public function connexion(){
			$this -> co = mysqli_connect ($this->host ,$this->user ,$this->passwd,$this->bdd) or die ("erreur de connexion");
			return $this->co;
		}
		
		public function deconnexion(){
			mysqli_close($this->co);
		}
	}
?>
