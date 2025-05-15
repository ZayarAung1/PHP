<?php
session_start();
if (!isset ($_SESSION['login'])){
    header("location: login_form.php");
    exit();
} else {
    $username = $_SESSION['username'];
    $email = $_SESSION ['email'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h2
    , initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h2>Profile</h2>
    <p>Username: <?= $username ?> </p>
    <p>email: <?= $email ?> </p> 
    <p>Your logined!</p>
</body>
</html>


