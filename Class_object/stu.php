<?php
class satyam
{
    public $a;
    public $b;
    public $c;
    public $tot;
    public $name;

    public function tot($a,$b,$c)
    {
        $this->tot=$this->a+$this->b+$this->c;
    }
    public function per()
    {
        return($this->tot/3.0);
    }
}
$s=new satyam();
$s->tot(89,79,90);
$x=$s->per();
$s->name="sam";

$s2=new satyam();
$s2->tot(90,67,89);
$u=$s2->per();
$s2->name="ram";

if($x>$u)
{
    echo "$s->name is topper";
}
else
{
    echo "$s2->name is topper";
}
?>