<?php
//ARRAYS
    //Indexed arrays
    //Associative arrays

//Indexed Arrays

$cars = ["Audi", "BMW", "Subaru", "Starlete", "Marcedes", "Ferari"];

$ArrayCount = count($cars);

echo $ArrayCount;
echo "<br>";
echo $cars[3];
echo "<br>";
echo $cars[5];
echo "<br>";
foreach ($cars as $x ) {
    echo  $x;
    echo "<br>";
}

//Associative Arrays

$students =["std1"=>"Abdullahi", "std2"=>"liz", "std3"=>"Dan", "std4"=>"Issack", "std5"=>"Ahmed"];

echo $students["std3"];
echo "<br>";
echo $students["std4"];
echo "<br>";
//ksort($students); //sorting an associative array in an ascending order according to the key
//krsort($students); //sorting an associative array in a descending order according to the key
//asort($students); //sorting an associative array in an ascending order according to the value
//arsort($students); //sorting an associative array in a descending order according to the value

foreach ($students as $key => $value) {
    echo "The key is ".$key."and the value ".$value;
    echo "<br>";

}

