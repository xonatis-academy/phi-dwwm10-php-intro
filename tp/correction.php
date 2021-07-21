<?php

// === PROGRAMME 2

// 1. On choisit le nom de la fonction (verbe) : doubler
// 2. On déduit le type des paramètres en entrée :  float $nombre
// 3. On déduit le type de la valeur de retour : float

function doubler(float $nombre): float 
{
    $produit = $nombre * 2.0;
    return $produit;
}

// === PROGRAMME 3

// 1. On choisit le nom de la fonction (verbe) : convertirMinutesEnSecondes OU minutesToSecondes
// 2. On déduit le type des paramètres en entrée : int $minutes
// 3. On déduit le type de la valeur de retour : int

function convertirMinutesEnSecondes(int $minutes): int
{
    $secondes = $minutes * 60;
    return $secondes;
}

// === PROGRAMME 4

// 1. On choisit le nom de la fonction (verbe) : diminuer
// 2. On déduit le type des paramètres en entrée : float $prix
// 3. On déduit le type de la valeur de retour : float

function diminuer(float $prix): float 
{
    $nouveau = $prix - $prix * 0.20;
    return $nouveau;
}

// === PROGRAMME 5

// 1. On choisit le nom de la fonction (verbe) : verifierSansContact OU estPossibleSansContact
// 2. On déduit le type des paramètres en entrée : float $prix
// 3. On déduit le type de la valeur de retour : bool

function verifierSansContact(float $prix): bool
{
    if ($prix <= 30.0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function verifierSansContact2(float $prix): bool
{
    return ($prix <= 30.0);
}


// === PROGRAMME 6

// 1. On choisit le nom de la fonction (verbe) : compterMajeurs
// 2. On déduit le type des paramètres en entrée : array $tab
// 3. On déduit le type de la valeur de retour : int

// Traquer les utilisateurs qui n'auraient pas du acheter de l'alcool

function compterMajeurs(array $tab): int
{
    $compte = 0;
    for ($i = 0; $i < count($tab); ++$i)
    {
        $element = $tab[$i];
        if ($element >= 18)
        {
            $compte = $compte + 1;
        }
    }

    return $compte;
}

// === PROGRAMME 7

// 1. On choisit le nom de la fonction (verbe) : trouverPosition
// 2. On déduit le type des paramètres en entrée : array $tab, float $cherche
// 3. On déduit le type de la valeur de retour : ?int

// Trouver le client qui rapporte 50K de CA

function trouverPosition(array $tab, float $cherche): ?int
{
    for ($i = 0; $i < count($tab); ++$i)
    {
        $element = $tab[$i];
        if ($element == $cherche)
        {
            return $i + 1;
        }
    }

    return null;
}

// === PROGRAMME 8

// 1. On choisit le nom de la fonction (verbe) : calculerMoyenne
// 2. On déduit le type des paramètres en entrée : array $tab
// 3. On déduit le type de la valeur de retour : float

// Calculer la moyenne de Said pour voir si on lui donne le passage a la certif

function calculerMoyenne(array $tab): float
{
    $somme = 0;
    $compte = 0;

    foreach($tab as $element)
    {
        $somme = $somme + $element;
        $compte = $compte + 1;
    }

    if ($compte > 0)
    {
        $moyenne = $somme / $compte;
        return $moyenne;
    }
    else
    {
        return 0.0;
    }
}

// === PROGRAMME 9

// 1. On choisit le nom de la fonction (verbe) : echangeDerniers
// 2. On déduit le type des paramètres en entrée : array
// 3. On déduit le type de la valeur de retour : array

// A chaque fois qu'on swappe quelque chose

function echangeDerniers(array $tab): array
{
    $copie = $tab;

    // on recupere le nombre d'éléments du $tab
    $compteTotal = count($tab);

    // on a la position de la fin du tableau
    $dernierePosition = $compteTotal -1;

    // on a la position de avant derniere position
    $avantDernierePosition = $compteTotal -2;

    // on copie les valeurs aux positions qu'il faut
    $copie[$dernierePosition] = $tab[$avantDernierePosition];
    $copie[$avantDernierePosition] = $tab[$dernierePosition];

    return $copie;
}

// === PROGRAMME 10

/*
Problème : Veuillez écrire une fonction qui récupère le 2eme nombre maximum d'un tableau donc qui :
prend 1 tableau de nombres flottant en entrée
retourne le deuxieme nombre le plus grand s'il y en a, ou null sinon
Exemple :
Pour les données suivantes par exemple : [23.0, 2.0, 1.0, 4.0, 5.2, 4.0, 5.2]
La fonction doit retourner : 5.2
*/

// 1. On choisit le nom de la fonction (verbe) : chercherDeuxiemeMaximum
// 2. On déduit le type des paramètres en entrée : array $tab
// 3. On déduit le type de la valeur de retour : ?float

// Algo :
// 1. On cherche le maximum et on le met dans une varialble $premierMaximum
// 2. On cherche le maximum différent du $premierMaximum, ca doit etre le deuxieme maximum

// Qui a la 2eme meilleure moyenne apres Said

function chercherDeuxiemeMaximum(array $tab): ?float
{
    $premierMaximum = $tab[0];
    for ($i = 1; $i < count($tab); ++$i)
    {
        $element = $tab[$i];
        if ($element > $premierMaximum)
        {
            $premierMaximum = $element;
        }
    }

    $secondMaximum = null;
    for ($i = 0; $i < count($tab); ++$i)
    {
        $element = $tab[$i];
        if ($element != $premierMaximum)
        {
            if ($element > $secondMaximum)
            {
                $secondMaximum = $element;
            }
        }
    }

    return $secondMaximum;
}

// === PROGRAMME 11

/*

Problème : Veuillez écrire une fonction qui enlève les doublons d'une liste de nombres entiers donc qui :
prend 1 tableau en entrée
retourne 1 tableau de nombres entier sans les doublons

*/

// 1. On choisit le nom de la fonction (verbe) : enleverDoublons
// 2. On déduit le type des paramètres en entrée : array $tab
// 3. On déduit le type de la valeur de retour : array

// enlever les topics redondant d'un forum

function verifierPresence(array $tab, float $recherche): bool
{
    for ($i = 0; $i < count($tab); ++$i)
    {
        $element = $tab[$i];
        if ($element == $recherche)
        {
            return true;
        }
    }

    return false;
}

function enleverDoublons(array $tab): array
{
    $nouveau = [];
    for ($i = 0; $i < count($tab); ++$i)
    {
        $element = $tab[$i];

        if (verifierPresence($nouveau, $element) == false)
        {
            array_push($nouveau, $element);
        }
    }
    return $nouveau;
}

/*
=== PROGRAMME 12

Problème : Veuillez écrire une fonction qui trouvent l'écart le plus faible entre 2 ages d'une liste donc qui :
prend 1 tableau en entrée (liste des ages)
retourne un nombre entier qui correspond à l'écart le plus faible

*/

// 1. On choisit le nom de la fonction (verbe) : trouverEcartPlusFaible
// 2. On déduit le type des paramètres en entrée : array $tab
// 3. On déduit le type de la valeur de retour : int

// Trouver les chemins directs les plus courts

function trouverEcartPlusFaible(array $tab): int
{
    // On prend un ecart pour commencer, par exemple entre les 2 premiers éléments
    $doigts = $tab[1] - $tab[0];
    // Si l'ecart se trouve être negatif, alors il faut faire la soustraction opposée
    if ($doigts < 0)
    {
        $doigts = $tab[0] - $tab[1];
    }

    // La on parcourt le tableau
    for ($i = 0; $i < count($tab); ++$i)
    {
        $element = $tab[$i];

        for ($k = $i + 1; $k < count($tab); ++$k)
        {
            $element2 = $tab[$k];

            $ecart = $element - $element2;
            if ($ecart < 0)
            {
                $ecart = $element2 - $element;
            }

            if ($ecart < $doigts)
            {
                $doigts = $ecart;
            }
        }
    }

    return $doigts;
}


/*

=== PROGRAMME BONUS

Problème : Veuillez écrire une fonction qui trie une liste de tailles (S, M, L et XL) du plus petit au plus grand donc qui :
prend 1 tableau en entrée (liste des tailles S, M, L ou XL)
retourne le tableau trié du plus petit au plus grand
Pour des raisons de performances, cela doit se faire avec 1 boucle foreach maximum

*/

// 1. On choisit le nom de la fonction (verbe) : trier
// 2. On déduit le type des paramètres en entrée : array $tab
// 3. On déduit le type de la valeur de retour : array

// Classer les produits d'un panier en categorie pour les analyser

function trier(array $tab): array
{
    $pileS = [];
    $pileM = [];
    $pileL = [];
    $pileXL = [];

    foreach($tab as $element)
    {
        if ($element == 'S')
        {
            array_push($pileS, $element);
        }
        else if ($element == 'M')
        {
            array_push($pileM, $element);
        }
        else if ($element == 'L')
        {
            array_push($pileL, $element);
        }
        else if ($element == 'XL')
        {
            array_push($pileXL, $element);
        }
    }

    $pileTotal = array_merge($pileS, $pileM, $pileL, $pileXL);
    return $pileTotal;
}
