<?php
//declaration tableau
// $tab=[]; || $tab=array()
// $tab["binetou","diop"];
//javascript tab.length
//la taille count($tab);
// $tab[0] la 
// tableau annonyme
$perso=[
    'prenom'=>'Bassirou',
    'nom'=>'Ba',
    'age'=>'5',
];
$tab=["moussa" ,"coumba","ousmane","fatou"];

$tabInt=[2,5,-1,10,-2];
echo count($tab);
echo "<br>".$tab[count($tab)-1];
//aray_shift($tab)renvoie le premier elelment
echo "<br>".array_shift($tab); 
echo "<pre>"; print_r($tab); echo "</pre>";
echo "<br>".$perso['prenom'];
echo "<br>".$perso['nom'];
echo "<br>".$perso['age'];
// print_r($tab);
// pour supprimer le dernier element "array_pop"
echo"<br>".array_pop($tab);
//array_keys:renvoie les cles d'un tableau
print_r(array_values($perso));
//t.sort pour trier un tableau
echo"<br>".print_r($tabInt)."<br>";
// affichage avec forEach
foreach($tabInt as $value){
    echo $value."&nbsp;&nbsp;";
}
// /t pour tabuler
// /n pour aller a la ligne
// ajouter un tableau

$tab[]="Diouf";
print_r($tab);


echo"</pre>";





?>