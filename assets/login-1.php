<?php
session_start();
?>


<?php


$UserUsername  = $_POST['UserUsername'];
$UserPw = $_POST['UserPw'];

$EmployeeUsername = $_POST['EmployeeUsername'];



if (!$UserUsername || !$UserPw ) {
   echo ("You have not entered all the required details.<br />"
        ."Please go back and try again.");
   exit;
}


  if (!get_magic_quotes_gpc()) {
    $UserUsername = addslashes($UserUsername);
    $UserPw = addslashes($UserPw);
     $EmployeeUsername = addslashes($EmployeeUsername);


  }
  
  

// Establish connection to Database

$servername = "localhost";
$username = "jenkeo1_admin";
$password = "admintest123!";
$dname = "jenkeo1_finalproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo ("Connected successfully");


// CHECK IF ACCOUNT ALREADY EXISTS
$sql = "select * 
        from users 
        where UserUsername = '".$UserUsername."' and UserPw = '".$UserPw."'";

$result = $conn->query($sql);



  if ($result->num_rows>0) {
      $_SESSION['UserUsername'] = $UserUsername;
      include("auth.php");
      
     return true;
}



$sql = "select * 
        from employee 
        where EmployeeUsername = '".$UserUsername."' and EmployeePw = '".$UserPw."'";

$result2 = $conn->query($sql);


  if ($result2->num_rows>0) {
      $_SESSION['EmployeeUsername'] = $EmployeeUsername;
      include("auth.php");
      
     return true;
   
  } else {
     echo ('Could not log you in.');
  }
  
$conn->close();
?>
</body>
</html>
