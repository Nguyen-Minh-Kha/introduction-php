<?php
// $utilisateurs = [
//     [
//         'id' => 1,
//         'email' => 'user1@mail.com',
//         'password' => 'user1',
//         'nom' => 'Dupont',
//         'prenom' => 'Jean',
//     ],
//     [
//         'id' => 2,
//         'email' => 'john@mail.com',
//         'password' => 'john.doe',
//         'nom' => 'Doe',
//         'prenom' => 'John',
//     ],
//     [
//         'id' => 3,
//         'email' => 'jane@mail.com',
//         'password' => 'jane.doe',
//         'nom' => 'Doe',
//         'prenom' => 'Jane',
//     ],
// ];


// fetchAllUsers 

function fetchAllUsers()
{
    $connection = new PDO(
        'mysql:host=localhost;dbname=cookme;charset=utf8',
        'root',
        'root',
    );

    $requete = $connection->prepare('SELECT * FROM users');

    $requete->execute();

    $users = $requete->fetchAll();

    return $users;
}

//function fetchUserById

function fetchUserById($id)
{
    $connection = new PDO(
        'mysql:host=localhost;dbname=cookme;charset=utf8',
        'root',
        'root',
    );

    $requete = $connection->prepare('SELECT * FROM users WHERE id=' . $id);

    $requete->execute();

    $user = $requete->fetch();

    return $user;
}

// addNewUser(firstname, lastname, email, imageUrl, password, sexe, birthdate) -> add new user into DB and return this user

function addNewUser($firstname, $lastname, $email, $imageUrl, $password, $sexe, $birthdate)
{
    $connection = new PDO(
        'mysql:host=localhost;dbname=cookme;charset=utf8',
        'root',
        'root',
    );

    $request = $connection->prepare(<<<SQL
        INSERT INTO users (firstname, lastname, email, imageUrl, password, sexe, birthdate)
        VALUES (:firstname, :lastname, :email, :imageUrl, :password, :sexe, :birthdate)
    SQL);

    $request->execute([
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'imageUrl' => $imageUrl,
        'password' => $password,
        'sexe' => $sexe,
        'birthdate' => $birthdate,
    ]);

    $id = $connection->lastInsertID();

    $user = fetchUserById($id);

    return $user;
}

// foreach ($users as $user) {
//     echo '<h3>' . $user['email'] . '</h3>';
// }

// DB data 
// id 
// firstname 
// lastname 
// email 
// password 
// imageUrl 
// sexe 
// birthdate