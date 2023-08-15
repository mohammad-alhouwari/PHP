<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $apiUrl = "https://64bbac6a7b33a35a4446905c.mockapi.io/tasks";

    $data = array(
        "task" => $_POST["newTask"],
        "id" => uniqid() // Generate a unique ID for the new task
    );

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

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
