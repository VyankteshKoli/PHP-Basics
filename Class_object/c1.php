<?php
class vyanktesh
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
$v=new vyanktesh();
$v->abc();
$v->sa(30,30);
?>
