<?php
$host="localhost";
$user="root";
$pas="";
$dbname="crud";

$conn=mysqli_connect($host,$user,$pas,$dbname);
if(!$conn)
{
    die("something it wrong");
}
?>