<?php
session_start();

if(isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] += 1;
}
else 
    $_SESSION['nbvisites'] = 0;

if(isset($_GET['reset'])){
    $_SESSION['nbvisites'] = 0;
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

echo $_SESSION['nbvisites'];


?>

<form action="index.php" method="get">
    <button type="submit" name="reset">reset</button>
</form>


