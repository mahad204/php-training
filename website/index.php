<?php session_start();?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Check if the user is logged in based on the presence of the user ID
if (isset($_SESSION['id'])) :?>
    <!-- // User is logged in, show full content -->
    <?php include_once "navbar.php"; ?>
    <h1>Welcome To My Website</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure minima praesentium blanditiis repellendus dolorem, similique excepturi sint repudiandae, eaque nemo voluptatem unde sed dolore aut iste? Modi, veritatis doloremque. Laboriosam.</p>
    <?php include_once "footer.php"; ?>
<?php else :?>
    <!-- // User is not logged in, show login section -->
    <?php include_once "login.php"; ?>
<?php endif ?>
</body>
</html>