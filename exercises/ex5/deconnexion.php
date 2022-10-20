<?php
$nom = $_COOKIE['userNom'];
$prenom = $_COOKIE['userPrenom'];


setcookie('userEmail', $user['email'], [
    'httpOnly' => true,
    'secure' => true,
    'expires' => 1
]);

setcookie('userPrenom', $user['prenom'], [
    'httpOnly' => true,
    'secure' => true,
    'expires' => 1
]);

setcookie('userNom', $user['nom'], [
    'httpOnly' => true,
    'secure' => true,
    'expires' => 1
]);

unset($_COOKIE['userEmail']);
unset($_COOKIE['userNom']);
unset($_COOKIE['userPrenom']);



?>

<h1>A bientot <? echo ($nom . " " . $prenom); ?></h1>

<?php
header('Refresh: 1; URL=connexion.php');

?>