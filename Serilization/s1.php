<?php 
$b=array(2,4,93.78,"satyam",array("rajshree",3));
echo "<pre>";

$a=serialize($b);

echo $a."<br>";

echo "using unserilize convert string into complex array<br>";

$x=unserialize($a);
print_r($x);
?>