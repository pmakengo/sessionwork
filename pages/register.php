<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S'enregistrer</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
<body>


        <div class="form">
            <h2>S'enregistrer</h2>
            <form action="../controllers/registercontrol.php" method="POST">
                <div>
                    <label for="email">Nom complet</label><br>
                    <input id="champ" type="text" name="name" placeholder="nom complet">
                </div>
                <br>
                <div>
                    <label for="email">Adresse email</label><br>
                    <input id="champ" type="email" name="email" placeholder="email">
                </div>
                <br>
                <div>
                    <label for="email">Mot de passe</label><br>
                    <input id="champ" type="password" name="password" placeholder="mot de passe">
                </div>
                <br>
                <div>
                    <button id="btn2" type="submit">S'enregistrer</button>
                </div>
            </form>
            <br>
                <a href="login.php">Vous avez séjà un compte ? Connectez-vous</a>
        </div>
</body>
</html>






