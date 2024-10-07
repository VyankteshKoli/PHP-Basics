<?php
class satyam
{
    public $city;
    public $state;
}
$s=new satyam();

$y=clone $s;

echo "set the value to the object<br>";
$s->city="nashik";
$y->state="maharashtra";

$copy->city="pune";
$copy->state="maharashtra";
?>