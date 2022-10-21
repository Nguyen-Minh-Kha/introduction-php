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

$connection = new PDO(
    'mysql:host=localhost;dbname=cookme;charset=utf8',
    'root',
    'root',
);

$requete = $connection->prepare('SELECT * FROM users');

$requete->execute();

$users = $requete->fetchAll();

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