<?php
include("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<?php
///print_r($_SESSION['cart']);

?>



<div class="container mt-5">
    <div class = "row">

        <!--this is first product-->
        <div class="col-lg-3">
        <!--cart for product-->
        <form action = "manage_cart.php" method = "POST">
            <div class="card">
                <img src="images/product-1.jpg" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">T-shirt</h5>
                    <p class="card-text">Price: 500 taka</p>
                    <button type = "submit" name = "Add_to_cart" class="btn btn-info">Add to cart</button>

                    <input type = "hidden" name = "Item_name" value = "product1">
                    <input type = "hidden" name = "price" value = "500">

                </div>
                </div>
            </div>
        </form>


<!--second product-->
    <div class="col-lg-3">
        <!--cart for product-->
        <form action = "manage_cart.php" method = "POST">
            <div class="card">
                <img src="images/product-2.jpg" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">T-shirt</h5>
                    <p class="card-text">Price: 1000 taka</p>
                    <button type = "submit" name = "Add_to_cart"class="btn btn-info">Add to cart</button>

                    <input type = "hidden" name = "Item_name" value = "product2">
                    <input type = "hidden" name = "price" value = "1000">

                </div>
                </div>
            </div>
        </form>

        <div class="col-lg-3">
        <!--cart for product-->
        <form action = "manage_cart.php" method = "POST">
            <div class="card">
                <img src="images/product-3.jpg" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">T-shirt</h5>
                    <p class="card-text">Price: 1200 taka</p>
                    <button type = "submit" name = "Add_to_cart"class="btn btn-info">Add to cart</button>

                    <input type = "hidden" name = "Item_name" value = "product3">
                    <input type = "hidden" name = "price" value = "1200">

                </div>
                </div>
            </div>
        </form>
        <div class="col-lg-3">
        <!--cart for product-->
        <form action = "manage_cart.php" method = "POST">
            <div class="card">
                <img src="images/product-4.jpg" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">T-shirt</h5>
                    <p class="card-text">Price: 1500 taka</p>
                    <button type = "submit" name = "Add_to_cart" class="btn btn-info">Add to cart</button>

                    <input type = "hidden" name = "Item_name" value = "product4">
                    <input type = "hidden" name = "price" value = "1500">

                </div>
                </div>
            </div>
        </form>
        </div>
        <!--end second procut-->

    </div>
        </div>
        <!--end second procut-->

    </div>


        </div>
        <!--end second procut-->
        

    </div>
        <!--end first procut-->

        <!--second product-->
       





    </div>
<div>
    
</body>
</html>