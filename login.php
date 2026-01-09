<<<<<<< HEAD

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Form</title>

    <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body background="school2.png" class="body_deg">
    <center>
        <h4>
            <?php
            error_reporting(0);              //to show login error message
            session_start();                 // 
            session_destroy();                 //to clear error message after refreshing the page
            echo $_SESSION['loginmessage'];      //displaying error message
            ?>
        </h4>
        <div class="form_deg">
           
            <form action="login_check.php" method="POST" class="login_form">
                <div>
                    <label class="label_deg">username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="label_deg">password</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <input type="submit" name="submit" value="login">
                </div>
        </div>
        </form>
    </center>
</body>
=======
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Form</title>

    <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>
    <center>
        <h4>
            <?php
            error_reporting(0);              //to show login error message
            session_start();                 // 
            session_destroy();                 //to clear error message after refreshing the page
            echo $_SESSION['loginmessage'];      //displaying error message
            ?>
        </h4>
        <div class="form_deg">
            <h1>Login Form</h1>
            <form action="login_check.php" method="POST" class="login_form">
                <div>
                    <label class="label_deg">username</label>
                    <input type="text" name="username">
                </div>

                <div>
                    <label class="label_deg">password</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <input type="submit" name="submit" value="login">
                </div>
        </div>
        </form>
    </center>
</body>
>>>>>>> e58f0a3a7f6a987321b30431bae896075c77402e
