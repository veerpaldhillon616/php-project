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
                <h1>Discover the Power of Training and Build your Body</h1>
                <h4>Challenge yourself at gym with your daily dose of fitness using functional movements performed at high intensity.  </h4>
               
	</div>
<?php

$fnameError = $lnameError = $emailError  = "";
$fname = $lname = $email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameError = "First Name is required";
  } 
	else 
	{
    $fname = test_input($_POST["fname"]);
  }
    
  if (empty($_POST["lname"])) {
    $lnameError = "Last Name is required";
  } 
	else 
	{
    $lname = test_input($_POST["lname"]);
  }
	
  
if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    $email = test_input($_POST["email"]);
}
else
{
    $emailError = "Please Enter Valid EmailID ";
    
}
    if(!empty($fname) && !empty($lname) && !empty($email)){
        echo "<h1>Congrats Your Order has been Placed</h1>";
    }   
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <section class="order-form my-4 mx-4">
        <div class="container pt-4">

            <div class="row">
                <div class="col-12">
                    <h1>Checkout Form</h1>
                    <hr class="mt-1">
                </div>
                <div class="col-12">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="row mx-4">
                            <div class="col-12 mb-2">
                                <label class="order-form-label">Name</label>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input class="order-form-input" type="text" name="fname" placeholder="First Name">
                                <span class="error"> <?php echo $fnameError;?></span>
                            </div>
													 <div class="col-12 mb-2">
                                <label class="order-form-label">Last</label>
                            </div>
                            <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                                <input class="order-form-input" type="text" name="lname" placeholder="Last Name">
                                <span class="error"> <?php echo $lnameError;?></span>
                            </div>
                        </div>

                        <div class="row mt-3 mx-4">
                            <div class="col-12">
                                <label class="order-form-label">Email:</label>
                            </div>
                            <div class="col-12">
                                <input class="order-form-input" type="text" name="email" placeholder="EmailID">
                                <span class="error"><?php echo $emailError;?></span>
                            </div>
                        </div>
											<div class="row mt-3 mx-4">
                            <div class="col-12">
                                <label class="order-form-label">Payment Mode:</label>
                            </div>
                            <div class="col-12">
                               <input list="browsers" name="browser" id="browser">
  <datalist id="browsers">
    <option value="Debit">
    <option value="Visa">
    <option value="Cash">
    <option value="Master Card">
    
  </datalist>
                       
                            </div>
                        </div>
											  
											
											<div class="row mt-3">
                            <div class="col-12">
                                <button type="submit" id="btnSubmit" name="submit" value="Submit" class="btn btn-dark d-block mx-auto btn-submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    

</body>

</html>

