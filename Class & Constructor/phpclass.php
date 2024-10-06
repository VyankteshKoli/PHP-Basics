<?php
class timepass
{
    public $name;
    public $age;

    function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function show()
    {

    }
}

$t1 = new timepass("Vyanktesh","19");
$t1->show();
?>
