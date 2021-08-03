<?php
//while loop, do while, for, foreach

//while loop
$number=5;
while ($number<=100){
    echo "the number is : $number <br>";
    $number +=10;
}
//do .... while
do{
    echo "the number is : $number <br>";
    $number+=50;
}while ($number<=200);

//for loop
for ($number2=0;$number2<=20;$number2+=2){
    echo "the number is : $number2 <br>";
}
