<?php
class area
{
    public $length;
    public $width;

    function __construct($l,$w) 
    {
        $this->length = $l;
        $this->width = $w;
    }

    function show()
    {
        $area = $this->length * $this->width;
        echo "Are of Rechtangle is: $area";
    }
}
$ty = new area(10,20);
$ty->show();

echo"<br>";

$ty2 = new area(10,20);
$ty2->show();

?>