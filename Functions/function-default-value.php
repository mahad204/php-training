<?php
function compute_bal($deposit=10000,$withdrawal=4000){
    $balance = $deposit - $withdrawal;
    echo $balance;

}
compute_bal();//Calling the function.Output = 6000


?>