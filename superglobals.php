<?php
//Superglobals are special variable arrays in php and we can access these variables anytime
//For $_SERVER everything in the square brackets should be in CAPS
echo $_SERVER["SERVER_NAME"] . '<br/>';//localhost
echo $_SERVER["REQUEST_METHOD"] . '<br/>';//GET
echo $_SERVER["SCRIPT_FILENAME"] . '<br/>';//Filename /opt/lampp/htdocs/start-php/superglobals.php
echo $_SERVER["PHP_SELF"] . '<br/>';//Path of file /start-php/superglobals.php
echo $_SERVER['QUERY_STRING'] . '<br/>';//The query string is the part of the URL that comes after the question mark (?). It contains key-value pairs that are used to pass information to the script. For example, if the URL is http://example.com/index.php?name=John&age=20, then the $_SERVER['QUERY_STRING'] variable will contain the string "name=John&age=20".

?>