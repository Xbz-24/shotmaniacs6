<?php
// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $message = $_POST['message'];

    // Perform any backend processing here, e.g., storing data in a database

    // Return a response (e.g., success message)
    $response = [
        'status' => 'success',
        'message' => 'Form submitted successfully!'
    ];
    echo json_encode($response);
    exit;
}

// Handle other requests (GET, etc.)
// Add more backend logic as needed

// Serve the HTML file
include 'index.html';
?>
