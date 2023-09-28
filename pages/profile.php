<?php
    include_once('../security/user.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body style="display: flex; flex-direction: column; align-items: center; text-align: center;">

    <h1><i class="bi bi-house-check"></i>&nbsp;&nbsp; Bienvenue <?php echo $user['name']; ?>, vous êtes chez vous !</h1>

    <div class="profile">
        <div class="userDet">
            <div class="userPic">
                <i class="bi bi-person-bounding-box"></i>
            </div>
            <div class="userId">
               <h2><i class="bi bi-emoji-smile"></i>&nbsp;&nbsp;<?php echo $user['name']; ?></h2>
                <p><i class="bi bi-envelope-check"></i>&nbsp;&nbsp;<?php echo $user['email']; ?></p> 
            </div>
        </div>

    <form action="../controllers/logoutcontrol.php" method="post">
        <button id="btn" type="submit">Se deconnecter</button>
    </form>

    </div>

</body>
</html>