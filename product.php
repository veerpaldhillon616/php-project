<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gold Star Fitness</title>
    <link rel="stylesheet" href="css/styles.css">


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
	<div id="containeritem">
		            <?php require ('productfetching.php');?>
</div>

<footer>
		<ul>
			<li><a href="http://www.facebook.com/"><img src="images/facebook.png" alt ="fbimg"></a></li>
			<li><a href="http://www.instagram.com/"><img src="images/instagram.png" alt="instaimg"></a></li>
			<li><a href="http://www.youtube.com/"><img src="images/youtube.png" alt="youtubeimg"></a></li>
		</ul>
        <p>© 2019 by Gold Star Fitness</p>	
</footer>
</body>
</html>
