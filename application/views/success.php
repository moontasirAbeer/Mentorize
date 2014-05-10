<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $action; ?> Successful</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<meta name="description" content="Loads into view app then prompts user" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-theme.css'); ?>" />
</head>
<body style="background-color: orange">

	<div class="jumbotron" style="background-color: #9CF;">
  		<h1>Success!</h1>
  		<p><?php echo $action; ?> Was Successful</p>
  		<p><a href="<?php echo site_url('dashboard'); ?>" class="btn btn-primary btn-lg" role="button">Click Here To Go To Your Profile</a></p>
	</div>
</body>
</html>