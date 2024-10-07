<?php
class vyank
{
    public $a;

}
class ram extends vyank
{
public $b;
}

$o=new vyank();
$copy=clone $o;

echo "set the value to the class member";
$o->a=12;
$o->b=20;

echo "set the value to the clone object";
$copy->a="vyank"."<br>";
$copy->b="ram"."<br>";
echo "print the value of class object<br>";
echo $o->a;
echo $o->b;
echo "print the value of copy cloning <br>";
echo $copy->a;
echo $copy->b;
?>
