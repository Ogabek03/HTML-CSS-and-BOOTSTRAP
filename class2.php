<?php

//$result = strlen($text);
//$result = str_word_count($text);
//$result = str_pad($text,'20','*');
//$result = strpos($text,'k');
//$result = substr($text,'3','5');
//$result = strcmp($text, $text2);
//$result = str_split($text,'1');
//$result = str_shuffle('RIVOJLANMAGAN');


//$result = strlen($text);

echo "<h3>Counting Letters</h3>";
echo "<hr>";
echo "<pre>";
$text = "Ogabek";
echo "Ogabek";
$result = strlen($text);
echo "<hr>";
var_dump($result);
echo "<hr>";
echo"<br>";
echo"<br>";

//$result = str_word_count($text);
echo "<h3>Counting Words</h3>";
echo "<hr>";
echo"<pre>";
$paragraph = "This handout will help you understand how paragraphs
 are formed, how to develop stronger paragraphs, and how to completely 
 and clearly express your ideas";
echo "$paragraph";
$result = str_word_count($paragraph);
echo "<hr>";
var_dump($result);
echo "<hr>";
echo"<br>";
echo"<br>";


//$result = str_pad($text,'20','*');
echo "<h3> Putting Extra Symbols to the Extra Space </h3>";
echo "<pre>";
$text = "";
echo "$text";
$result = str_pad($text,'10','*');
echo "<hr>";
var_dump($result);
echo "<hr>";
echo"<br>";
echo"<br>";


//$result = strpos($text,'k');
echo "<h3>Searching what did You Want</h3>";
echo "<hr>";
echo "<pre>";
$mail = "alishermusayev@yahoo.com";
echo "$mail";
$result = strpos($mail,'@');
echo "<hr>";
var_dump($result);
echo "<hr>";
echo"<br>";
echo"<br>";


//$result = substr($text,'3','5');
echo "<h3>Cutting Out</h3>";
echo "<hr>";
echo"<pre>";
$kuchukcha = "@";
$message = "ogabekabdurakhmanov@gmail.com";
echo "$message";
$result = substr($message,'0','19');
echo "<hr>";
var_dump($result);
echo "<hr>";
echo "<br>";
echo "<br>";



//$result = strcmp($text, $text2);
echo "<h3>Compare Both Strings</h3>";
echo "<hr>";
$mail = "Ogabek";
$mail2 = "OgabekAbdurakhmanov";
echo "$mail";
echo "<hr>";
echo "$mail2";
echo "<hr>";
$result = strcmp($mail,$mail2);
var_dump($result);
echo "<hr>";
echo "<br>";
echo "<br>";




//$result = str_split($text,'1');
echo "<h3>Split Paragraph</h3>";
echo "<hr>";
$paragraph = "This handout will help you understand how paragraphs
 are formed, how to develop stronger paragraphs, and how to completely 
 and clearly express your ideas";
echo "$paragraph";
echo "<hr>";
$result = str_split($paragraph,'15');
var_dump($result);
echo "<hr>";
echo "<br>";
echo "<br>";



//$result = str_shuffle('RIVOJLANMAGAN');
echo "<h3>Shuffle/Puzzle Game</h3>";
echo "<hr>";
$word ="ABDURAKHMANOV";
echo "$word";
echo "<hr>";
$result = str_shuffle($word);
var_dump($result);
echo "<hr>";
echo "<br>";
echo "<br>";




//$result = str_replace('uzbek','men',$pochta);
echo "<h3>Replace extra words</h3>";
echo "<hr>";
$pochta = "uzbekagent.001@yahoo.com";
echo "$pochta";
echo "<hr>";
$result = str_replace('uzbek','men',$pochta);
var_dump($result);
echo "<hr>";
echo "<br>";
echo "<br>";



//$result = str_repeat($nom,'10');
echo "<h3>Repeat Words</h3>";
echo "<hr>";
$nom = "ATRO";
echo "$nom";
echo "<hr>";
$result = str_repeat($nom,'10');
var_dump($result);
echo "<hr>";
echo "<br>";
echo "<br>";




//$result = strtoupper($harf);
echo "<h3>Change letters to Capital</h3>";
echo "<hr>";
$harf = "abcdefgh";
echo "$harf";
echo "<hr>";
$result = strtoupper($harf);
var_dump($result);
echo "<hr>";
echo "<br>";
echo "<br>";




//$result = strtolower($letters);
echo "<h3>Change letters to Lowest</h3>";
echo "<hr>";
$letters = "ABCDEFGH";
echo "$letters";
echo "<hr>";
$result = strtolower($letters);
var_dump($result);
echo "<hr>";
echo "<br>";
echo "<br>";
?>
