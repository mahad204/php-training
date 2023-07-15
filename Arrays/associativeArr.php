<!-- Key Value pair(Replaces the index with a key -->
<?php
$peopleOne = ['shaun'=> 'black','mario'=> 'green','luigi'=>'Yellow'];
echo $peopleOne['mario'];
print_r($peopleOne);

$peopleTwo = array('bowser'=>'Orange','peach'=>'white');
echo $peopleTwo['bowser'];
print_r($peopleTwo);

// How to replace a value
$peopleTwo ['bowser'] = 'pink';

//How to add a new key value pair in the array
$peopleTwo['toad'] = 'purple';
print_r($peopleTwo);

//How to count values in the array
echo count($peopleTwo);

//How to merge arrays using a method
$peopleThree = array_merge($peopleOne,$peopleTwo);
print_r($peopleThree);
?>