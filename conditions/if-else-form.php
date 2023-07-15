<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verification check App</h1>
    <form action="if-else-form.php" method="post">
        <input type="text" name = "age" placeholder="Enter Age">
        <input type="submit" name = "age_status" placeholder="Submit">
    </form>
</body>
</html>
<?php
if(isset($_POST["age_status"])){
    $age = $_POST["age"];
    if ($age < 18) {
        echo "child";
    }else {
        echo "Big boy";
    }
};


?>