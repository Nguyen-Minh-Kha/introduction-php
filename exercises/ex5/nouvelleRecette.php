<?php

if (
    array_key_exists('userNom', $_COOKIE) && !empty($_COOKIE['userNom'])
    && array_key_exists('userPrenom', $_COOKIE) && !empty($_COOKIE['userPrenom'])
    && array_key_exists('userEmail', $_COOKIE) && !empty($_COOKIE['userEmail'])
) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <?php $TITLE = "Nouvelle recette"; ?>

    <? include('./includes/head.php') ?>

    <body>

        <? include('./includes/navbar.php') ?>
        </br>

        <? include('./includes/recipeForm.php') ?>

        </br>
        <? include('./includes/footer.php') ?>

        <? include('./includes/bootstrapScript.php') ?>
    </body>

    </html>
<?php
} else {
?>
    <h1> Vous n'etes pas connecté </h1>
<?php
    header('Refresh: 1; URL=acceuil.php');
}

?>