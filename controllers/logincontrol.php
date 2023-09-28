<?php
    ini_set('display_errors', '0');

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        // 
        if(isset($_POST['email']) and isset($_POST['password'])) {
            // execter login
            require_once('../security/auth.php');

            $user = login($_POST['email'], $_POST['password']);
            if($user != null) {
                // success
                header('Location: ../pages/profile.php');
            } else {
                header('Location: ../security/noconnect.php');
            }
        } else {
            echo  'remplir tout les champs';
        }
    } else {
        echo "error";
    }

?>