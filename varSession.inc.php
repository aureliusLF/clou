<?php
// Tableau des produits avec les données pour chaque produit
// $produits = [
//     ["image" => "assets/chardonnay1.jpeg", "nom" => "Louis Jadot", "ref" => "001", "prix" => "31,5€", "stock" => 15],
//     ["image" => "assets/chardonnay2.jpeg","nom" => "Chorey les Beaume", "ref" => "002", "prix" => "21,7€", "stock" => 20],
//     ["image" => "assets/chardonnay3.jpeg", "nom" => "Louis Latour", "ref" => "003", "prix" => "21,7€", "stock" => 25],
//     ["image" => "assets/chardonnay4.jpeg", "nom" => "Vougeot -2020", "ref" => "004", "prix" => "10,0€", "stock" => 30]
//   ];
$_SESSION['categorie'] = [
    'merlot' => [
        [
            "image" => "assets/merlot1.jpg",
            "nom" => "Chateau Cantin",
            "ref" => "001",
            "prix" => "31,5€",
            "stock" => 15
        ],
        [
            "image" => "assets/merlot2.jpeg",
            "nom" => "Chateau Sergent",
            "ref" => "002",
            "prix" => "21,7€",
            "stock" => 20
        ],
        [
            "image" => "assets/merlot3.jpeg",
            "nom" => "Chateau Petrus",
            "ref" => "003",
            "prix" => "21,7€",
            "stock" => 25
        ],
        [
            "image" => "assets/merlot4.jpeg",
            "nom" => "Rôche Mazet",
            "ref" => "004",
            "prix" => "10,0€",
            "stock" => 30
        ]
    ],

    'pinotnoir' => [
        [
            "image" => "assets/pinotnoir.jpeg",
            "nom" => "Pinot Noir Alsace",
            "ref" => "001",
            "prix" => "31,5€",
            "stock" => 15
        ],
        [
            "image" => "assets/pinotnoir2.jpeg",
            "nom" => "Sancerre",
            "ref" => "002",
            "prix" => "21,7€",
            "stock" => 20
        ],
        [
            "image" => "assets/pinotnoir3.jpeg",
            "nom" => "Faiveley",
            "ref" => "003",
            "prix" => "21,7€",
            "stock" => 25
        ],
        [
            "image" => "assets/pinotnoir4.jpeg",
            "nom" => "Couvent Jacobin",
            "ref" => "004",
            "prix" => "10,0€",
            "stock" => 30
        ]
    ],
    'chardonnay' => [
        [
            "image" => "assets/chardonnay1.jpeg",
            "nom" => "Louis Jadot",
            "ref" => "001",
            "prix" => "31,5€",
            "stock" => 15
        ],
        [
            "image" => "assets/chardonnay2.jpeg",
            "nom" => "Chorey les Beaume",
            "ref" => "002",
            "prix" => "21,7€",
            "stock" => 20
        ],
        [
            "image" => "assets/chardonnay3.jpeg",
            "nom" => "Louis Latour",
            "ref" => "003",
            "prix" => "21,7€",
            "stock" => 25
        ],
        [
            "image" => "assets/chardonnay4.jpeg",
            "nom" => "Vougeot -2020",
            "ref" => "004",
            "prix" => "10,0€",
            "stock" => 30
        ]
    ],
    'sauvignon' => [
        [
            "image" => "assets/sauvignon1.jpeg",
            "nom" => "Saint Bris",
            "ref" => "001",
            "prix" => "31,5€",
            "stock" => 15
        ],
        [
            "image" => "assets/sauvignon2.jpeg",
            "nom" => "Riffault Akméniné",
            "ref" => "002",
            "prix" => "21,7€",
            "stock" => 20
        ],
        [
            "image" => "assets/sauvignon3.jpeg",
            "nom" => "Uby n°3",
            "ref" => "003",
            "prix" => "21,7€",
            "stock" => 25
        ],
        [
            "image" => "assets/sauvignon4.jpeg",
            "nom" => "Domaine Horgelus",
            "ref" => "004",
            "prix" => "10,0€",
            "stock" => 30
        ]
    ],
    'sangiovese' => [
        [
            "image" => "assets/sangiovese.jpeg",
            "nom" => "Di Vitigliano",
            "ref" => "001",
            "prix" => "47€",
            "stock" => 15
        ],
        [
            "image" => "assets/sangiovese2.jpeg",
            "nom" => "Di Montalcino",
            "ref" => "002",
            "prix" => "31€",
            "stock" => 20
        ],
        [
            "image" => "assets/sangiovese3.jpeg",
            "nom" => "Trame 2017",
            "ref" => "003",
            "prix" => "51€",
            "stock" => 25
        ],
        [
            "image" => "assets/sangiovese4.jpeg",
            "nom" => "Isole E olena",
            "ref" => "004",
            "prix" => "30€",
            "stock" => 30
        ]
    ],
    'nerodavola' => [
        [
            "image" => "assets/nerodavola.jpeg",
            "nom" => "Nero di Lupo",
            "ref" => "001",
            "prix" => "18€",
            "stock" => 15
        ],
        [
            "image" => "assets/nerodavola2.jpeg",
            "nom" => "Di pianogrillo",
            "ref" => "002",
            "prix" => "11€",
            "stock" => 20
        ],
        [
            "image" => "assets/nerodavola3.jpeg",
            "nom" => "Contrada 2017",
            "ref" => "003",
            "prix" => "51€",
            "stock" => 25
        ],
        [
            "image" => "assets/nerodavola4.jpeg",
            "nom" => "Carli Sicilia",
            "ref" => "004",
            "prix" => "20€",
            "stock" => 30
        ]
    ],
    'glera' => [
        [
            "image" => "assets/glera1.jpeg",
            "nom" => "Colfondo su alto",
            "ref" => "001",
            "prix" => "51€",
            "stock" => 15
        ],
        [
            "image" => "assets/glera2.jpeg",
            "nom" => "Prosecco",
            "ref" => "002",
            "prix" => "79€",
            "stock" => 20
        ],
        [
            "image" => "assets/glera3.jpeg",
            "nom" => "Prosecco 1821",
            "ref" => "003",
            "prix" => "12€",
            "stock" => 25
        ],
        [
            "image" => "assets/glera4.jpeg",
            "nom" => "Prosecco rustico",
            "ref" => "004",
            "prix" => "32€",
            "stock" => 30
        ]
    ],
    'moscato' => [
        [
            "image" => "assets/moscato.jpeg",
            "nom" => "Di Pantalleria",
            "ref" => "001",
            "prix" => "25€",
            "stock" => 15
        ],
        [
            "image" => "assets/moscato2.jpeg",
            "nom" => "Florio",
            "ref" => "002",
            "prix" => "10€",
            "stock" => 20
        ],
        [
            "image" => "assets/moscato3.jpeg",
            "nom" => "Asti Canti",
            "ref" => "003",
            "prix" => "9,0€",
            "stock" => 25
        ],
        [
            "image" => "assets/moscato4.jpeg",
            "nom" => "Asti Tresoli",
            "ref" => "004",
            "prix" => "10€",
            "stock" => 30
        ]

        ],
    'selection1' => [
        [
            "image" => "assets/pinotnoir3.jpeg",
            "nom" => "Faveley - (2020)",
            "ref" => "007",
            "prix" => "45€",
            "stock" => 15
        ],
        [
            "image" => "assets/merlot3.jpeg",
            "nom" => "Château Cantin",
            "ref" => "001",
            "prix" => "31€",
            "stock" => 20
        ],
        [
            "image" => "assets/chardonnay4.jpeg",
            "nom" => "Vougeot - (2020)",
            "ref" => "012",
            "prix" => "130€",
            "stock" => 25
        ],
        [
            "image" => "assets/sauvignon2.jpeg",
            "nom" => "Riffault Akméniné",
            "ref" => "014",
            "prix" => "21€",
            "stock" => 30
        ]
        ],
        'selection2' => [
            [
                "image" => "assets/sangiovese3.jpeg",
                "nom" => "Trame 2017",
                "ref" => "001",
                "prix" => "51€",
                "stock" => 15
            ],
            [
                "image" => "assets/nerodavola3.jpeg",
                "nom" => "Contrada 2017",
                "ref" => "002",
                "prix" => "51€",
                "stock" => 20
            ],
            [
                "image" => "assets/glera2.jpeg",
                "nom" => "Prosecco",
                "ref" => "003",
                "prix" => "79€",
                "stock" => 25
            ],
            [
                "image" => "assets/moscato.jpeg",
                "nom" => "Di Pantalleria",
                "ref" => "004",
                "prix" => "25€",
                "stock" => 30
            ]
        ]
        
    


];
