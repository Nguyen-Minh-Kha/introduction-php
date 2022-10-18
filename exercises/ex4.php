<!--
Créé un fichier 'exercice4.php" et placé le code
de l'exerice suivant :
Avec le tableaux suivant :
-->
<?php
$eleve = [
    'nom' => 'Doe',
    'prenom' => 'John',
    'age' => 18,
    'profPrincipal' => [
        'nom' => 'Doe',
        'prenom' => 'Jane',
        'matiere' => 'Français',
    ],
    'notes' => [16, 10, 12, 8, 7, 9],
    'classe' => 'Terminal',
]
?>
<!--
Afficher dans une balise h1 :
Fiche de l'éléve (nom) (prenom)
Afficher dans une balise h2 "Information sur (nom) (prenom)"
À la suite, en utilisant les balises html dd, dt, dl Afficher
l'age et la class de l'éléve
Afficher à la suite une balise h3 "Professeur principal"
À la suite, à l'aide des balises dd, dt, dl afficher
le nom, prenom et matiere du professeur principal.
Afficher ensuite dans une balise h2 "Notes"
À la suite, en utilisant une boucle et une balise ul,
afficher toutes les notes de l'éléve.
BONUS :
- Mettre la note en vert si au dessus de 15
- Mettre la note en orange si entre 10 et 15
- Mettre la note en rouge si en dessous de 10
Indice, vous pouvez créer et attacher une feuille de style css
de la même manière que en HTML :)
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
    echo '<h1>' . "Fiche de l'éléve " . $eleve['nom'] ." ". $eleve['prenom'] . '</h1>';
    echo '<dl>';
    echo '<dt>' . $eleve['age'] . '</dt>';
    echo '<dd>'. $eleve['classe'] .'</dd>';
    echo '</dl>';
    echo '<h3> Professeur principal </h3>';
    echo '<dl>';
    echo '<dt>' . $eleve['profPrincipal']['nom'] . " ". $eleve['profPrincipal']['prenom'] . '</dt>';
    echo '<dd>'. " matière " . $eleve['profPrincipal']['matiere'] .'</dd>'; 
    echo '</dl>';
    echo '<h2> Notes </h2>';
    echo '<ul>';
    foreach ($eleve['notes'] as $index => $note) {
        if($note >= 15){
            echo '<li style="color:green" > note '. $index . " : " . $note .'</li>';
        } else if ($note < 15 && $note >= 10){
            echo '<li style="color:orange" > note '. $index . " : " . $note .'</li>';
        } else {
            echo '<li style="color:red" > note '. $index . " : " . $note .'</li>';
        }
        
        
    }
    echo '</ul>';
    ?>
</body>

</html>