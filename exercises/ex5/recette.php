<?
/*
En reprenant le code du site de recette de cuisine,
dans la page recette.php, ajouter le code permettant
d'afficher une recette.
ATTENTION ! Vous devez impérativement tester et
valider l'identifiant passé en Query string
*/
?>
<? session_start(); ?>
<?php

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if ($id) {

        include('./includes/content.php');

?>

        <!DOCTYPE html>
        <html lang="en">
        <?php $TITLE = "Page de la recette n° " . $id - 1; ?>
        <? include('./includes/head.php') ?>

        <body>
            <? include('./includes/navbar.php') ?>
            </br>
            <? echo PrettyRecipe($recettes[$id - 1]) ?>
            </br>
            <? include('./includes/footer.php') ?>

            <? include('./includes/bootstrapScript.php') ?>

        </body>

        </html>

<?php

    } else {
        echo '<h1> false id </h1>';
    }
} else {
    echo '<h1> id not found </h1>';
}
?>