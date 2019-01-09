<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="inscription.css">
</head>
<body>

<div class="illustration">
	<div class="i-small"></div>
</div>

<div class="illustration2">
	<div class="i-small"></div>
</div>

<h1>Inscription à l'application</h1>

<form method="POST" action="formulaire_connexion.php">
<p><input type="text" name="nom" placeholder="Votre nom" style='width:250px'></p>
<p><input type="text" name="prenom" placeholder="Votre prénom" style='width:250px'></p>
<p><input type="text" name="email" placeholder="Votre e-mail" style='width:250px'></p>
<p><input type="text" name="login" placeholder="Votre login" style='width:250px'></p>
<p><input type="text" name="motdepasse" placeholder="Votre mot de passe" style='width:250px'></p>
<p><input type="text" name="motdepasse2" placeholder="Répétez votre mot de passe" style='width:250px'></p>

<div class="bouton">
<p><INPUT TYPE="submit" VALUE="Annuler" style='width:170px; height:50px'> <INPUT TYPE="submit" name="inscription" VALUE="Inscription" style='width:170px; height:50px'></p>
</div>

<img class="image" src="images/bienvenue.gif" alt="Cadeau" height="200" width="800"/>

</form>
</body>
</html>

