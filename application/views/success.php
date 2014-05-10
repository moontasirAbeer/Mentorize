<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $action; ?> Successful</title>
</head>
<body style="background-color: orange">
	<div style="background-color: #fff; margin-left: 200px; margin-top: 150px; width: 150px; height:75px">
		<p><?php echo $action; ?> Was Successful</p>
		<a href="<?php echo site_url('dashboard'); ?> "> Click Here To Go To Your Profile</a>
	</div>
</body>
</html>