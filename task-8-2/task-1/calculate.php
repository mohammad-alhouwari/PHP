<?php
session_start();


if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
    $username = $_SESSION['username'];
    echo "Welcome, $username!";
    echo "<br><a href='logout.php'>Logout</a>";
} else {
    header('Location: login.php');
    exit;
}
echo"<br><br><br>";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["operation"])) {
    $operation = $_POST["operation"];

    $_GLOBALS['num1'] = $_POST["num1"];
    $_GLOBALS['num2'] = $_POST["num2"];

    switch ($operation) {
        case "+":
            header("Location: addition.php");
            break;
        case "-":
            header("Location: subtraction.php");
            break;
        case "*":
            header("Location: multiplication.php");
            break;
        case "/":
            header("Location: division.php");
            break;
        default:
            // Invalid operation, redirect back to the first page
            header("Location: index.php");
            break;
    }
    exit;
}
?>
