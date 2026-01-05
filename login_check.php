<?php

session_start();       //session start


error_reporting(0);          //to hide connection error messages

$host = "localhost";
$user = "root";
$password = "";
$db = "studentcollege";


$data = mysqli_connect($host, $user, $password, $db);

if (!$data) {
    die("connection failed");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["username"];
    $pass = $_POST["password"];
}

$sql = "select * from std where username='" . $name . "' and password='" . $pass . "' ";

$result = mysqli_query($data, $sql);

$row = mysqli_fetch_array($result);

if ($row["usertype"] == "admin") {         //if usertype is admin means redirecting the page to admin_home page
  
    $_SESSION['username'] = $name;
    $_SESSION['usertype'] = "admin";


    header("location:admin_home.php");
} 

elseif ($row["usertype"] == "student") {   //if usertype is student means redirecting the page to student_home page
    $_SESSION['username'] = $name;
    $_SESSION['usertype'] = "student";
    header("location:student_home.php");
} 

else {                   //if username or password is incorrect means redirecting the page to login page with error message
    $message = "username or password incorrect";

    $_SESSION['loginmessage'] = $message;
    header("location:login.php");
}
