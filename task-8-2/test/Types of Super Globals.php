<?php
// Example to demonstrate super globals
echo "Server IP: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Client IP: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "Script File Name: " . $_SERVER['SCRIPT_NAME'] . "<br>";
?>
