<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Blissful Decor </title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/myStyle.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <center><h2>Sign Up</h2> <hr>
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3" id="signup-container"><br>
                       
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="username@gmail.com"  name="e-mail" required = "true">
                               <?php if (array_key_exists('m1',$_GET)){ echo $_GET['m1'];} 
					           if (array_key_exists('m2',$_GET)){ echo $_GET['m2'];}?>
                                
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" pattern='[6-9][0-9]{9}$' maxlength="10" size="10" name="contact" required = "true">
                                <?php if (array_key_exists('m3',$_GET)){ echo $_GET['m3'];} ?>
                        
                            </div>

                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                        </form>
                    </div>
                </div>
            </center>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>
