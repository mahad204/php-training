<?php
$peopleOne = ["Abdi ","Abdi1 ","Abdi2"];
foreach ($peopleOne as $people) {
    echo $people;
}

$blogs = [
    ['title'=>'Mario party','author'=>'mario','content'=>'lorem','likes'=>30],
    ['title'=>'Luigi party','author'=>'luigi','content'=>'lorem','likes'=>20],
    ['title'=>'Sonic party','author'=>'sonic','content'=>'lorem','likes'=>10]
];
foreach ($blogs as $blog) {
    echo $blog['title'] . ' - ' . $blog['author'];
    echo '<br />';
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
    <h1>Blogs</h1>
    <ul>
        <?php foreach($blogs as $blog){?>
        <h1><?php echo $blog['title'];?></h1>
        <h2>Host:<?php echo strtoupper ($blog['author']);?></h2>
        <?php }?>
    </ul>
</body>
</html>