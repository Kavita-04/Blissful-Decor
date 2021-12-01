<?php
use PHPMailer\PHPMailer\PHPMailer;
?>

<! DOCTYPE html >
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Forgot Password | Blissful Decor </title>

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
					
					<div class="panel panel-primary" >
									<div class="panel-heading">
										<h4 ><i class="glyphicon glyphicon-lock" >&nbsp </i> Forgot Password</h4>
									</div>
									<div class="panel-body">
										<form action="" method="POST">
											<div class="form-group">
												<input type="email" class="form-control"  placeholder="Enter your registered email address" name="email" required = "true">
											</div>
											
											<?php if (array_key_exists('error',$_GET)){ echo $_GET['error'];} ?>
                             
											<button type="submit" name="submit" class="btn btn-primary">Reset Password</button><br><br>
                                  
										</form><br/>
									</div>
                   
					</div>
					<?php
					require("includes/common.php");
					if (isset($_POST["email"]) && (!empty($_POST["email"]))) 
					{
						$email = $_POST["email"];
						$email = filter_var($email, FILTER_SANITIZE_EMAIL);
						$email = filter_var($email, FILTER_VALIDATE_EMAIL);
						$error = "";
						if (!$email) 
						{
							$error .="Invalid email address";
						} 
						else 
						{
							$sel_query = "SELECT * FROM users WHERE email='" . $email . "'";
							$results = mysqli_query($con, $sel_query);
							$row = mysqli_num_rows($results);
	
							if ($row == "") 
							{
								$error .= "User Not Found";
							}
						}
						if($error != "") 
						{
							echo $error;
						} 
						else 
						{

							$output = '';

							$expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 1, date("Y"));
							$expDate = date("Y-m-d H:i:s", $expFormat);
							$key = md5(time());
							$addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
							$key = $key . $addKey;

							// Insert Temp Table
							mysqli_query($con, "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');");


							$output.='<p>Please click on the following link to reset your password.</p>';
							//replace the site url
							$output.='<p><a href="http://localhost/Blissful%20Decor/reset_password.php?key=' . $key . '&email=' . $email . '&action=reset" target="_blank">
http://localhost/Blissful%20Decor/reset-password.php?key=' . $key . '&email=' . $email . '</a></p>';
							$body = $output;
							$subject = "Password Recovery";
							$email_to = $email;


							//autoload the PHPMailer 
							require("vendor/autoload.php");
							$mail = new PHPMailer();
							$mail->IsSMTP();
							$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
							$mail->Host = 'smtp.gmail.com'; // Enter your host here
							$mail->SMTPAuth = true;
							//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

							$mail->Username = "blissfuldecorducs@gmail.com"; // Enter your email here
							$mail->Password = "passwordjanteho"; //Enter your passwrod here
							$mail->Port = 587;
							$mail->IsHTML(true);
							$mail->From = "blissfuldecorducs@gmail.com";
							$mail->FromName = "Blissful Decor";
							
							$mail->Port = 587;
							$mail->IsHTML(true);
							$mail->From = "BlissfulDecorDUCS@gmail.com";
							$mail->FromName = "Blissful Decor";

							$mail->Subject = $subject;
							$mail->Body = $body;
							$mail->AddAddress($email_to);
		
							if (!$mail->Send())
							{?>
							 <div class="alert alert-danger" role="alert">  
							<?php	
								echo "Mailer Error: " . $mail->ErrorInfo; // "SMTP Server says : " .$mail->SMTPDebug;
							}
							
							else
							{
							?>
							<div class="alert alert-success" role="alert">
							We've sent a password reset link to your email - <?php echo $email ?>
							</div>
							<?php
							}
							/*
							
							$message = $output;
							$sender = "From: kavita.mcs20.du@gmail.com";
							
							//ini_set("SMTP","localhost");
							ini_set("SMTP","ssl://smtp.gmail.com");
							ini_set("smtp_port","587");
							if(mail($email, $subject, $message, $sender)){
								$info = "We've sent a password reset link to your email - $email";
							
							}else{
									$error = "Failed while sending link";
									
									echo "$error";
								}
							*/
						}
					}	
					/*
					https://thecodedeveloper.com/install-composer-windows-xampp/

					https://rathorji.in/p/php_forgotrest_password_recover_code_using_phpmailer_smtp
					*/
					?>

				</div>
			</div>
        </div>
	</div>
	 <?php include 'includes/footer.php'; ?>
    </body>
</html>