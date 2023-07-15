<!-- Multi-Dimensional Arrays -->
<?php
$blogs = [
    ['title'=>'Mario party','author'=>'mario','content'=>'lorem','likes'=>30],
    ['title'=>'Luigi party','author'=>'luigi','content'=>'lorem','likes'=>20],
    ['title'=>'Sonic party','author'=>'sonic','content'=>'lorem','likes'=>10]
];
print_r($blogs[1]['likes']);//20
echo $blogs[2]['title'];//Sonic party

//How to count in the arrays
echo count($blogs);//3

//How to add a new value into the array
$blogs[] = ['title'=>'Castle party','author'=>'Knucles','content'=>'lorem','likes'=>100];
//print_r($blogs);//['title'=>'Mario party','author'=>'mario','content'=>'lorem','likes'=>30,'title'=>'Luigi party','author'=>'luigi','content'=>'lorem','likes'=>20,'title'=>'Sonic party','author'=>'

//How to remove last item from array using pop method
$pop = array_pop($blogs);
print_r($pop);//['title'=>'Castle party','author'=>'Knucles','content'=>'lorem','likes'=>100;]
//print_r($blogs)

//How to remove first item from array using shift method
// $blogs = array_shift($blogs);
// print_r($blogs);//['title'=>'Mario party','author'=>'mario','content'=>'lorem','likes'=>30]
//print_r($blogs);

//How to remove any item from array
//unset($blogs[2]);
//print_r($blogs);//['title'=>'Mario party','author'=>'mario','content'=>'lorem','likes'=>30,'title'=>'Luigi party','author'=>'luigi','content'=>'lorem','likes'=>20,'title'=>'Sonic party','author'=>'

?>