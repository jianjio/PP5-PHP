<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Gamedev');
define('DB_PASS', 'kym123');
define('DB_NAME', 'feedbackapp');


// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
