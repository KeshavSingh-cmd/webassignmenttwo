<?php

function getPost($key) {
    return isset($_POST[$key]) ? htmlspecialchars(trim($_POST[$key])) : '';
}

$fullName = getPost('fullName');
$email    = getPost('email');
$phone    = getPost('phone');
$course   = getPost('course');
$semester = getPost('semester');
$message  = getPost('message');


if ($fullName === '' || $email === '' || $phone === '' || $course === '') {
    die("Required fields are missing. Please go back and fill the form correctly.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #eef2f7;
            margin: 0;
            padding: 30px;
        }
        .result-container {
            max-width: 700px;
            margin: auto;
            background: #ffffff;
            padding: 30px 35px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-top: 0;
            color: #2c3e50;
        }
        h2 {
            color: #3a5a7a;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
            margin-top: 25px;
        }
        p {
            font-size: 15px;
            line-height: 1.7;
        }
        .label {
            font-weight: 600;
            color: #2c3e50;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background: #4b79a1;
            color: #fff;
            text-decoration: none;
            border-radius: 20px;
            font-size: 14px;
        }
        .back-link:hover {
            background: #355c7d;
        }
    </style>
</head>
<body>

<div class="result-container">
    <h1>Application Submitted Successfully</h1>
    <p>Your details have been recorded. Below is a summary of your application:</p>

    <h2>Personal Information</h2>
    <p><span class="label">Full Name:</span> <?php echo $fullName; ?></p>
    <p><span class="label">Email:</span> <?php echo $email; ?></p>
    <p><span class="label">Phone:</span> <?php echo $phone; ?></p>

    <h2>Academic Information</h2>
    <p><span class="label">Course / Program:</span> <?php echo $course; ?></p>
    <p><span class="label">Semester:</span> <?php echo $semester !== '' ? $semester : 'Not specified'; ?></p>

    <h2>Additional Information</h2>
    <p><?php echo $message !== '' ? nl2br($message) : 'No additional information provided.'; ?></p>

    <a class="back-link" href="index.html">Back to Application Form</a>
</div>

</body>
</html>
