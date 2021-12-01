<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Blissful Decor </title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/myStyle.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
       
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
       

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 20% OFF on Handcrafted products </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="indoor_garden.php#Plants" >
                            <div class="thumbnail">
                                <img src="Images/Plants_1.jpeg" alt="">
                                <div class="caption">
                                    <h3>Indoor Garden</h3>
                     
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="spiritual.php#Spiritual" >
                            <div class="thumbnail">
                                <img src="Images/Spiritual_1.jpeg" alt="">
                                <div class="caption">
                                    <h3>Spiritual</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="hangings.php#Hangings" >
                            <div class="thumbnail">
                                <img src="Images/Hangings_1.jpeg" alt="">
                                <div class="caption">
                                    <h3>Wall Hangings</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>




            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="wall_art.php#WallArt" >
                            <div class="thumbnail">
                                <img src="Images/WallArt_1.jpeg" alt="">
                                <div class="caption">
                                    <h3>Wall Art</h3>
                     
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="lightings.php#Lightings" >
                            <div class="thumbnail">
                                <img src="Images/Lightings_1.jpeg" alt="">
                                <div class="caption">
                                    <h3>Lightings</h3>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="others.php#Others" >
                            <div class="thumbnail">
                                <img src="Images/Others_1.jpeg" alt="">
                                <div class="caption">
                                    <h3>Others</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>

        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>