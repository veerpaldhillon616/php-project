<?php
session_start(); 
require("db.php");
 //Reset
 if (isset($_GET['reset']))
 {
 if($_GET["reset"] == 'true')
   {
   unset($_SESSION["qty"]);
   unset($_SESSION["amounts"]); 
   unset($_SESSION["amnt"]);
   unset($_SESSION["total"]); 
   unset($_SESSION["cart"]); 
   unset($_SESSION["name"]);
   unset($_SESSION["img"]);
   }
 }
 //Add the item in cart
 if (isset($_GET["add"]) )
   {
   $i = $_GET["add"];
     if(!isset($_SESSION["qty"][$i])){
         $_SESSION["qty"][$i] =0;
         $_SESSION["amnt"][$i] =0;
         $_SESSION["amounts"][$i] =0;
         $_SESSION["name"][$i] = '';
         $_SESSION["img"][$i] = '';   
     }
   $sql = "SELECT * FROM `products` WHERE `product_id`=$i";
	 $result = mysqli_query($dbc, $sql);
	 $product_data = mysqli_fetch_assoc($result);  
   $qty = $_SESSION["qty"][$i] + 1;
   $_SESSION["amnt"][$i] = $product_data['price'];
   $_SESSION["amounts"][$i] = $product_data['price'] * $qty;
   $_SESSION["name"][$i] =$product_data['name'];
   $_SESSION["img"][$i] =$product_data['image'];
   $_SESSION["cart"][$i] = $i;
   $_SESSION["qty"][$i] = $qty;
 }
//Delete operation
  if ( isset($_GET["delete"]) )
   {
   $i = $_GET["delete"];
   $qty = $_SESSION["qty"][$i];
   $qty--;
   $_SESSION["qty"][$i] = 0;
   $_SESSION["amounts"][$i] = 0;
   unset($_SESSION["cart"][$i]);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gold Star Fitness</title>
    <link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	
</head>
<body>
	<header>
		<h2><a href="index.html"><img src="./images/logo.png" alt="logoimage"></a></h2>
		<nav> 
            <ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About Us </a></li>
			<li><a href="product.php">Products</a></li>
			<li><a href="cart.php">Cart</a></li>
			<li><a href="contactus.html">Contact Us</a></li>
            </ul>
		</nav>
	</header>
	<div class="bodyhero">
                <div class="bg-image"></div>            
	</div>
    <div class="container my-5 border p-4">
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-8">
                <!-- Card -->
                <div class="mb-3">
									<h5><a href="?reset=true">Reset Cart</a></h5>
                    <div class="pt-4 wish-list">
                        
<?php
 if(isset($_SESSION["cart"])) 
 {
 $total = 0;
 foreach ($_SESSION["cart"] as $i ) 
 {
 ?>
		<div class="row mb-4">
    <div class="col-md-5 col-lg-3 col-xl-3">
    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
    <img class="img-fluid w-100" src="data/<?php 
	 echo( $_SESSION["img"][$i] ); ?>" alt="Sample">
                                    <a href="#!">
                                    </a>
                                </div>
                            </div>
             
                            <div class="col-md-7 col-lg-9 col-xl-9 my-3">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5><?php echo( $_SESSION["name"][$i] ); 
																							?></h5>
                                            <p class="mb-2 text-muted text-uppercase small font-weight-bold">Quantity : <?php echo( $_SESSION["qty"][$i] ); ?></p>
                                            <p class="mb-3 text-muted text-uppercase small font-weight-bold">Price : <?php echo( $_SESSION["amnt"][$i] ); ?></p>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <a href="?delete=<?php echo($i); ?>" type="button" class="card-link-secondary small text-uppercase mr-3"><b class="fas fa-trash-alt mr-1"></b>Remove Item </a>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                                            
                        </div>
     <?php
 $total = $total + $_SESSION["amounts"][$i];
 }
 $_SESSION["total"] = $total;
 ?>
                        <hr class="mb-4">
                        <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Whoever said money can’t buy happiness simply didn’t know where to go shopping.</p>
                    </div>
							</div>
            </div>
            <div class="col-lg-4">

                <!-- Card -->
                <div class="mb-3">
                    <div class="pt-4">
                        <h5 class="mb-3">Shopping Cart</h5>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">Total Amount
                                <span><?php echo($total); ?></span>
                            </li>
                            
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                <div>
                                    <strong>The Total Amount </strong>         
                                </div>
                                <span><strong><?php echo($total); ?> CAD</strong></span>
                            </li>
                        </ul>
                        <a href="checkout.php" class="btn btn-primary btn-block">Go to checkout</a>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    <?php
 }
 ?>
</body>

</html>
