<?php 
class vyanktesh
{
    public $a;
    public $b;
    function sum()
    {
        echo $this->a+$this->b;
    }
}
$x=new vyanktesh();
$x->a=10;
$x->b=20;

$copy=clone $x;

$copy->a=40;
$copy->b=50;

$x->sum();
$copy->sum();
?>
