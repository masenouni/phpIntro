<?php

//The if statement condition.

$num = 76;
if($num>10){
    echo "the answer is true";
}
echo "<br>";
echo "<br>";

//The if...else statement condition.

$num1=125;
$num2=60;
if($num1<=$num2){
    echo "the answer is true";
}else{
    echo "the answer is false";
}
echo "<br>";
echo "<br>";

//The if...elseif else statement
$grade=90;
if ($grade<=39){
    echo "you have failed";
}elseif ($grade>=40 && $grade<=49){
    echo "you have passed";
    echo "<br>";
    echo "you got a pass";
}elseif ($grade>=50 && $grade<=59){
    echo "You have passed and";
    echo "<br>";
    echo "you got a credit";
}elseif ($grade>=60 && $grade<=69){
    echo "Well done,You have passed and ";
    echo "<br>";
    echo "you got a Distinction 2";
}elseif($grade>=70 && $grade<=100){
    echo "Congratulations,you did well!";
    echo "<br>";
    echo "you got a Distinction 1";
}else{
    echo "Error because you printed out of range value";
}
echo "<br>";
echo "<br>";