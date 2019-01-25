<?php

session_start();

function register($username,$password,$passwordHash){
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
$_SESSIO["passwordHash"] = $passwordHash;

}

if (isset($_POST) && isset($_POST["username"])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];


if($password == $confirmPassword ){

$passwordHash = password_hash($password,PASSWORD_DEFAULT);
register($username,$password,$passwordHash);
var_dump($passwordHash);
var_dump($_SESSION);
}

}
 ?>

<br / ><br / ><br / ><br / >

    <h1>Register</h1><br /><br />
    <form action="" method="post">

    <lable>Username</label>
    <input type="text" name="username" value="" />

    <lable> Password</label>
    <input type="password" name="password" />

    <lable>Confirm Password</label>
    <input type="password" name="confirm-password" />

    <button type="submit">Login</button>
    </form>
