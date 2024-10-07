<?php

class satyam 
{
    public $a;
    public $b;
    public $c;
    function abc()
    {
        echo $this->c=$this->a+$this->b;
    }
}
$ob=new satyam();

$copy=clone $ob;

$ob->a=10;
$ob->b=20;
$ob->abc();
//$ob->c=30;

$copy->a=30;
$copy->b=40;
$copy->abc();
//$copy->c="c";


echo "$ob->a $ob->b <br>";

echo "$copy->a"."<br>";
echo "$copy->b"."<br>";
//echo "$copy->c"."<br>";


?>