<?php session_start();?>
<?php
unset($_SESSION['id']);
header("Location: index.php");
?>