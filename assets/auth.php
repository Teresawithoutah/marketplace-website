<?php 
session_start();
?>

<?php
//&& $_SESSION['UserUsername'])
if (isset($_SESSION['UserUsername'])) {
    echo file_get_contents("home.php");
}elseif (isset($_SESSION['EmployeeUsername'])) {
    include('finalproject/manager/adminindex.php');
}else{
    echo 'try again';
}
