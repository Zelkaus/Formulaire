<?php


if (isset($_POST['submit'])){
    $userEmail = $_POST['Email'];
    $userPassword = $_POST['Password'];
    
    $user = 'zel';
    $passwordBdd = '0000';
    $Bdd = new PDO("mysql:host=localhost;dbname=formulaire", $user, $passwordBdd);

    $sqlQuery = "INSERT INTO user (Email, Password) VALUES (:Email, :Password)";
    $insertUser = $Bdd->prepare($sqlQuery);

    $insertUser->execute([
        'Email' => $userEmail,
        'Password' => password_hash($userPassword, PASSWORD_DEFAULT),
    ]);

    header("Location: Connexion.html");
}

 