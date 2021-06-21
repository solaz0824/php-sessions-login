<?php
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$emailDb = "aaa@a.com";
$passwordDb = "12345";
$passwordDbHash = password_hash($passwordDb, PASSWORD_DEFAULT);

if (password_verify($password, $passwordDbHash) && $email == $emailDb) {
    $_SESSION["email"] = $email;
    header("Location: ../panel.php");
} else {
    $_SESSION["loginError"] = "Wrong email or password";
    $loginError = $_SESSION["loginError"];
    header("Location: ../index.php");
}
