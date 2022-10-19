<? include('recettes.php') ?>

<?php 
    function PrettyRecipe($tab) {
        $image = $tab['image'];
    ob_start(); ?>

<div class="container">
    <img src="<?php echo $image?>" />
    <div class="container__text">
        <h1><?php echo("Recette n° " . $tab['id'] . " ". $tab['intitulé']) ?></h1>
        <div class="container__text__star">
            <span> Difficulté </span>
            <?php
            for ($i = 0; $i < $tab['difficulte']; $i++) {
                echo '<span class="fa fa-star checked"></span>';
            }
            ?>
        </div>
        <p><?php echo($tab['description']) ?></p>
        <div class="container__text__timing">
            <div class="container__text__timing_time">
                <h2>Prix</h2>
                <p><?php echo($tab['prix']) ?></p>
            </div>
            <div class="container__text__timing_time">
                <h2>Likes</h2>
                <p><?php echo($tab['likes']) ?></p>
            </div>
            <div class="container__text__timing_time">
                <h2>Active</h2>
                <p> <?php
        if ($tab['active']) {
            echo ("oui");
        } else {
            echo ("non");
        }
        ?></p>
            </div>
        </div>
        <a href=<? echo("recette.php?id=".$tab['id'])?>>
            <button class=" btn">view recipe <i class="fa fa-arrow-right"></i></button>
        </a>

    </div>
</div>


<?php
    return ob_get_clean();
}

?>