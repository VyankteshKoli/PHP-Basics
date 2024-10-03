<?php
class timepass
{
    public $name;
    public $age;

    // constructor
    function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function show()
    {
    echo $this->name."-".$this->age;
    }
}

$t1 = new timepass("Vyanktesh","20");
//$t1-> name ="Vyanktesh";
//$t1->age = 19;
$t1->show();
?>