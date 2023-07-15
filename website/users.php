<?php
    //connect to the database
    $d_connect = new mysqli("localhost","madi","test123","php-one");

    // //check connection
    // if($d_connect->connect_error){
    //     echo $d_connect->error;
    // }else {
    //     echo "Connection succesful";
    // }

   // write query for all the users
    $sql="SELECT * FROM users ORDER BY created_at;";

    //make the query and get result
    $result=$d_connect->query($sql);
    
    //fetch the reulting rows as an array
    //1 Prints only the first row
    // $users=mysqli_fetch_assoc($result);
    // print_r($users)

    //2
    // while ($users = mysqli_fetch_assoc($result)) {
    //      print_r(json_encode($users));
    // }

    //3 Prints all users
    $users = array();
    while ($user = mysqli_fetch_assoc($result)) {
        $users[] = $user;
    }

    //print_r(explode('@',$users[0]['email']));//Display the email as [0]malawax and [1]gmail.com

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
    <!-- Outputting from database to page -->
<?php include_once "navbar.php";?>
    <div class="container">
        <div class="row">
            <?php foreach ($users as $user) {?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($user['username'])?></h6>
                            <div><?php echo htmlspecialchars($user['email'])?></div>
                        </div>
                        <div class="card-action right-align">
                            <a href="profile.php?id=<?php echo $user['id']?>">Profile</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
<?php include_once "footer.php"; ?>
</body>
</html>