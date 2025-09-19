<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>

<form action="" method="post" name="myForm">
  <label for="name">First name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="lastname">Last name:</label>
  <input type="text" id="lastname" name="lastname"><br><br>
  <button type="submit">Send</button>
</form>

<style>
table, th, td {
  border:1px solid black;
}
</style>

<table style="width:40%"> 
    <tr>
        <th>Argument</th>
        <th>Valeur</th>
    </tr>
  <tr>
    <td>
        <?php 
        if (!empty($_POST['name'])) {
      echo "First Name";
        }
        ?>
    </td>
    <td>  <?php 
        if (!empty($_POST['lastname'])) {
      echo "Last Name";
        }
        ?>
        </td>
  </tr>
  <tr>
    <td>
        <?php 
    if (!empty($_POST['name'])) {
      echo $_POST['name'];
    }
    ?>
    </td>
    <td>
        <?php 
    if (!empty($_POST['lastname'])) {
      echo $_POST['lastname'];
    }
    ?>
    </td>
  </tr>
</table>
    
</body>
</html>