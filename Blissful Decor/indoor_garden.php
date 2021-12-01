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
		<center><img style="max-width: 100%; max-height: 100%;" src="Images/indoor_garden_banner.png"></center>
                <!-- <h1><center>Indoor Garden Section<center></h1> -->
            </div>
            <hr>

            

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="Images/Plants_2.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Spider Plant</h3>
                            <p>Price: Rs. 499.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {

                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(13)) { 
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
                                                    <a href="wishlist-add.php?id=13" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Plants_3.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Baby Rubber Plant</h3>
                            <p>Price: Rs. 699.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=14" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Plants_4.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Boston Ferns</h3>
                            <p>Price: Rs. 399.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=15" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Plants_5.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Dumb Cane</h3>
                            <p>Price: Rs. 649.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=16" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Plants_6.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Bunny Ear Cactus</h3>
                            <p>Price: Rs. 1349.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(17)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=17" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Plants_7.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Pothos</h3>
                            <p>Price: Rs. 849.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(18)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=18" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Plants_8.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Flamingo Lily</h3>
                            <p>Price: Rs. 1299.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(19)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=19" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Plants_9.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Croton</h3>
                            <p>Price: Rs. 999.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(20)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=20" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Plants_10.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Aloe Vera</h3>
                            <p>Price: Rs. 449.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(21)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=21" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Plants_11.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Prayer Plant</h3>
                            <p>Price: Rs. 949.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(22)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=22" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Plants_12.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Lucky Bamboo</h3>
                            <p>Price: Rs. 499.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(23)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=23" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
                        <img src="Images/Plants_13.jpeg" alt="">
                        <div class="caption" id="caption">
                            <h3>Weeping Fig</h3>
                            <p>Price Rs. 999.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(24)) { //This is same as if(check_if_added_to_cart != 0)
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
                                                    <a href="wishlist-add.php?id=24" id="wishlist" name="add" value="add" class="btn btn-block btn-danger" ><b class="glyphicon  glyphicon-heart"></b>
                                                    </a>
                                                </td> 
                                                <td>
                                                    <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-success"><i class="glyphicon glyphicon-shopping-cart"></i>
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
