<?php
$a="satyam umesh bhagwat";

echo "length of string is".strlen($a)."<br>";

echo "word in given string is:".str_word_count($a)."<br>";

echo "string replace is:".str_replace("satyam","yash",$a)."<br>";

echo "reverse of string is:".strrev($a)."<br>";

echo "find the particular string in given string is:".strpos($a,"bha")."<br>";
?>