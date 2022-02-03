<?php
//the while loop

$Marks=50;//initializing my loop

while($Marks<=80){
    echo "The Marks is: $Marks <br>";
    $Marks+=5;
}
echo "<br>";

//The do...while loop

$age=50;
do{
    echo "Age is: $age <br>";
    $age+=5;

}while($age<=70);
echo "<br>";
//For loop
for ($age=20;$age<=30;$age+=2){//incremental
    echo "Miaka yangu ni: $age <br>";
}
echo "<br>";
for ($marks=50;$marks>=10;$marks-=5){//decremental
    echo "My marks is: $marks <br>";

}
echo "<br>";

//for each loop
$students=array("Winstone"=>"80%","Mark"=>"56%","Tom"=>"34%","Dennis"=>"92%");
foreach ($students as $str=>$val){
    echo "$str=$val <br>";
}