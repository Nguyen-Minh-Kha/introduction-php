<!DOCTYPE html>
<html lang="en">

<?php $TITLE = "Les plus populaire"; ?>
<? include('./includes/head.php') ?>

<body>

    <? include('./includes/navbar.php') ?>
    </br>
    <? include('./includes/content.php') ?>

    <?php 
        $popularity = array();

        foreach ($recettes as $key => $value){
            $popularity[$key] = $value['likes']; 
        }

        array_multisort($popularity, SORT_DESC , $recettes);

        foreach ($recettes as $index => $recette){
            echo PrettyRecipe($recette);
            echo "</br>";
    }
    ?>
    </br>
    <? include('./includes/footer.php') ?>

    <? include('./includes/bootstrapScript.php') ?>
</body>

</html>