<?php

$Marks =89;

if ($Marks < 30) {
    echo "E";
}elseif ($Marks < 40) {
    echo "D";
}elseif ($Marks < 50) {
    echo "C";
}elseif ($Marks < 60) {
    echo "D";
}else{
    echo "A";
}
echo "<br>";

//SWITCH CASE STATEMENT

$Number =0;

switch ($Number) {
    case 1;
    echo "One found";
    break;
    case 2;
        echo "Two found";
        break;
    case 3;
        echo "Three found";
        break;
    default :
        echo "Sorry, we didn't recognize that number";

}
echo "<br>";

$GuesedNumber =0;
switch ($GuesedNumber) {
    case 1;
        echo "Ooops you lost!!";
        break;
    case 2;
        echo "Ooops you lost!!";
        break;
        case 3;
        echo "Congratulations, You won 10bob";
    case 4;
        echo "Ooops you lost!!";
        break;
        default;
        echo "Gerarahia Mehnnn!!!!!!";
}
