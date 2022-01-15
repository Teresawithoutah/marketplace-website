<html>
<head>
  <title>Olivia's Marketplace Entry Results</title>
</head>
<body>
<h1>Olivia's Marketplace Entry Results</h1>
<?php


$productname = $_POST['productname'];
$productid = $_POST['productid'];
$price = $_POST['price'];
$category = $_POST['category'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];


if (!$productname || !$productid || !$price || !$category || !$quantity|| !$description) {
   echo "You have not entered all the required details.<br />"
        ."Please go back and try again.";
   exit;
}

  if (!get_magic_quotes_gpc()) {
    $productname = addslashes($productname);
    $productid = addslashes($productid);
    $price = doubleval($price);
    $category = addslashes($category);
    $quantity = addslashes($quantity);
    $description = addslashes($description);
  }

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


$sql = "insert into productinfo (productname, productid, price, category, quantity, Description) values ('".$productname."', '".$productid."', '".$price."','".$category."','".$quantity."','".$description."')";
$result = $conn->query($sql);

if ($result) {
    echo  $conn->affected_rows." product inserted into database.";
} else {
    echo "An error has occurred.  The item was not added.";
}


$sql = "insert into inventory(productid, quantity)
select productid, quantity  
from productinfo ";
$result2 = $conn->query($sql);

if ($result2) {
    echo  $conn->affected_rows."klklk product inserted into database.";
} else {
    echo "oops";
}

$conn->close();
?>

<h3><a href="adminindex.php">back</a></h3>
</body>
</html>
