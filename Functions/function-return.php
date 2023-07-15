<?php
function compute_bal($deposit,$withdrawal){
    $balance = $deposit - $withdrawal;
    return $balance;

}
echo compute_bal(4000,3400);//Calling the function
echo "<br>";
$bal = compute_bal(60,10);
echo $bal

?>