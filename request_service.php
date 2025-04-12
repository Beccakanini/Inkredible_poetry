<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service_name = $_POST['service_name'];
    
    // Database connection
    $servername = "sql113.infinityfree.com";
    $username = "if0_38731258";
    $password = "Becca2025";
    $dbname = "if0_38731258_inkredible_poetry";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data
    $sql = "INSERT INTO service_requests (name, email, service_name) VALUES ('$name', '$email', '$service_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you! Your service request has been submitted.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
