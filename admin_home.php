<?php
session_start();
if (!isset($_SESSION['username'])) {   //if username is not set means redirecting the page to login page
    header("location:login.php");
}
elseif ($_SESSION['usertype'] != "admin") { //if we enter student_home.php in my browser means redirecting the page to login page for security purpose
    header("location:login.php");  
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
</head>
<body>

<h1>Admin Home</h1>
    <a href="logout.php">Logout</a>

    
</body>
</html>