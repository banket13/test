<!-- (*) PHP1.1 - Loterie
Loterie
Enoncé
Nous avons décidé d'organiser une loterie virtuelle ! Pour cela nous devons développer un programme capable d'effectuer un tirage. Un tirage est une suite de 6 nombres distincts (pas de doublons) ordonnés de manière croissante, générés aléatoirement et compris entre 1 et 49.

Ce tirage sera ensuite affiché sur une page web. 



Conseils
Procéder par petites étapes et tester chaque étape au fur-et-à-mesure, par exemple :
 Commencer par générer 1 nombre aléatoire compris entre 1 et 49  (peut-être existe-t-il une fonction en PHP qui répond à ce besoin)   
 Générer ensuite 6 nombres aléatoires compris entre 1 et 49
 Trouver un moyen d'éviter les doublons
 Trier les 6 numéros
 Afficher le tirage dans le code HTML
Créer des fonctions
PHP permet bien sûr la création de fonctions !

Même lorsqu'il n'y a pas de répétition de code, il peut être intéressant de structurer son code en créant des fonctions pour l'organiser de manière logique ! Cela permettra également de le tester plus facilement ! -->

<!-- tirage aleatoire entre 1 et 49 -->
<?php
/*echo "salut";
$tab6 = [];
$alea = rand(1,49);

for($i=0 ; $i < 6 ; $i++){
    while ((in_array($alea, $tab6))== true){
        $alea = rand(1,49);
    }
    array_push($tab6,$alea);
}


//tri ordre croissant 
sort($tab6);
var_dump($tab6);*/

//correction:

const NUMBER_COUNT = 6;
const MIN_BOUND = 1;
const MAX_BOUND = 49;

function monTirage(){

$tirage = [];


while (count($tirage) < NUMBER_COUNT) {  // tant qu'on a pas 6 chiffres dans le tableau
    $nombreAlatoire = rand(MIN_BOUND,MAX_BOUND); // on génère un nb aleatoire entre 1 et 49
    if (!in_array($nombreAlatoire,$tirage)){ //si le nombre n'est pas dans le tab
        array_push($tirage, $nombreAlatoire);//alors on remplie le tab
    }
}
//trier tableau
sort($tirage);
return $tirage;
}
$tirage = monTirage ();
//affichage du tirage

// for ($i = 0 ; $i < count($tirage); $i++) {
//     echo $tirage[$i] . "<br>";
// }


//inclusion de la vue

include("index.phtml");
?>