<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Blissful Decor</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/myStyle.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <div class="row decor_bg">
                <center><h2>Shopping Cart</h2> <hr>
                <div id="cart"class="col-md-6 col-md-offset-3">
                    <br>
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0.00;
                        $id="";
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price,quantity,items.id , items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Add to Cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <table class="table" style="background-color: white">
                            <thead style="background-color: #0EBC7F; color: white">
                                <tr>
                                    <th></th>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Price (INR)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    if(isset($_POST['quan']) && $row["id"] == $_POST['id'] )
                                    {
                                        $quantity=$_POST['quan'];

                                        mysqli_query($con,"UPDATE users_items SET quantity=$quantity WHERE user_id='".$user_id."' and  item_id='".$row['id']."' and status='Add to Cart' ");
                                        header("location:cart.php");
                                        unset($_POST['quan']);

                                    }

                                  
                                    $quantity= $row["quantity"];
                                    
                                    $sum+= $row["Price"]*$quantity;
                                    $id .= $row["id"] . ",";
                                    // $_POST['id']=$row['id'];
                                    

                                    echo "<tr><td> <a href='cart-remove.php?id={$row['id']}'> <b class=' btn-danger glyphicon  glyphicon-minus-sign'></b></a></td>"."<td>"  . $row["Name"] . "</td><td> <form action='' method='POST'><input type='hidden' name='id' value='".$row['id']."'><input type='number' id='quantity' name='quan' value='".$quantity."' min='1' step='1'/></form> "."</td><td> " . $row["Price"] . "</td></tr>";

                                    
                                   
                                }
                                $id = rtrim($id, ", ");
                                
                                
                                ?>
                            </tbody>


                            <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" >
                                <tr>
                                    <td>
                                        <b class="btn btn-block btn-success">Bill Amount : <?php echo $sum;?> INR</b>
                                    </td>
                                    <td>
                                        <a href="success.php?itemsid=<?php echo $id; ?>" class="btn btn-block btn-primary" ><b class="glyphicon  glyphicon-shopping-cart"></b> Checkout</a>
                                    </td>
                                </tr>
                            </table>
                            <?php
                        } 
                        else {
                            echo "<b>Please add items to the cart first!</b><br>"; 
                        }
                        ?>
                        <br>

                </div>
            </center>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
