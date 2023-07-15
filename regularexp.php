<?php
$name="You are stupid";
$regexp="/stupid/";
if(preg_match($regexp,$name,$match)){
    echo "Match found!:" . $match[0]; //This will be printed if the pattern is matched.
}else {
    echo "Match not found";
}
?>