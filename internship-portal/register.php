<?php

include "db.php";

$message = "";

if (isset($_POST['register'])) {

    $company_name = $_POST['company_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) {

        $message = "Passwords do not match";

    } else {

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO companies (company_name, email, password)
                VALUES ('$company_name', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {

            $message = "Registration successful";

        } else {

            $message = "Email already exists";

        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Company Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">

    <h2>Company Registration</h2>

    <p><?php echo $message; ?></p>

    <form method="POST">

        <label>Company Name</label>
        <input type="text" name="company_name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>

        <button type="submit" name="register">Register</button>

    </form>

    <p>Already registered?</p>

    <a href="login.php">Login</a>

</div>

</body>
</html>
