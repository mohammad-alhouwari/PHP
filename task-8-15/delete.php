<?php
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
    $taskId = $_GET["id"];

    $apiUrl = "https://64bbac6a7b33a35a4446905c.mockapi.io/tasks/" . $taskId;

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

    $response = curl_exec($ch);

    if ($response === false) {
        echo "Error: " . curl_error($ch);
    } else {
        header("Location: index.php"); // Redirect back to the main page
        exit();
    }

    curl_close($ch);
}
?>
