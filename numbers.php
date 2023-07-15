<!-- There are 2 data types,Integers(whole numbers) and Floats(Decimal numbers) -->
<?php
$radius = 25;
$pi = 3.14;
var_dump($pi);
// basic operators :+,-,*(Multiplication),/(Division),**(power of)
echo $pi * $radius**2; //1962.5

// increment ++ and decrement -- operators
echo $radius++;//25
echo $radius;//26

echo $radius--;//26
echo $radius;//25

//short hand operators
$age = 10;
$age *=2;
echo $age;

//Number functions
//Here is a trick to turn decimals into the integer that starts it (the first number)
echo floor(10.9); //10

//Here is a trick to turn the decimal into the nearest up integer
echo ceil(10.1);//11

?>