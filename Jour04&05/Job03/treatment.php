<?php
if (!empty($_POST['name']) && !empty($_POST['lastname']) ) {
    echo "Le nombre d’argument POST envoyé est :" .count($_POST);
}
