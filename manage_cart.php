<?php
session_start() ;
///session_destroy();
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['Add_to_cart']))
        {
            if(isset($_SESSION['cart']))
            {   
                ////Store my iteam

                $myitem = array_column($_SESSION['cart'], 'Item_name');
                
                if(in_array($_POST['Item_name'] , $myitem))
                {
                    echo("<script> 
                    alert('Item alread add');
                    window.location.href='index.php';
                    </script>");
                }else{

                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Item_name'=>$_POST['Item_name'] , 'price'=>$_POST['price'] , 'Quantity'=>1);
             ///   echo($count);
             /// echo("<br>");
            ///print_r($_SESSION['cart']);
                echo("<script> 
                    alert('Item added');
                    window.location.href='index.php';
                    </script>");

            }
               
            }
            else{
                $_SESSION['cart'][0] = array('Item_name'=>$_POST['Item_name'] , 'price'=>$_POST['price'] , 'Quantity'=>1);
                echo("<script> 
                    alert('Item added');
                    window.location.href='index.php';
                    </script>");

            }
        }
        if(isset($_POST['Remove_Item']))
        {
            foreach($_SESSION['cart'] as $key => $value)
            {
                if($value['Item_name'] == $_POST['Item_name'])
                {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);/// it would be rearange 

                    echo("
                    <script>
                    alert('Item Removed');
                    window.location.href = 'mycart.php';
                    </script>
                    ");

                }
            }
        }
    }


?>