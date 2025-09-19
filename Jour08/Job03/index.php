<?php
session_start();

if (isset($_GET['reset'])) {
    unset($_SESSION['list']);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

$list = [];

if (isset($_SESSION["list"])) {
    $list = $_SESSION["list"];
} else
    $_SESSION["list"] = [];

if (isset($_GET["name"])) {
    $name = $_GET["name"];
    $_SESSION["list"][] = $name;
}


?>

<form action="index.php" method="get">
    <input type="text" id="name" name="name">
    <button type="submit">send</button>
</form>

<form action="index.php" method="get">
    <button type="submit" name="reset">reset</button>
</form>

<h2>Liste des prénoms :</h2>
<ul>
    <?php
    if (!empty($_SESSION['list'])) {
        foreach ($_SESSION['list'] as $nom) {
            echo "<li>" . htmlspecialchars($nom) . "</li>";
        }
    } else {
        echo "<li>Aucun prénom enregistré</li>";
    }
    ?>
</ul>