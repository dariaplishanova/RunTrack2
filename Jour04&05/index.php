<?php
    $everything = glob("*", GLOB_ONLYDIR);
    echo "<ul>";
    foreach($everything as $folder)
    {
        echo "<li><a href='$folder'>$folder</li>";
    }
    echo "</ul>";
?>