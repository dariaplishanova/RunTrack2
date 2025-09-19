
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>

<form action="index.php" method="get" name="myForm">
  <label for="name">First name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="lastname">Last name:</label>
  <input type="text" id="lastname" name="lastname"><br><br>
  <button type="submit">Send</button>
</form>

    
</body>
</html>

<?php
if (!empty($_GET['name']) && !empty($_GET['lastname']) ) {
    echo "Le nombre d’argument GET envoyé est :" .count($_GET);
}
?>
