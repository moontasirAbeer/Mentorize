<?php 
/*
$status = session_status();
if($status  == 'PHP_SESSION_NONE') {
		session_start();
} 
*/
session_destroy();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Mentorize</title>
		<meta name="description" content="Loads into view app then prompts user" />
		<link rel="stylesheet" type="text/css" href="css/styles.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/splashscreen.css'); ?>" />
		<script src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.4.4.min.js"></script>
		<script src="js/jquery-2.1.1.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.splashscreen.js"></script>
		<script src="js/script.js"></script>
		<script src="js/logReg.js"></script>
		<script src="js/registerOK.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>
		<div id="page" class="site-wrapper">
			<div class="site-wrapper-inner">

				<div id="topBar" class="masthead clearfix"></div>
				
				<div id="promoIMG" class="inner-cover">
					<div id="buttons" class="cover-heading">
						<ul class="nav nav-tabs nav-justified">
							<li>
								<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
							</li>
							<li><a onclick="login()">Login</a></li>
							<li><a onclick="register()">Register</a></li>
							<li><span id="signinButton">
									<span
										class="g-signin"
										data-callback="signinCallback"
										data-clientid="395809681286-kn9pj6pejvfqjmuvnug25qnhbemk0oi0.apps.googleusercontent.com"
										data-cookiepolicy="single_host_origin"
										data-requestvisibleactions="http://schemas.google.com/AddActivity"
										data-scope="https://www.googleapis.com/auth/plus.login">
									</span>
								</span>
							</li>
						</ul>
					</div>
				</div>
				<div id="status"></div>

				<div id="contentArea">
					<div id="login" class="hidden">
						<?php echo form_open('c_pages/login') ?>
							<div class="form-group">
								<label class="sr-only" for="user-name">User Name</label>
								<input type="text" class="form-control" name="user-name" id="user-name" placeholder="Enter User Name">
							</div>
							<div class="form-group">
								<label class="sr-only" for="password">Password</label>
								<input type="password" class="form-control" name="password" id="password" placeholder="Password">
							</div>
							<input type="submit" name="submitLog" class="btn btn-succsss" value="Log In"/>
						</form>
					</div>
					<div id="register" class="hidden">
						<!-- <form role="form"> -->
						<!-- CI Form start -->
						<?php echo validation_errors(); ?>
						<?php echo form_open('c_pages/create') ?>
						<!-- CI Form end -->
							<div class="form-group">
								<label class="sr-only" for="chooseUsername">Choose a Username</label>
								<input type="text" class="form-control" name="chooseUsername" id="chooseUsername" placeholder="Choose a Username">
							</div>
							<div class="form-group">
								<label class="sr-only" for="inputEmail">Email Address</label>
								<input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Enter Email">
							</div>
							<div class="form-group">
								<label class="sr-only" for="confirmEmail">Confirm Email Address</label>
								<input type="email" class="form-control" name="confirmEmail" id="confirmEmail" placeholder="Confirm Email Address">
							</div>
							<div class="form-group">
								<label class="sr-only" for="inputPassword">Password</label>
								<input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
							</div>
							<div class="form-group">
								<label class="sr-only" for="conFirmPassword">Confirm Password</label>
								<input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
							</div>
							<div class="form-group">
								<img id="captcha" src="secureimage/secureimage_show.php" alt="CAPTCHA Image" />
								<input type="text" name="captcha_code" size="10" maxlength="6" />
								<a href="#" onclick="document.getElementById('captcha').src = 'secureimage/secureimage_show.php?' 
									+ Math.random(); return false">[ Different Image ]</a>
							</div>
							<!-- New Dropdown-->
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-primary">
									<input type="radio" name="mentor" id="mentor">Mentor
								</label>
								<label class="btn btn-primary">
									<input type="radio" name="mentee" id="mentee">Mentee
								</label>	

							</div>
							<!-- End New Dropdown-->
							<input type="submit" name="submitReg" class="btn btn-succsss" value="Register"/>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Asynchronous javascript -->
		<script type="text/javascript" src="js/gpluslog.js"></script>
		<script type="text/javascript">
			(function() {
				var po = document.createElement('script');
				po.type = 'text/javascript';
				po.async = true;
				po.src = 'https://apis.google.com/js/client:plusone.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(po, s);
			}) ();
		</script>

		<script type="text/javascript" src="js/fblog.js"></script>
		<script type="text/javascript">
			function statusChangeCallback(response) {
				console.log('statusChangeCallback');
				console.log(response);

				if(response.status === 'connected') {
					// Logged into your app and facebook
					testAPI();
				} else if(response.status === 'not_authorized') {
					document.getElementById('status').innerHTML = 'Please log ' + 'into this app.';
				} else {
					document.getElementById('status').innerHTML = 'Please log ' + 'into Facebook.';
				}
			}

			function checkLoginState() {
				FB.getLoginStatus(function(response) {
					statusChangeCallback(response);
				});
			}

			window.fbAsyncInit = function() {
				FB.init({
					appId		: 	'513566548754974',
					xfbml		: 	true,
					version		: 	'v2.0'
				});

				FB.getLoginStatus(function(response) {
					statusChangeCallback(response);
				});
			};

			//Load the SDK asynchronously
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {return;}
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			} (document, 'script', 'facebook-jssdk'));		
		</script>

	</body>

		
</html>