<?php
//=======================================================
/* 
- Créer un tableau php avec ses nombres : 
27, 15, 34, 379, 248, 5643, 81, 211, 999, 142,, 300, 572

- tester les nombres de ce tableau pour savoir si chaque 
nombre est pair ou impair (un nb est pair si le résultat de la division
par 2 est 0)

- Afficher les résultats sous forme de liste html 'ul' comme ceci 
(xx, yy sont les nombres du tableau) :

* xx : pair 
* yy : impair
...

*/
//=======================================================

$tab = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];

function pair($data) // fonction qui retourne les elements d'un tableau par nombre pair ou impaire sous forme de liste html.
{
    echo '<ul>';

    foreach ($data as $data) {
        if ($data % 2 === 0) {
            echo '<li>' . $data . ' :  pair </li>';
        } else {
            echo '<li>' . $data . ' :  impair </li>';
        }
    }
    echo '</ul>';
}

// echo (pair($tab));

//=======================================================
/* 
Parcourir le tableau user et pour toutes les entrées vide, mettre 
"Aucune Information"
*/
//=======================================================

$user = [
    "firstname" => 'Mike',
    "lastname" => 'Olganh',
    "pseudo" => '',
    "age" => '34',
    "food" => '',
    "sport" => '',
];
debug($user);

function notValue($data) // Fonction qui retourne le texte "Aucune valeur" quand la key n'a pas de value definie
{
    echo '<ul>';

    foreach ($data as $key => $value) {
        $rien = '"Aucune valeur"';

        if ($value == NULL) {
            echo "<li>$key : $rien</li>";
        } else {
            echo "<li>$key : $value</li>";
        }
    }
    echo '</ul>';
}

echo notValue($user);
