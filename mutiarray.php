<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muti Array</title>
</head>
<body>
    <?php
    $students = [
        ["name" => "Alice", "age" => "20", "grade" => "18"],
        ["name" => "Alice", "age" => "20", "grade" => "18"],
        ["name" => "Alice", "age" => "20", "grade" => "18"],
        ["name" => "Alice", "age" => "20", "grade" => "18"],
        ["name" => "Alice", "age" => "20", "grade" => "18"]
    ];
    ?>

    <table cellpadding="5" border = "1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
        </tr>
    <?php foreach ($students as $students): ?>

    <tr>
        <td><?= $students['name']?></td>
        <td><?= $students['age']?></td>
        <td><?= $students['grade']?></td>
    </tr>

    <?php endforeach; ?>

    </table>

</body>
</html>