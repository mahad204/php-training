<?php
// String concatnation use a dot(.)
$name = "John ";
$lastname = "Doe";
echo $name.$lastname;
echo ' Hey my name is '.$name;

// If you use double quotes("")instead of single('') you can directly 
// join the variable without using the dot(.)
echo " Hey my name is $name";

// Escape characters
echo " Hey my name is \"stupid\"";
echo ' Hey my name is "stupid" ';

// String Functions
// Here is a trick to print the escaped characters
// Finding individual letters out of a string e.g in name find "h"
echo $name[2];

// Here is a trick to print the length of the string
echo strlen($name) . " Letters";

// Here is a trick to turn strings to uppercase
echo strtoupper($name);

// Here is a trick to turn strings to lowercase
echo strtolower($name);

// Here is a trick to replace strings
echo str_replace("J","M",$name);

?>
