<?php
class vyanktesh
{
    public $city;
    public $state;
}
$s=new vyanktesh();

$y=clone $s;

echo "set the value to the object<br>";
$s->city="Jamner";
$y->state="Maharashtra";

$copy->city="Mumbai";
$copy->state="maharashtra";
?>
