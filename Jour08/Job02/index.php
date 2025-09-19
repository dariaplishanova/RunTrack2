<?php

$ret = null;
$nbvisits = 0;

if(isset($_COOKIE["nbvisites"])){  
    $nbvisits = $_COOKIE["nbvisites"];
    $nbvisits++;
    setcookie("nbvisites", $nbvisits);
} else setcookie("nbvisites",0 , time() + 3600);

if(isset($_GET['reset'])){
    $nbvisits = $_COOKIE["nbvisites"];
    $nbvisits = 0;
    setcookie("nbvisites", $nbvisits);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
echo $nbvisits;

?>

<form action="index.php" method="get">
    <button type="submit" name="reset">reset</button>
</form>