<?php

$x =5;
$y =2;
$z = $x+$y;  //Modulus Operators
echo $z;
echo "<br>";

// Comparison Operators

$a =20.0;
$b =20;

if ($a <> $b){
    echo "True";
}else{
    echo "False";
}
echo "<br>";

echo $a<=>$b;
echo "<br>";

//Logical Operators
$p =10;
$q =20;

if ($p ==$q or $p<$q){
    echo "True";
}else{
    echo "False";
}
echo "<br>";

if ($p ==$q and $p<$q){
    echo "True";
}else{
    echo "False";
}
echo "<br>";


$Marks =20;
if ($Marks < 20){
    echo "E";
}elseif ($Marks < 30){
    echo "D";
}elseif ($Marks < 40){
    echo "C";
}elseif ($Marks < 50){
    echo "B";
}else{
    echo "A";
}




















