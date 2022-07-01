<?php
include('includes/header.php');
include('includes/function.php');
include('includes/exercice.php');



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
    // echo $chaine;
    $age2 = explode('-', $chaine);
    // debug($age);

    $age['Paul'] = 33; //ajout d'un element dans un tableau
    $age['Lucie'] = 16; //modification tableau
    // debug($age);


    // $html = "<ul>";

    // foreach ($age as $key => $value) {
    //     $html .= "<li> $key  a  $value  ans</li>";
    // }
    // $html .= "</ul>";
    // echo $html;

    $planets = ["Terre", "Mars", "Pluton", "Uranus", "Mercure", "Saturne", "Venus"];
    // debug($planets);
    // asort($age); //tier les valeur en forme croissant
    // debug($age);

    // arsort($age); //tier les valeur en forme decroissant
    // debug($age);

    // ksort($age); //tier les key en forme croissant
    // debug($age);

    // krsort($age); //tier les key en forme decroissant
    // debug($age);

    // $tab = [
    //     'voiture' => 'BMW',
    //     'nombre' => [1, 6, 3, 8, 4, 9],
    //     'planete' => ['mars', 'venus']
    // ];
    // debug($tab['nombre'][0]);

    $tab = [];
    $tab[] = ['A', 'B', 'C'];
    $tab[] = ['S', 'U', 'V'];
    $tab[] = ['O', 'U', 'E', 'I'];

    // debug($tab);
    //Ecrire ESCCI
    // echo $tab[2][2] . $tab[1][0] . $tab[0][2] . $tab[0][2] . $tab[2][3];

    $produit = [
        ['nom' => 'chaussettes', 'prix' => 10],
        ['nom' => 'velo', 'prix' => 500],
        ['nom' => 'carotte', 'prix' => 2],
        ['nom' => 'boulon', 'prix' => 9],
    ];

    // debug($produit);

    $html = "<ul>";
    foreach ($produit as $produits) {
        $html .= '<li>' . $produits['nom'] . ' : ' . $produits['prix'] . '€' . '</li>'; //version Mehdi
    }
    $html .= "</ul>";

    // echo $html

    $peoples = [
        [
            'nom' => 'Mohamed',
            'prenom' => 'Rachid',
            'email' => 'momodu78@bled.rocma',
        ],
        [
            'nom' => 'Siste',
            'prenom' => 'Lara',
            'email' => 'lara@gouv.fr',
        ]
    ];

    // debug($peoples);
    // echo 'Le nom de Lara est ' . $peoples[1]['nom'];
    // $json_peoples = json_encode($peoples);
    // debug($json_peoples);

    $json_peoples = '[{
        "nom" : "Durand",
        "prenom" : "Marc",
        "age" : 23,
        "couleur":["rouge","vert","jaune"],
        "image":"https://ximg.es/64x64/000/fff"
    },{
        "nom" : "Vilko",
        "prenom" : "Anny",
        "age" : 45,
        "couleur":["rose","violet","bleu"],
        "image":"https://ximg.es/64x64/000/fff"
    }]';

    debug($json_peoples);


    $array_peoples_php = json_decode($json_peoples, true);

    debug($array_peoples_php);

    echo 'Image ajouter depuis php dans l\'html <figure><img src = ' . $array_peoples_php[1]['image'] . '></figure>';



    ?>
    <div class="json">
        <p>Image ajouter depuis l'html dans php</p>
        <figure><img src="<?php echo $array_peoples_php[1]['image']; ?>" alt=""></figure>
    </div>
</main>


<?php
include('includes/footer.php');
