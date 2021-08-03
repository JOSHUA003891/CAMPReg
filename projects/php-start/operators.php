<?php
$x=15;
$y=4;
//arithmetic operators
echo $x+$y; //addition operator
echo "<br>";
echo $x-$y; //subtraction operator
echo "<br>";
echo $x/$y; //division operator
echo "<br>";
echo $x*$y; //modulus operator
echo "<br>";

//comparison operator
var_dump($y>$x);
echo "<br>";
var_dump($y<$x);
echo "<br>";
var_dump($x==$y);
echo "<br>";
var_dump($x!=$y);
echo "<br>";
//logical operators
var_dump($x||$y);
echo "<br>";
if ($x==15 && $y==4){
    echo "hellow world";
    echo "<br>";
    if ($x==15 || $y==4){
        echo "this is my php operators that i have created by my own ways";
    }

}
//string operator
$fname="joshua";
$sname="peter";
echo "<br>";
echo $fname . $sname;//concatination
echo "<br>";
$fname .=$sname; //assignment concatination
echo $fname;

?>
