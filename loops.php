<?php
//for ,while ,foreach ,dowhile

// for ($x=0; $x<=100; $x+=2)
// {
////    print(" $x ABU <br>") ;
//     $result=$x *$x;
//     print " $x x $x= $result <br>";
// }

 //print from 100 to 1
//for ($x=100;$x>=1; $x--)
//    print(" $x <br>");

//print all odd numbers btwn 50 and 100
//for($x=50; $x<=100; $x++)
//{
//    if ($x % 2==0)
//    {
//        //print nothing
//    }
//
//    elseif($x % 2!=0)
//    {
//        print "$x<br>";
//    }
//
//
//}

$scores=[65,54,75,94,53,85,84,73,59,49,63,81,90,60,];
foreach ($scores as $mark)
{
    print "$mark <br>";
}$names=["MIRRIAM" ,"ABRAHAM", "JANE","KEN","KEVIN"];

foreach ($names as $majina)
{
    print "$majina<br>";
}


