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

$toto = verifierMineur(18);
var_dump($toto);
