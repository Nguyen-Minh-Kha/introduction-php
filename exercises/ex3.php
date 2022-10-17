<!--
Dans un fichier "exercice3.php" ajouter le code
de l'exercice
Avec le tableaux suivant :
-->
<?php
$notes = [12, 8, 17, 3, 19, 6];
?>
<!--
Afficher dans une balise ul chaque note de l'éléve (en utilisant
une balise LI)
!indice! Une boucle est nescessaire
-->

<!--
Pour chaque notes de l'éléve, afficher
son numéro (1 pour la note 1, 2 pour la note 2 etc ...)
-->

<!--
Toujours en utilisant une balise ul et li, afficher uniquement
les notes au dessus ou égale à la moyenne !
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo '1ere question';
    echo '<ul>';
    foreach ($notes as $index => $note) {
        echo "<li> note élève $index : $note </li>";
        
    }
    echo '</ul>';


    echo '2e question';
    echo '<ul>';

    foreach ($notes as $index => $note) {
        if ($note >= 10){
            echo "<li> note élève $index : $note </li>";
        }
    }
    echo '</ul>';
    
    ?>
</body>

</html>