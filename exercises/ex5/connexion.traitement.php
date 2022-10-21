<?php
// setcookie('userEmail', "", [
//     'httpOnly' => true,
//     'secure' => true,
//     'expires' => time() + 90 * 24 * 3600
// ]);

// setcookie('userPrenom', "", [
//     'httpOnly' => true,
//     'secure' => true,
//     'expires' => time() + 90 * 24 * 3600
// ]);

// setcookie('userNom', "", [
//     'httpOnly' => true,
//     'secure' => true,
//     'expires' => time() + 90 * 24 * 3600
// ]);
?>

<?php

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
    $user = null;

    if ($email) {
        include('./includes/users.php');
        foreach ($users as $key => $value) {
            if ($email === $value['email'] && $password === $value['password']) {
                $user = $value;
            }
        }

        if (is_null($user)) {
?>
            <h1> User not found </h1>
        <?php
        } else {

            setcookie('userEmail', $user['email'], [
                'httpOnly' => true,
                'secure' => true,
                'expires' => time() + 24 * 3600
            ]);

            setcookie('userPrenom', $user['firstname'], [
                'httpOnly' => true,
                'secure' => true,
                'expires' => time() + 24 * 3600
            ]);

            setcookie('userNom', $user['lastname'], [
                'httpOnly' => true,
                'secure' => true,
                'expires' => time() + 24 * 3600
            ]);

        ?>
            <h1> Bienvenue <? echo $user['firstname'] ?>
                <? echo $user['lastname'] ?></h1>

<?php
            header('Refresh: 1; URL=acceuil.php');
        }
    } else {
        echo '<h1> false email </h1>';
    }
} else {
    echo '<h1> email or password not found </h1>';
}

?>