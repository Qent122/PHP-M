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
// debug($user);

function notValue($data) // Fonction qui retourne le texte "Aucune valeur" quand la key n'a pas de value definie
{
    echo '<ul>';

    foreach ($data as $key => $value) {
        $rien = '"Aucune Information"';

        if ($value == NULL) {
            echo "<li>$key : $rien</li>";
        } else {
            echo "<li>$key : $value</li>";
        }
    }
    echo '</ul>';
}

// echo notValue($user);

//=======================================================
//Trouver le nombre maximal de ce tableau sans la fonction max()
//=======================================================

$number = [4, 15, 2, 145, 42, 5, 78, 12];
// debug($number);

function plusGrand($data) //Fonction qui retourne le plus grand nombre d'un tableau
{
    $my_var = $data[0];

    foreach ($data as $nb) {
        if ($nb > $my_var) {
            $my_var = $nb;
        }
    }
    return $my_var;
};
// echo ('max : ' . plusGrand($number));


//=======================================================

$users = file_get_contents("./data/user.json");
$user_array_all = json_decode($users, true);
$user_array = $user_array_all['results'];
// debug($user_array);

function searchInfo($data)
{
    echo "<div id='BG'><div id='container'>";
    foreach ($data as $user) {
        echo '<div class="card  l">' .
            '<figure><img src=' . $user['picture']['large'] . '></figure>' .
            "<p>" . $user["name"]["first"] . ' ' . $user["name"]["last"] . "</p>" .
            '<p>' . $user['email'] . '</p>' .
            "<p>" . $user["dob"]["age"] . " years old</p>" .
            "<p>" . $user["location"]["street"]["number"] . ' ' . $user["location"]["street"]["name"] . "</p>" . "<p>City : " . $user["location"]["city"] . "</p>" . "<p>State : " . $user["location"]["state"] . "</p>" . "<p>Country : " . $user["location"]["country"] . "</p>" .

            "<p>" . $user["phone"] . "</p>" .


            '</div>';
    }
    echo "</div></div>";
}


//=======================================================
/*
Travaller avec le fichier json persons.json dans le dossier Travaux
    Afficher le(a) deuxieme ami(e) de Raymond Jimenez dans un titre html <h3>
    Afficher la couleur des yeux de Ball Shaffer en gras html strong sous la forme d'une phrase : La couleur des yeux de Ball Shaffer est :
    Afficher dans une balise html article dans l'ordre suivant :
        image de la personne dans une balise html img
        Nom : le nom de la personne
        Age: age de la personne
        Couleur des yeux : la couleur des yeux de la personne
        Email: email de la personne
        Age: age de la personne
        Fruit favori : fruit favori de la personne
        Si isActive est à true : afficher ACTIF
        Tags : afficher tous les tags de la personne séparé d'une virgule
        Ne pas afficher la derniere la deniere virgule de tous les tags
        Chaque personne sera séparé d'une ligne horizontale html <hr>
Vous trouverez une capture du resultat attendu.
*/
//=======================================================
