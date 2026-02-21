<?php
include "config.php";

if(isset($_POST['register'])){

    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO students (full_name, email, password)
            VALUES ('$name', '$email', '$password')";

    if($conn->query($sql) === TRUE){
        echo "Registration Successful! <a href='login.php'>Login Here</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Register</h2>
<form method="POST">
    <input type="text" name="full_name" placeholder="Full Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="register">Register</button>
</form>

<a href="login.php">Already have account? Login</a>

</body>
</html>