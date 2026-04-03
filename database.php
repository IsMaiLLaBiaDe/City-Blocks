<?php

// 1. Database Configuration - REPLACE THESE WITH YOUR ACTUAL CREDENTIALS
$servername = "localhost";
$dbusername = "root"; // Database username
$dbpassword = "";     // Database password
$dbname = "city-blocs";

// 2. Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

