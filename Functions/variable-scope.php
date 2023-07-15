<?php
//global variable
$bal = 2000;
function compute_bal(){
    //local variable
    $bal = 100;
}

function explode_bal(){
    global $bal;
    echo $bal;
}
compute_bal();
explode_bal();
?>