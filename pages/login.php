<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Se connecter</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<body>

	<div class="form">
		<h2>Connectez-vous</h2>
		<form action="../controllers/logincontrol.php" method="POST">
        	<div>
            	<label for="email">Adresse emeil</label> <br>
            	<input id="champ" type="email" name="email" placeholder="votre email">
        	</div>
        	<br>
        	<div>
            	<label for="email">Mot de passe</label><br>
            	<input id="champ" type="password" name="password" placeholder="Mot de passe">
        	</div>
        	<br>
       	 	<div>
            	<button id="btn2" type="submit">Se connecter</button>
        	</div>
    	</form>
    	<br>
    	<a href="register.php">Créer un compte, si vous n'en avez pas</a>
	</div>
	 

</body>
</html>