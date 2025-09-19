<?php
function cesar($str, $offset = 2) {
    $tab = fn_str_splitt($str); // Break string into characters/entities
    $alphabet = [];

    // Create lowercase alphabet lookup
    for ($i = 0; $i < 26; $i++) {
        $alphabet[chr(ord('a') + $i)] = chr(ord('a') + ($i + $offset) % 26);
        $alphabet[chr(ord('A') + $i)] = chr(ord('A') + ($i + $offset) % 26);
    }

    $result = "";
    foreach ($tab as $char) {
        if (isset($alphabet[$char])) {
            $result .= $alphabet[$char];
        } else {
            $result .= $char;
        }
    }

    return $result;
}
