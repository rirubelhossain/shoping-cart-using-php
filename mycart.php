<?php
include("header.php");
//session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-3">
                <h1>My Cart</h1>
            </div>

            <div class="col-lg-8">
            <table class="table">
                    <thead class = "text-center">
                        <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th></th>
                        <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody class = "text-center">
                        <?php
                        //$total = 0 ;
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {   
                               /// $total += $value['price'] ;
                                $serial = $key + 1 ;
                           // print_r($value) ;
                             echo("
                             <tr>
                                <td>$serial</td>
                                <td>$value[Item_name]</td>
                                <td>$value[price]<input type = 'hidden' class = 'iprice' value = '$value[price]'></td>
                                <td><input class = 'text-center iquentity' onchange = 'subtotal()' type = 'number' value = $value[Quantity] min='1' max = '10'></td>
                                <td class = 'itotal'></td>
                                <td>
                                    <form action = 'manage_cart.php' method = 'POST'> 
                                        <button name = 'Remove_Item' class = 'btn btn-sm btn-outline-danger'>REMOVE</button>
                                        <input type = 'hidden' name = 'Item_name' value = '$value[Item_name]'>
                                    </form>
                                </td>
                             </tr>
                             ");   
                            }
                        }
                            
                        
                        ?>

                    </tbody>
                    </table>
            </div>

            <div class="col-4 py-4">
                <div class = "border bg-light rounded p-4 ">        
                    <h4>Grand Total</h4>
                    <h5 class="text-center" id = "gtotal"></h5>
                    <!--radio button -->
                        <br>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Cash On Delivery
                        </label>
                        </div>

                        <br>

                    <form>
                        <button class = "btn btn-primary btn-block">Make Purchase</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
<!--Js code-->
<script>
    var gt = 0 ;
    var iprice = document.getElementsByClassName('iprice');
    var iquentity = document.getElementsByClassName('iquentity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal') ;

    function subtotal()
    {   gt = 0 ;
        for(i = 0 ; i < iprice.length ; ++i )
        {
            itotal[i].innerText = (iprice[i].value )*(iquentity[i].value) ;
            gt = gt + (iprice[i].value )*(iquentity[i].value) ;///showing total price calculation
        }
        gtotal.innerText = gt ;///value passing through 

    }

    subtotal();


</script>
</body>
</html>