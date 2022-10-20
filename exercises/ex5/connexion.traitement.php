<?php

session_start();

include('./includes/users.php');

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
    $user = null;

    if ($email) {
        include('./includes/users.php');
        foreach ($utilisateurs as $key => $value) {
            if ($email === $value['email'] && $password === $value['password']) {
                $user = $value;
            }
        }

        if (is_null($user)) {
?>
            <h1> User not found </h1>
        <?php
        } else {
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['email'] = $user['email'];
        ?>
            <h1> Bienvenue <? echo $user['nom'] ?>
                <? echo $user['prenom'] ?></h1>

<?php
            header('Refresh: 2; URL=acceuil.php');
        }
    } else {
        echo '<h1> false email </h1>';
    }
} else {
    echo '<h1> email or password not found </h1>';
}

?>