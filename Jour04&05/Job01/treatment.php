<?php
if (!empty($_GET['name']) && !empty($_GET['lastname']) ) {
echo "Le nombre d’argument GET envoyé est :" .count($_GET);
}