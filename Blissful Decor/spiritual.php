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
		<center><img style="max-width: 100%; max-height: 100%;" src="Images/spiritual_banner.png" width="1000"></center>
                <!-- <h1><center>Indoor Garden Section<center></h1> -->
            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Spiritual_2.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Lord Buddha</h3>
                            <p>Price: Rs. 1499.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(49)) { 
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
                                                    <a href="wishlist-add.php?id=49" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=49" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Spiritual_3.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Lord Ganesha</h3>
                            <p>Price: Rs. 999.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(50)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=50" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=50" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Spiritual_4.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Radha Krishna</h3>
                            <p>Price: Rs. 4999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(51)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=51" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=51" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Spiritual_5.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Laxmi Ganesh</h3>
                            <p>Price: Rs. 3999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(52)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=52" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=52" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Spiritual_6.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Goddess Durga</h3>
                            <p>Price: Rs. 1999.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(53)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=53" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=53" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Spiritual_7.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Jesus Christ</h3>
                            <p>Price: Rs. 1299.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(54)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=54" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=54" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Spiritual_8.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Guardian Angel</h3>
                            <p>Price: Rs. 799.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(55)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=55" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=55" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Spiritual_9.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Nataraja</h3>
                            <p>Price: Rs. 1499.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(56)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=56" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=56" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Spiritual_10.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Lord Shiva</h3>
                            <p>Price: Rs. 1200.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(57)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=57" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=57" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Spiritual_11.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Shivalinga & Nagraj</h3>
                            <p>Price: Rs. 4999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(58)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=58" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=58" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Spiritual_12.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Ladoo Gopal</h3>
                            <p>Price: Rs. 1500.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(59)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=59" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=59" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Spiritual_13.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Laughing Buddha</h3>
                            <p>Price Rs. 1300.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(60)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=60" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=60" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
