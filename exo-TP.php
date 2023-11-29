<?php
/* MOUANGA AARON */


function hello (){
    echo "hello world \n";
}
hello();

/* 

# Écrivez une fonction prenant un paramètre 'user'. 
# Cette fonction devrait retourner la chaîne de caractères 'Hello [user] 👋🏾', 
# où '[user]' est remplacé par la valeur du paramètre. 
# Ensuite, affichez le résultat suivi d'un saut de ligne.
*/

function parametre($user) {
    return 'hello' . " ".  $user . "\n";
}
$bonjour = parametre('user');
    echo $bonjour;

/* 
# Écrivez une fonction prenant deux paramètres, 'nb1' et 'nb2', 
# représentant des nombres. Cette fonction devrait additionner ces deux nombres 
# et retourner le résultat. 
# Ensuite, affichez le résultat suivi d'un saut de ligne.

*/

$nb1 = 10;
$nb2 = 2;
function addition($nb1, $nb2){
    $result = $nb1 + $nb2;
    return $result;
} 
echo addition(10, 2) . "\n";

/* 
# Écrire une fonction qui prend une chaîne de caractères en paramètre
# et retourne "vide" si la chaîne est vide sinon "non vide",
# Ensuite, affichez le résultat suivi d'un saut de ligne.
*/

function chaine($nom = 'aaron') {
    if($nom == 'aaron') {
        return "vide \n";
    } else  {
        return "non vide \n";
    }
    }
    echo chaine('aaron');

/* 
# Écrire une fonction qui prend deux nombres en paramètre
# et retourne le plus grand des deux.
# Ensuite, affichez le résultat suivi d'un saut de ligne.

*/

$nb3 = 8;
$nb4 = 5;
function nbparametre($nb3, $nb4) {
    return $nb3;
}
echo (8) . "\n";

/* 
# Écrire une fonction qui prend un nombre en paramètre
# et return "positif" si le nombre est positif, ou bien "négatif" si le nombre
# est negatif ou "nul" si le nombre est null.
# Ensuite, affichez le résultat suivi d'un saut de ligne.

*/

function posi($nbr = +10) {
    if($nbr == +10) {
        return "le nombre est positif \n";
    } 
    elseif($nbr == 00) {
        return "le nombre est null \n";
    
    } else {
        return "le nombre est negatif \n";
    }   
}   
echo posi(+10);

/* 
# Écrire une fonction qui prend une chaîne de caractères en paramètre
# et retourne "longue" si la longueur de la chaîne est supérieure à 10,
# sinon "courte".
# Ensuite, affichez le résultat suivi d'un saut de ligne.
*/

function Paral($longueur = 11) {
    if($longueur > 10) {
        return "longue \n";
    } else {
        return "courte \n";
    }  
} echo Paral(11);

/* 
# Créez une fonction qui affiche un message, par exemple 'Hello'. 
# Utilisez une boucle pour afficher le résultat de cette fonction 10 fois."

*/
$i = 0;
function message() {
    echo 'Hello';
} 
while($i <= 10){
    echo "Hello ($i) \n";
    $i++;
}

/* 
# Créez une fonction qui affiche un message, par exemple 'Hello'. 
# Utilisez une boucle pour afficher le résultat de cette fonction 10 fois.
# Ajoutez trois underscores avant et après le cinquième message.
*/
function Messag() {
    return "Hello";
}

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        echo "___" . Messag() . "___\n";
    } else {
        echo Messag() . "\n";
    }
}

/* 
# Créez une fonction qui affiche un message qui return la date du jours
# (d/m/y) Puis affichez le résultat suivi d'un saut de ligne.
*/
function afficherDate(){
    $date = date("d/m/Y");
    echo "La date du jour est: " . $date . "\n";
}
afficherDate();

# Écrivez une fonction qui prend en paramètre un tableau. 
# Cette fonction doit afficher chaque élement du tableau Suivi d'un saut de ligne. 

# Ensuite, créez un tableau par exemple "$fruits" contenant au moins 5 noms 
# de fruits différents. Utilisez votre fonction avec le tableau "$fruits" 
# pour afficher la liste des fruits."




function Tableau($fruits) {
    echo 'Tableau ' . "\n" . $fruits . "\n";

}
Tableau('ananas' . "\n" . 'orange' . "\n" . 'pomme' . "\n" . 'raisin' . "\n" . 'citron' );

/* 
# Écrivez une fonction qui prend en paramètre une chaîne 
# de caractères et retourne cette chaîne inversée. 

# Utilisez la fonction avec une chaîne de texte de votre choix. 
# Ensuite, affichez le résultat suivi d'un saut de ligne.
 */

function invers($phrase = 'je vais bien aussi') {
    return 'aussi bien vais je' . "\n";
}
echo invers('je vais bien aussi');

/* 
# Créez une fonction qui prend en paramètre une lettre 
# Et une chaîne de caractères. La fonction doit retourner le nombre d'occurrences 
# De la lettre dans la chaîne, sans distinction de casse. 
# Utilisez la fonction avec une lettre et une chaîne de texte de votre choix. 
# Affichez le résultat dans le terminal.

*/

function lettre($A = 'je vais acheter 10 velos'){
    return '10' . "\n";
}
echo lettre();

















?>