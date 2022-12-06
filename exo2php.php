<?php
$chaine="Je Suis Developpeur Web";
$cpt=0;
$cpl=0;
$chaine2= strtolower($chaine);

for ($i=0; $i <strlen($chaine2) ; $i++) { 
    if ($chaine2[$i]=='a'|| $chaine2[$i]=='o' || $chaine2[$i]=='i' || $chaine2[$i]=='e'|| $chaine2[$i]=='u'|| $chaine2[$i]=='y' ) {
         
            $cpt+=1;
            
            
        }else {
            if ($chaine2[$i]!=" ") {
                $cpl+=1;
            }
        }
    }
    // for ($i=0; $i < strlen($chaine); $i++) { 
    //     if ($chaine[$i]=='b' || $chaine[$i]=='c'|| $chaine[$i]=='d' || $chaine[$i]=='f' || $chaine[$i]=='g'|| $chaine[$i]=='h'
    //     || $chaine[$i]=='j' || $chaine[$i]=='k' || $chaine[$i]=='l' || $chaine[$i]=='m' || $chaine[$i]=='n' || $chaine[$i]=='p'
    //     || $chaine[$i]=='q' || $chaine[$i]=='r' || $chaine[$i]=='s' || $chaine[$i]=='t' || $chaine[$i]=='v' || $chaine[$i]=='w'
    //     || $chaine[$i]=='x' || $chaine[$i]=='y' || $chaine[$i]=='z'  ) {
            
    //         $cpl+=1;
            
    //     }
    // }
    
    
    // strtolower("$chaine");
        
        // echo" <br>".ucwords("$chaine");
        echo"$chaine";
        echo"<br>le nombre de voyelle  dans chaine est ".$cpt ." et le nombre de consonnes est" .$cpl;
    

?>