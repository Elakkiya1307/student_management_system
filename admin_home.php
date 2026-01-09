<<<<<<< HEAD
<?php
session_start();
if (!isset($_SESSION['username'])) {   //if username is not set means redirecting the page to login page
    header("location:login.php");
} elseif ($_SESSION['usertype'] != "admin") { //if we enter student_home.php in my browser means redirecting the page to login page for security purpose
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="admin.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Admin dashboard</title>
</head>

<body>

    <header class="header">
        <label>
            <a href="">Admin dashboard</a>
        </label>

        <div class="log_out">
            <a href="logout.php" class="btn btn-primary" role="button">Logout</a>
        </div>
        </div>

    </header>

    <aside>
        <ul>
           <li>
             <a href="">Admission</a>
           </li> 
           <li>
             <a href="">Add student</a>
           </li> 
           <li>
             <a href="">View student</a>
           </li> 
           <li>
             <a href="">Add teacher</a>
           </li> 
           <li>
             <a href="">Add courses</a>
           </li> 
           <li>
             <a href="">view courses</a>
           </li> 
        </ul>
    </aside>

    <div class="content">
      <h1>Sidebar Accordion</h1>
      <p>In this example, we have added an accordion and a dropdown menu inside the sid enavigation<br>
      Click on both to understand how they differ from each other. The acordion will push down the content, while the dropdown lays over the content</p>

      <input type="text" class="">
    </div>
</body>

=======
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
>>>>>>> e58f0a3a7f6a987321b30431bae896075c77402e
</html>