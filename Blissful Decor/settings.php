<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Blissful Decor </title>
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
        <?php include 'includes/header.php'; ?>

         <?php 


                if(isset($_GET['updated']) && $_GET['updated']==1 )
                {
        ?>
                    <center>

                    <i class="toast-container">

                    <div class="toast">

                        <div class="toast-body">Password updated successfully!!</div>
                      
                    </div>

                    <script>
                        $(document).ready(function(){ $('.toast').toast({delay: 3000});$('.toast').toast('show'); });
                        
                    </script>
                    </i>
                    </center>
                  

                <?php 
                    unset($_GET['updated']);
                }

                ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <center><h2>Change Password</h2> <hr>
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    
                    <form action="settings_script.php" method="POST"><br>
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" pattern=".{6,}" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Confirm New Password" required = "true">
                            <?php if (array_key_exists('error',$_GET)){ echo $_GET['error'];} ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button><br><br>
                        
                    </form>
                </div>
            </center>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
