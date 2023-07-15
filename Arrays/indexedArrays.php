<?php

$peopleOne = ["Abdi","Abdi1 ","Abdi2"];
echo $peopleOne[1];//Abdi1

//Different way to make array
$peopleTwo = array("Mnu","Mnu1 ","Mnu2");
echo $peopleTwo[1];//Mnu1

//Prints the whole array
print_r($peopleTwo);

//How to replace an index with another
$peopleTwo[0] = "Mnuu";
print_r($peopleTwo);

//How to add a new index
$peopleTwo[] = "Mnu3";
print_r($peopleTwo);

//Another way to add a new index using a method
array_push($peopleTwo,"Mnu4");
print_r($peopleTwo);

//How to count indexes in arrays
echo count($peopleTwo);

//How to merge arrays
$peopleThree = array_merge($peopleOne,$peopleTwo);
print_r($peopleThree);
?>