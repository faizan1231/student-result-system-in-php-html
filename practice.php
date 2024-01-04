<?php
// PHP code to handle login authentication

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate credentials (for demonstration purposes, hardcoded credentials are used)
    $valid_username = "student123";
    $valid_password = "password123";

    // Check if the entered credentials match the hardcoded values
    if ($username === $valid_username && $password === $valid_password) {
        // Start a session and store the username for future use
        session_start();
        $_SESSION["username"] = $username;

        // Redirect to the student panel page after successful login
        header("Location: student_panel.php");
        exit();
    } else {
        // Invalid credentials, redirect back to the login page with an error message
        header("Location: lg.php?error=invalid_credentials");
        exit();
    }
} else {
    // If accessed directly without form submission, redirect to the login page
    header("Location: lg.php");
    exit();
}
?>
