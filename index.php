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
        echo $notes[$i] . '<br>';
    }


    ?>
</main>


<?php
include('includes/footer.php');
