<html>
<head>
  <title>Olivia's Marketplace</title>
</head>
<body>
<h1>Olivia's Marketplace</h1>
<?php




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
echo "Connected successfully";


$sql = "UPDATE productinfo
        SET quantity = quantity - 1";
$result = $conn->query($sql);

if ($result) {
    echo  $conn->affected_rows." product was deleted from inventory.";
} else {
    echo "An error has occurred.  The item was not deleted.";
}




$conn->close();
?>

<h3><a href="adminindex.php">back</a></h3>
</body>
</html>
