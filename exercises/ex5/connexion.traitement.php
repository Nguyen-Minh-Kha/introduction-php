<?php

include('./includes/users.php');

$email = $_POST['email'];
$password = $_POST['password'];
$user = array();

foreach ($utilisateurs as $key => $value) {
    if ($email == $value['email'] && $password == $value['password']) {
        $user = $value;
    }
}

if (is_null($user)) {
?>
    <h1> User not found </h1>
<?php
} else {
?>
    <h1> Bienvenue <? echo $user['nom'] ?>
        <? echo $user['prenom'] ?></h1>

<?php
}


?>