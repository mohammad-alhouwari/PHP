<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h2>Simple PHP Calculator</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" id="num1" required>
        <br>
        <label for="operator">Operator:</label>
        <select name="operator" id="operator" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <br>
        <label for="num2">Number 2:</label>
        <input type="text" name="num2" id="num2" required>
        <br>
        <input type="submit" value="Calculate">
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = (float)$_POST['num1'];
        $num2 = (float)$_POST['num2'];
        $operator = $_POST['operator'];
        
        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    $result = "Cannot divide by zero!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Invalid operator!";
                break;
        }
        
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>