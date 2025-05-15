<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
</head>
<body>
    <h1>Walcome to Dashboard Page</h1>
    


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
