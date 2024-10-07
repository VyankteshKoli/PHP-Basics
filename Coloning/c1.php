<?php

class student
{
    public $a;
    public $b;
    public $c;
    function abc()
    {
        echo $this->c=$this->a+$this->b;
    }
}
$ob=new student();

$copy=clone $ob;

$ob->a=10;
$ob->b=20;
$ob->abc();

$copy->a=30;
$copy->b=40;
$copy->abc();

echo "$ob->a $ob->b <br>";

echo "$copy->a"."<br>";
echo "$copy->b"."<br>";
?>
