<!-- process_login.php -->
<?php
session_start();

$valid_username = 'mohammad';
$valid_password = '12345';
$valid_email = 'mohammad@gmail.com';




if (isset($_GET['username']) && isset($_GET['password']) && isset($_GET['email'])) {
    $submitted_username = $_GET['username'];
    $submitted_password = $_GET['password'];
    $submitted_email = $_GET['email'];


    if ($submitted_username === $valid_username && $submitted_password === $valid_password && $submitted_email === $valid_email) {

        $_SESSION['is_logged_in'] = true;
        $_SESSION['username'] = $submitted_username;

        header('Location:main.php');
    
    } else {
        // Invalid credentials, show an error message
        echo "Invalid username or password. <a href='http://localhost/PHP_Tasks/task-8-2/superglobals/login/login.php'>Please try again.</a>";
    }
}
?>
