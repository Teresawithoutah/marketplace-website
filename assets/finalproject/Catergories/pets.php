<?php 
session_start();
?>

<?php
if (isset($_SESSION['UserUsername'])) {
?> <!DOCTYPE html>
<html lang="en">
<head>
  <title>Olivia's Marketplace</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.2;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  .company{
      font-size:100px;
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  }
  .company2{
      font-size:20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #022B66;
    font-size: 50px;
  }
  .logo {
    color: #022B66;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #022B66;
  }
  .carousel-indicators li {
    border-color: #022B66;
  }
  .carousel-indicators li.active {
    background-color: #022B66;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #022B66; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #022B66;
    background-color: #fff !important;
    color: #022B66;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #022B66 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
 

  .navbar {
    margin-bottom: 0;
    background-color: #022B66;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #022B66 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
 

  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  
  .parallax {
  /* The image used */
  background-image: url("img/isopod2.jpg");
    opacity: 0.8;
  /* Set a specific height */
  min-height: 650px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a class="navbar-brand" href="../../home.php">Olivia's Marketplace</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
           <li><a href="../../home.php">All Items</a></li>
        <li><a href="apparel.php">Apparel</a></li>
        <li><a href="homedecor.php">Home Decor</a></li>
        <li><a href="plushies.php">Plushies</a></li>
        <li><a href="accessories.php">Accessories</a></li>
        <li><a href="pets.php">Pets</a></li>
       </ul>
       <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
        </button>
        
    
    </div>
  </div>
</nav>




<div style="height:150px;">
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8"><br>
    <br><br>
      <h2>Pets</h2><br>
     
    
    <?php
    $servername = "localhost"; 
   $username = "jenkeo1_admin"; 
   $password = "admintest123!"; 
   $dname = "jenkeo1_finalproject";


    $conn = new mysqli($servername, $username, $password, $dname);
    
  $sql = "select * from productinfo where category='Pets'";
    $result = $conn->query($sql);
    
    $num_results = $result->num_rows;

  for ($i=0; $i <$num_results; $i++) {
     $row = $result->fetch_assoc();
     echo "<p><strong>".($i+1).". Product Name: ";
     echo htmlspecialchars(stripslashes($row['productname']));
     echo "</strong><br />Product ID: ";
     echo stripslashes($row['productid']);
     echo "<br />Picture: ";
     echo stripslashes($row['picture']);
     echo "<br />Price: ";
     echo stripslashes($row['price']);
      echo "<br />Category: ";
      echo stripslashes($row['category']);
     echo "</p>";
       //HTML IN PHP
     echo "<form action='cart.php' method='post'>
    <input type='submit' name='addtocart' value='Add to Cart' /> </form>";
     echo "</p>";
  }
    $conn->close();
    ?>
    </div>
    
  </div>
</div>
</div>



</body>
</html><?php;
}
else{
    echo 'You are not logged in.<br />';
}
?> 


