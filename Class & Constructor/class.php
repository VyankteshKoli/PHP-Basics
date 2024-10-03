<?php

class tyif
{
    public $name;

    function show()
    {
        echo "Your Name: $this->name";
    }
}
$ty = new tyif();
$ty->name = "VKKKK";
$ty->show();

?>