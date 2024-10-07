<?php
class  a 
{
    public $a;
    public $b;
    function get($a,$b)
    {
        $this->a=$a;
        $this->b=$b;

        echo "Additon is:".$this->a+$this->b;
    }
}
$ob=new a();
$ob->get(4,5);
?>