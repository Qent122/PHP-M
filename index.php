<?php
include('includes/header.php');
include('includes/function.php');


?>
<main>
    <?php
    // $tableau = array();
    $tableau = [];
    $tableau = [true, 45, 'Terre', [45, 46, 47]];

    // debug($tableau);

    $tableau[] = 'Janvier';
    array_push($tableau, 'Voiture');
    array_push($tableau, 'Voiture 2', 'Tortue');

    // debug($tableau);
    // debug($tableau[2]);

    $notes = [12, 5, 16, 7];
    // moyenne($notes); //fonction qui affiche la moyenne


    $tab2 = array_merge($tableau, $notes); // Permet de fusionner les tableaux
    // debug($tab2);

    for ($i = 0; $i < count($notes); $i++) {
        // echo $notes[$i] . '<br>';
    }

    //=====================
    // Tableaux associatif
    //=====================


    $fruit = ['banane' => 'jaune', 'pomme' => 'rouge', 'kiwi' => 'vert'];

    // debug($fruit);
    // echo "La couleur de la pomme est $fruit[pomme]";
    // echo '<br>';
    // echo 'la longeur du tableau fruit est de : ' . sizeof($fruit);

    $age = [
        'Michel' => 34,
        'Lucie' => 12,
        'Mouloud' => 56
    ];

    $chaine = implode('-', $age);
    echo $chaine;
    $age2 = explode('-', $chaine);
    debug($age);

    $age['Paul'] = 33; //ajout d'un element dans un tableau
    $age['Lucie'] = 16; //modification tableau
    // debug($age);


    $html = "<ul>";

    foreach ($age as $key => $value) {
        $html .= "<li> $key  a  $value  ans</li>";
    }
    $html .= "</ul>";
    echo $html




    ?>
</main>


<?php
include('includes/footer.php');
