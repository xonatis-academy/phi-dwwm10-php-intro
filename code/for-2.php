<?php

$tab = ['hello', 'comment', 'ca', 'va'];

var_dump($tab   [    0    ]   ); // affiche "hello"
var_dump($tab[1]);  // affiche "comment"

$x = 3;
var_dump($tab   [      $x    ]   ); // affiche "va"

$i = 23;
var_dump($tab[$i]);

var_dump($tab    [      'hello'     ]);


// entre 0 et la valeur maximuale de la position du tableau
// entre 0 et 3, compris
// $a = 0;
// au max !!! $a = 3;
// pour parcourir, $a = 0 et tant que $a < 4
// pour parcourir, $a = 0 et tant que $a < longueur du tableau
var_dump($tab[$a]);

// Si je voulais afficher tous les éléments du tableau
// je dois répéter en faisaint de $a = 0 et tant que $a < longueur du tableau
// je dois répéter en faisaint de $a = 0 et tant que $a < count($tab)
// for ($a = 0; $a < count($tab); $a = $a + 1)
var_dump($tab[$a]);

for ($a = 0; $a < count($tab); ++$a)
{
    var_dump($tab[$a]);
}

for (   
        $a = 0;  // on initie qu'on met 0 dans $a : initiation
        $a < count($tab);  // predicat (affirmation) de continuite
        ++$a   // ce qu'on fait apres chaque tour
    )
{
    
}


// 1er step : $a = 0
// 2me step : $a = 1
// 3me step : $a = 2
// 4me step : $a =, il ne peut être également à 3, car $a doit : $a < 3

for ($a = 0; $a < 3; ++$a)
{
    
}

// 1 step : $a = 0
// 2 step : $a = 1
// 3 step : $a = 2
// 4 step : $a = 3
// 5 step : $a = 4
// on peut plus car, $a DOIT être $a < 5
for ($a = 0; $a < 5; ++$a)
{
    
}

// 0, 1, 2, 3, 4, 5
for ($a = 0; $a < 6; ++$a)
{
    
}

// 0, 2, 4
for ($a = 0; $a < 6; $a = $a + 2)
{
    
}

// 3, 5, 7, 9
for ($a = 3; $a < 10; $a = $a + 2)
{
    
}


// 3, 5, 7, 9, ...
for ($a = 3; $a > 0; $a = $a + 2)
{
    
}

// = c'est pareil que == ?
// pas step
for ($a = 3; $a == 5; $a++)
{

}

// 1 step: $a = 5
for ($a = 5; $a == 5; $a++)
{
    
}

// $a++;
// $a += 1;
// $a = $a + 1;
// je prends $a, j'ajoute 1 et je remets dans $a

// ++$a;
// j'ajoute 1 dans $a

// 16, 8, 4, 2
for ($a = 16; $a > 1; $a /= 2)
{

}
