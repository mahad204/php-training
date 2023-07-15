<?php
$selected = "profile";
switch ($selectd) {
    case 'profile':
        echo "You viewed the profile";
        break;
    case 'reports':
        echo "You viewed the report";
        break;
    default:
        echo "Page not found";
        break;
}
?>