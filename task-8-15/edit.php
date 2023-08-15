<?php
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]) && isset($_GET["editedTask"])) {
    $taskId = $_GET["id"];
    $editedTask = $_GET["editedTask"];

    $apiUrl = "https://64bbac6a7b33a35a4446905c.mockapi.io/tasks/" . $taskId;

    $data = array(
        "task" => $editedTask
    );

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    $response = curl_exec($ch);

    if ($response === false) {
        echo "Error: " . curl_error($ch);
    } else {
        header("Location: index.php");
        exit();
    }

    curl_close($ch);
}
?>
