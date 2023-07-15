<?php
function compute_bal($deposit,$withdrawal){
    $balance = $deposit - $withdrawal;
    echo $balance;

}
compute_bal(4000,3400);//Calling the function
echo "<br>";
compute_bal(100,500);



?>