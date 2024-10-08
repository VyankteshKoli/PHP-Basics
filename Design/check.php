<?php

$a=$_POST['sa'];
$b=$_POST['s1'];
$c=$_POST['s2'];
$tot=0;

if(isset($a))
{
echo "you choose pizza<br>";
$tot=$tot+$a;
}
if(isset($b))
{
    echo "you choose coffee<br>";
    $tot=$tot+$b;
}
if(isset($c))
{
    echo "you choose burger<br>";
    $tot=$tot+$c;
}
echo "total amount is:".$tot;
?>