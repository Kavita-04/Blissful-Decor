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
            <div class="jumbotron home-spacer" id="products-jumbotron">
		<center><img style="max-width: 100%; max-height: 100%;" src="Images/wall_art_banner.png" width="1000"></center>
                <!-- <h1><center>Wall Hangings Section<center></h1> -->
            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/WallArt_2.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Ceramic Wall Plates</h3>
                            <p>Price: Rs. 4999.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(61)) { 
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
                                                    <a href="wishlist-add.php?id=61" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=61" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/WallArt_3.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Mandala Pair</h3>
                            <p>Price: Rs. 1499.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(62)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=62" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=62" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/WallArt_4.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Handpainted Pots</h3>
                            <p>Price: Rs. 3999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(63)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=63" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=63" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/WallArt_5.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Kathakali Maquilage</h3>
                            <p>Price: Rs. 1999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(64)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=64" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=64" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/WallArt_6.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Velvet Laminated Radhe Krishna</h3>
                            <p>Price: Rs. 13999.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(65)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=65" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=65" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/WallArt_7.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Meditating Buddha MDF Printed</h3>
                            <p>Price: Rs. 12999.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(66)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=66" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=66" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/WallArt_8.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Velvet Laminated Sun Rise Tree</h3>
                            <p>Price: Rs. 14999.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(67)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=67" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=67" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/WallArt_9.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Butterfly MDF Digital Print</h3>
                            <p>Price: Rs. 18999.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(68)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=68" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=68" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/WallArt_10.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Rajasthani Nomad Girl Wall Plate</h3>
                            <p>Price: Rs. 799.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(69)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=69" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=69" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/WallArt_11.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Warli & Dhokra Paintings</h3>
                            <p>Price: Rs. 1299.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(70)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=70" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=70" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/WallArt_12.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Wise Owls Handmade</h3>
                            <p>Price: Rs. 999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(71)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=71" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=71" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/WallArt_13.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Coloured Fish Handmade</h3>
                            <p>Price Rs. 999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(72)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=72" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=72" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
