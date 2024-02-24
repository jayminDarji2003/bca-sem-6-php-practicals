<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form has been submitted
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["password-confirm"])) {
        // Retrieve form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordConfirm = $_POST["password-confirm"];

        // Output the form data
        echo "Welcome, $name <br />";
        echo "Email: $email <br />";
        echo "Password: $password <br />";
        echo "Confirmed Password: $passwordConfirm <br />";
    } else {
        // Handle case where required keys are not set
        echo "Error: Required form fields are missing.";
    }
} else {
    // Handle case where form has not been submitted
    echo "Error: Form has not been submitted.";
}
?>
