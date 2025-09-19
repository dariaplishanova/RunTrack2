<?php

session_start(); // to start the session system. allows to use $_SESSION to store data linked to this user's visit.

if (isset($_POST['reset'])) { // check if the form was submitted with a button named 'reset'. this is how to detect user action via POST.
    $_SESSION['nbvisite'] = 0; //  reset the visit counter to 0. it's like saying "forget previous visits."
    header('Location: ' . $_SERVER['PHP_SELF']); // redirect the user to the same page, which clears the POST request (good for refreshing without repeating actions).
    exit; // stop the script here. nothing after this line runs. prevents double-counting or unwanted behavior after redirect.
}

if (!isset($_SESSION['nbvisite'])) { // check if the visit counter exists in the session. if it's missing, it's the user's first visit.
    $_SESSION['nbvisite'] = 0; // initialize the counter at 0 for this first-time visitor.
} else {
    $_SESSION['nbvisite']++; // if the counter does exist, increase it by 1 — each time the page reloads, the count goes up!
}




?>

<!DOCTYPE html>
<html lang="en">

 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <form action="index.php" method="post">
            <p><?php echo "Mes cheres visiteurs : le Nombre de visites : " . $_SESSION['nbvisite']; ?></p>
            <button type="submit" name="reset">Reset </button>
        </form>
    </div>

</body>

</html>