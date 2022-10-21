<?php

// echo $_POST['nom'];
// echo $_POST['prenom'];
// echo $_POST['email'];
// echo $_POST['password'];
// echo $_POST['image'];
// // echo $_POST['sexe'];
// echo $_POST['date'];

$namefields = '/[a-zA-Z\s]+/'; // alpha or spaces, at least 1 char
$passwordfield = "/.*[A-Za-z\d][^A-Za-z\d]*$/"; // check password 

//check date
function validateDate($date)
{
    $dt = DateTime::createFromFormat("Y-m-d", $date);
    return $dt !== false && !array_sum($dt::getLastErrors());
}

if (
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['image']) &&
    isset($_POST['sexe']) &&
    isset($_POST['date'])
) {
    // check validate email
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    // check correct lastname
    if (strlen($_POST['nom']) <= 255) {
        $lastname = filter_var(
            $_POST['nom'],
            FILTER_VALIDATE_REGEXP,
            ["options" => ["regexp" => $namefields]]
        );
    } else {
        $lastname = null;
    }

    // check firstname
    if (strlen($_POST['prenom']) <= 255) {
        $firstname =
            filter_var(
                $_POST['prenom'],
                FILTER_VALIDATE_REGEXP,
                ["options" => ["regexp" => $namefields]]
            );
    } else {
        $firstname = null;
    }

    // check password
    if (strlen($_POST['password']) <= 255) {
        $password =
            filter_var(
                $_POST['password'],
                FILTER_VALIDATE_REGEXP,
                ["options" => ["regexp" => $passwordfield]]
            );
    } else {
        $password = null;
    }

    //check imageUrl
    if (strlen($_POST['image']) <= 255) {
        $imageUrl = filter_var($_POST['image'], FILTER_VALIDATE_URL);
    } else {
        $imageUrl = null;
    }

    //check sexe
    if (strlen($_POST['sexe']) <= 255) {
        $sexe =
            filter_var(
                $_POST['sexe'],
                FILTER_VALIDATE_REGEXP,
                ["options" => ["regexp" => $namefields]]
            );
    } else {
        $sexe = null;
    }

    //check bday
    if (validateDate($_POST['date'])) {
        $birthdate = $_POST['date'];
    };

    // test Abc1234567
    // https://upload.wikimedia.org/wikipedia/en/thumb/c/c5/Bob_the_builder.jpg/220px-Bob_the_builder.jpg

    // echo $lastname;
    // echo "</br>";
    // echo $firstname;
    // echo "</br>";
    // echo $email;
    // echo "</br>";
    // echo $password;
    // echo "</br>";
    // echo $imageUrl;
    // echo "</br>";
    // echo $sexe;
    // echo "</br>";
    // echo $birthdate;

    if ($email && $lastname && $firstname && $password && $sexe && $birthdate) {

        include('./includes/users.php');

        $user = addNewUser($firstname, $lastname, $email, $imageUrl, $password, $sexe, $birthdate);
?>

        <h1> Bienvenue <? echo $user['lastname'] ?>
            <? echo $user['firstname'] ?></h1>

<?
        // echo $password;
        header('Refresh: 1; URL=connexion.php');
    } else {
        echo '<h1> Some information entered is false</h1>';
        // echo $password;
    }
} else {
    echo '<h1> Some information is missing</h1>';
}
