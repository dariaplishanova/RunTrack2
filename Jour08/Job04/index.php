<?php
session_start();
// we need to give a conditions depending on a functional of our form, because we need to log in and log out

$name = $_COOKIE['name'] ?? null;

if (isset($_GET['logout'])) { // if get exists
    setcookie('name', '', time() - 3600);
    $name = null; // to delete a cookie whe we are logging out
    header('Location:' . $_SERVER['PHP_SELF']);  // to go back on a initial page with loggin form
    exit;
}

if (isset($_GET['name'])) {
    $name = $_GET['name']; // it's easier to use a cookie by giving it a varieble
    setcookie('name', $name, time() + 3600);  // we create a cookie for one hour
    header('Location:' . $_SERVER['PHP_SELF']);
    exit;
}

?>


<body>
    <!-- if its different to empty -->
    <?php if (isset($name)): ?>
        <p>Hello <?= $name ?></p>
        <form action='index.php' method='get'>
            <button type='submit' name='logout'>Logout</button>
        </form>
    <?php else: ?>
        <form action="index.php" method="get">
            <input type="text" name="name">
            <button type="submit">Login</button>
        </form>
    <?php endif; ?>
</body>