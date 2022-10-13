<?php
function colle($x, $y)
{
    $coords = [];
    $croix = " |X";
    $largeur = " +---";
    $longueur = " | ";
    for ($i = 0; $i < $x; $i++) {
        $longueur.= " | ";
    }
    for ($i=0; $i < $y ; $i++) { 
        $largeur.= "+---";
    }
    $longueur .= "\n";
    $largeur .= "\n";
    if ($x > 0 && $y > 0) {
        for ($i = 0; $i < $y; $i++) {
            echo $largeur;
            echo $longueur;
        }
        echo $largeur."\n";
    
    }
} 
colle(5,3);
