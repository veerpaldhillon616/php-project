<?php
session_start(); 
require('db.php');
$q = "select * from products";
$t= mysqli_query($dbc,$q);
$row = mysqli_fetch_array($t);
while($row = mysqli_fetch_array($t, MYSQLI_ASSOC)){
    echo '<div class="col-md-3 col-sm-6 m-4"> <div class="thumbnail">';
      echo '<img class="img-fluid" src ="data/'.$row['image'].'" alt="Image">';
	  echo '<h4>Name of Product:</h4>'.$row['name'];
    echo '<h4> Description:</h4>'.$row['description'];
    echo '<h4> Quantity </h4>'.$row['quantity'];   
                    echo '<class="line">
                        <div class="col-md-6 col-sm-6">';
                            echo '<h4 class="price">Price</h4>'.$row['price'];
                        echo '</div>
                        <div class="col-md-6 col-sm-6" style="width:400px";>
                            <a href="cart.php?add='.$row['Product_ID'].'"> <button class="btn btn-info right" style = "margin-left:220px;"> BUY ITEM</button><br></a>		
                    </div><br>
										<hr>
                </div>
            </div>';	
} 
?>