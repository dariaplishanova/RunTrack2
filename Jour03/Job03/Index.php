<?php
$str = "I'm sorry Dave I'm afraid I can't do that";

function isVowel($char) {
    $vowels = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U","Y"];
    $i = 0;

    while (isset($vowels[$i])) {
        if ($char === $vowels[$i]) return true;
        $i++;
    }
    return false;
}

function displayVowel($vowels, $str) {
    for ($i=0; isset($str[$i]); $i++) {
            if(isVowel($str[$i])) echo $str[$i];
    }
} 

displayVowel($vowels, $str);



// $str = "I'm sorry Dave I'm afraid I can't do that";
// $vowels = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
// $str = str_replace($vowels, "", $str);
// echo $str;



// function extractVowels($str, $vowels) {
//     $resultat = " ";
//     $i=0;

//      while (isset($str[$i])) {
//         $resultat.= $str[$i];
//         $i++;
//     }
//     return $i;
// }


// extractVowels($str, $vowels);

// for($i=0; $i < strlen($str); $i++){
    //     if(ft_in_array($str[$i], $vowels)){
        //         $resultat.= $str[$i];
        //     }
        // }
        // echo $resultat
        