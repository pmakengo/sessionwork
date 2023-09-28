<?php
    ini_set('display_errors', '0');

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        // 
        if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['password'])) {
            // executer login
            require_once('../security/auth.php');

            $user = register($_POST['email'], $_POST['password'], $_POST['name']);
            if($user) {
                // success
                header('Location: ../security/valide.php');
            } else {
                header('Location: ../security/valide.php');
            }
        } else {
            echo  'remplir tout les champs';
        }
    } else {
        echo "error";
    }

?>