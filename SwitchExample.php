<?php
$favCar="RangeRover";

switch ($favCar){
    case "Rolls_Royce":
        echo "Hello,you are late for the exams.Try next time";
        break;
    case "Marcedes":
        echo "Congratulations,you have been selected for the training";
        break;
    case"subaru":
        echo "Hello,get prepared for the test and it starts in 5 minutes time.";
        break;
    case "Honda":
        echo "Hello,prepare yourself for the exams tommorow";
        break;
    case "Toyota_Landcruizer":
        echo "carry with you exams material tommorow";
        break;
    case "porche":
        echo "You have successfully completed your exams";
        break;
    case"RangeRover":
        echo "Congratulations,you have passed with Distinction";
        break;
    default:
        echo "Sorry,you dont belong here!";
}
