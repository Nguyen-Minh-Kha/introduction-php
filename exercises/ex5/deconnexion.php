<?php

session_start();

session_destroy();

?>

<h1>A bientot <? echo ($_SESSION['nom'] . " " . $_SESSION['prenom']); ?></h1>

<?php
header('Refresh: 2; URL=connexion.php');

?>