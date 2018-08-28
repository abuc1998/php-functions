<?php

//functions

//$sentence="the quick brown fox jumped over a lazy dog";
//
//echo strtoupper($sentence);
//"<br>";
//$upper=strtoupper($sentence);
//
//echo "upper case version is<br> $upper" ;


//$sentensi="THIS IS A BOY";
//
//echo strtolower($sentensi);

$name="Abraham kimutai";

echo str_word_count($name);

echo "<br>";

echo strlen($name);
echo "<br>";
echo str_ireplace("abraham","Abu",$name);

echo "<br>";
echo "<br>";

$password="kenya123";
$salt="ygduygdfyudsgkfkjew74fugh84hfiihjdbv98";
echo md5("$salt$password$salt");

echo "<br>";
echo "<br>";

echo sha1($password);



echo crypt($password,$salt);
echo "<br>";
echo "<br>";

echo md5(sha1($password));

echo "<br>";
echo "<br>";

echo password_hash("$password", PASSWORD_DEFAULT);

echo "<br>";
echo "<br>";

$number=67;

$result= sqrt($number);
echo "<br>";
echo $result;


echo "<br>";
//power
echo pow($number,1.5);

echo "<br>";
//roundoff
echo round($result,2);

echo "<br>";

echo log10($number);

echo "<br>";
//date
date_default_timezone_set("africa/nairobi");
echo date("Y-m-d");
echo "<br>";
echo "<br>";
echo date("H;i;s a");
echo "<br>";
echo "<br>";

file_put_contents("data.txt","hi" ,FILE_APPEND);

echo "<br>";
echo "<br>";

echo file_get_contents("data.txt");
echo "<br>";
echo "<br>";
//which month
//which day of the week
//truncate a number


//which month
date_default_timezone_set("africa/nairobi");
echo date("M");

echo "<br>";
echo "<br>";

date_default_timezone_set("africa/nairobi");
echo date("D");

echo "<br>";

//TRUNCATE A NUMBER
$int=10.11;

echo ceil("$int");
echo "<br>";
echo floor("$int");








