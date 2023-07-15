
<?php
    include_once 'db_connect.php';

    $errors = array('email'=>'',"namely"=>"","password"=>"","confirm"=>"");
    // if (isset($_GET['submit'])) {
    //     echo $_GET['email'];
    //     echo $_GET['namely'];
    //     echo $_GET['password'];
    // }
    if (isset($_POST['signup'])) {
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
         
        //check password
        if (empty($_POST["password"])) {
            $errors["password"] = "Password is required <br/>";
        }else{
            $password = htmlspecialchars ($_POST['password']);
            //using regexp with if
            if (!preg_match("/^([a-zA-Z0-9\s.,#-]+)(,\s*[a-zA-Z0-9\s.,#-]*)*$/", $password)) {
                $errors["password"] = "password must be comma seperated"; 
            }

        }

        //Confrim password
        if (empty($_POST["confirm"])) {
            $errors["confirm"] = "Confirm Password field cannot be empty.<br>";
        }else{
            $confirm = htmlspecialchars($_POST['confirm']);
            if ($password != $confirm) {
                $errors["confirm"] = "Confirm Password does not match the given one.";
            }
        }



        // Getting the form values
        $email = mysqli_real_escape_string($d_connect, $_POST['email']);
        $name = mysqli_real_escape_string($d_connect, $_POST['namely']);
        $password = (mysqli_real_escape_string($d_connect, $_POST['password']));
        // $password = password_hash($password, PASSWORD_DEFAULT);

        //insert users
        $sql ="INSERT INTO users ( email, username,password) VALUES('$email','$name','$password')";
        if ($d_connect->query($sql) === TRUE) {
            header('Location: home-page.php');
            exit();
        } else {
            echo 'Error inserting data: ' . $d_connect->error;
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
    
</head>
<body>
<?php include_once "navbar.php"; ?>
<!-- Signup form -->
<section class="conatiner grey-text">
    <h4 class="center">SignUp Now</h4>
    <form class="white loll" action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label>Your Email:</label>
        <input type="text" name="email" value=<?php echo $email?>>
        <div class="red-text"><?php echo $errors["email"]?></div>

        <label>Your Name:</label>
        <input type="text" name="namely" value=<?php echo $name?>>
        <div class="red-text"><?php echo $errors["namely"]?></div>

        <label>Your password:</label>
        <input type="password" name="password">
        <div class="red-text"><?php echo $errors["password"]?></div>

        <label>Confirm Password:</label>
        <input type="password" name="confirm">
        <div class="red-text"><?php echo $errors["confirm"]?></div>

        <div class="center">
            <input type="submit" name="signup" value="Signup" class="btn z-depth-0">
        </div>
    </form>
 </section>
<?php include_once "footer.php"; ?>
</body>
</html>
<!-- <?php
// if (isset($_POST['signup'])) {

//     //Getting the form values
//     $username =  $_POST['username'];
//     echo "<br>";
//     $password =  $_POST['password'];

//     //connect to the database
//     include_once 'db-connect.php';

//    //select the user
//    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//    $result = $database_connection->query($sql);
// //    var_dump($result);
//    if ($result->num_rows > 0) {
//     $_SESSION['username'] = $username;
//     header("Location: dashboard.php");
//    }else{
//     echo "User not available";
//    }
// }
?> -->