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
        <title>Wishlist | Blissful Decor</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/myStyle.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>

        <!-- Scripts for toast -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </head>
    <body>

        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>

            <?php 


                if(isset($_GET['add']) && $_GET['add']==1 )
                {
        ?>
                    <center>

                    <i class="toast-container">

                    <div class="toast">

                        <div class="toast-body">Item added successfully!!</div>
                      
                    </div>

                    <script>
                        // $(document).ready(function(){$('.toast').toast('show');});
                        $(document).ready(function(){ $('.toast').toast({delay: 3000});$('.toast').toast('show'); });
                        
                    </script>
                    </i>
                    </center>
                  

                <?php 
                    unset($_GET['add']);
                }

                ?>
            <div class="row decor_bg">
                <center><h2>Wishlist</h2> <hr>
                <div id="cart"class="col-md-6 col-md-offset-3">
                
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $id="";
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price,items.id , items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Add to Wishlist'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <table class="table" style="background-color: white">
                            <thead style="background-color: #0EBC7F; color: white">
                                <tr>
                                    <th></th>
                                    <th>Item Name</th>
                                    <th>Price (INR)</th>
                                    <th><center>Add to Cart</center></th>
                                </tr>

                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {

                                    $id .= $row["id"] . ", ";
                                    // $_POST['id']=$row['id'];
                                    

                                    echo "<tr><td> <a href='wishlist-remove.php?id={$row['id']}'> <b class=' btn-danger glyphicon  glyphicon-minus-sign'></b></a></td> <td>"  . $row["Name"] . "</td>     <td>  ". $row["Price"] . "</td> <td> <center><a href='cart-add.php?id={$row['id']}' class=' btn-primary'> <i class=' glyphicon  glyphicon-shopping-cart'></i></a> </center></td></tr>";
                                   
                                }
                                $id = rtrim($id, ", ");
                                
                                ?>
                            </tbody>

                            <?php
                        } else {

                            echo "<br><b>Looks like you haven't prepared your wishlist!</b><br>"; 
                        }
                        ?>
                        <br>
                    </table>

                </div>
            </center>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>