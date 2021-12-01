<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Blissful Decor</title>
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
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>

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
                        $(document).ready(function(){ $('.toast').toast({delay: 3000});$('.toast').toast('show'); });
                        
                    </script>
                    </i>
                    </center>
                  

                <?php 
                    unset($_GET['add']);
                }

                ?>
        
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div  class="jumbotron home-spacer" id="products-jumbotron">
		<center><img  style="max-width: 100%; max-height: 100%;" src="Images/others_banner.png" ></center>
             
            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Others_2.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h4>3 Wise Men fountain</h4>
                            <p>Price: Rs. 17000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(37)) { 
                                //This is same as if(check_if_added_to_cart != 0)
                                    echo '<table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-block btn-info" disabled>Added to cart
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>';
                                } else {
                                    ?>
                                        <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="wishlist-add.php?id=37" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=37" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>

                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>



                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Others_3.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h4>Artificial Flowers</h4>
                            <p>Price: Rs. 300.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(38)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-block btn-info" disabled>Added to cart
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>';
                                } else {
                                    ?>
                                    <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="wishlist-add.php?id=38" name="add" value="add" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-heart"></i>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=38" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Others_4.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h4>Dot Print Planter (3)</h4>
                            <p>Price: Rs. 600.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(39)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-block btn-info" disabled>Added to cart
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>';
                                } else {
                                    ?>
                                    <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="wishlist-add.php?id=39" name="add" value="add" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-heart"></i>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=39" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Others_5.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h4>Handmade Nest</h4>
                            <p>Price: Rs. 700.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(40)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-block btn-info" disabled>Added to cart
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>';
                                } else {
                                    ?>
                                    <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="wishlist-add.php?id=40" name="add" value="add" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-heart"></i>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=40" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Others_6.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h4>Urn Terracotta Vase</h4>
                            <p>Price: Rs. 1200.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(41)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-block btn-info" disabled>Added to cart
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>';
                                } else {
                                    ?>
                                    <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="wishlist-add.php?id=41" name="add" value="add" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-heart"></i>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=41" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Others_7.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h4>Terracotta Pots (2)</h4>
                            <p>Price: Rs. 800.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(42)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-block btn-info" disabled>Added to cart
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>';
                                } else {
                                    ?>
                                    <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="wishlist-add.php?id=42" name="add" value="add" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-heart"></i>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=42" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Others_8.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h4>Madhubani Vase (3)</h4>
                            <p>Price: Rs. 1300.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(43)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-block btn-info" disabled>Added to cart
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>';
                                } else {
                                    ?>
                                    <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="wishlist-add.php?id=43" name="add" value="add" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-heart"></i>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=43" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Others_9.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h4>Small White Rabbits</h4>
                            <p>Price: Rs. 299.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(44)) { //This is same as if(check_if_added_to_cart != 0)
                                   echo '<table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-block btn-info" disabled>Added to cart
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>';
                                } else {
                                    ?>
                                    <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="wishlist-add.php?id=44" name="add" value="add" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-heart"></i>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=44" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Others_10.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h4>Garden Figurine</h4>
                            <p>Price: Rs. 699.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(45)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-block btn-info" disabled>Added to cart
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>';
                                } else {
                                    ?>
                                    <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="wishlist-add.php?id=45" name="add" value="add" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-heart"></i>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=45" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Others_11.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h4>White Planter</h4>
                            <p>Price: Rs. 650.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(46)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-block btn-info" disabled>Added to cart
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>';
                                } else {
                                    ?>
                                    <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="wishlist-add.php?id=46" name="add" value="add" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-heart"></i>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=46" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Others_12.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h4>2kg Natural Pebbles</h4>
                            <p>Price: Rs. 749.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(47)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-block btn-info" disabled>Added to cart
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>';
                                } else {
                                    ?>
                                    <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="wishlist-add.php?id=47" name="add" value="add" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-heart"></i>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=47" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Others_13.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h4>Wooden Plant Stand</h4>
                            <p>Price Rs. 5000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(48)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-block btn-info" disabled>Added to cart
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>';
                                } else {
                                    ?>
                                    <table class="table" style="margin-bottom: 0px; padding-bottom: 0px" > 
                                            <tr>
                                                <td>
                                                    <a href="wishlist-add.php?id=48" name="add" value="add" class="btn btn-block btn-danger"><i class="glyphicon glyphicon-heart"></i>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=48" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>
