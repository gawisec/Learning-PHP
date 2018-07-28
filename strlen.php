<?php
$text = ' How can a clam cram in a clean cream can? ';

echo strlen($text);
$text = trim($text);
echo $text;
echo strtoupper($text);
echo strtolower($text);
$text = str_replace('can', 'could', $text);
echo $text;
echo substr($text, 2, 6);
var_dump(strpos($text, 'can'));
var_dump(strpos($text, 'could'));
?>
