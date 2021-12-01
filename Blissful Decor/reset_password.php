<?php
require("includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reset Password | Blissful Decor</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/myStyle.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		
		
    
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
					<?php
					if (isset($_GET["key"]) && isset($_GET["email"]) ) //&& isset($_GET["action"]) && ($_GET["action"] == "") && !isset($_POST["action"])) 
					{
                        $key = $_GET["key"];
                        $email = $_GET["email"];
                        $curDate = date("Y-m-d H:i:s");
                        $query = mysqli_query($con, "SELECT * FROM `password_reset_temp` WHERE `key`='" . $key . "' and `email`='" . $email . "';");
                        $row = mysqli_num_rows($query);
						$error = "";
						
                        if ($row == "") 
						{
                            $error .= '<h2>Invalid Link</h2>';
                        } 
						else 
						{
                            $row = mysqli_fetch_assoc($query);
                            $expDate = $row['expDate'];
                            if ($expDate >= $curDate) { //echo $email;
                    ?> 
								
								<div class="panel panel-primary" >
									<div class="panel-heading">
										<h4 ><i class="glyphicon glyphicon-lock" >&nbsp </i> Reset Password</h4>
									</div>
									<div class="panel-body">
										<form action="" method="POST">
											<div class="form-group">
												<input type="password" class="form-control"  placeholder="Create new password" pattern=".{6,}" name="pwd1" required = "true">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" placeholder="Confirm your password" pattern=".{6,}" name="pwd2" required = "true">
													<?php if (array_key_exists('error',$_GET)){ echo $_GET['error'];} ?>
											</div>
                                            <input type="hidden" name="email" value="<?php echo $email ;?>" > 

											<button type="submit" name="submit" class="btn btn-primary">Update Password</button><br><br>
                                  
										</form><br/>
									</div>
                   
								</div>
										
					<?php
                            } 
							else 
							{
                              $error .= "<h2>Link Expired</h2>>"
							  ;
                            }
                        }
                        if ($error != "") {
                            echo "<div class='error'>" . $error . "</div><br />";
                        }
                    }

					
                    if (isset($_POST["email"])) // && isset($_POST["action"]) && ($_POST["action"] == "submit")) 
					{
                        $error = "";
                        $pass1 = mysqli_real_escape_string($con, $_POST["pwd1"]);
                        $pass2 = mysqli_real_escape_string($con, $_POST["pwd2"]);
                        $email = $_POST["email"];
                        $curDate = date("Y-m-d H:i:s");
                        if ($pass1 != $pass2) {
                            $error .= "<p>Password do not match, both password should be same.<br /><br /></p>";
                        }
						
						//echo "email = ".$email." " ;

                        if ($error != "") {
                            echo ' <div class="alert alert-danger" role="alert"> '.$error .' </div>';
							
                        } 
						else {

                            $pass1 = base64_encode($pass1);
							
							$query = "UPDATE users SET password='$pass1' WHERE email= '$email'; ";
                            $result = mysqli_query($con, $query) ; 

							if ($result) 
							{
								mysqli_query($con, "DELETE FROM `password_reset_temp` WHERE `email` = '$email'");

								echo '<div class= "alert alert-success" role="alert"> Congratulations! Your password has been updated successfully.</div>';
								
							
								header('location: login.php?success=1');
							}
							
							else
								echo  '<div class="alert alert-danger" role="alert"> "ERROR: Could not able to execute $sql. " . mysqli_error($query)</div>';
                        }
                    }
                    ?>
									
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>
