<?php

$tab = [34.4, 97.6, 3.4, 0.1];  // <- Alicia : patronne

/*
for (    'commence'     ;     'suivi'       ;     'bilan'    ) /// <- Said : contremaitre
{
    // <- Michael : esclave
}
*/

$i = 0;
for ( ; $i < 4; ) // while ($i < 4)
{
    var_dump($i);
    $i = $i + 1;
}

for ( $i = 0; $i < 4; )
{
    var_dump($i);
    $i = $i + 1;
}

for ( $i = 0; $i < 4; $i = $i + 1)
{
    var_dump($i);
}


$i = 0;
for (  ;  ;  )
{
    var_dump($i);
}
