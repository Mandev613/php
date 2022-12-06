<?php
$tab=[7,8,1,5,14,18,20,13,30,40];
$tab1=[];
$tab2=[];


for ($j=0; $j <count($tab) ; $j++) { 
    $cpt1=0;
  

    for ($i=1; $i <=$tab[$j]; $i++) { 
        if ($tab[$j]%$i ==0 && $tab[$j]<10 ) {
            $cpt1++;

        }
        
    }
    if ($cpt1==1 || $cpt1==2) {
        $tab1[]= $tab[$j];
    }
    
    if ($tab[$j]%2==0    && $tab[$j]>10) {
        $tab2[]=$tab[$j];
        
    }
}
// print_r($tab1);
// print_r($tab2);
echo"<u>Nombre premier</u>:";
foreach($tab1 as $value){
    echo $value."&nbsp;&nbsp;";
}
echo"<br>";
echo"<u>Nombre pair</u>:";

foreach($tab2 as $value){
    echo $value."&nbsp;&nbsp;";
}
?>