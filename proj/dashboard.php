<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: index.php");
    exit();
}

// theme setup
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
$bg = $theme == 'light' ? '#fff' : '#222';
$color = $theme == 'light' ? '#222' : '#fff';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
</head>
<body style="background-color: <?php echo $bg ?>; color: <?php echo $color ?>;">


    <h1>Walcome to Dashboard </h1><?php echo $_SESSION['username'] ?>
    <a href="logout.php">Logout</a>
    <a href="set_theme.php">Set Theme</a>
    
<!-- logout -->

<!-- Theme Switch   -->

<?php
 $students = [
    ["name" => "Alice",  "grade" => "18"],
    ["name" => "Alice",  "grade" => "15"],
    ["name" => "Alice", "grade" => "10"],
    ["name" => "Alice", "grade" => "18"],
    ["name" => "Alice", "grade" => "18"]
 ];

 ?>

 <table cellpadding="5" border = "1">
    <tr>
        <th>Name</th>
        <th>Grade</th>
    </tr>
    <?php foreach ($students as $students): ?>
    <tr>
        <td><?= $students['name']?></td>
        <td><?= $students['grade']?></td>
    </tr>
    <?php endforeach ?>
 </table>
    
</body>
</html>
