<?php
// Simple processing and display of submitted form data
$name    = htmlspecialchars($_POST['name'] ?? '');
$email   = htmlspecialchars($_POST['email'] ?? '');
$phone   = htmlspecialchars($_POST['phone'] ?? '');
$course  = htmlspecialchars($_POST['course'] ?? '');
$gender  = htmlspecialchars($_POST['gender'] ?? '');
$address = nl2br(htmlspecialchars($_POST['address'] ?? ''));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Application Submitted</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <h1>Application Submitted Successfully</h1>
</header>

<main>
  <section class="card">
    <h2>Entered Details</h2>
    <table class="biodata-table">
      <tr><th>Full Name</th><td><?php echo $name; ?></td></tr>
      <tr><th>Email</th><td><?php echo $email; ?></td></tr>
      <tr><th>Mobile No.</th><td><?php echo $phone; ?></td></tr>
      <tr><th>Course</th><td><?php echo $course; ?></td></tr>
      <tr><th>Gender</th><td><?php echo $gender; ?></td></tr>
      <tr><th>Address</th><td><?php echo $address; ?></td></tr>
    </table>
    <p style="margin-top:10px;">Thank you for registering. We will contact you soon.</p>
    <a href="index.html" class="back-link">Submit Another Response</a>
  </section>
</main>

<footer>
  <p>&copy; 2025 Online Application</p>
</footer>
</body>
</html>
