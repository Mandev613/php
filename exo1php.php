<?php

// $n=parseInt(prompt("Entrer un nombre"));
$n=5;
$cpt=0;
$som=0;
$fact=$n;
for ($i=1; $i <$n; $i++) { 
    if ($n%$i ==0) {
        $cpt++;
        $som+=$i;
       
    }
    $fact*=$i;
}


if ($cpt==1 || $cpt==1) {
    echo$n ."est premier<br>";
}else{
    echo$n." n'est pas premier<br>";
    
}
if ($cpt==$n) {
    echo$n ."est parfait<br>";
}else{
    echo$n." n'est pas parfait<br>";
    
}
echo "le factoriel est:!".$fact;

?>