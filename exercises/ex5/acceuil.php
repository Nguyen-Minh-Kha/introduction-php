<!DOCTYPE html>
<html lang="en">

<?php $TITLE = "Page acceuil"; ?>

<? include('./includes/head.php') ?>

<body>

    <? include('./includes/navbar.php') ?>
    </br>

    <? include('./includes/content.php') ?>

    <?php
    foreach ($recettes as $index => $recette) {
        echo PrettyRecipe($recette);
        echo "</br>";
    }
    ?>
    </br>
    <? include('./includes/footer.php') ?>

    <? include('./includes/bootstrapScript.php') ?>
</body>

</html>