<?php
$a="welcome to kk wagh ";
echo "lenght of string is:<br>";
echo strlen($a)."<br>";

echo "word in given string is:<br>";
echo str_word_count($a)."<br>";

echo "reverse of string is:<br>";
echo strrev($a)."<br>";

echo "this function is used to find particular string in given string:<br>";
echo strpos($a,"kk")."<br>";

echo "it is used to replace new string with old string<br>";
echo str_replace("wagh","clg",$a)."<br>";

echo "this function is uesd to convert first character  of each string into uppercase ";
echo ucwords($a)."<br>";
?>