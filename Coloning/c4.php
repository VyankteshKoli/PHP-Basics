<?php
class z1
{
    public $a;
    public $b;
}

$a2=new z1();

$copy=clone $a2;
echo "set the valu to the object<br>";
$a2->a=10;
$a2->b=20;

echo "set the value to the copy:<br>";
$copy->a=30;
$copy->b=50;

echo $a2->a."<br>";
echo $a2->b."<br>";

echo $copy->a."<br>";
echo $copy->b."<br>";
?>