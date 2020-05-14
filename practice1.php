<?php
//all array
//array_reverse,
//array_sum,
//array_column,
//array_pop, take out last variable
//array_shift, take out first variable
//array_unshift($variable,'add variable') add variable to first line
//array_push move down to last line
//array_chunk split variables
//array_replace
//array_merge
//array_diff
//number

echo "<h1>This is Array_Reverse <h1>";
echo "<pre>";
$sports = [ 'tennis','soccer','basketball','handball'];
$result = array_reverse ($sports,'tennis');
print_r ($result);
echo "<hr>";
echo "<br>";
echo "<br>";

echo "<h2>Array_pop<h2>";
echo "<pre>";
$result = array_pop($sports);
print_r ($sports);
$result = array_shift ($sports);
print_r (sports);












?>