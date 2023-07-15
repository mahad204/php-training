<?php 
    session_start();
    $name = $_SESSION['username'];
    if ($_SERVER['QUERY_STRING'] == "") {
        unset($_SESSION['username']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script> 
</head>
<body class = "grey lighten-3">
   
        <ul id = "dropdown" class = "dropdown-content">
            <li><a href = "profile.php">Profile</a></li>
            <li><a href = "#">Viewstatements</a></li>
            <li><a href = "#">Apply Loan</a></li>
            <li class = "divide"></li>
            <li><a href = "logout.php">Logout</a></li>
        </ul>
    <nav class=" white z-depth-0">
        <div class = "container top-nav">
            <ul id = "nav-mobile" class=" acol nav-link">
                <li><a href="index.php" >Home</a><li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contacts.php">Contact</a></li>
                <li class = "welcome" >Hello <?php echo htmlspecialchars($name)?></li>
                <li><a class = "dropdown-button" href = "#" data-activates = "dropdown">Profile<i class = "mdi-navigation-arrow-drop-down right"></i></a></li>
            </ul>
        </div>
    </nav>
</body>
</html>