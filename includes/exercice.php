<?php
$tab = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];

function pair($data)
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
