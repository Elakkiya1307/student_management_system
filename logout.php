<?php

session_start();
session_destroy();   //destroying the session and logging out the user
header("location:login.php");
?>