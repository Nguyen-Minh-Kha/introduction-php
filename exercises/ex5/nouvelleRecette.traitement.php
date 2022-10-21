<?php
//data structure
// id
// title(text)
// description(text)
// image(varchar(255))
// difficulty(varchar(255))
// price(varchar(255))
// active(bool)
// author(varchar(255))
// likes (int(11))

$textFields = '/[a-zA-Zàâçéèêëîïôûùüÿñæœ .-]*[:)]*$/';
$charFields = '/[A-Za-z0-9\s€]+/';

if (
    isset($_POST['title']) &&
    isset($_POST['description']) &&
    isset($_POST['image']) &&
    isset($_POST['difficulty']) &&
    isset($_POST['price']) &&
    isset($_POST['author']) &&
    isset($_POST['likes'])
) {
    // echo $_POST['title'];
    // echo "</br>";
    // echo $_POST['description'];
    // echo "</br>";
    // echo $_POST['image'];
    // echo "</br>";
    // echo $_POST['difficulty'];
    // echo "</br>";
    // echo $_POST['price'];
    // echo "</br>";
    // echo $_POST['author'];
    // echo "</br>";
    // echo $_POST['likes'];

    $title = filter_var(
        $_POST['title'],
        FILTER_VALIDATE_REGEXP,
        ["options" => ["regexp" => $textFields]]
    );

    $description = filter_var(
        $_POST['description'],
        FILTER_VALIDATE_REGEXP,
        ["options" => ["regexp" => $textFields]]
    );

    if (strlen($_POST['image']) <= 255) {
        $image = filter_var($_POST['image'], FILTER_VALIDATE_URL);
    } else {
        $image = null;
    }

    if (strlen($_POST['difficulty']) <= 255) {
        $difficulty =
            filter_var(
                $_POST['difficulty'],
                FILTER_VALIDATE_REGEXP,
                ["options" => ["regexp" => $charFields]]
            );
    } else {
        $difficulty = null;
    }


    if (strlen($_POST['price']) <= 255) {
        $price =
            filter_var(
                $_POST['price'],
                FILTER_VALIDATE_REGEXP,
                ["options" => ["regexp" => $charFields]]
            );
    } else {
        $price = null;
    }

    if (strlen($_POST['author']) <= 255) {
        $author =
            filter_var(
                $_POST['author'],
                FILTER_VALIDATE_REGEXP,
                ["options" => ["regexp" => $charFields]]
            );
    } else {
        $author = null;
    }

    if (strlen($_POST['likes']) <= 255) {
        $likes =
            filter_var(
                $_POST['likes'],
                FILTER_VALIDATE_REGEXP,
                ["options" => ["regexp" => $charFields]]
            );
    } else {
        $likes = null;
    }

    $active = true;

    // echo $title;
    // echo "</br>";
    // echo $description;
    // echo "</br>";
    // echo $image;
    // echo "</br>";
    // echo $difficulty;
    // echo "</br>";
    // echo $price;
    // echo "</br>";
    // echo $author;
    // echo "</br>";
    // echo $likes;
    // echo "</br>";
    // echo $active;

    if ($title && $description && $image && $difficulty && $price && $author && $likes) {

        include('./includes/recettes.php');

        $id = addNewRecette($title, $description, $image, $difficulty, $price, $author, $likes, $active);

        if (isset($id)) {
?>
            <h1> recette ajouté avec succès</h1>
        <?
            header('Refresh: 1; URL=recette.php?id=' . $id);
        }
    } else {
        ?> <h1> false info entered </h1> <?
                                        }
                                    } else {
                                            ?> <h1> empty infos </h1> <?
                                                                    }
