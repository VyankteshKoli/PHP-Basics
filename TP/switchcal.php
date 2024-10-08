<?php

$a =10;
$b = 2;
$c;
$d;
$e;
$f;

    $c = $a+$b;
    $d = $a-$b;
    $e = $a*$b;
    $f = $a/$b;

    switch(3)
    {
    case 1:
         echo "ADDITON is $c";
    break;

    case 2:
        echo "Subtraction is $d";
    break;

    case 3:
    echo "MULTIPLICATION is $e";
    break;

    case 4:
        echo $f." is DIVISION";
    break;

    default:
          echo"INVALID";
    }
    
?>