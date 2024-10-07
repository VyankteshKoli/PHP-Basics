<?php
class a 
{
    public $m1,$m2,$m3;
    public $per;
    public $tot;
    function get($m1,$m2,$m3)
    {
        $this->m1=$m1;
        $this->m2=$m2;
        $this->m3=$m3;

        $this->tot=$this->m1+$this->m2+$this->m3;

        echo "Total is:<br>".$this->tot;
    }
    function set()
    {
        $this->per=$this->tot/3;
        echo "percentage is:<br>".$this->per;
    }
}
$ob=new a();
$ob->get(65,65,65);
$ob->set();
?>