<?php
$scores=[65,54,75,94,53,85,84,73,59,49,63,81,90,60,];

echo "$scores[0]<br>";
echo sizeof($scores);
sort($scores);
echo "<br>$scores[0]<br>";

//functions
echo array_sum($scores);

echo "<br>";

echo array_sum($scores)/sizeof($scores);

$names=["MIRRIAM" ,"ABRAHAM", "JANE","KEN","KEVIN"];

echo "<br>$names[2]";

$names[]="TOM";
echo "<br>";
var_dump($names);
echo "<br>";

echo "<pre>";
var_dump($scores);
echo "<pre>";

