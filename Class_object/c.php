<?php
class A
{
public $a=10;
public $b=20;
public $c;
function get()
{
    echo $this->a;
    echo $this->b;
}
function sum()
{
    $this->c=$this->a*$this->b;
    echo $this->c;
}
}
$ob=new A();
$ob->get();
$ob->sum();
?>