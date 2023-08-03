<!-- PHP Calculator -->
<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
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
?>
<h1>PHP Calculator</h1>
    <form action="calculate.php" method="POST">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <input type="submit" name="operation" value="+">
        <input type="submit" name="operation" value="-">
        <input type="submit" name="operation" value="*">
        <input type="submit" name="operation" value="/">
    </form>
    <?php
    // Check if the result is available in the session
    if (isset($_SESSION['calculator_result'])) {
        $result = $_SESSION['calculator_result'];
        echo "<p>Result: $result</p>";

        // Clear the result from the session after displaying it
        unset($_SESSION['calculator_result']);
    }
    ?>
</body>
</html>
