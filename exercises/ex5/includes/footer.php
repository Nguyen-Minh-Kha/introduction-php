<footer>
    <div class="footer_container">
        <ul class="ul_footer">
            <li><a href="acceuil.php">Accueil</a></li>
            <li><a href="popularity.php">Les Plus Populaire</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php

            if (
                array_key_exists('userNom', $_COOKIE) && !empty($_COOKIE['userNom'])
                && array_key_exists('userPrenom', $_COOKIE) && !empty($_COOKIE['userPrenom'])
                && array_key_exists('userEmail', $_COOKIE) && !empty($_COOKIE['userEmail'])
            ) {
            ?>
                <li><a href="nouvelleRecette.php">Nouvelle Recette</a></li>
                <li><a href="deconnexion.php">Deconnexion</a></li>
            <?php
            } else {
            ?>
                <li><a href="connexion.php">Connexion</a></li>
            <? } ?>
        </ul>
    </div>
</footer>