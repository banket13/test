<?php 

$maVariable = "Salut !";
$premierNombre = 10;
$deuxiemeNombre = 2;


// Déterminer deux nombre entiers representés par deux variables premierNombre et deuxièmeNombre
// Afficher sur la page le résultat de l'addition, la soustraction, la division, la multiplication
$prenoms = ["thomas", "marie", "zoé", "arthur"];

echo $maVariable;

echo $premierNombre + $deuxiemeNombre;
echo "<br>";
echo $premierNombre - $deuxiemeNombre;
echo "<br>";
echo $premierNombre / $deuxiemeNombre;
echo "<br>";
echo $premierNombre * $deuxiemeNombre;
echo "<br>";

//afficher le deuxieme prenom du tableau

echo $prenoms[1];

//afficher tous lesprenoms sur la page

echo $prenoms[0];
echo $prenoms[1];
echo $prenoms[2];
echo $prenoms[3];

// refaire la meme chose a l'aide d'une boucle "for"

for ($i=0; $i < sizeof($prenoms) ; $i++) { 
    echo $prenoms[$i];
    echo "<br>";        // ou  echo ($prenoms[i], "<br>")
}
// ou avec count()
echo "<br>";
for ($i=0; $i < count($prenoms); $i++) { 
    echo $prenoms[$i] . "<br>";
}


//rajouter un prenom au tableau

array_push($prenoms, "yves");
var_dump($prenoms);  //le console.log du php
echo $prenoms[4];


//savoir si dans le tableau il y a le prenom Marie

$test =in_array("marie", $prenoms);
var_dump($test);

$test =in_array("jules", $prenoms);
var_dump($test);

?>