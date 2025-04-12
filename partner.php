<?php
// Database connection details
    $servername = "sql113.infinityfree.com";
    $username = "if0_38731258";
    $password = "Becca2025";
    $dbname = "if0_38731258_inkredible_poetry";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $message = $_POST['message'];

    $sql = "INSERT INTO partner_with_us (name, email, role, message) 
    VALUES ('$name', '$email', '$role', '$message')";

// Execute the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo "Thank you! Your service request has been submitted.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

// Close the connection
$conn->close();

    // // Recipient email address (change to your own)
    // $to = "beccakanini@gmail.com.com";

    // // Subject of the email
    // $subject = "New Partnership Request";

    // // Email body
    // $body = "You have a new submission from $name ($email) who wants to join as a $role.\n\nMessage: $message";

    // // Headers for the email
    // $headers = "From: $email";

    // // Send the email
    // if (mail($to, $subject, $body, $headers)) {
    //     echo "Thank you for your submission!";
    // } else {
    //     echo "Sorry, something went wrong. Please try again later.";
    // }
}
?>
