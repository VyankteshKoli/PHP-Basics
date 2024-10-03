<?php

$a = array(10,20,30,40,50);
$se = 410;
$d = 0;
$c = count($a);

for($i=0;$i<=$c-1;$i++)
{
    if($a[$i] == $se)
    {
        $d = $d+1;
        break;
    }
}
if($d == 1)
{
    echo $se." Number is Found";
}
else
{
    echo $se." Number is Not Found";
}
?>