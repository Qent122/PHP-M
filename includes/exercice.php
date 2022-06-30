<?php
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

echo (pair($tab));
