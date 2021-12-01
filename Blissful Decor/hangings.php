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
		<center><img style="max-width: 100%; max-height: 100%;" src="Images/hangings_banner.png" width="1000"></center>
                <!-- <h1><center>Wall Hangings Section<center></h1> -->
            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Hangings_2.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>PolyDeer (Metal)</h3>
                            <p>Price: Rs. 2999.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { 
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
                                                    <a href="wishlist-add.php?id=1" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Hangings_3.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Round Wall Mirror</h3>
                            <p>Price: Rs. 1499.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=2" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Hangings_4.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Cuckoo Clock</h3>
                            <p>Price: Rs. 1299.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=3" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Hangings_5.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Gullak Hanging</h3>
                            <p>Price: Rs. 999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=4" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Hangings_6.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Stylish Wall Clock</h3>
                            <p>Price: Rs. 4999.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=5" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Hangings_7.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Welcome Design</h3>
                            <p>Price: Rs. 2999.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=6" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Hangings_8.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Dream Catchers</h3>
                            <p>Price: Rs. 499.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=7" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Hangings_9.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Photo Frames(5)</h3>
                            <p>Price: Rs. 1299.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=8" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Hangings_10.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Wooden Wall Shelf</h3>
                            <p>Price: Rs. 1999.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=9" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Hangings_11.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Corner Wall Shelf</h3>
                            <p>Price: Rs. 1499.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=10" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Hangings_12.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Wooden Jharokha</h3>
                            <p>Price: Rs. 1299.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=11" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Hangings_13.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Wooden Key Holder</h3>
                            <p>Price Rs. 499.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=12" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
