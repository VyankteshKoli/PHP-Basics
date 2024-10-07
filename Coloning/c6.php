<?php
class cp 
{
    public $a;
    public $b;
    function abc()
    {
        echo $this->a+$this->b;
    }
}
$x=new cp();
$copy=clone $x;

$x->a=10;
$x->b=20;

echo "set the clone using ob<br>";

$copy->a=30;
$copy->b=50;
$copy->abc();
?>