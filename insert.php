<?php

//Réaliser le code php qui permet, grace à PDO, d'intégrer le tableau ci-dessous en base
// de données.


$vinyls = [
    [
        'title' => 'Led Zepplin',
        'cover' => 'https://m.media-amazon.com/images/I/81tDqtyx7yL._AC_SY355_.jpg',
        'artist' => 'Led Zepplin',
        'genre' => 'Rock',
    ],

    [
        'title' => 'Temps mort',
        'cover' => 'https://static.fnac-static.com/multimedia/Images/FR/NR/f0/df/33/3399664/1540-1/tsp20170120102315/Temps-mort.jpg',
        'artist' => 'Booba',
        'genre' => 'Rap',
    ],

    [
        'title' => 'Baby Driver',
        'cover' => 'https://m.media-amazon.com/images/I/71Nu1BhoHkL._SY355_.jpg',
        'artist' => 'Divers',
        'genre' => 'BO de film',
    ],

    [
        'title' => 'Chopin - masterpieces',
        'cover' => 'https://i.discogs.com/TCSgeVBRVYgfsNxqQKcoNU43JxBqWUeVMRuWBuMONE0/rs:fit/g:sm/q:40/h:300/w:300/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTExNDkx/MDAzLTE1ODU1NjAx/ODMtMzc3OC5qcGVn.jpeg',
        'artist' => 'Chopin',
        'genre' => 'Classique',
    ],

    [
        'title' => 'Oui Oui et le cadeau surprise',
        'cover' => 'https://static.fnac-static.com/multimedia/images_produits/ZoomPE/1/2/1/3436949536121/tsp20130828214240/Oui-Oui-et-le-cadeau-surprise.jpg',
        'artist' => 'Divers',
        'genre' => 'Classique',
    ],
];

require_once 'function.php';


foreach ($vinyls as $vinyl){
    
    var_dump($vinyl);

    addVinyl($vinyl);

}