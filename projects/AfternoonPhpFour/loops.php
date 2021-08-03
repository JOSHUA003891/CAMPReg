<?php

//WHILE LOOPS
    //While
    //Do While loop
//For loops
    //For loop
    //Do each for loop


//WHILE LOOP
$x =0;
while ($x < 5) {
    echo $x;
    $x++;
}

echo "<br>";

//Do while loop

$y =0;
do{
    echo  $y;
    $y++;
}while($y <= 5);

echo "<br>";

//For loop
for ($z = 0; $z <= 5; $z++) {
    echo $z;
}

echo "<br>";

//For each loop
$Names = array("Grace", "Abdullahi", "Liiz","Jidraf", "Dan", "Issack", "Ahmed",);
foreach ($Names as $jina){
    echo $jina;
    echo "<br>";
}