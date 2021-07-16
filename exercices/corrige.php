<?php

/*

### 4. Vérifier si un utilisateur est mineur

Problème : Ecrivez une fonction qui prend un age en paramètre et 
retourne vrai si l'utilisateur est mineur et faux sinon

*/

// 1. On choisit le nom de la fonction (verbe) : verifierMineur
// 2. On déduit le type des paramètres en entrée : int $age
// 3. On déduit le type de la valeur de retour : bool

function verifierMineur(int $age): bool
{
    if ($age < 18)
    {
        return true;
    }
    else
    {
        return false;
    }
}


/*

### 6. Faire la somme d'un tableau

Problème : Ecrivez une fonction qui additionne tous les éléments 
d'un tableau de nombres floattants. Vous pouvez utiliser la fonction 
count qui récupère la longueur du tableau

*/

// 1. On choisit le nom de la fonction (verbe) : faireSomme
// 2. On déduit le type des paramètres en entrée : array $tab
// 3. On déduit le type de la valeur de retour : float

function faireSomme(array $tab): float
{
    $somme = 0;
    $longueur = count($tab);
    for ($i = 0; $i < $longueur; $i = $i + 1)
    {
        $element = $tab[$i];
        $somme = $somme + $element;
    }
    return $somme;
}
