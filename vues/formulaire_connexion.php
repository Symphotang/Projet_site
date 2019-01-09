<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="formulaire_connexion.css">
</head>
<body>

<div class="illustration">
	<div class="i-small"></div>
</div>

<div class="illustration2">
	<div class="i-small"></div>
</div>

<h1>Bienvenue sur la page de connexion !</h1>

<div class="centrer">
<img class="image" src="images/cadeau.jpg" alt="Cadeau" height="477" width="999"/>
</div>

<form method="POST" action="page_accueil.php">
<p><input type="text" name="login" placeholder="login"></p>

<p><input type="text" name="mdp" placeholder="mot de passe"></p>
<p></p>
<INPUT TYPE="submit" NAME="connecter" VALUE="Se connecter">
</form>

<p>Pas encore inscrit ? Crée toi un compte !
<a href="inscription.php" target="_self" class="bouton"> <input type="button" value="Créer un compte" style='width:150px; height:30px'></a>
</p>


</body>
</html>

