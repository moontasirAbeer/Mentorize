<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POST test</title>
</head>
<body>

	<h2>Create a news item</h2>

	<!-- CI Form start -->
	<?php echo validation_errors(); ?>

	<?php echo form_open('pages/create_test') ?>

	<label for="user-name">User Name</label>
	<input type="input" name="user-name" /><br />

	<label for="password">Password</label>
	<input type="input" name="password" /><br />

	<label for="email">Email Address</label>
	<input type="input" name="email" /><br />

	<label for="user-type">User Type</label>
	<input type="input" name="user-type" /><br />

	<input type="submit" name="submit" value="Sign Up" />

	</form>
	<!-- CI Form end -->

</body>
</html>