<?php
$fullName = 'Daria Plishanova';
$age = 21;
$booleanVar = true;
$floatVar = 2.15;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Name</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>boolean</td>
                <td>bool</td>
                <td><?php echo $booleanVar;?></td>
            </tr>
            <tr>
                <td>integer</td>
                <td>age</td>
                <td><?php echo $age;?></td>
            </tr>
            <tr>
                <td>string</td>
                <td>fullName</td>
                <td><?php echo htmlspecialchars($fullName);?></td>
            </tr>
            
    </tbody>
</body>
</html>