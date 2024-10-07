<?php
class satyam
{
    public $a=10;
    public $b=20;


    public function abc()
    {
        echo "Addition is:".$this->a+$this->b;
    }
    function sa($x,$y)
    {
        $this->a=$x;
        $this->b=$y;
        echo "subtraction is:".$this->a-$this->b;
    }
}
$s=new satyam();
$s->abc();
$s->sa(30,30);
?>