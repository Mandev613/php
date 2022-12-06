<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable en php et javascript</title>
</head>
<body>
<?php
$prenom="Ousmane";
$nom="SY";
$age=50;
define("PI",3.14);
//type d'une variable
// echo gettype($age); 
// modifier le type de variable
is_int($age);
// supprimer une variable
// unset($prenom);    
// isset permet de verifier l'existance d'une variable
if ($age>=18) {
    echo "Vous etes majeur";
}else{
    echo "Vous etes mineur ";    
}
if (isset($prenom)) {
    echo"prenom:$prenom<br>";
}else{
    echo "variable innexistante <br>";
}
echo"Prenom:$prenom <br> Nom:$nom <br> Age:$age <br> Const: ".PI ;
// boucle for
for ($i=1; $i <=10 ; $i++) { 
    echo $i."-";
}

// boucle while
$i=1;
while ($i <= 10) {
    echo $i."*";
    $i++;
}

// strtoupper permet de changer un mot en maj
$chaine3="Je suis developpeur web";
echo"<br>".strtoupper("$chaine3");

// ucfirst met le premier lettre en maj
echo"<br>".ucwords("$chaine3");
?>
<script>
    let prenom= "Moussa";
    let nom= "SY";
    let age= 33;
    const PI= 3.14;
    document.write(` <br>   Prenom:${prenom} <br> Nom:${nom} <br> Age:${age} <br> PI:${PI} `)
</script>
</body>
</html>