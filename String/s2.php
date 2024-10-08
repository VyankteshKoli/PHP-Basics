<?php
$a="k k wagh poly";
echo "lenght of string is:<br>";
echo strlen($a);

echo "word in given string is:";
echo str_word_count($a);

echo "replace function:<br>";
echo str_replace("poly","clg",$a);

echo "reverse string is:<br>";
echo strrev($a);

echo "convert first letter of each word in capital letter";
echo ucwords($a);
?>