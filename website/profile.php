<?php session_start();?>
<?php
    include_once "db_connect.php";
    ////check get request id parameter
    // if(isset($_GET['id'])) {
    //     $id = mysqli_real_escape_string($d_connect,$_GET["id"]);
    //     //Make sql
    //     $sql = "SELECT * FROM users WHERE id = $id";
    //     //Get result from query
    //     $result=$d_connect->query($sql);
    //     //Fetch result in array format
    //     if ($result) {
    //         // Check if any rows were returned
    //         if ($result->num_rows > 0) {
    //             $user = mysqli_fetch_assoc($result);
    //             print_r($user);
    //         } else {
    //             // echo "No user found with the provided ID.";
    //         }
    //     } else {
    //         echo "Error executing the query: " . $d_connect->error;
    //     }
    // }

    if(isset($_POST['delete'])) {
        $user_to_delete = mysqli_real_escape_string($d_connect,$_POST['user_to_delete']);
        // Make SQL to delete selected record
        $sql="DELETE FROM users WHERE id=$user_to_delete";
        // Execute Query and check for errors. If no error, redirect back to index page after deleting
        if ($d_connect->query($sql)) {
            header("Location:index.php");
        }else {
            echo "Failed";
        }
    }

    if(isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        //Make sql
        $sql = "SELECT * FROM users WHERE id = $id";
        //Get result from query
        $result=$d_connect->query($sql);
        //Fetch result in array format
        if ($result) {
            // Check if any rows were returned
            if ($result->num_rows > 0) {
                $user = mysqli_fetch_assoc($result);
                // print_r($user);
            } else {
                // echo "No user found with the provided ID.";
            }
        } else {
            echo "Error executing the query: " . $d_connect->error;
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
<?php include_once "navbar.php";?>
    <div class="container center grey-text">
        <div class="card z-depth-0">
            <div class="card-content center">
                <?php if($user): ?>
                    <h4>Profile</h4>
                    <h5><?php echo $user['username']; ?></h5>
                    <h6>Email</h6>
                    <p><?php echo $user['email']; ?></p>
                    <h6>Created at</h6>
                    <p><?php echo date($user['created_at']); ?></p>

                    <!-- Deleting a user account -->
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                        <input type="hidden" name="user_to_delete" value="<?php echo $user['id']?>">
                        <input type="submit" name="delete" value="Delete Account" class="btn z-depth-0">
                    </form>
            </div>
        </div>
        <?php else: ?>
			    <h5>No such user exists.</h5>
		        <?php endif ?>
    </div>
<?php include_once "footer.php";?>
</body>
</html>