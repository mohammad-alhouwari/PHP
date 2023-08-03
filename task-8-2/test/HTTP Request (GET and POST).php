<!-- HTML Form -->

<!-- ---------------------------GET---------------------------- -->

<?php
// The URL you want to send the GET request to
$url = 'https://api.example.com/data';

// Sending GET request and getting the response
$response = file_get_contents($url);

// Displaying the response
echo $response;

echo"<br><br><br>";
?>

<!-- --------------------------POST----------------------------- -->

<?php
// The URL you want to send the POST request to
$url = 'https://api.example.com/submit';

// Data to be sent in the POST request
$data = array(
    'username' => 'john_doe',
    'email' => 'john@example.com',
    'message' => 'Hello, this is a POST request!',
);

// Initialize cURL session
$curl = curl_init($url);

// Set cURL options for POST request
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($curl);

// Check for cURL errors
if(curl_errno($curl)) {
    echo 'cURL error: ' . curl_error($curl);
}
// Close cURL session
curl_close($curl);
// Displaying the response
echo $response;
echo"<br><br><br>";
?>
