<?php
$greeting ="Hello world";
echo strtoupper($greeting);
echo "<br>";


function motto(){
    echo "Hey, this is my motto <br>";
}

motto();

function mission(){
    echo "Hey, this is my mission <br>";
}

mission();

function addition(){
    $x = 10;
    $y = 30;
    $answer = $x + $y;

    echo "Hello, your answer is $answer <br>";
}

addition();

function registration($n,$e,$p){
    echo "Hello $n, your email address is $e and your password is $e <br>";

}

registration("abdull", "abdull@gmail.com","abdull123");

function avg($x, $y, $z){
    $average =($x + $y + $z)/3;
    echo "Hey, your average is $average <br>";

}

avg("43", "435", "5454");
avg("4325", "23", "678");


function simple_interest($p, $r, $t){
    $interest = ($p * $r * $t)/100;

    echo "Hello, your interst is $interest <br>";

}

$principle =20000;
$rate = 2;
$time = 5;
simple_interest($principle,$rate,$time);


function volume_of_a_cylinder($r, $h){
    $volume = pi() * pow($r, 2) *$h;
    return $volume;

}

$Radius = 70;
$Height = 45;
echo volume_of_a_cylinder($Radius, $Height);

//Create a method to calculate the BMI of a person and determine if the person is;
        //1.Underweight
        //2.Normal weight
        //3.Overweight
        //4.Obese
//Note: Google for the actual BMI scale