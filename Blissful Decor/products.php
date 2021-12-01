<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Blissful Decor </title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/myStyle.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </head>

    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Blissful Decor!</h1>
                <p>We have the best decoration items for home, offices and parties. No need to hunt around, we have all in one place.</p>

            </div>
            <hr>


	<div class="row text-center" id="item_list">
                <div class="col-sm-4 home-feature">
		<a href="indoor_garden.php#Plants" >
                    <div class="thumbnail">
                        <img src="Images/Plants_1.jpeg" alt="">
                        <div class="caption">
                            <h3>Indoor Garden </h3>   
                        </div>
                    </div>
		</a>
                </div>

		<div class="col-sm-4 home-feature">
		<a href="spiritual.php#Spiritual" >
                    <div class="thumbnail">
                        <img src="Images/Spiritual_1.jpeg" alt="">
                        <div class="caption">
                            <h3>Spiritual</h3>
                            
                        </div>
                    </div>
		</a>
                </div>

		<div class="col-sm-4 home-feature">
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
            
            <!--Item categories listing end-->
       




            <!--Item categories listing-->


	<div class="row text-center" id="item_list">
                <div class="col-sm-4 home-feature">
		<a href="wall_art.php#WallArt" >
                    <div class="thumbnail">
                        <img src="Images/WallArt_1.jpeg" alt="">
                        <div class="caption">
                            <h3>Wall Art</h3>
                            
                        </div>
                    </div>
		</a>
                </div>

		<div class="col-sm-4 home-feature">
		<a href="lightings.php#Lightings" >
                    <div class="thumbnail">
                        <img src="Images/Lightings_1.jpeg" alt="">
                        <div class="caption">
                            <h3>Lightings</h3>
                            
                        </div>
                    </div>
		</a>
                </div>

		<div class="col-sm-4 home-feature">
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

            <!--Item categories listing end-->
       </div>
        <?php include("includes/footer.php"); ?>
    </body>

</html>
