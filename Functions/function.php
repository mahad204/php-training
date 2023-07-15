<?php

function compute_bal(){
    $deposit = 2000.00;
    $withdrawal = 500;
    $balance = $deposit - $withdrawal;
    echo $balance;

}
compute_bal();
echo "<br>";
// BMI 
function calcYourBmi(){
    // Get your input for weight and height in kg, cm respectively
    $weight = 65;
    $height = 1.7;
    # Calculate the bmi using formula: (Weight / Height^2) * 10
    // $bmi = ($weight/(pow($height/100,2)))*1;
    $bmi = $weight/($height**2);
    echo round($bmi);

}
calcYourBmi();
?>