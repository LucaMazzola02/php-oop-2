<?php

include_once __DIR__ . '/../models/Category.php';
include_once __DIR__ . '/../models/Product.php';
include_once __DIR__ . '/../models/Food.php';
include_once __DIR__ . '/../models/Toy.php';

$sportItems = new Category('Sport Items', 'Items that allow or facilitate sport activities', '');
$catItems = new Category('Cat Items', 'Items for cats', '');
$dogItems = new Category('Dog Items', 'Items for dogs', '');

$bycicle = new Product('Triban', 'Bici da corsa Gravel Uomo Rc 100 grigia', 299.99, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRzBtTY7DwabUOH7AsoEPgh3A8Truej71U_Y0D7XP7D0bwgXVOTRhjtszgHf-DX3eG_ARkPKAW5j5ArLOThcHzReJm8jtYENsbXk5fnzxRDiOVFgdJ9RJ8W&usqp=CAE', true, $sportItems, 12);

$woolBall = new Toy('Wool ball', 'Ball of  wool for small cats', 12.99, 'https://media.istockphoto.com/id/1263674144/photo/red-ball-with-woolen-threads-isolated-on-white-background.jpg?s=612x612&w=0&k=20&c=L7UnV596Hi5HMzG4XjXfIhDC4SyxO_KUsA1Iegetf_0=' , true, $catItems, 13, 'Small', 'wool');
$biscuits = new Food('Big Dog Biscuits', 'Biscuits for the biggest and proudest dogs!', 33.33, 'https://www.nutrixpiu.it/wp-content/uploads/2018/08/adulti-taglia-grande-nutrix-piu-2kg-crocchette.png', true, $dogItems, 30, 350, 8);

$kennel = new Product('Cuccia da Esterno','Cadoca per Cani XXL Legno Massello Tetto Apribile 82cmx72cmx85cm', 129.95, 'https://m.media-amazon.com/images/I/81mTYtNJ0dL.jpg', true, $dogItems, 24);

$rope = new Toy('Trixie corda gioco per cani', 'Corda gioco con nodi di Trixie per cani, in diverse misure, perfetta per il tira e molla, contribuisce a pulire gli spazi interdentali in modo giocoso, in cotone robusto ma leggero', 0.99, 'https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/400/7992_pla_trixie_spieltau_grau_hs8_8.jpg', true, $dogItems, 56, '15cm', 'cotone robusto ma leggero');

$proteinBar = new Food ( 'Enervit', 'Barretta proteica gusto Arancio Cioccolato - Gymline Muscle Protein Bar 50%', 3.70, 'https://www.meditua.it/usr/1/products/_b/137712.jpg', true, $sportItems, 33, 236, 7);


$products = [
    $bycicle,
    $woolBall,
    $biscuits,
    $kennel,
    $rope,
    $proteinBar
];
