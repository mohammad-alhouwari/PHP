<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num1"]) && isset($_POST["num2"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Check for division by zero
    if ($num2 == 0) {
        $result = "Cannot divide by zero";
    } else {
        $result = $num1 / $num2;
        
    }
    $_SESSION['calculator_result'] = $result;
    header("Location: index.php");
    exit;
}
?>
