<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $bagelType = test_input($_POST["bagel-type"]);
    $quantity = test_input($_POST["quantity"]);

    // Build email message
    $subject = "New Bagel Order";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Bagel Type: $bagelType\n";
    $message .= "Quantity: $quantity\n";

    // Send confirmation email (replace your-email@example.com with the desired email address)
    $to = "erinlee316@gmail.com";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Redirect to the order success page
    header("Location: order-success.html");
    exit();
} else {
    // If the form is not submitted via POST, redirect to the order form
    header("Location: error.php");
    exit();
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>