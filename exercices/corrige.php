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

/*

### 8. Trouver l'élément maximum d'un tableau

Problème : Ecrire une fonction qui prend un tableau en paramètre et retourne l'élément maximum
la plus grande valeur et en particulier, vous devez utiliser une boucle

*/

// 1. On choisit le nom de la fonction (verbe) : trouverMaximum
// 2. On déduit le type des paramètres en entrée : array $tab
// 3. On déduit le type de la valeur de retour : float

function trouverMaximum(array $tab): float
{
    // **METTRE** le doigt sur le 1er element de la liste
    $doigt = $tab[0];

    // **POUR CHAQUE** element DANS la liste
    for ($i = 1; $i < count($tab); ++$i)
    {
        $element = $tab[$i];
        
        // **SI** l'element est plus grand que le doigt
        if ($element > $doigt)
        {
            // **METTRE** le doigt sur l'element
            $doigt = $element;
        }
    }

    // **RETOURNER** le doigt
    return $doigt;
}

$top = [34.5, 4.3, 45.5];
$res = trouverMaximum($top);
var_dump($res);

/*

### 9. Trouver l'élément minimum d'un tableau

Problème : Ecrire une fonction qui prend un tableau en paramètre et retourne l'élément minimum
(le plus petit element du tableau)
le tableau est un tableau de nombres flottants

*/

// 1. On choisit le nom de la fonction (verbe) : trouverMinimum
// 2. On déduit le type des paramètres en entrée : array $tab
// 3. On déduit le type de la valeur de retour : float

function trouverMinimum(array $tab): float
{
    // **METTRE** le doigt sur le premier element
    $doigt = $tab[0];
    // **POUR CHAQUE** element DANS $tab
    for ($i = 0; $i < count($tab); ++$i)
    {
        $element = $tab[$i];
        // **SI** l'element est plus petit que le doigt
        if ($element < $doigt)
        {
            // **METTRE** le doigt sur l'elemenet
            $doigt = $element;
        }
    }
    // **RETOURNE** le doigt
    return $doigt;
}


/*

### 10. Trouver le premier élément supérieur à un nombre

Problème : Ecrire une fonction qui prend un tableau et un nombre floattant en paramètre 
et retourne le premier élément supérieur à ce nombre s'il y en a, sinon null. 
Vous pourrez utiliser le type ?float à la place du type float

*/

// 1. On choisit le nom de la fonction (verbe) : trouverPremier
// 2. On déduit le type des paramètres en entrée : array $tab, float $reference
// 3. On déduit le type de la valeur de retour : ?float

function trouverPremier(array $tab, float $reference): ?float
{
    // **POUR CHAQUE** element DANS $tab
    for ($i = 0; $i < count($tab); ++$i)
    {
        $element = $tab[$i];
        // **SI** element > $reference
        if ($element > $reference)
        {
            // **RETOURNER** l'element
            return $element;
        }
    }
    // **RETOURNER** null
    return null;
}

