<?php
include  'connect.php';
// Define the correct username and password
$correct_username = "rajat";
$correct_password = "ganorkar";

// Check if the form is submitted
if(isset($_POST['submit'])){
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the entered username and password match the correct ones
    if($username === $correct_username && $password === $correct_password){
        // Redirect to a welcome page if login is successful
        header("Location: bostraptable.php");
        exit(); // Always exit after header redirect
    } else {
        // Display an error message if login fails
        echo "<script>alert('Login Failed. Invalid Username or Password!!!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>

<div id="form">
     <h1>Login Form</h1>
     <form action="user.php" method="post">
          <label>Username:</label>
          <input type="text" id="user" name="username"><br><br>
          <label>Password:</label>
          <input type="password" id="pass" name="password"><br><br>

          <input type="submit" id="btn" value="Login" name="submit"  />
     </form>
</div>
    
</body>
</html>