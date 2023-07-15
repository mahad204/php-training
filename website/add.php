<?php

    include_once 'db_connect.php';

    $errors = array('email'=>'',"namely"=>"","address"=>"");
    // if (isset($_GET['submit'])) {
    //     echo $_GET['email'];
    //     echo $_GET['namely'];
    //     echo $_GET['address'];
    // }
    if (isset($_POST['submit'])) {
        // echo htmlspecialchars ($_POST['email']);
        //check email
        if (empty($_POST["email"])) {
            $errors['email'] = "An email is required <br/>";
        }else{
            $email=htmlspecialchars ($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "$email is not an email format.";
            }
        }

        //check name
        if (empty($_POST["namely"])) {
            $errors['namely'] = "A name is required <br/>";
        }else{
            $name = htmlspecialchars ($_POST['namely']);
            if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
                $errors['namely'] = "Name must be letters and spaces only"; 
            }

        }
         
        //check address
        if (empty($_POST["address"])) {
            $errors["address"] = "An address is required <br/>";
        }else{
            $address = htmlspecialchars ($_POST['address']);
            //using regexp with if
            if (!preg_match("/^([a-zA-Z0-9\s.,#-]+)(,\s*[a-zA-Z0-9\s.,#-]*)*$/", $address)) {
                $errors["address"] = "Address must be comma seperated"; 
            }

        }

        //checking for errors & redirecting
        if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			// escape sql chars
			$email = mysqli_real_escape_string($d_connect, $_POST['email']);
			$name = mysqli_real_escape_string($d_connect, $_POST['namely']);
			$address = mysqli_real_escape_string($d_connect, $_POST['address']);

			// create sql
			$sql = "INSERT INTO users(username,email) VALUES('$name','$email')";

			$result = mysqli_query($d_connect, $sql);

            if ($result) {
                echo "Data saved successfully";
            } else {
                echo "Error saving data: " . mysqli_error($d_connect);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="menss.css">

</head>
<body>
<?php include_once "navbar.php";?>
 <section class="container grey-text">
    <h4 class="center">Add your name</h4>
    <form class="white loll" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label>Your Email:</label>
        <input type="text" name="email" value=<?php echo $email?>>
        <div class="red-text"><?php echo $errors["email"]?></div>

        <label>Your Name:</label>
        <input type="text" name="namely" value=<?php echo $name?>>
        <div class="red-text"><?php echo $errors["namely"]?></div>

        <label>Your Address (comma separated):</label>
        <input type="text" name="address" value=<?php echo $address?>>
        <div class="red-text"><?php echo $errors["address"]?></div>

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn z-depth-0">
        </div>
    </form>
 </section>
<?php include_once "footer.php"; ?>
</body>
</html>