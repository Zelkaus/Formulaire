<?php


if (isset($_POST['submit'])){
    $userEmail = $_POST['Email'];
    $userPassword = $_POST['Password'];
    
    $user = 'zel';
    $passwordBdd = '0000';
    $Bdd = new PDO("mysql:host=localhost;dbname=formulaire", $user, $passwordBdd);

    $sqlQuery = "SELECT Password From user where Email = :Email";
    $insertUser = $Bdd->query($sqlQuery);

    $insertUser->execute([
        'Email' => $userEmail,
        'Password' => password_verify($userPassword),
    ]);

    header("Location: Accueil.html");
}