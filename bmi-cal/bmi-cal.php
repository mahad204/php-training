<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bmi-cal.php" method="post">
            <input type="text" name="weight" placeholder="Enter weight">
    
            <input type="text" name="height" placeholder="Enter height">
   
            <input type="submit" name="check" value="check">
        
    </form>
</body>
</html>
<?php
function calcYourBmi(){
    if(isset($_POST["check"])){
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $bmi = $weight/($height**2);
        if ($bmi < 18) {
            echo "Underweight";
        }else {
            echo "Normal";
        }
    };

}
calcYourBmi();

?>