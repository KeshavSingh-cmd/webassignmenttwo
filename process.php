<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $course = htmlspecialchars($_POST['course']);

    // Generate the formatted HTML response
    echo '
    <div class="success-card">
        <h2 class="success-header">Registration Successful!</h2>
        <p>Thank you for applying. Here are your details:</p>
        
        <div class="data-row">
            <strong>Name:</strong> ' . $name . '
        </div>
        <div class="data-row">
            <strong>Email:</strong> ' . $email . '
        </div>
        <div class="data-row">
            <strong>Selected Course:</strong> ' . $course . '
        </div>
        
        <br>
        <button onclick="location.reload()">Register Another</button>
    </div>
    ';
} else {
    echo "Invalid Request";
}
?>
