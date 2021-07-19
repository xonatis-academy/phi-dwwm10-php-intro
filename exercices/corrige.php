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


/*

### 11. Copier un tableau

Problème : Ecrire une fonction qui prend un tableau et qui le copie dans un autre tableau autre, vous devez utiliser la fonction array_push
ca retourne un tableau

*/

// 1. On choisit le nom de la fonction (verbe) : copierTableau
// 2. On déduit le type des paramètres en entrée :  array $tableau
// 3. On déduit le type de la valeur de retour : array

function copierTableau(array $tableau): array
{
    // **METTRE** un nouveau tableau à vide
    $nouveau = [];
    // ALTERNATIVE : $nouveau = array();

    // **POUR CHAQUE** element DANS $tableau
    for ($a = 0; $a < count($tableau); ++$a)
    {
        $element = $tableau[$a];

        // /EMPILER/ element à la fin de nouveau tableau
        array_push($nouveau, $element);
        // ALTERNATIVE : $nouveau[] = $element;
    }
    
    // **RETOURNER** le nouveau tableau
    return $nouveau;
}

$aaa = [23, 3, 2];
$bbb = copierTableau($aaa);
var_dump($bbb);

/*

### 12. Copier les premiers éléments d'un tableau dont la somme fait au moins un nombre

Problème : Ecrire une fonction qui prend un tableau et un nombre entier et qui copie les premiers éléments d'un tableau dont la somme fait au moins ce nombre
S'il n'y a pas assez d'elements, retourner un tableau vide

*/

// 1. On choisit le nom de la fonction (verbe) : copierTableauSomme
// 2. On déduit le type des paramètres en entrée :  array $tab, int $seuil
// 3. On déduit le type de la valeur de retour : array

function copierTableauSomme(array $tab, int $seuil): array
{
    // $somme = $somme + $element : calculer la somme au fur et à fur
    // array_push($tableau, $element) : ajouter l'element au tableau
    // if ... : check pour verifier si la somme dépasse le seuil


    // ------ CHOIX 2 ---------------
    // 1. le nouveau tableau est vide
    // 2. la somme est à zero
    // 3. Pour chaque element du tableau
    //      on verifie si la somme est plus grand que le seuil
    //      si c'est le cas, alors on retourne le nouveau tableau
    //      si ce n'est pas le cas, on met l'element dans le nouveau tableau et on ajoute l'element a la somme
    // 4. a la fin, on retourne un tableau vide


    // ------ CHOIX 3 ---------------
    // 1. le nouveau tableau est vide
    // 2. la somme est à zero
    // 3. Pour chaque element du tableau
    //      on met l'element dans le nouveau tableau et on ajoute l'element a la somme
    //      on verifie si la somme est plus grand que le seuil
    //      si c'est le cas, alors on retourne le nouveau tableau
    // 4. a la fin, on retourne un tableau vide


    // 1. le nouveau tableau est vide
    $nouveau = [];
    // 2. la somme est à zero
    $somme = 0;
    // 3. Pour chaque element du tableau
    for ($a = 0; $a < count($tab); ++$a)
    {
        $element = $tab[$a];
    //      on met l'element dans le nouveau tableau et on ajoute l'element a la somme
        array_push($nouveau, $element);
        $somme = $somme + $element;
    //      on verifie si la somme est plus grand que le seuil
        if ($somme >= $seuil)
        {
    //      si c'est le cas, alors on retourne le nouveau tableau
            return $nouveau;
        }
    }

    // 4. a la fin, on retourne un tableau vide
    return [];
}


/*

## A1. Livraison gratuite ?

Problème : écrire une fonction qui prend une liste de prix en entrée et un nombre 
floattant (prix seuil). Retourner vrai si le prix total dépasse le prix seuil et 
faux sinon.

*/

// 1. On choisit le nom de la fonction (verbe) : verifierLivraison
// 2. On déduit le type des paramètres en entrée :  array $prices, float $seuil
// 3. On déduit le type de la valeur de retour : bool

function verifierLivraisonSaid(array $prices, float $seuil): bool
{
    // Parcourir le tableau
    // Calculer les cellule accumulées.
    // Si le total des cellules accumulé dépasse la valeur du seuil on retourne vrai.
    // à la fin return faux.

    $somme = 0;
    for ($i = 0; $i < count($prices); ++$i) 
    {
        $element = $prices[$i];
        $somme = $somme + $element;

        if ($somme > $seuil)
        {
            return true;
        }
    }
    return false;
}

function verifierLivraisonAlicia(array $prices, float $seuil): bool
{
    // on initialise la somme a 0
    // pour chaque element du tableau
    // on calcule la somme par accumulation
    // si la somme est > a $seuil on retourne true
    // sinon on retrourne false

    $somme = 0;
    for ($i = 0; $i < count($prices); ++$i)
    {
        $element = $prices[$i];
        $somme = $somme + $element;
    }
    if ($somme > $seuil) 
    {
        return true;
    }
    else
    {
        return false;
    }
}

/*

## A2. Reduction

Problème : écrire une fonction qui prend une liste de prix (floattant) et qui retourne la liste des prix diminué de 20%.
**METTRE** un nouveau tableau a vide
**POUR CHAQUE** element dans $prices
    **EMPILER** l'element fois 0.80 dans nouveau

**RETOURNER** nouveau

*/

function reduirePrix(array $prices): array
{
    // **METTRE** un nouveau tableau a vide
    $nouveau = [];

    // **POUR CHAQUE** element dans $prices
    for ($i = 0; $i < count($prices); ++$i)
    {
        $element = $prices[$i];

        // **EMPILER** l'element fois 0.80 dans nouveau
        array_push($nouveau, $element * 0.8);
    }

    // **RETOURNER** nouveau
    return $nouveau;
}

/*

## 14. Mapper des données

Problème : Ecrire une fonction qui prend un tableau de tableaux associatifs (produits) 
et qui renvoie un tableau de tableaux associatifs (produits) dont chaque produit 
contient le prix total (prix unitaire multiplié par la quantité)

*/

$listeDeProduits = 
[
    [
        'prix' => 9.8,
        'quantite' => 2
    ],
    [
        'prix' => 3.2,
        'quantite' => 3
    ],
    [
        'prix' => 10.9,
        'quantite' => 1
    ]
];

function calculerPrixTotalParProduit(array $liste): array
{
    for ($i = 0; $i < count($liste); ++ $i)
    {
        $element = $liste[$i];
        $element['prix_total'] = $element['prix'] * $element['quantite'];
    }
    return $liste;
}
