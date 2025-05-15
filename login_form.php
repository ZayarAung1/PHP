<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Form</title>
</head>
<body>
    <form action="login_form.php" method="post" align="center">
        <h2>Form Lesson</h2>
        <label for="username">Name</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br><br>
        <button type="submit">Login</button>
    </form>
    
</body>
</html>

<?php
    // collect area
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        $email = htmlspecialchars($_POST["email"]);

        //validate from data
        if ($username == "admin" && $email == "a@b.com" && $password == "123456") {
            //login success
            session_start();
            $_SESSION["login"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $email;
            header("location: profile.php");
            exit();
        } else {
            //login failed
            echo "Login failed";
        }
    }
    ?>