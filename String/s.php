<?php
$a="satyam bhagwat";
echo "lenght os tring is<br>:";
echo strlen($a);
echo "word of string is:<br>";
echo str_word_count($a);
echo "reverse string is:<br>";
echo strrev($a);
echo "repladce string is:<br>";
echo str_replace("satyam","rajshree",$a);


echo "position of string in given string is:<br>";
echo strpos($a,'bhagwat');
?>