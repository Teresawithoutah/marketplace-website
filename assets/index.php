<?php
session_start();
?>

<!doctype html>

<head>

    <!-- Basics -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Login</title>

    <!-- CSS -->

    <link rel="stylesheet" href="login.css">


</head>
<body>

    <!-- Begin Page Content -->

    <div id="container">

        <form method="post" action="login-1.php">

            <label for="username">Username:</label>

            <input type="text" name="UserUsername">
        <input type="hidden" name="EmployeeUsername">

            <label for="password">Password:</label>


            <input type="hidden" name="EmployeePw">

            <input type="password" name="UserPw">

            <div id="lower">

             <a href="finalproject/signup.html"> <input type="button" value="Customer Signup"></a>

                <input type="submit" value="Login">

      <a href="finalproject/manager/adminsignup.html"> <input type="button" value="Admin Signup"></a>
            </div><!--/ lower-->

        </form>



    </div><!--/ container-->



    <!-- End Page Content -->

</body>

</html>