<?php
class satyam
{
    public $a;

}
class yash extends satyam
{
public $b;
}

$o=new satyam();
$copy=clone $o;

echo "set the value to the class member";
$o->a=12;
$o->b=20;

echo "set the value to the clone object";

$copy->a="satyam"."<br>";
$copy->b="yash"."<br>";

echo "print the value of class object<br>";
echo $o->a;
echo $o->b;

echo "print the value of copy cloning <br>";

echo $copy->a;
echo $copy->b;


?>