<?php

$curl = curl_init();

// Prepare the data array
$data = array(
    "name" => "Product",
    "dataType" => "TEXT",
    "placeholder" => "Name of your product"
);

// Initialize cURL with the required options
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://rest.gohighlevel.com/v1/custom-fields/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30, // Adjusted timeout for better reliability
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($data), // Properly encode the data
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJsb2NhdGlvbl9pZCI6Imo4VFlSZm81R1VtdTF2Qk1lZHdmIiwidmVyc2lvbiI6MSwiaWF0IjoxNzE1MjUyODAzNDE1LCJzdWIiOiI4V1ZCUmxTRzRzTWkyYk1mUEJjdCJ9.d6PwT9dCLD1ZkmvSAI2Q-MjUqux64iPpu0u93Ax1zm8', // Replace with your actual token
        'Content-Type: application/json' // Specify the content type
    ),
));

// Execute the request and capture the response
$response = curl_exec($curl);

// Capture any cURL errors
$err = curl_error($curl);

// Close the cURL session
curl_close($curl);

// Handle the response or errors
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
