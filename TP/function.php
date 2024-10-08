<?php
 function morning()
 {
    echo "Hey How Are You";
 }

 function even($sum)
 {
    if($sum%2==0)
    {
        echo "<br>$sum No is Even";
    }
    else
    {
        echo "<br>$sum No is Odd";
    }
 }
 function no()
 {
    $a = "Hello How ";
    echo strrev($a);
 }
 morning();
 even(987);
 no();
?>