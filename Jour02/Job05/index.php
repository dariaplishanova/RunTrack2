<<<<<<< HEAD
<?php

function isPrime($nb){//variable for the prim number
    for($i=2; $i < $nb; $i++) {
        if($nb % $i===0) return false ;
    } 
    return true;
}

for($i=2; $i<= 1000; $i++) {
    if(isPrime($i)) echo "$i <br/>";
}

=======
<?php

function isPrime($nb){//variable for the prim number
    for($i=2; $i<$nb; $i++) {
        if($nb % $i===0) return false ;
    } 
    return true;
}

for($i=2; $i<= 1000; $i++) {
    if(isPrime($i)) echo "$i <br/>";
}

>>>>>>> 01877f106f98795d5da5aecaeb74593a191ac7e1
