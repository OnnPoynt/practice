<?php
include('connection.php');

if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['phone_number']) && isset($_GET['company'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $ph_no = $_GET['phone_number'];
    $company = $_GET['company'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful</title>
</head>

<body>
    <h1>Login Successful!!!</h1>
<br>
<br>
<br>
    <h1>Welcome, <?php echo $_GET['name']; ?>!</h1>
    <h2>here are your details:</h2>
    <br>
    <p>Email: <?php echo $_GET['email']; ?></p>
    <p>Phone Number: <?php echo $_GET['phone_number']; ?></p>
    <p>Company: <?php echo $_GET['company']; ?></p>

</body>

</html>
